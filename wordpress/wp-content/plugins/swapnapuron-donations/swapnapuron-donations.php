<?php
/**
 * Plugin Name: Swapnapuron Indian Donations & 80G Receipts
 * Plugin URI: https://www.ichaporeswapnapuronsociety.org/
 * Description: Dedicated Indian donation gateway powered by Razorpay (UPI, GPay, PhonePe, Cards, Netbanking) with automated Section 80G Tax Exemption Certificates (Form 10BE compliant), Donor PAN validation, Admin Ledger, and Form 10BD CSV export.
 * Version: 1.0.0
 * Author: Ichapore Swapnapuron Society
 * Author URI: https://www.ichaporeswapnapuronsociety.org/
 * Text Domain: swapnapuron-donations
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) {
    exit;
}

define('SWAPNAPURON_DONATIONS_VERSION', '1.0.0');
define('SWAPNAPURON_DONATIONS_DIR', plugin_dir_path(__FILE__));
define('SWAPNAPURON_DONATIONS_URL', plugin_dir_url(__FILE__));

// Require include classes
require_once SWAPNAPURON_DONATIONS_DIR . 'includes/class-razorpay-handler.php';
require_once SWAPNAPURON_DONATIONS_DIR . 'includes/class-receipt-generator.php';
require_once SWAPNAPURON_DONATIONS_DIR . 'includes/class-admin-ledger.php';

/**
 * Activation Hook: Create Database Tables
 */
register_activation_hook(__FILE__, 'swapnapuron_donations_activate');
function swapnapuron_donations_activate() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'swapnapuron_donations';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
        receipt_no varchar(60) NOT NULL,
        donor_name varchar(255) NOT NULL,
        donor_email varchar(255) NOT NULL,
        donor_phone varchar(50) NOT NULL,
        donor_pan varchar(20) DEFAULT '',
        donor_address text DEFAULT '',
        amount decimal(10,2) NOT NULL,
        currency varchar(10) DEFAULT 'INR',
        initiative varchar(150) DEFAULT 'General Charitable Fund',
        payment_method varchar(50) DEFAULT 'Razorpay',
        razorpay_order_id varchar(100) DEFAULT '',
        razorpay_payment_id varchar(100) DEFAULT '',
        razorpay_signature varchar(255) DEFAULT '',
        status varchar(50) DEFAULT 'pending',
        is_80g_claimed tinyint(1) DEFAULT 1,
        created_at datetime DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY  (id),
        UNIQUE KEY receipt_no (receipt_no),
        KEY status (status),
        KEY donor_email (donor_email),
        KEY razorpay_order_id (razorpay_order_id)
    ) $charset_collate;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);

    // Default settings if empty
    if (!get_option('swapnapuron_donations_settings')) {
        update_option('swapnapuron_donations_settings', [
            'razorpay_key_id'     => '',
            'razorpay_key_secret' => '',
            'test_mode'           => 1,
            'ngo_name'            => 'ICHAPORE SWAPNAPURON SOCIETY',
            'ngo_pan'             => 'AAAAI9694K',
            'ngo_80g_urn'         => 'AAAAI9694KF20251',
            'ngo_12a_urn'         => 'AAAAI9694KE20216',
            'ngo_reg_no'          => 'S0011507 of 2019-2020',
            'ngo_address'         => 'Palitpara, Ichapore, North 24 Parganas, West Bengal 743144',
            'ngo_phone'           => '+91 83360 66390',
            'ngo_email'           => 'ichaporeswapnapuronsociety@gmail.com',
            'receipt_prefix'      => 'ISS/80G/2024-25/',
            'signatory_name'      => 'General Secretary',
            'signatory_title'     => 'Authorized Signatory',
        ]);
    }
}

/**
 * Enqueue scripts and styles
 */
add_action('wp_enqueue_scripts', 'swapnapuron_donations_enqueue_scripts');
function swapnapuron_donations_enqueue_scripts() {
    $settings = get_option('swapnapuron_donations_settings', []);
    $key_id = !empty($settings['razorpay_key_id']) ? $settings['razorpay_key_id'] : 'rzp_test_simulation';

    // Razorpay standard checkout library
    wp_enqueue_script('razorpay-checkout', 'https://checkout.razorpay.com/v1/checkout.js', [], null, true);

    // Plugin styles and JS
    wp_enqueue_style('swapnapuron-donation-css', SWAPNAPURON_DONATIONS_URL . 'assets/donation.css', [], SWAPNAPURON_DONATIONS_VERSION);
    wp_enqueue_script('swapnapuron-donation-js', SWAPNAPURON_DONATIONS_URL . 'assets/donation.js', ['jquery', 'razorpay-checkout'], SWAPNAPURON_DONATIONS_VERSION, true);

    wp_localize_script('swapnapuron-donation-js', 'swapnapuronDonationData', [
        'ajax_url'   => admin_url('admin-ajax.php'),
        'nonce'      => wp_create_nonce('swapnapuron_donation_nonce'),
        'key_id'     => $key_id,
        'test_mode'  => !empty($settings['test_mode']) ? 1 : 0,
        'ngo_name'   => !empty($settings['ngo_name']) ? $settings['ngo_name'] : 'Ichapore Swapnapuron Society',
        'theme_color'=> '#e67e22',
    ]);
}

