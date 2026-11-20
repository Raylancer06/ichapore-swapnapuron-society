<?php
/**
 * Automated Section 80G Receipt Generator (Form 10BE Compliant)
 *
 * @package SwapnapuronDonations
 */

if (!defined('ABSPATH')) {
    exit;
}

class Swapnapuron_Receipt_Generator {

    /**
     * Render Certificate HTML by Receipt Number
     */
    public static function render_receipt_html($receipt_no) {
        global $wpdb;
        $table_name = $wpdb->prefix . 'swapnapuron_donations';
        $donation = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE receipt_no = %s", $receipt_no));

        if (!$donation) {
            return '<div class="alert alert-danger">Receipt not found.</div>';
        }

        $settings = get_option('swapnapuron_donations_settings', []);
        $ngo_name     = !empty($settings['ngo_name']) ? $settings['ngo_name'] : 'ICHAPORE SWAPNAPURON SOCIETY';
        $ngo_reg      = !empty($settings['ngo_reg_no']) ? $settings['ngo_reg_no'] : 'S0011507 of 2019-2020';
        $ngo_pan      = !empty($settings['ngo_pan']) ? $settings['ngo_pan'] : 'AAAAI9694K';
        $ngo_80g      = !empty($settings['ngo_80g_urn']) ? $settings['ngo_80g_urn'] : 'AAAAI9694KF20251';
        $ngo_12a      = !empty($settings['ngo_12a_urn']) ? $settings['ngo_12a_urn'] : 'AAAAI9694KE20216';
        $ngo_address  = !empty($settings['ngo_address']) ? $settings['ngo_address'] : 'Palitpara, Ichapore, North 24 Parganas, West Bengal 743144';
        $ngo_phone    = !empty($settings['ngo_phone']) ? $settings['ngo_phone'] : '+91 83360 66390';
        $signatory    = !empty($settings['signatory_name']) ? $settings['signatory_name'] : 'General Secretary';

        $words = self::convert_number_to_words($donation->amount);
        $date  = date('d F Y', strtotime($donation->created_at));

        ob_start();
        ?>
        <div class="swapnapuron-80g-certificate printable-area" id="receipt-print-wrapper">
            <!-- Header -->
            <div class="receipt-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h2 class="org-name"><?php echo esc_html($ngo_name); ?></h2>
                        <p class="org-sub">Registered under West Bengal Societies Registration Act XXVI of 1961</p>
                        <p class="org-meta">
                            <strong>Reg No:</strong> <?php echo esc_html($ngo_reg); ?> | 
                            <strong>Society PAN:</strong> <?php echo esc_html($ngo_pan); ?><br>
                            <strong>80G URN:</strong> <?php echo esc_html($ngo_80g); ?> | 
                            <strong>12A URN:</strong> <?php echo esc_html($ngo_12a); ?>
                        </p>
                        <p class="org-address"><?php echo esc_html($ngo_address); ?> | Phone: <?php echo esc_html($ngo_phone); ?></p>
                    </div>
                    <div class="col-4 text-end">
                        <div class="receipt-badge">
                            <span class="title">DONATION RECEIPT</span>
                            <span class="sub">Under Section 80G</span>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="receipt-divider">

            <!-- Receipt Meta -->
            <div class="receipt-meta-grid">
                <div>
                    <span class="label">RECEIPT NUMBER:</span>
                    <span class="val fw-bold text-primary"><?php echo esc_html($donation->receipt_no); ?></span>
                </div>
                <div>
                    <span class="label">DATE OF RECEIPT:</span>
                    <span class="val"><?php echo esc_html($date); ?></span>
                </div>
                <div>
                    <span class="label">PAYMENT MODE:</span>
                    <span class="val"><?php echo esc_html($donation->payment_method); ?> (Online)</span>
                </div>
                <div>
                    <span class="label">TRANSACTION ID:</span>
                    <span class="val font-monospace"><?php echo esc_html($donation->razorpay_payment_id ?: 'SIMULATED_TXN'); ?></span>
                </div>
            </div>

            <!-- Donor Coordinates Table -->
            <div class="donor-details-card mt-3">
                <table class="table table-bordered table-sm">
                    <tr>
                        <th width="30%">Name of Donor:</th>
                        <td><strong><?php echo esc_html($donation->donor_name); ?></strong></td>
                    </tr>
                    <tr>
                        <th>Donor PAN Number:</th>
                        <td><strong class="text-uppercase"><?php echo esc_html($donation->donor_pan ?: 'Not Provided / N.A.'); ?></strong></td>
                    </tr>
                    <tr>
                        <th>Contact Mobile & Email:</th>
                        <td><?php echo esc_html($donation->donor_phone); ?> | <?php echo esc_html($donation->donor_email); ?></td>
                    </tr>
                    <tr>
                        <th>Residential / Office Address:</th>
                        <td><?php echo esc_html($donation->donor_address ?: 'As declared by donor'); ?></td>
                    </tr>
                    <tr>
                        <th>Purpose / Cause:</th>
                        <td><?php echo esc_html($donation->initiative); ?></td>
                    </tr>
                </table>
            </div>

            <!-- Financial Contribution Box -->
            <div class="amount-card my-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="amount-in-words">
                            <strong>Amount in words:</strong> <em>INR <?php echo esc_html($words); ?> Only</em>
                        </div>
                    </div>
                    <div class="amount-figure">
                        <span class="currency">₹</span>
                        <span class="number"><?php echo number_format($donation->amount, 2); ?></span>
                    </div>
                </div>
            </div>

            <!-- Statutory Tax Exemption Declaration -->
            <div class="statutory-note">
                <p>
                    <strong>Statutory Tax Exemption Notice:</strong> 
                    Donations made to <em><?php echo esc_html($ngo_name); ?></em> qualify for deduction under 
                    <strong>Section 80G(5)(vi)</strong> of the Income Tax Act, 1961 vide Unique Registration Number (URN) 
                    <strong><?php echo esc_html($ngo_80g); ?></strong>. 
                    This receipt will be reported in the annual Statement of Donations (Form 10BD) filed with the Income Tax Department for donor Form 10BE generation.
                </p>
            </div>

            <!-- Signatory Footer -->
            <div class="row align-items-end mt-4 pt-3">
                <div class="col-6">
                    <p class="small text-muted mb-0">Computer-generated receipt.<br>Valid without physical signature when authenticated online.</p>
                </div>
                <div class="col-6 text-end">
                    <div class="signature-box">
                        <div class="sig-line"></div>
                        <p class="mb-0 fw-bold"><?php echo esc_html($signatory); ?></p>
                        <p class="small text-muted mb-0">For <?php echo esc_html($ngo_name); ?></p>
                    </div>
                </div>
            </div>

            <!-- Print Actions -->
            <div class="receipt-actions no-print mt-4 text-center">
                <button type="button" class="btn btn-primary rounded-pill px-4 me-2" onclick="window.print();">
                    <i class="dashicons dashicons-printer"></i> Print / Save 80G PDF
                </button>
                <button type="button" class="btn btn-outline-secondary rounded-pill px-4" onclick="document.getElementById('swapnapuron-receipt-modal').style.display='none';">
                    Close Window
                </button>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }

