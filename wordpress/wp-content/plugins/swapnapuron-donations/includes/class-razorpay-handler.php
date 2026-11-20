<?php
/**
 * Razorpay Payment Gateway & Order Handler
 *
 * @package SwapnapuronDonations
 */

if (!defined('ABSPATH')) {
    exit;
}

class Swapnapuron_Razorpay_Handler {

    public function __construct() {
        add_action('wp_ajax_swapnapuron_create_order', [$this, 'create_order']);
        add_action('wp_ajax_nopriv_swapnapuron_create_order', [$this, 'create_order']);

        add_action('wp_ajax_swapnapuron_verify_payment', [$this, 'verify_payment']);
        add_action('wp_ajax_nopriv_swapnapuron_verify_payment', [$this, 'verify_payment']);
    }

    /**
     * Create Razorpay Order
     */
    public function create_order() {
        check_ajax_referer('swapnapuron_donation_nonce', 'nonce');

        $amount = isset($_POST['amount']) ? floatval($_POST['amount']) : 0;
        $name   = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
        $email  = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
        $phone  = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';

        if ($amount < 10) {
            wp_send_json_error(['message' => 'Minimum donation amount is ₹10.']);
        }

        $settings   = get_option('swapnapuron_donations_settings', []);
        $key_id     = !empty($settings['razorpay_key_id']) ? $settings['razorpay_key_id'] : '';
        $key_secret = !empty($settings['razorpay_key_secret']) ? $settings['razorpay_key_secret'] : '';
        $test_mode  = !empty($settings['test_mode']);

        $amount_in_paise = intval(round($amount * 100));

        // If no credentials configured or test simulation
        if (empty($key_id) || empty($key_secret) || $test_mode && strpos($key_id, 'rzp_') === false) {
            // Simulated order ID for preview/testing
            $mock_order_id = 'order_sim_' . wp_generate_password(14, false);
            wp_send_json_success([
                'order_id'   => $mock_order_id,
                'amount'     => $amount_in_paise,
                'currency'   => 'INR',
                'is_mock'    => true,
            ]);
            return;
        }

        // Live/Test call to Razorpay Orders API
        $response = wp_remote_post('https://api.razorpay.com/v1/orders', [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($key_id . ':' . $key_secret),
                'Content-Type'  => 'application/json',
            ],
            'body' => wp_json_encode([
                'amount'   => $amount_in_paise,
                'currency' => 'INR',
                'receipt'  => 'rcpt_' . time(),
                'notes'    => [
                    'donor_name'  => $name,
                    'donor_email' => $email,
                    'donor_phone' => $phone,
                ],
            ]),
            'timeout' => 20,
        ]);

        if (is_wp_error($response)) {
            wp_send_json_error(['message' => 'Unable to reach payment gateway: ' . $response->get_error_message()]);
        }

        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);

        if (!empty($data['id'])) {
            wp_send_json_success([
                'order_id' => $data['id'],
                'amount'   => $data['amount'],
                'currency' => $data['currency'],
                'is_mock'  => false,
            ]);
        } else {
            $err_msg = isset($data['error']['description']) ? $data['error']['description'] : 'Failed to create Razorpay order.';
            wp_send_json_error(['message' => $err_msg]);
        }
    }

    /**
     * Verify Payment Signature & Save Record
     */
    public function verify_payment() {
        global $wpdb;
        check_ajax_referer('swapnapuron_donation_nonce', 'nonce');

        $order_id   = sanitize_text_field($_POST['razorpay_order_id'] ?? '');
        $payment_id = sanitize_text_field($_POST['razorpay_payment_id'] ?? '');
        $signature  = sanitize_text_field($_POST['razorpay_signature'] ?? '');
        $amount     = floatval($_POST['amount'] ?? 0);
        $name       = sanitize_text_field($_POST['name'] ?? '');
        $email      = sanitize_email($_POST['email'] ?? '');
        $phone      = sanitize_text_field($_POST['phone'] ?? '');
        $pan        = strtoupper(sanitize_text_field($_POST['pan'] ?? ''));
        $address    = sanitize_textarea_field($_POST['address'] ?? '');
        $initiative = sanitize_text_field($_POST['initiative'] ?? 'General Charitable Fund');
        $claim_80g  = isset($_POST['claim_80g']) ? 1 : 0;

        $settings   = get_option('swapnapuron_donations_settings', []);
        $key_secret = !empty($settings['razorpay_key_secret']) ? $settings['razorpay_key_secret'] : '';
        $prefix     = !empty($settings['receipt_prefix']) ? $settings['receipt_prefix'] : 'ISS/80G/2024-25/';

        $is_verified = false;

        // Signature check
        if (!empty($key_secret) && !empty($signature) && !empty($order_id) && !empty($payment_id)) {
            $expected_sig = hash_hmac('sha256', $order_id . '|' . $payment_id, $key_secret);
            if (hash_equals($expected_sig, $signature)) {
                $is_verified = true;
            }
        } elseif (!empty($_POST['is_mock']) || strpos($order_id, 'order_sim_') === 0) {
            // Mock test mode verification
            $is_verified = true;
            $payment_id  = 'pay_sim_' . wp_generate_password(14, false);
        }

        if (!$is_verified) {
            wp_send_json_error(['message' => 'Payment signature verification failed.']);
        }

        // Generate sequential receipt number
        $table_name = $wpdb->prefix . 'swapnapuron_donations';
        $count = $wpdb->get_var("SELECT COUNT(*) FROM $table_name") + 1;
        $receipt_no = $prefix . str_pad($count, 4, '0', STR_PAD_LEFT);

        // Insert donation record
        $inserted = $wpdb->insert(
            $table_name,
            [
                'receipt_no'          => $receipt_no,
                'donor_name'          => $name,
                'donor_email'         => $email,
                'donor_phone'         => $phone,
                'donor_pan'           => $pan,
                'donor_address'       => $address,
                'amount'              => $amount,
                'currency'            => 'INR',
                'initiative'          => $initiative,
                'payment_method'      => 'Razorpay',
                'razorpay_order_id'   => $order_id,
                'razorpay_payment_id' => $payment_id,
                'razorpay_signature'  => $signature,
                'status'              => 'captured',
                'is_80g_claimed'      => $claim_80g,
                'created_at'          => current_time('mysql'),
            ],
            ['%s','%s','%s','%s','%s','%s','%f','%s','%s','%s','%s','%s','%s','%s','%d','%s']
        );

        if (!$inserted) {
            wp_send_json_error(['message' => 'Failed to record donation in database.']);
        }

        $donation_id = $wpdb->insert_id;

        // Render instant receipt HTML
        $receipt_html = Swapnapuron_Receipt_Generator::render_receipt_html($receipt_no);

        wp_send_json_success([
            'message'      => 'Thank you! Your donation was successful.',
            'receipt_no'   => $receipt_no,
            'receipt_html' => $receipt_html,
        ]);
    }
}

new Swapnapuron_Razorpay_Handler();