/**
 * Register Admin Menu & Settings
 */
add_action('admin_menu', 'swapnapuron_donations_admin_menu');
function swapnapuron_donations_admin_menu() {
    add_menu_page(
        __('Donations', 'swapnapuron-donations'),
        __('Donations', 'swapnapuron-donations'),
        'manage_options',
        'swapnapuron-donations',
        'swapnapuron_donations_render_ledger_page',
        'dashicons-heart',
        30
    );

    add_submenu_page(
        'swapnapuron-donations',
        __('All Donations', 'swapnapuron-donations'),
        __('All Donations', 'swapnapuron-donations'),
        'manage_options',
        'swapnapuron-donations',
        'swapnapuron_donations_render_ledger_page'
    );

    add_submenu_page(
        'swapnapuron-donations',
        __('Gateway & 80G Settings', 'swapnapuron-donations'),
        __('Settings & 80G', 'swapnapuron-donations'),
        'manage_options',
        'swapnapuron-donation-settings',
        'swapnapuron_donations_render_settings_page'
    );
}

/**
 * Settings Page Callback
 */
function swapnapuron_donations_render_settings_page() {
    if (!current_user_can('manage_options')) {
        return;
    }

    if (isset($_POST['swapnapuron_save_settings']) && check_admin_referer('swapnapuron_settings_action', 'swapnapuron_settings_nonce')) {
        $settings = [
            'razorpay_key_id'     => sanitize_text_field($_POST['razorpay_key_id'] ?? ''),
            'razorpay_key_secret' => sanitize_text_field($_POST['razorpay_key_secret'] ?? ''),
            'test_mode'           => isset($_POST['test_mode']) ? 1 : 0,
            'ngo_name'            => sanitize_text_field($_POST['ngo_name'] ?? 'ICHAPORE SWAPNAPURON SOCIETY'),
            'ngo_pan'             => sanitize_text_field($_POST['ngo_pan'] ?? 'AAAAI9694K'),
            'ngo_80g_urn'         => sanitize_text_field($_POST['ngo_80g_urn'] ?? 'AAAAI9694KF20251'),
            'ngo_12a_urn'         => sanitize_text_field($_POST['ngo_12a_urn'] ?? 'AAAAI9694KE20216'),
            'ngo_reg_no'          => sanitize_text_field($_POST['ngo_reg_no'] ?? 'S0011507 of 2019-2020'),
            'ngo_address'         => sanitize_textarea_field($_POST['ngo_address'] ?? ''),
            'ngo_phone'           => sanitize_text_field($_POST['ngo_phone'] ?? ''),
            'ngo_email'           => sanitize_email($_POST['ngo_email'] ?? ''),
            'receipt_prefix'      => sanitize_text_field($_POST['receipt_prefix'] ?? 'ISS/80G/2024-25/'),
            'signatory_name'      => sanitize_text_field($_POST['signatory_name'] ?? 'General Secretary'),
            'signatory_title'     => sanitize_text_field($_POST['signatory_title'] ?? 'Authorized Signatory'),
            'signature_img'       => esc_url_raw($_POST['signature_img'] ?? ''),
        ];
        update_option('swapnapuron_donations_settings', $settings);
        echo '<div class="notice notice-success is-dismissible"><p><strong>Settings saved successfully!</strong></p></div>';
    }

    $settings = get_option('swapnapuron_donations_settings', []);
    ?>
    <div class="wrap">
        <h1 style="display:flex;align-items:center;gap:10px;">
            <span class="dashicons dashicons-heart" style="color:#e67e22;font-size:32px;"></span>
            Swapnapuron Donations & 80G Tax Exemption Settings
        </h1>
        <p class="description">Configure your Razorpay Indian Payment Gateway credentials and Statutory Section 80G Certificate details.</p>

        <form method="post" action="" style="max-width: 900px; margin-top: 20px;">
            <?php wp_nonce_field('swapnapuron_settings_action', 'swapnapuron_settings_nonce'); ?>

            <div class="card" style="padding: 20px; margin-bottom: 25px;">
                <h2 style="margin-top:0; border-bottom: 1px solid #ddd; padding-bottom: 10px;">
                    💳 Razorpay Payment Gateway Credentials
                </h2>
                <table class="form-table">
                    <tr>
                        <th scope="row"><label for="test_mode">Sandbox / Test Mode</label></th>
                        <td>
                            <label>
                                <input type="checkbox" name="test_mode" id="test_mode" value="1" <?php checked(!empty($settings['test_mode'])); ?>>
                                Enable Test Mode (Simulate transactions without live money deduction)
                            </label>
                            <p class="description">Uncheck when you are ready to receive real live Indian donations via UPI, Cards & Netbanking.</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="razorpay_key_id">Razorpay Key ID</label></th>
                        <td>
                            <input type="text" name="razorpay_key_id" id="razorpay_key_id" class="regular-text" value="<?php echo esc_attr($settings['razorpay_key_id'] ?? ''); ?>" placeholder="rzp_test_... or rzp_live_...">
                            <p class="description">Obtained from your <a href="https://dashboard.razorpay.com/#/access/api-keys" target="_blank">Razorpay Dashboard &gt; Settings &gt; API Keys</a>.</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="razorpay_key_secret">Razorpay Key Secret</label></th>
                        <td>
                            <input type="password" name="razorpay_key_secret" id="razorpay_key_secret" class="regular-text" value="<?php echo esc_attr($settings['razorpay_key_secret'] ?? ''); ?>" placeholder="••••••••••••••••">
                            <p class="description">Used for cryptographic HMAC SHA-256 webhook and payment signature verification.</p>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="card" style="padding: 20px; margin-bottom: 25px;">
                <h2 style="margin-top:0; border-bottom: 1px solid #ddd; padding-bottom: 10px;">
                    📜 Statutory 80G Certificate Details (Form 10BE)
                </h2>
                <table class="form-table">
                    <tr>
                        <th scope="row"><label for="ngo_name">Registered NGO Name</label></th>
                        <td>
                            <input type="text" name="ngo_name" id="ngo_name" class="regular-text" value="<?php echo esc_attr($settings['ngo_name'] ?? 'ICHAPORE SWAPNAPURON SOCIETY'); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="ngo_pan">Society PAN Number</label></th>
                        <td>
                            <input type="text" name="ngo_pan" id="ngo_pan" class="regular-text" value="<?php echo esc_attr($settings['ngo_pan'] ?? 'AAAAI9694K'); ?>" style="text-transform:uppercase;">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="ngo_80g_urn">80G Approval URN</label></th>
                        <td>
                            <input type="text" name="ngo_80g_urn" id="ngo_80g_urn" class="regular-text" value="<?php echo esc_attr($settings['ngo_80g_urn'] ?? 'AAAAI9694KF20251'); ?>">
                            <p class="description">Form 10AC Unique Registration Number for Section 80G tax deductions.</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="ngo_12a_urn">12A Registration URN</label></th>
                        <td>
                            <input type="text" name="ngo_12a_urn" id="ngo_12a_urn" class="regular-text" value="<?php echo esc_attr($settings['ngo_12a_urn'] ?? 'AAAAI9694KE20216'); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="ngo_reg_no">Society Registration No.</label></th>
                        <td>
                            <input type="text" name="ngo_reg_no" id="ngo_reg_no" class="regular-text" value="<?php echo esc_attr($settings['ngo_reg_no'] ?? 'S0011507 of 2019-2020'); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="receipt_prefix">Receipt Prefix</label></th>
                        <td>
                            <input type="text" name="receipt_prefix" id="receipt_prefix" class="regular-text" value="<?php echo esc_attr($settings['receipt_prefix'] ?? 'ISS/80G/2024-25/'); ?>">
                            <p class="description">Example: ISS/80G/2024-25/ (Receipts will be numbered sequentially like ISS/80G/2024-25/001)</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="ngo_address">Registered Office Address</label></th>
                        <td>
                            <textarea name="ngo_address" id="ngo_address" rows="3" class="large-text"><?php echo esc_textarea($settings['ngo_address'] ?? 'Palitpara, Ichapore, North 24 Parganas, West Bengal 743144'); ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="signatory_name">Authorized Signatory Name/Role</label></th>
                        <td>
                            <input type="text" name="signatory_name" id="signatory_name" class="regular-text" value="<?php echo esc_attr($settings['signatory_name'] ?? 'General Secretary'); ?>">
                        </td>
                    </tr>
                </table>
            </div>

            <p class="submit">
                <input type="submit" name="swapnapuron_save_settings" id="submit" class="button button-primary button-large" value="Save Gateway & 80G Configuration">
            </p>
        </form>
    </div>
    <?php
}

