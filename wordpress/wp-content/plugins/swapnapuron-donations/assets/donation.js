/**
 * Swapnapuron Donations Razorpay & Form 10BE Checkout Script
 */

(function($) {
    'use strict';

    $(document).ready(function() {
        const $widget = $('.swapnapuron-donation-widget');
        if (!$widget.length) return;

        const config = window.swapnapuronDonationData || {};

        // Amount Tier Buttons
        $('.donation-tier-btn').on('click', function() {
            $('.donation-tier-btn').removeClass('active');
            $(this).addClass('active');

            const amt = $(this).data('amount');
            $('#swapnapuron-custom-amount').val(amt);
            $('#display-btn-amount').text(Number(amt).toLocaleString('en-IN'));
        });

        // Custom Amount Input
        $('#swapnapuron-custom-amount').on('input', function() {
            const val = $(this).val();
            $('.donation-tier-btn').removeClass('active');
            $('.donation-tier-btn').each(function() {
                if ($(this).data('amount') == val) {
                    $(this).addClass('active');
                }
            });
            $('#display-btn-amount').text(Number(val || 0).toLocaleString('en-IN'));
        });

        // Close Modal
        $(document).on('click', '.swapnapuron-modal-close', function() {
            $('#swapnapuron-receipt-modal').hide();
        });

        // Submit Donation Button
        $('#btn-submit-donation').on('click', function(e) {
            e.preventDefault();

            const amount = parseFloat($('#swapnapuron-custom-amount').val());
            const name = $.trim($('#donor_name').val());
            const email = $.trim($('#donor_email').val());
            const phone = $.trim($('#donor_phone').val());
            const pan = $.trim($('#donor_pan').val()).toUpperCase();
            const address = $.trim($('#donor_address').val());
            const claim80g = $('#claim_80g').is(':checked') ? 1 : 0;
            const initiative = $widget.data('initiative') || 'General Charitable Fund';

            // Validation
            if (!amount || amount < 10) {
                alert('Please enter a valid donation amount (minimum ₹10).');
                $('#swapnapuron-custom-amount').focus();
                return;
            }

            if (!name) {
                alert('Please enter your full name.');
                $('#donor_name').focus();
                return;
            }

            if (!email || email.indexOf('@') === -1) {
                alert('Please provide a valid email address to receive your 80G receipt.');
                $('#donor_email').focus();
                return;
            }

            if (!phone || phone.length < 8) {
                alert('Please provide a valid contact number.');
                $('#donor_phone').focus();
                return;
            }

            const $btn = $(this);
            const origHtml = $btn.html();
            $btn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-2"></span> Initializing Gateway...');

            // Step 1: Create Order
            $.ajax({
                url: config.ajax_url,
                type: 'POST',
                data: {
                    action: 'swapnapuron_create_order',
                    nonce: config.nonce,
                    amount: amount,
                    name: name,
                    email: email,
                    phone: phone,
                },
                success: function(resp) {
                    if (!resp.success) {
                        alert(resp.data?.message || 'Error initializing payment.');
                        $btn.prop('disabled', false).html(origHtml);
                        return;
                    }

                    const orderData = resp.data;

                    // If mock/simulation or real Razorpay
                    if (orderData.is_mock) {
                        // Demo sandbox simulation
                        const confirmSim = confirm(
                            `[SANDBOX SIMULATION MODE]\n\nSimulate successful payment for ₹${amount} to ${config.ngo_name}?\n\n(Click OK to verify and generate an instant 80G receipt).`
                        );

                        if (confirmSim) {
                            verifyPayment({
                                razorpay_order_id: orderData.order_id,
                                razorpay_payment_id: 'pay_sim_' + Math.random().toString(36).substring(2, 12),
                                razorpay_signature: 'sig_mock_verified',
                                is_mock: 1,
                                amount: amount,
                                name: name,
                                email: email,
                                phone: phone,
                                pan: pan,
                                address: address,
                                initiative: initiative,
                                claim_80g: claim80g,
                            }, $btn, origHtml);
                        } else {
                            $btn.prop('disabled', false).html(origHtml);
                        }
                    } else {
                        // Live Razorpay Checkout Modal
                        const options = {
                            key: config.key_id,
                            amount: orderData.amount,
                            currency: orderData.currency || 'INR',
                            name: config.ngo_name,
                            description: 'Charitable Donation - ' + initiative,
                            order_id: orderData.order_id,
                            prefill: {
                                name: name,
                                email: email,
                                contact: phone,
                            },
                            theme: {
                                color: config.theme_color || '#e67e22',
                            },
                            handler: function(response) {
                                verifyPayment({
                                    razorpay_order_id: response.razorpay_order_id,
                                    razorpay_payment_id: response.razorpay_payment_id,
                                    razorpay_signature: response.razorpay_signature,
                                    amount: amount,
                                    name: name,
                                    email: email,
                                    phone: phone,
                                    pan: pan,
                                    address: address,
                                    initiative: initiative,
                                    claim_80g: claim80g,
                                }, $btn, origHtml);
                            },
                            modal: {
                                ondismiss: function() {
                                    $btn.prop('disabled', false).html(origHtml);
                                }
                            }
                        };

                        const rzp = new Razorpay(options);
                        rzp.open();
                    }
                },
                error: function() {
                    alert('Server error connecting to payment gateway.');
                    $btn.prop('disabled', false).html(origHtml);
                }
            });
        });

        // Step 2: Verify & Generate Receipt
        function verifyPayment(paymentPayload, $btn, origHtml) {
            $btn.html('<span class="spinner-border spinner-border-sm me-2"></span> Generating 80G Certificate...');

            $.ajax({
                url: config.ajax_url,
                type: 'POST',
                data: $.extend({
                    action: 'swapnapuron_verify_payment',
                    nonce: config.nonce,
                }, paymentPayload),
                success: function(resp) {
                    $btn.prop('disabled', false).html(origHtml);

                    if (resp.success) {
                        $('#swapnapuron-receipt-body').html(resp.data.receipt_html);
                        $('#swapnapuron-receipt-modal').fadeIn(300);

                        // Reset form fields
                        $('#donor_name, #donor_email, #donor_phone, #donor_pan, #donor_address').val('');
                    } else {
                        alert(resp.data?.message || 'Payment recorded with warnings. Please contact society office.');
                    }
                },
                error: function() {
                    alert('Error finalizing certificate generation.');
                    $btn.prop('disabled', false).html(origHtml);
                }
            });
        }
    });
})(jQuery);
