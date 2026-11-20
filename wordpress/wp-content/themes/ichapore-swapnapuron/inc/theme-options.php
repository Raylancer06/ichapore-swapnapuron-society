<?php
/**
 * Theme Options / Society Settings
 * Provides a clean admin panel for managing organization statutory, contact, and banking coordinates.
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

class Swapnapuron_Theme_Options {

    public function __construct() {
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_init', array($this, 'register_settings'));
    }

    public function add_admin_menu() {
        add_menu_page(
            __('Society Settings', 'ichapore-swapnapuron'),
            __('Society Settings', 'ichapore-swapnapuron'),
            'manage_options',
            'swapnapuron-settings',
            array($this, 'render_settings_page'),
            'dashicons-building',
            59
        );
    }

    public function register_settings() {
        $settings = array(
            'swapnapuron_estd',
            'swapnapuron_reg_no',
            'swapnapuron_pan',
            'swapnapuron_80g_urn',
            'swapnapuron_12a_urn',
            'swapnapuron_phone_1',
            'swapnapuron_phone_2',
            'swapnapuron_email',
            'swapnapuron_address',
            'swapnapuron_bank_name',
            'swapnapuron_account_name',
            'swapnapuron_account_no',
            'swapnapuron_ifsc',
            'swapnapuron_branch',
            'swapnapuron_upi_id',
            'swapnapuron_facebook',
            'swapnapuron_twitter',
            'swapnapuron_instagram',
            'swapnapuron_youtube'
        );

        foreach ($settings as $setting) {
            register_setting('swapnapuron_settings_group', $setting, array(
                'sanitize_callback' => 'sanitize_text_field'
            ));
        }
    }

    public function render_settings_page() {
        ?>
        <div class="wrap" style="max-width: 900px;">
            <h1><span class="dashicons dashicons-building" style="font-size: 28px; line-height: 1.2;"></span> <?php esc_html_e('Ichapore Swapnapuron Society - Configuration Hub', 'ichapore-swapnapuron'); ?></h1>
            <p class="description"><?php esc_html_e('Update your statutory NGO numbers, banking coordinates, contact helpline, and social links across the entire website.', 'ichapore-swapnapuron'); ?></p>

            <form method="post" action="options.php" style="background: #fff; padding: 24px; border-radius: 8px; border: 1px solid #ccd0d4; margin-top: 20px;">
                <?php settings_fields('swapnapuron_settings_group'); ?>

                <h2 style="border-bottom: 2px solid #dc3e26; padding-bottom: 8px;"><?php esc_html_e('1. Statutory & NGO Registration', 'ichapore-swapnapuron'); ?></h2>
                <table class="form-table">
                    <tr>
                        <th scope="row"><label for="swapnapuron_estd"><?php esc_html_e('Founding Year / Estd', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="text" id="swapnapuron_estd" name="swapnapuron_estd" value="<?php echo esc_attr(get_option('swapnapuron_estd', '2009')); ?>" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="swapnapuron_reg_no"><?php esc_html_e('Society Registration No', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="text" id="swapnapuron_reg_no" name="swapnapuron_reg_no" value="<?php echo esc_attr(get_option('swapnapuron_reg_no', 'S0011507 of 2019-2020')); ?>" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="swapnapuron_pan"><?php esc_html_e('Society PAN Card', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="text" id="swapnapuron_pan" name="swapnapuron_pan" value="<?php echo esc_attr(get_option('swapnapuron_pan', 'AAAAI9694K')); ?>" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="swapnapuron_80g_urn"><?php esc_html_e('80G Registration (URN)', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="text" id="swapnapuron_80g_urn" name="swapnapuron_80g_urn" value="<?php echo esc_attr(get_option('swapnapuron_80g_urn', 'AAAAI9694KF20251')); ?>" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="swapnapuron_12a_urn"><?php esc_html_e('12A Registration (URN)', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="text" id="swapnapuron_12a_urn" name="swapnapuron_12a_urn" value="<?php echo esc_attr(get_option('swapnapuron_12a_urn', 'AAAAI9694KE20216')); ?>" class="regular-text" /></td>
                    </tr>
                </table>

                <h2 style="border-bottom: 2px solid #dc3e26; padding-bottom: 8px; margin-top: 30px;"><?php esc_html_e('2. Official Contact & Coordinates', 'ichapore-swapnapuron'); ?></h2>
                <table class="form-table">
                    <tr>
                        <th scope="row"><label for="swapnapuron_phone_1"><?php esc_html_e('Primary Helpline Phone', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="text" id="swapnapuron_phone_1" name="swapnapuron_phone_1" value="<?php echo esc_attr(get_option('swapnapuron_phone_1', '+91 83360 66390')); ?>" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="swapnapuron_phone_2"><?php esc_html_e('Secondary Phone / WhatsApp', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="text" id="swapnapuron_phone_2" name="swapnapuron_phone_2" value="<?php echo esc_attr(get_option('swapnapuron_phone_2', '+91 89183 97307')); ?>" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="swapnapuron_email"><?php esc_html_e('Official Email', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="email" id="swapnapuron_email" name="swapnapuron_email" value="<?php echo esc_attr(get_option('swapnapuron_email', 'ichaporeswapnapuronsociety@gmail.com')); ?>" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="swapnapuron_address"><?php esc_html_e('Registered Address', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="text" id="swapnapuron_address" name="swapnapuron_address" value="<?php echo esc_attr(get_option('swapnapuron_address', '41 Jatin Das Road, Ichapore Majher Para, North 24 Parganas, West Bengal - 743144')); ?>" class="large-text" /></td>
                    </tr>
                </table>

                <h2 style="border-bottom: 2px solid #dc3e26; padding-bottom: 8px; margin-top: 30px;"><?php esc_html_e('3. Official Banking & UPI Coordinates', 'ichapore-swapnapuron'); ?></h2>
                <table class="form-table">
                    <tr>
                        <th scope="row"><label for="swapnapuron_bank_name"><?php esc_html_e('Bank Name', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="text" id="swapnapuron_bank_name" name="swapnapuron_bank_name" value="<?php echo esc_attr(get_option('swapnapuron_bank_name', 'Punjab National Bank (PNB)')); ?>" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="swapnapuron_account_name"><?php esc_html_e('Account Name', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="text" id="swapnapuron_account_name" name="swapnapuron_account_name" value="<?php echo esc_attr(get_option('swapnapuron_account_name', 'SWAPNAPURON SOCIETY')); ?>" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="swapnapuron_account_no"><?php esc_html_e('Account Number', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="text" id="swapnapuron_account_no" name="swapnapuron_account_no" value="<?php echo esc_attr(get_option('swapnapuron_account_no', '2101002100009707')); ?>" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="swapnapuron_ifsc"><?php esc_html_e('IFSC Code', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="text" id="swapnapuron_ifsc" name="swapnapuron_ifsc" value="<?php echo esc_attr(get_option('swapnapuron_ifsc', 'PUNB0210100')); ?>" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="swapnapuron_branch"><?php esc_html_e('Branch', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="text" id="swapnapuron_branch" name="swapnapuron_branch" value="<?php echo esc_attr(get_option('swapnapuron_branch', 'Ichapur Branch, West Bengal')); ?>" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="swapnapuron_upi_id"><?php esc_html_e('Official UPI VPA ID', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="text" id="swapnapuron_upi_id" name="swapnapuron_upi_id" value="<?php echo esc_attr(get_option('swapnapuron_upi_id', 'ichaporeswapnapuronsociety@pnb')); ?>" class="regular-text" /></td>
                    </tr>
                </table>

                <h2 style="border-bottom: 2px solid #dc3e26; padding-bottom: 8px; margin-top: 30px;"><?php esc_html_e('4. Social Media Channels', 'ichapore-swapnapuron'); ?></h2>
                <table class="form-table">
                    <tr>
                        <th scope="row"><label for="swapnapuron_facebook"><?php esc_html_e('Facebook Page URL', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="url" id="swapnapuron_facebook" name="swapnapuron_facebook" value="<?php echo esc_attr(get_option('swapnapuron_facebook', 'https://www.facebook.com/ichaporeswapnapuronsociety')); ?>" class="large-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="swapnapuron_twitter"><?php esc_html_e('Twitter / X Profile URL', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="url" id="swapnapuron_twitter" name="swapnapuron_twitter" value="<?php echo esc_attr(get_option('swapnapuron_twitter', 'https://x.com/swapnapuron')); ?>" class="large-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="swapnapuron_instagram"><?php esc_html_e('Instagram Profile URL', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="url" id="swapnapuron_instagram" name="swapnapuron_instagram" value="<?php echo esc_attr(get_option('swapnapuron_instagram', 'https://www.instagram.com/ichaporeswapnapuronsociety')); ?>" class="large-text" /></td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="swapnapuron_youtube"><?php esc_html_e('YouTube Channel URL', 'ichapore-swapnapuron'); ?></label></th>
                        <td><input type="url" id="swapnapuron_youtube" name="swapnapuron_youtube" value="<?php echo esc_attr(get_option('swapnapuron_youtube', 'https://www.youtube.com/channel/UCEfK5BRdIoTHRtRqBZDkIkg')); ?>" class="large-text" /></td>
                    </tr>
                </table>

                <?php submit_button(__('Save Society Settings', 'ichapore-swapnapuron')); ?>
            </form>
        </div>
        <?php
    }
}

new Swapnapuron_Theme_Options();
