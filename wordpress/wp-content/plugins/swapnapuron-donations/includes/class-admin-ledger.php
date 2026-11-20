<?php
/**
 * Admin Donations Ledger & Form 10BD Export
 *
 * @package SwapnapuronDonations
 */

if (!defined('ABSPATH')) {
    exit;
}

function swapnapuron_donations_render_ledger_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'swapnapuron_donations';

    // Handle CSV Export
    if (isset($_GET['action']) && $_GET['action'] === 'export_10bd' && check_admin_referer('swapnapuron_export_nonce')) {
        self_export_form_10bd();
        exit;
    }

    // View Single Receipt Action
    if (isset($_GET['view_receipt'])) {
        $receipt_no = sanitize_text_field($_GET['view_receipt']);
        ?>
        <div class="wrap">
            <h1 style="margin-bottom:20px;">
                <a href="<?php echo admin_url('admin.php?page=swapnapuron-donations'); ?>" class="page-title-action">&larr; Back to Ledger</a>
                Section 80G Certificate: <?php echo esc_html($receipt_no); ?>
            </h1>
            <div style="background:#fff; border:1px solid #ccd0d4; padding:30px; max-width:850px; margin:0 auto; box-shadow:0 4px 15px rgba(0,0,0,0.06);">
                <?php echo Swapnapuron_Receipt_Generator::render_receipt_html($receipt_no); ?>
            </div>
        </div>
        <?php
        return;
    }

    // Search and filter
    $search = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';
    $where  = "WHERE 1=1";
    if (!empty($search)) {
        $where .= $wpdb->prepare(" AND (donor_name LIKE %s OR donor_email LIKE %s OR receipt_no LIKE %s OR donor_pan LIKE %s)", "%$search%", "%$search%", "%$search%", "%$search%");
    }

    $donations = $wpdb->get_results("SELECT * FROM $table_name $where ORDER BY id DESC LIMIT 100");
    $total_amount = $wpdb->get_var("SELECT SUM(amount) FROM $table_name WHERE status = 'captured'");
    $total_count  = $wpdb->get_var("SELECT COUNT(*) FROM $table_name WHERE status = 'captured'");

    $export_url = wp_nonce_url(admin_url('admin.php?page=swapnapuron-donations&action=export_10bd'), 'swapnapuron_export_nonce');
    ?>
    <div class="wrap">
        <h1 class="wp-heading-inline">
            <span class="dashicons dashicons-heart" style="color:#e67e22;font-size:30px;"></span> 
            Swapnapuron Donations Ledger
        </h1>
        <a href="<?php echo esc_url($export_url); ?>" class="page-title-action" style="background:#27ae60; color:#fff; border-color:#219150;">
            <span class="dashicons dashicons-download" style="margin-top:4px;"></span> Export Form 10BD CSV
        </a>
        <hr class="wp-header-end">

        <!-- Summary KPI Metric Cards -->
        <div style="display:flex; gap:20px; margin: 20px 0;">
            <div class="card" style="flex:1; padding:20px; border-left:4px solid #27ae60;">
                <span style="font-size:12px; text-transform:uppercase; color:#666; font-weight:600;">Total Contributions</span>
                <div style="font-size:28px; font-weight:700; color:#2c3e50; margin-top:5px;">
                    ₹<?php echo number_format($total_amount ?: 0, 2); ?>
                </div>
            </div>
            <div class="card" style="flex:1; padding:20px; border-left:4px solid #3498db;">
                <span style="font-size:12px; text-transform:uppercase; color:#666; font-weight:600;">Verified Transactions</span>
                <div style="font-size:28px; font-weight:700; color:#2c3e50; margin-top:5px;">
                    <?php echo intval($total_count ?: 0); ?>
                </div>
            </div>
            <div class="card" style="flex:1; padding:20px; border-left:4px solid #e67e22;">
                <span style="font-size:12px; text-transform:uppercase; color:#666; font-weight:600;">Statutory 80G Status</span>
                <div style="font-size:20px; font-weight:700; color:#e67e22; margin-top:10px;">
                    URN: AAAAI9694KF20251
                </div>
            </div>
        </div>

        <!-- Search Box -->
        <form method="get" action="">
            <input type="hidden" name="page" value="swapnapuron-donations">
            <p class="search-box">
                <input type="search" name="s" value="<?php echo esc_attr($search); ?>" placeholder="Search name, PAN, receipt...">
                <input type="submit" class="button" value="Filter Donations">
            </p>
        </form>

        <!-- Donations Table -->
        <table class="wp-list-table widefat fixed striped table-view-list">
            <thead>
                <tr>
                    <th width="140">Receipt No</th>
                    <th>Donor Name</th>
                    <th>PAN / ID</th>
                    <th>Contact</th>
                    <th>Amount</th>
                    <th>Initiative / Cause</th>
                    <th width="100">Status</th>
                    <th>Date</th>
                    <th width="120">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($donations)) : ?>
                    <?php foreach ($donations as $row) : ?>
                        <tr>
                            <td>
                                <strong>
                                    <a href="<?php echo admin_url('admin.php?page=swapnapuron-donations&view_receipt=' . urlencode($row->receipt_no)); ?>">
                                        <?php echo esc_html($row->receipt_no); ?>
                                    </a>
                                </strong>
                            </td>
                            <td>
                                <strong><?php echo esc_html($row->donor_name); ?></strong>
                                <?php if (!empty($row->donor_address)) : ?>
                                    <div style="font-size:11px; color:#777;"><?php echo esc_html(wp_trim_words($row->donor_address, 6)); ?></div>
                                <?php endif; ?>
                            </td>
                            <td>
                                <span style="font-family:monospace; font-weight:600; color:#d35400;">
                                    <?php echo esc_html($row->donor_pan ?: 'N.A.'); ?>
                                </span>
                            </td>
                            <td>
                                <?php echo esc_html($row->donor_email); ?><br>
                                <span style="font-size:11px; color:#555;"><?php echo esc_html($row->donor_phone); ?></span>
                            </td>
                            <td>
                                <strong style="color:#27ae60; font-size:15px;">₹<?php echo number_format($row->amount, 2); ?></strong>
                            </td>
                            <td><?php echo esc_html($row->initiative); ?></td>
                            <td>
                                <?php if ($row->status === 'captured') : ?>
                                    <span style="background:#e8f8f0; color:#27ae60; padding:3px 8px; border-radius:12px; font-size:11px; font-weight:600;">Paid</span>
                                <?php else : ?>
                                    <span style="background:#fef5e7; color:#e67e22; padding:3px 8px; border-radius:12px; font-size:11px; font-weight:600;"><?php echo esc_html(ucfirst($row->status)); ?></span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo esc_html(date('d M Y, h:i A', strtotime($row->created_at))); ?></td>
                            <td>
                                <a href="<?php echo admin_url('admin.php?page=swapnapuron-donations&view_receipt=' . urlencode($row->receipt_no)); ?>" class="button button-small" target="_blank">
                                    <span class="dashicons dashicons-media-document" style="font-size:14px; margin-top:3px;"></span> 80G PDF
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="9" style="text-align:center; padding:30px; color:#777;">
                            No donation transactions found. Once donors contribute, their records will appear here automatically.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}