/**
 * Shortcode: [swapnapuron_donation_form]
 */
add_shortcode('swapnapuron_donation_form', 'swapnapuron_render_donation_shortcode');
function swapnapuron_render_donation_shortcode($atts) {
    $atts = shortcode_atts([
        'initiative' => 'General Charitable Fund',
    ], $atts, 'swapnapuron_donation_form');

    ob_start();
    ?>
    <div class="swapnapuron-donation-widget" data-initiative="<?php echo esc_attr($atts['initiative']); ?>">
        <!-- Amount Selection Cards -->
        <div class="donation-amount-grid mb-4">
            <button type="button" class="donation-tier-btn active" data-amount="500">
                <span class="amount-val">₹500</span>
                <span class="amount-desc">Nutrition & Medicine</span>
            </button>
            <button type="button" class="donation-tier-btn" data-amount="1200">
                <span class="amount-val">₹1,200</span>
                <span class="amount-desc">School Kits & Books</span>
            </button>
            <button type="button" class="donation-tier-btn" data-amount="2500">
                <span class="amount-val">₹2,500</span>
                <span class="amount-desc">Dog Reflective Collars</span>
            </button>
            <button type="button" class="donation-tier-btn" data-amount="5000">
                <span class="amount-val">₹5,000</span>
                <span class="amount-desc">Thalassemia Blood Care</span>
            </button>
        </div>

        <!-- Custom Amount Input -->
        <div class="input-group input-group-lg mb-4 donation-custom-amount-wrapper">
            <span class="input-group-text bg-light text-terracotta border fw-bold">₹ INR</span>
            <input type="number" id="swapnapuron-custom-amount" class="form-control swapnapuron-input" placeholder="Enter custom contribution (e.g. 1000)" value="500" min="50">
        </div>

        <!-- Donor Information Form -->
        <div class="donor-form-fields">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label text-secondary small fw-bold">FULL NAME *</label>
                    <input type="text" id="donor_name" class="form-control swapnapuron-input" placeholder="e.g. Sourav Mukherjee" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label text-secondary small fw-bold">EMAIL ADDRESS *</label>
                    <input type="email" id="donor_email" class="form-control swapnapuron-input" placeholder="name@example.com" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label text-secondary small fw-bold">MOBILE / WHATSAPP NUMBER *</label>
                    <input type="tel" id="donor_phone" class="form-control swapnapuron-input" placeholder="+91 98765 43210" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label text-secondary small fw-bold">PAN NUMBER (FOR 80G TAX EXEMPTION)</label>
                    <input type="text" id="donor_pan" class="form-control swapnapuron-input" placeholder="ABCDE1234F" style="text-transform: uppercase;" maxlength="10">
                    <div class="form-text text-muted small">Mandatory by Income Tax Dept for Form 10BE tax benefit.</div>
                </div>
                <div class="col-12">
                    <label class="form-label text-secondary small fw-bold">RESIDENTIAL / OFFICE ADDRESS (FOR 80G RECEIPT)</label>
                    <input type="text" id="donor_address" class="form-control swapnapuron-input" placeholder="House/Flat No, Street, City, State & PIN Code">
                </div>
            </div>

            <!-- Tax 80G Checkbox -->
            <div class="form-check mt-3">
                <input class="form-check-input" type="checkbox" id="claim_80g" checked>
                <label class="form-check-label text-dark small fw-medium" for="claim_80g">
                    I require an Indian Income Tax Section 80G Tax Exemption Certificate.
                </label>
            </div>

            <!-- Action Button -->
            <div class="mt-4">
                <button type="button" id="btn-submit-donation" class="btn btn-terracotta btn-lg w-100 rounded-pill fw-bold text-white shadow py-3">
                    <i class="bi bi-shield-check me-2"></i> Donate Securely with Razorpay (₹<span id="display-btn-amount">500</span>)
                </button>
            </div>
            <div class="text-center mt-2">
                <span class="text-muted small">
                    <i class="bi bi-lock-fill text-terracotta me-1"></i> Supports UPI (GPay, PhonePe, Paytm), Debit/Credit Cards & Netbanking
                </span>
            </div>
        </div>

        <!-- Modal for Receipt Display -->
        <div id="swapnapuron-receipt-modal" class="swapnapuron-modal" style="display:none;">
            <div class="swapnapuron-modal-content">
                <span class="swapnapuron-modal-close">&times;</span>
                <div id="swapnapuron-receipt-body"></div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