    /**
     * Convert numbers into Indian English words
     */
    private static function convert_number_to_words($num) {
        $num = intval($num);
        $ones = [
            1 => 'One', 2 => 'Two', 3 => 'Three', 4 => 'Four', 5 => 'Five',
            6 => 'Six', 7 => 'Seven', 8 => 'Eight', 9 => 'Nine', 10 => 'Ten',
            11 => 'Eleven', 12 => 'Twelve', 13 => 'Thirteen', 14 => 'Fourteen',
            15 => 'Fifteen', 16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen', 19 => 'Nineteen'
        ];
        $tens = [
            2 => 'Twenty', 3 => 'Thirty', 4 => 'Forty', 5 => 'Fifty',
            6 => 'Sixty', 7 => 'Seventy', 8 => 'Eighty', 9 => 'Ninety'
        ];

        if ($num == 0) return 'Zero';

        $res = '';

        if ($num >= 10000000) {
            $crores = intval($num / 10000000);
            $res .= self::convert_number_to_words($crores) . ' Crore ';
            $num %= 10000000;
        }

        if ($num >= 100000) {
            $lakhs = intval($num / 100000);
            $res .= self::convert_number_to_words($lakhs) . ' Lakh ';
            $num %= 100000;
        }

        if ($num >= 1000) {
            $thousands = intval($num / 1000);
            $res .= self::convert_number_to_words($thousands) . ' Thousand ';
            $num %= 1000;
        }

        if ($num >= 100) {
            $hundreds = intval($num / 100);
            $res .= self::convert_number_to_words($hundreds) . ' Hundred ';
            $num %= 100;
        }

        if ($num > 0) {
            if ($num < 20) {
                $res .= $ones[$num];
            } else {
                $t = intval($num / 10);
                $u = $num % 10;
                $res .= $tens[$t] . ($u > 0 ? ' ' . $ones[$u] : '');
            }
        }

        return trim($res);
    }
}