/**
 * Direct CSV Stream for Form 10BD Annual Filing
 */
function self_export_form_10bd() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'swapnapuron_donations';
    $results = $wpdb->get_results("SELECT * FROM $table_name WHERE status = 'captured' ORDER BY id ASC", ARRAY_A);

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=Form_10BD_Donations_' . date('Ymd_His') . '.csv');

    $output = fopen('php://output', 'w');
    fputcsv($output, [
        'Sl No',
        'Pre-acknowledgement No / Receipt No',
        'Unique Identification Number of the donor',
        'ID Code (PAN / Aadhaar / Passport)',
        'Section Code',
        'Name of Donor',
        'Address of Donor',
        'Donation Type (Corpus / Specific / Others)',
        'Mode of Receipt',
        'Amount of Donation (INR)',
        'Date of Donation',
    ]);

    $sl = 1;
    foreach ($results as $row) {
        $id_type = !empty($row['donor_pan']) ? '1' : '99'; // 1 = Permanent Account Number (PAN)
        fputcsv($output, [
            $sl++,
            $row['receipt_no'],
            $row['donor_pan'] ?: 'NOT_PROVIDED',
            $id_type,
            'Section 80G',
            $row['donor_name'],
            $row['donor_address'],
            $row['initiative'] ?: 'Specific Grant',
            'Electronic / Online (Razorpay)',
            $row['amount'],
            date('Y-m-d', strtotime($row['created_at'])),
        ]);
    }

    fclose($output);
    exit;
}
