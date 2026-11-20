<?php
/**
 * Template Name: Donation Hub
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$phone1   = swapnapuron_opt('swapnapuron_phone_1', '+91 83360 66390');
$pan      = swapnapuron_opt('swapnapuron_pan', 'AAAAI9694K');
$urn_80g  = swapnapuron_opt('swapnapuron_80g_urn', 'AAAAI9694KF20251');
$urn_12a  = swapnapuron_opt('swapnapuron_12a_urn', 'AAAAI9694KE20216');
$reg_no   = swapnapuron_opt('swapnapuron_reg_no', 'S0011507 of 2019-2020');

$bank_name = swapnapuron_opt('swapnapuron_bank_name', 'Punjab National Bank (PNB)');
$ac_name   = swapnapuron_opt('swapnapuron_account_name', 'SWAPNAPURON SOCIETY');
$ac_no     = swapnapuron_opt('swapnapuron_account_no', '2101002100009707');
$ifsc      = swapnapuron_opt('swapnapuron_ifsc', 'PUNB0210100');
$branch    = swapnapuron_opt('swapnapuron_branch', 'Ichapur Branch, West Bengal');
$upi_id    = swapnapuron_opt('swapnapuron_upi_id', 'ichaporeswapnapuronsociety@pnb');
?>

  <!-- PAGE HEADER -->
  <section class="page-header" style="background: linear-gradient(135deg, #241412 0%, #101416 100%);">
    <div class="page-header-glow" style="background: rgba(220, 62, 38, 0.4);"></div>
    <div class="container position-relative">
      <div class="breadcrumb-editorial mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php esc_html_e('Support Our Cause', 'ichapore-swapnapuron'); ?></span> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-white-50"><?php esc_html_e('Donate Now', 'ichapore-swapnapuron'); ?></span>
      </div>
      <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
        <span class="pulse-dot"></span>
        <span class="text-uppercase fw-bold text-white small" style="letter-spacing:0.08em;"><?php esc_html_e('80G Certified Non-Profit &bull; 50% Tax Exemption', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-4 fw-extrabold text-uppercase tracking-tight text-white mb-2"><?php esc_html_e('FUEL REAL FIELD TRANSFORMATION', 'ichapore-swapnapuron'); ?></h1>
      <h2 class="h4 fw-medium text-warning mb-3"><?php esc_html_e('Your kindness brings education, hot food, medical camps, and animal safety to Bengal', 'ichapore-swapnapuron'); ?></h2>
      <p class="lead text-light opacity-90 mb-4" style="max-width: 760px; font-weight: 400;">
        <?php esc_html_e('Every rupee donated goes directly to grassroots operations: free textbooks for street children, thalassemia screening, emergency food delivery to stations, and life-saving reflective collars for street animals.', 'ichapore-swapnapuron'); ?>
      </p>

      <div class="d-flex flex-wrap gap-2 gap-sm-3 text-light small fw-semibold pt-1">
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">verified</span>
          <span>50% Tax Deduction (80G)</span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">qr_code_scanner</span>
          <span>Instant UPI &amp; Net Banking</span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">volunteer_activism</span>
          <span>100% Volunteer Field Driven</span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">receipt_long</span>
          <span>Immediate Digital Receipt</span>
        </span>
      </div>
    </div>
  </section>

  <!-- MAIN DONATION HUB -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4 g-lg-5">

        <!-- LEFT: INTERACTIVE DONATION CALCULATOR & FORM -->
        <div class="col-lg-7">
          <div class="donation-card p-4 p-md-5">

            <!-- Native Form with Dynamic Coordinates -->
              <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 pb-4 mb-4 border-bottom border-sand-300">
                <div class="d-inline-flex p-1 bg-light rounded-pill border border-sand-300">
                  <button type="button" class="btn btn-sm rounded-pill px-4 py-2 fw-bold active text-uppercase" id="freq-once" onclick="setFreq('once')" style="font-size:0.75rem; letter-spacing:0.04em;"><?php esc_html_e('One-Time Gift', 'ichapore-swapnapuron'); ?></button>
                  <button type="button" class="btn btn-sm rounded-pill px-4 py-2 fw-bold text-uppercase text-secondary" id="freq-monthly" onclick="setFreq('monthly')" style="font-size:0.75rem; letter-spacing:0.04em;"><?php esc_html_e('Monthly Sustainer', 'ichapore-swapnapuron'); ?></button>
                </div>
                <div class="d-flex align-items-center gap-1 text-moss small fw-bold">
                  <span class="material-symbols-outlined fs-5">shield</span>
                  <span><?php esc_html_e('PAN & 80G Certified', 'ichapore-swapnapuron'); ?></span>
                </div>
              </div>

              <!-- Choose Cause Dropdown -->
              <div class="mb-4">
                <label class="form-label text-uppercase fw-bold small text-secondary d-flex align-items-center justify-content-between">
                  <span><?php esc_html_e('Select Initiative', 'ichapore-swapnapuron'); ?></span>
                  <span class="text-muted fw-normal" style="font-size:0.72rem;"><?php esc_html_e('Optional designation', 'ichapore-swapnapuron'); ?></span>
                </label>
                <select class="form-select form-select-lg" id="causeSelect" onchange="handleCauseChange(this.value)">
                  <option value="general" selected><?php esc_html_e('Where Most Needed (General Frontline Fund)', 'ichapore-swapnapuron'); ?></option>
                  <?php
                  $proj_options = get_posts(array('post_type' => 'project', 'posts_per_page' => 20));
                  foreach ($proj_options as $po) {
                      echo '<option value="' . esc_attr($po->post_name) . '">' . esc_html($po->post_title) . '</option>';
                  }
                  ?>
                </select>
              </div>

              <!-- Amount Selection Tiles -->
              <div class="mb-4">
                <label class="form-label text-uppercase fw-bold small text-secondary d-flex align-items-center justify-content-between">
                  <span><?php esc_html_e('Choose Contribution Tier', 'ichapore-swapnapuron'); ?></span>
                  <span class="text-terracotta fw-bold small" id="sustainerBadge"><?php esc_html_e('One-time payment', 'ichapore-swapnapuron'); ?></span>
                </label>

                <div class="row g-2 g-sm-3 mb-3">
                  <div class="col-6 col-sm-3">
                    <div class="tier-tile active" id="tile-500" onclick="selectTier(500, this)">
                      <span class="d-block small text-muted text-uppercase fw-semibold" style="font-size:0.65rem;">Primary</span>
                      <strong class="d-block fs-4 fw-extrabold tier-amount my-1">₹500</strong>
                      <span class="badge rounded-pill bg-sand-200 text-dark fw-normal" style="font-size:0.68rem;">1 Child Kit</span>
                    </div>
                  </div>

                  <div class="col-6 col-sm-3">
                    <div class="tier-tile" id="tile-1000" onclick="selectTier(1000, this)">
                      <span class="d-block small text-muted text-uppercase fw-semibold" style="font-size:0.65rem;">Support</span>
                      <strong class="d-block fs-4 fw-extrabold tier-amount my-1">₹1,000</strong>
                      <span class="badge rounded-pill bg-sand-200 text-dark fw-normal" style="font-size:0.68rem;">2 Students</span>
                    </div>
                  </div>

                  <div class="col-6 col-sm-3">
                    <div class="tier-tile" id="tile-2500" onclick="selectTier(2500, this)">
                      <span class="d-block small text-muted text-uppercase fw-semibold" style="font-size:0.65rem;">Popular</span>
                      <strong class="d-block fs-4 fw-extrabold tier-amount my-1">₹2,500</strong>
                      <span class="badge rounded-pill bg-terracotta bg-opacity-15 text-terracotta fw-bold" style="font-size:0.68rem;">Health Care</span>
                    </div>
                  </div>

                  <div class="col-6 col-sm-3">
                    <div class="tier-tile" id="tile-5000" onclick="selectTier(5000, this)">
                      <span class="d-block small text-muted text-uppercase fw-semibold" style="font-size:0.65rem;">Impact</span>
                      <strong class="d-block fs-4 fw-extrabold tier-amount my-1">₹5,000</strong>
                      <span class="badge rounded-pill bg-sand-200 text-dark fw-normal" style="font-size:0.68rem;">Full Camp</span>
                    </div>
                  </div>
                </div>

                <!-- Custom Amount Input -->
                <div class="input-group input-group-lg">
                  <span class="input-group-text bg-sand-100 border-sand-300 fw-extrabold text-charcoal">₹</span>
                  <input type="number" id="customInput" min="100" class="form-control" placeholder="<?php esc_attr_e('Or enter custom amount in INR', 'ichapore-swapnapuron'); ?>" oninput="handleCustomTier(this.value)">
                </div>
              </div>

              <!-- Dynamic Field Impact Box -->
              <div class="p-3.5 p-sm-4 rounded-4 bg-sand-soft border border-sand-300 d-flex align-items-start gap-3 mb-4">
                <div class="p-2.5 rounded-circle bg-white text-terracotta shadow-sm flex-shrink-0">
                  <span class="material-symbols-outlined fs-3" id="impactIcon">volunteer_activism</span>
                </div>
                <div>
                  <span class="d-block text-uppercase fw-bold text-terracotta small mb-1" style="letter-spacing:0.06em;"><?php esc_html_e('Your Direct Field Impact:', 'ichapore-swapnapuron'); ?></span>
                  <p class="small mb-0 text-dark lh-base" id="tierDesc">
                    <strong>₹500</strong> provides 1 street child with a sturdy waterproof school bag, 6 notebooks, geometry kit, and pencils for a full school term.
                  </p>
                </div>
              </div>

              <!-- Donor Details Form -->
              <form id="donationForm" onsubmit="handleDonationSubmit(event)">
                <h3 class="h6 fw-bold text-uppercase text-secondary mb-3" style="letter-spacing:0.06em;"><?php esc_html_e('Donor Details (For 80G Tax Receipt)', 'ichapore-swapnapuron'); ?></h3>
                <div class="row g-3 mb-4">
                  <div class="col-sm-6">
                    <label class="form-label small fw-bold text-secondary mb-1"><?php esc_html_e('Full Legal Name *', 'ichapore-swapnapuron'); ?></label>
                    <input type="text" class="form-control" placeholder="Name as per PAN card" required id="donorName">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label small fw-bold text-secondary mb-1"><?php esc_html_e('Email Address *', 'ichapore-swapnapuron'); ?></label>
                    <input type="email" class="form-control" placeholder="For immediate 80G receipt PDF" required id="donorEmail">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label small fw-bold text-secondary mb-1"><?php esc_html_e('Phone Number (WhatsApp) *', 'ichapore-swapnapuron'); ?></label>
                    <input type="tel" class="form-control" placeholder="+91 98000 00000" required id="donorPhone">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label small fw-bold text-secondary mb-1"><?php esc_html_e('PAN Card Number', 'ichapore-swapnapuron'); ?></label>
                    <input type="text" class="form-control text-uppercase" placeholder="Mandatory for 80G tax benefit" maxlength="10" id="donorPan">
                  </div>
                  <div class="col-12">
                    <label class="form-label small fw-bold text-secondary mb-1"><?php esc_html_e('Postal Address & PIN Code', 'ichapore-swapnapuron'); ?></label>
                    <input type="text" class="form-control" placeholder="House / Street, City, State, PIN Code" id="donorAddress">
                  </div>
                </div>

                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-terracotta rounded-pill py-3 fw-bold text-uppercase d-flex align-items-center justify-content-center gap-2 shadow">
                    <span class="material-symbols-outlined fs-5">lock</span>
                    <span id="submitBtnText"><?php esc_html_e('Complete ₹500 Contribution', 'ichapore-swapnapuron'); ?></span>
                    <span class="material-symbols-outlined fs-6">arrow_forward</span>
                  </button>
                </div>

                <!-- Success Alert -->
                <div id="donorNotice" class="alert alert-success mt-4 mb-0 rounded-4 border-success d-none" role="alert">
                  <div class="d-flex align-items-start gap-3">
                    <span class="material-symbols-outlined text-success fs-2 flex-shrink-0">check_circle</span>
                    <div>
                      <h4 class="h6 fw-bold mb-1"><?php esc_html_e('Thank you for your generous pledge!', 'ichapore-swapnapuron'); ?></h4>
                      <p class="small mb-2">
                        <?php esc_html_e('Please transfer the pledged amount of', 'ichapore-swapnapuron'); ?> <strong id="pledgedAmount">₹500</strong> <?php esc_html_e('using our official UPI QR code or PNB Bank Account on the right.', 'ichapore-swapnapuron'); ?>
                      </p>
                      <p class="small mb-0 text-muted">
                        <?php esc_html_e('Once transferred, email or WhatsApp your transaction reference to', 'ichapore-swapnapuron'); ?> <strong><?php echo esc_html($phone1); ?></strong> / <strong><?php echo esc_html(swapnapuron_opt('swapnapuron_email')); ?></strong>. <?php esc_html_e('Your 80G Tax Exemption Certificate will be dispatched within 24 hours.', 'ichapore-swapnapuron'); ?>
                      </p>
                    </div>
                  </div>
                </div>
              </form>

          </div>
        </div>

        <!-- RIGHT: BANK COORDINATES, UPI QR CODE & 80G VERIFICATION -->
        <div class="col-lg-5">

          <!-- CARD 1: INSTANT UPI SCAN & PAY -->
          <div class="p-4 p-sm-5 rounded-4 bg-white border border-sand-300 shadow-sm mb-4 text-center">
            <div class="d-inline-flex align-items-center gap-2 text-terracotta fw-bold text-uppercase small mb-2">
              <span class="material-symbols-outlined fs-5">qr_code_scanner</span>
              <span><?php esc_html_e('Instant UPI Payment', 'ichapore-swapnapuron'); ?></span>
            </div>
            <h3 class="h5 fw-extrabold text-charcoal mb-3"><?php esc_html_e('Scan with Any UPI App', 'ichapore-swapnapuron'); ?></h3>

            <!-- QR Box -->
            <div class="qr-box mb-3">
              <div class="p-3 bg-white rounded-3 shadow-inner">
                <!-- Clean Inline Vector UPI QR Code -->
                <svg width="180" height="180" viewBox="0 0 180 180" fill="none" xmlns="http://www.w3.org/2000/svg" class="img-fluid">
                  <rect width="180" height="180" fill="white"/>
                  <rect x="10" y="10" width="46" height="46" rx="4" fill="#12181b"/>
                  <rect x="16" y="16" width="34" height="34" rx="2" fill="white"/>
                  <rect x="22" y="22" width="22" height="22" rx="2" fill="#dc3e26"/>
                  <rect x="124" y="10" width="46" height="46" rx="4" fill="#12181b"/>
                  <rect x="130" y="16" width="34" height="34" rx="2" fill="white"/>
                  <rect x="136" y="22" width="22" height="22" rx="2" fill="#dc3e26"/>
                  <rect x="10" y="124" width="46" height="46" rx="4" fill="#12181b"/>
                  <rect x="16" y="130" width="34" height="34" rx="2" fill="white"/>
                  <rect x="22" y="136" width="22" height="22" rx="2" fill="#dc3e26"/>
                  <rect x="66" y="14" width="10" height="10" rx="2" fill="#12181b"/>
                  <rect x="84" y="14" width="10" height="10" rx="2" fill="#12181b"/>
                  <rect x="102" y="14" width="10" height="10" rx="2" fill="#12181b"/>
                  <rect x="66" y="32" width="10" height="10" rx="2" fill="#12181b"/>
                  <rect x="94" y="32" width="16" height="10" rx="2" fill="#12181b"/>
                  <rect x="66" y="50" width="16" height="10" rx="2" fill="#12181b"/>
                  <rect x="90" y="50" width="10" height="10" rx="2" fill="#12181b"/>
                  <rect x="108" y="50" width="10" height="10" rx="2" fill="#12181b"/>
                  <rect x="14" y="66" width="10" height="10" rx="2" fill="#12181b"/>
                  <rect x="32" y="66" width="10" height="10" rx="2" fill="#12181b"/>
                  <rect x="50" y="66" width="10" height="10" rx="2" fill="#12181b"/>
                  <rect x="68" y="68" width="44" height="44" rx="6" fill="#12181b"/>
                  <rect x="74" y="74" width="32" height="32" rx="4" fill="white"/>
                  <path d="M90 95 C82 89, 78 84, 78 80 C78 77, 80 75, 83 75 C85 75, 88 77, 90 79 C92 77, 95 75, 97 75 C100 75, 102 77, 102 80 C102 84, 98 89, 90 95 Z" fill="#dc3e26"/>
                  <rect x="124" y="66" width="16" height="10" rx="2" fill="#12181b"/>
                  <rect x="148" y="66" width="10" height="10" rx="2" fill="#12181b"/>
                  <rect x="14" y="84" width="16" height="10" rx="2" fill="#12181b"/>
                  <rect x="38" y="84" width="10" height="10" rx="2" fill="#12181b"/>
                  <rect x="132" y="84" width="10" height="10" rx="2" fill="#12181b"/>
                  <rect x="150" y="84" width="16" height="10" rx="2" fill="#12181b"/>
                  <rect x="14" y="102" width="10" height="10" rx="2" fill="#12181b"/>
                  <rect x="32" y="102" width="16" height="10" rx="2" fill="#12181b"/>
                  <rect x="124" y="102" width="10" height="10" rx="2" fill="#12181b"/>
                  <rect x="142" y="102" width="16" height="10" rx="2" fill="#12181b"/>
                  <rect x="66" y="124" width="10" height="16" rx="2" fill="#12181b"/>
                  <rect x="84" y="124" width="16" height="10" rx="2" fill="#12181b"/>
                  <rect x="108" y="124" width="10" height="16" rx="2" fill="#12181b"/>
                  <rect x="126" y="124" width="16" height="10" rx="2" fill="#12181b"/>
                  <rect x="150" y="124" width="10" height="16" rx="2" fill="#12181b"/>
                  <rect x="66" y="148" width="16" height="10" rx="2" fill="#12181b"/>
                  <rect x="90" y="148" width="10" height="10" rx="2" fill="#12181b"/>
                  <rect x="108" y="148" width="16" height="10" rx="2" fill="#12181b"/>
                  <rect x="132" y="148" width="10" height="10" rx="2" fill="#12181b"/>
                </svg>
              </div>
            </div>

            <!-- UPI ID & Copy Button -->
            <div class="p-2.5 rounded-3 bg-sand-100 border border-sand-300 d-flex align-items-center justify-content-between gap-2 mb-3">
              <div class="text-start">
                <span class="d-block text-muted text-uppercase" style="font-size:0.65rem;">Official UPI VPA:</span>
                <strong class="font-monospace text-charcoal small" id="upiIdText"><?php echo esc_html($upi_id); ?></strong>
              </div>
              <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-2.5 py-1 text-nowrap d-inline-flex align-items-center gap-1" onclick="copyText('<?php echo esc_js($upi_id); ?>', this)">
                <span class="material-symbols-outlined fs-6">content_copy</span>
                <span class="btn-copy-label"><?php esc_html_e('Copy', 'ichapore-swapnapuron'); ?></span>
              </button>
            </div>

            <!-- Accepted UPI Apps -->
            <div class="d-flex align-items-center justify-content-center gap-3 text-muted small">
              <span class="fw-semibold">Google Pay</span> &bull;
              <span class="fw-semibold">PhonePe</span> &bull;
              <span class="fw-semibold">Paytm</span> &bull;
              <span class="fw-semibold">BHIM</span>
            </div>
          </div>

          <!-- CARD 2: OFFICIAL PNB BANK ACCOUNT -->
          <div class="p-4 p-sm-5 rounded-4 bg-charcoal text-white shadow-sm mb-4">
            <div class="d-flex align-items-center gap-2 text-warning mb-3">
              <span class="material-symbols-outlined fs-4">account_balance</span>
              <span class="fw-bold text-uppercase small" style="letter-spacing:0.08em;"><?php esc_html_e('Official Bank Wire (NEFT / RTGS / IMPS)', 'ichapore-swapnapuron'); ?></span>
            </div>

            <div class="d-flex flex-column gap-3 text-light opacity-90 border-top border-secondary border-opacity-25 pt-3">
              <div>
                <span class="text-white-50 small d-block"><?php esc_html_e('Account Name:', 'ichapore-swapnapuron'); ?></span>
                <strong class="text-white"><?php echo esc_html($ac_name); ?></strong>
              </div>

              <div>
                <div class="d-flex align-items-center justify-content-between gap-2">
                  <span class="text-white-50 small"><?php esc_html_e('Account Number:', 'ichapore-swapnapuron'); ?></span>
                  <button type="button" class="copy-badge-btn" onclick="copyText('<?php echo esc_js($ac_no); ?>', this)">
                    <span class="material-symbols-outlined fs-6 align-middle">content_copy</span> <?php esc_html_e('Copy', 'ichapore-swapnapuron'); ?>
                  </button>
                </div>
                <strong class="text-warning fs-5 font-monospace d-block mt-0.5"><?php echo esc_html($ac_no); ?></strong>
              </div>

              <div>
                <span class="text-white-50 small d-block"><?php esc_html_e('Bank & Branch:', 'ichapore-swapnapuron'); ?></span>
                <strong class="text-white"><?php echo esc_html($bank_name); ?></strong> &bull; <span class="text-white-50"><?php echo esc_html($branch); ?></span>
              </div>

              <div>
                <div class="d-flex align-items-center justify-content-between gap-2">
                  <span class="text-white-50 small"><?php esc_html_e('IFSC Code:', 'ichapore-swapnapuron'); ?></span>
                  <button type="button" class="copy-badge-btn" onclick="copyText('<?php echo esc_js($ifsc); ?>', this)">
                    <span class="material-symbols-outlined fs-6 align-middle">content_copy</span> <?php esc_html_e('Copy', 'ichapore-swapnapuron'); ?>
                  </button>
                </div>
                <strong class="text-white font-monospace fs-6"><?php echo esc_html($ifsc); ?></strong> <span class="text-white-50 small"><?php esc_html_e('(5th digit zero)', 'ichapore-swapnapuron'); ?></span>
              </div>
            </div>

            <div class="mt-4 pt-3 border-top border-secondary border-opacity-25 d-flex align-items-center gap-2 text-moss small">
              <span class="material-symbols-outlined fs-5">verified</span>
              <span><?php esc_html_e('100% Tax Deductible under Section 80G', 'ichapore-swapnapuron'); ?></span>
            </div>
          </div>

          <!-- CARD 3: STATUTORY COMPLIANCE & 80G CERTIFICATION -->
          <div class="p-4 rounded-4 bg-white border border-sand-300 shadow-sm">
            <h4 class="h6 fw-bold text-uppercase text-terracotta mb-2" style="letter-spacing:0.06em;"><?php esc_html_e('Statutory Credentials', 'ichapore-swapnapuron'); ?></h4>
            <p class="small text-secondary mb-3"><?php esc_html_e('Ichapore Swapnapuron Society is fully compliant with all Government of India non-profit mandates.', 'ichapore-swapnapuron'); ?></p>

            <ul class="list-unstyled small text-secondary d-flex flex-column gap-2 mb-0">
              <li class="d-flex justify-content-between pb-1 border-bottom border-sand-200">
                <span><?php esc_html_e('Society PAN:', 'ichapore-swapnapuron'); ?></span>
                <strong class="text-dark font-monospace"><?php echo esc_html($pan); ?></strong>
              </li>
              <li class="d-flex justify-content-between pb-1 border-bottom border-sand-200">
                <span><?php esc_html_e('80G Unique Reg (URN):', 'ichapore-swapnapuron'); ?></span>
                <strong class="text-dark font-monospace"><?php echo esc_html($urn_80g); ?></strong>
              </li>
              <li class="d-flex justify-content-between pb-1 border-bottom border-sand-200">
                <span><?php esc_html_e('12A Unique Reg (URN):', 'ichapore-swapnapuron'); ?></span>
                <strong class="text-dark font-monospace"><?php echo esc_html($urn_12a); ?></strong>
              </li>
              <li class="d-flex justify-content-between">
                <span><?php esc_html_e('State Registration No:', 'ichapore-swapnapuron'); ?></span>
                <strong class="text-dark"><?php echo esc_html($reg_no); ?></strong>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: TRANSPARENT FIELD IMPACT BREAKDOWN -->
  <section class="bg-sand-warm py-5 py-lg-6 border-top border-bottom border-sand-300">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 680px;">
        <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Clear Deliverables', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Where Does Your Contribution Go?', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('Every rupee is strictly tracked and converted into verified grassroots relief items for people and animals in need.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Impact Card 1 -->
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
            <div style="height: 170px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/vidharthi-education.jpg'); ?>" alt="Child with school bag" class="w-100 h-100 object-fit-cover" onerror="this.onerror=null; this.src='<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/hero-school.jpg'); ?>';">
            </div>
            <div class="p-4 bg-white d-flex flex-column justify-content-between flex-grow-1">
              <div>
                <span class="badge bg-success bg-opacity-10 text-success fw-bold text-uppercase px-2.5 py-1 mb-2" style="font-size:0.68rem;"><?php esc_html_e('Project Vidharthi', 'ichapore-swapnapuron'); ?></span>
                <h3 class="h6 fw-bold mb-2"><?php esc_html_e('School Backpacks & Books', 'ichapore-swapnapuron'); ?></h3>
                <p class="small text-secondary mb-0"><?php esc_html_e('₹500 provides a student with a waterproof bag, 6 notebooks, geometry tools, and pencils.', 'ichapore-swapnapuron'); ?></p>
              </div>
              <div class="mt-3 pt-3 border-top border-sand-200 text-muted" style="font-size:0.72rem;">
                <strong>850+</strong> <?php esc_html_e('students supported this year', 'ichapore-swapnapuron'); ?>
              </div>
            </div>
          </div>
        </div>

        <!-- Impact Card 2 -->
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
            <div style="height: 170px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/udaan-thalassemia.jpg'); ?>" alt="Thalassemia blood screening" class="w-100 h-100 object-fit-cover" onerror="this.onerror=null; this.src='<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/thalassemia-care.jpg'); ?>';">
            </div>
            <div class="p-4 bg-white d-flex flex-column justify-content-between flex-grow-1">
              <div>
                <span class="badge bg-primary bg-opacity-10 text-primary fw-bold text-uppercase px-2.5 py-1 mb-2" style="font-size:0.68rem;"><?php esc_html_e('Project Udaan', 'ichapore-swapnapuron'); ?></span>
                <h3 class="h6 fw-bold mb-2"><?php esc_html_e('Thalassemia Screening', 'ichapore-swapnapuron'); ?></h3>
                <p class="small text-secondary mb-0"><?php esc_html_e('₹1,000 covers HPLC certified carrier screening and genetic counseling for 2 youth.', 'ichapore-swapnapuron'); ?></p>
              </div>
              <div class="mt-3 pt-3 border-top border-sand-200 text-muted" style="font-size:0.72rem;">
                <strong>1,200+</strong> <?php esc_html_e('students screened', 'ichapore-swapnapuron'); ?>
              </div>
            </div>
          </div>
        </div>

        <!-- Impact Card 3 -->
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
            <div style="height: 170px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/anandadhara-food.jpg'); ?>" alt="Hot meals foil packaging" class="w-100 h-100 object-fit-cover" onerror="this.onerror=null; this.src='<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/tutoring-academy.jpg'); ?>';">
            </div>
            <div class="p-4 bg-white d-flex flex-column justify-content-between flex-grow-1">
              <div>
                <span class="badge bg-warning bg-opacity-25 text-dark fw-bold text-uppercase px-2.5 py-1 mb-2" style="font-size:0.68rem;"><?php esc_html_e('Anandadhara', 'ichapore-swapnapuron'); ?></span>
                <h3 class="h6 fw-bold mb-2"><?php esc_html_e('Midnight Food Relief', 'ichapore-swapnapuron'); ?></h3>
                <p class="small text-secondary mb-0"><?php esc_html_e('₹1,500 delivers 45 foil-packed hot meals to vagrants and pavement elders at stations.', 'ichapore-swapnapuron'); ?></p>
              </div>
              <div class="mt-3 pt-3 border-top border-sand-200 text-muted" style="font-size:0.72rem;">
                <strong>12,500+</strong> <?php esc_html_e('meals delivered', 'ichapore-swapnapuron'); ?>
              </div>
            </div>
          </div>
        </div>

        <!-- Impact Card 4 -->
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
            <div style="height: 170px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/Ayushman Bhav/ayusman-bhaban-01.avif'); ?>" alt="Street dog wearing reflective collar" class="w-100 h-100 object-fit-cover" onerror="this.onerror=null; this.src='<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/winter-relief.jpg'); ?>';">
            </div>
            <div class="p-4 bg-white d-flex flex-column justify-content-between flex-grow-1">
              <div>
                <span class="badge bg-danger bg-opacity-10 text-danger fw-bold text-uppercase px-2.5 py-1 mb-2" style="font-size:0.68rem;"><?php esc_html_e('Ayushman Bhava', 'ichapore-swapnapuron'); ?></span>
                <h3 class="h6 fw-bold mb-2"><?php esc_html_e('Street Animal Protection', 'ichapore-swapnapuron'); ?></h3>
                <p class="small text-secondary mb-0"><?php esc_html_e('₹500 fits 5 street dogs with high-visibility neon reflective collars preventing road crashes.', 'ichapore-swapnapuron'); ?></p>
              </div>
              <div class="mt-3 pt-3 border-top border-sand-200 text-muted" style="font-size:0.72rem;">
                <strong>600+</strong> <?php esc_html_e('collars fitted across highways', 'ichapore-swapnapuron'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: 3 PILLARS OF TRUST -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <span class="text-uppercase fw-bold text-moss d-block mb-1" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Our Commitment', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-0"><?php esc_html_e('Why You Can Trust Swapnapuron', 'ichapore-swapnapuron'); ?></h2>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="p-4 rounded-4 bg-white border border-sand-300 h-100 shadow-sm">
            <div class="feature-icon-wrap mb-3" style="background: #e8f3ec; color: #2f6d48;">
              <span class="material-symbols-outlined fs-2">savings</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('88%+ Direct Field Ratio', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('We keep administrative expenses strictly minimal. Our community programs are run by passionate volunteers so your funds reach beneficiaries directly.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="p-4 rounded-4 bg-white border border-sand-300 h-100 shadow-sm">
            <div class="feature-icon-wrap mb-3" style="background: #fdf4f2; color: #dc3e26;">
              <span class="material-symbols-outlined fs-2">verified_user</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Government 80G & 12A Certified', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('All contributions are 50% tax exempt under Section 80G of the Indian Income Tax Act. PAN & official URN receipts are issued promptly.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="p-4 rounded-4 bg-white border border-sand-300 h-100 shadow-sm">
            <div class="feature-icon-wrap mb-3" style="background: #eef3ff; color: #1e5ab8;">
              <span class="material-symbols-outlined fs-2">menu_book</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Audited & Fully Transparent', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Annual accounts are certified by external Chartered Accountants and open to community scrutiny. Donors receive transparent project photo reports.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: FREQUENTLY ASKED QUESTIONS -->
  <section class="bg-sand-warm py-5 border-top border-sand-300">
    <div class="container" style="max-width: 860px;">
      <div class="text-center mx-auto mb-5">
        <span class="text-uppercase fw-bold text-terracotta d-block mb-1" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Clear Answers', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-0"><?php esc_html_e('Donor Frequently Asked Questions', 'ichapore-swapnapuron'); ?></h2>
      </div>

      <div class="accordion accordion-editorial" id="donorFaq">
        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading1">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
              <?php esc_html_e('How will I receive my 80G tax exemption certificate?', 'ichapore-swapnapuron'); ?>
            </button>
          </h2>
          <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#donorFaq">
            <div class="accordion-body text-secondary small lh-base">
              <?php esc_html_e('As soon as your donation is completed, our finance desk generates an official digitally signed 80G receipt bearing our URN (AAAAI9694KF20251) and your PAN card number. It is emailed directly to your inbox within 24 to 48 hours and can be used to claim a 50% tax deduction when filing your ITR.', 'ichapore-swapnapuron'); ?>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading2">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
              <?php esc_html_e('Can I sponsor meals, school kits, or bird nests on a birthday or memorial?', 'ichapore-swapnapuron'); ?>
            </button>
          </h2>
          <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#donorFaq">
            <div class="accordion-body text-secondary small lh-base">
              <?php esc_html_e('Yes! Many supporters celebrate birthdays, anniversaries, or honor parents by sponsoring special food distributions under Anandadhara or student kits under Vidharthi. Mention your dedication note in the donor form or call our team at +91 83360 66390, and we will send you photos of the special distribution.', 'ichapore-swapnapuron'); ?>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading3">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
              <?php esc_html_e('Can I donate physical materials (used clothes, storybooks, grains) instead of money?', 'ichapore-swapnapuron'); ?>
            </button>
          </h2>
          <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#donorFaq">
            <div class="accordion-body text-secondary small lh-base">
              <?php esc_html_e('Absolutely. We gladly accept clean warm sweaters and blankets for Smile with Santa, children\'s storybooks for Vidharthi, and surplus banquet food for Anandadhara. Please drop them at our society office: 41 Jatin Das Road, Ichapore Majher Para, or contact us for local pickup.', 'ichapore-swapnapuron'); ?>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="faqHeading4">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
              <?php esc_html_e('Is it safe to pay via UPI or direct bank transfer?', 'ichapore-swapnapuron'); ?>
            </button>
          </h2>
          <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#donorFaq">
            <div class="accordion-body text-secondary small lh-base">
              <?php esc_html_e('Yes, 100%. Our Punjab National Bank account (A/c No: 2101002100009707) is the official statutory account of SWAPNAPURON SOCIETY. We never route donations through private or personal third-party accounts.', 'ichapore-swapnapuron'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRE-FOOTER BANNER -->
  <section class="py-5">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Direct Dialogue', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Have Questions Before Donating?', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('Our volunteer trustees are always available to speak with you about our project budgets, field locations, and impact audit reports.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone1)); ?>" class="btn btn-terracotta rounded-pill px-5 py-3 d-inline-flex align-items-center gap-2 shadow text-white">
            <span class="material-symbols-outlined fs-6">call</span>
            <span><?php printf(esc_html__('Call Trustees (%s)', 'ichapore-swapnapuron'), esc_html($phone1)); ?></span>
          </a>
          <a href="https://wa.me/918336066390?text=Hello%20Swapnapuron%20Society,%20I%20want%20to%20support%20your%20initiatives" target="_blank" rel="noopener" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2" style="font-size:0.78rem; letter-spacing:0.06em;">
            <span class="material-symbols-outlined fs-6 text-success">chat</span>
            <span><?php esc_html_e('Chat on WhatsApp', 'ichapore-swapnapuron'); ?></span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- TOAST NOTIFICATION CONTAINER -->
  <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 1100">
    <div id="copyToast" class="toast align-items-center text-bg-dark border-0 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body d-flex align-items-center gap-2">
          <span class="material-symbols-outlined text-success">check_circle</span>
          <span id="toastMsg"><?php esc_html_e('Copied to clipboard!', 'ichapore-swapnapuron'); ?></span>
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>

  <script>
    let currentAmount = 500;
    let currentFreq = 'once';

    const impactDescriptions = {
      500: "<strong>₹500</strong> supplies 1 street child with a sturdy waterproof school bag, 6 notebooks, geometry kit, and pencils under Vidharthi, OR provides 15 hot foil meals under Anandadhara.",
      1000: "<strong>₹1,000</strong> covers certified HPLC Thalassemia carrier blood testing for 2 students under Project Udaan, OR installs 10 earthen nesting handis under Project Ashiana.",
      2500: "<strong>₹2,500</strong> funds doctor OPD consultation and essential medicines (iron syrups, antibiotics, vitals checks) for 20 slum mothers and elders under Swasthya Chakra.",
      5000: "<strong>₹5,000</strong> sponsors an entire mobile slum diagnostic camp with free ECG/glucose checks, OR provides 10 children with winter sweaters and gift hampers under Smile with Santa."
    };

    function selectTier(amt, el) {
      currentAmount = amt;
      document.querySelectorAll('.tier-tile').forEach(tile => tile.classList.remove('active'));
      if (el) el.classList.add('active');
      const input = document.getElementById('customInput');
      if (input) input.value = '';

      updateImpactDisplay();
      updateButtonText();
    }

    function handleCustomTier(val) {
      const amt = parseInt(val, 10);
      if (!amt || amt <= 0) return;
      currentAmount = amt;
      document.querySelectorAll('.tier-tile').forEach(tile => tile.classList.remove('active'));

      const desc = document.getElementById('tierDesc');
      const icon = document.getElementById('impactIcon');
      if (icon) icon.textContent = 'volunteer_activism';
      if (desc) {
        desc.innerHTML = `<strong>₹${amt.toLocaleString('en-IN')}</strong> will be directly routed to our frontline emergency relief: primary learning kits, thalassemia carrier screening, and warm meals.`;
      }
      updateButtonText();
    }

    function updateImpactDisplay() {
      const desc = document.getElementById('tierDesc');
      if (impactDescriptions[currentAmount] && desc) {
        desc.innerHTML = impactDescriptions[currentAmount];
      }
    }

    function updateButtonText() {
      const btnText = document.getElementById('submitBtnText');
      if (btnText) {
        const freqLabel = currentFreq === 'monthly' ? '/ month' : '';
        btnText.textContent = `Complete ₹${currentAmount.toLocaleString('en-IN')} Contribution ${freqLabel}`;
      }
    }

    function setFreq(type) {
      currentFreq = type;
      document.getElementById('freq-once').classList.toggle('active', type === 'once');
      document.getElementById('freq-monthly').classList.toggle('active', type === 'monthly');

      const badge = document.getElementById('sustainerBadge');
      if (badge) {
        badge.textContent = type === 'monthly' ? 'Monthly auto-pledge' : 'One-time payment';
      }
      updateButtonText();
    }

    function handleDonationSubmit(e) {
      e.preventDefault();
      const pledgedSpan = document.getElementById('pledgedAmount');
      if (pledgedSpan) {
        const freqLabel = currentFreq === 'monthly' ? ' (Monthly)' : '';
        pledgedSpan.textContent = `₹${currentAmount.toLocaleString('en-IN')}${freqLabel}`;
      }
      const notice = document.getElementById('donorNotice');
      if (notice) {
        notice.classList.remove('d-none');
        notice.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      }
    }

    function copyText(text, btn) {
      navigator.clipboard.writeText(text).then(() => {
        const toastEl = document.getElementById('copyToast');
        const toastMsg = document.getElementById('toastMsg');
        if (toastMsg) toastMsg.textContent = `Copied "${text}" to clipboard!`;
        if (toastEl) {
          const toast = new bootstrap.Toast(toastEl, { delay: 2500 });
          toast.show();
        }

        const label = btn.querySelector('.btn-copy-label');
        if (label) {
          const original = label.textContent;
          label.textContent = 'Copied!';
          setTimeout(() => { label.textContent = original; }, 2000);
        }
      }).catch(err => {
        alert('Copied: ' + text);
      });
    }
    document.addEventListener('DOMContentLoaded', function() {
      const urlParams = new URLSearchParams(window.location.search);
      const urlAmt = parseInt(urlParams.get('amount'), 10);
      const urlFreq = urlParams.get('freq');

      if (urlFreq === 'monthly' || urlFreq === 'once') {
        setFreq(urlFreq);
      }

      if (urlAmt) {
        let matched = false;
        document.querySelectorAll('.tier-tile').forEach(tile => {
          if (tile.getAttribute('onclick') && tile.getAttribute('onclick').includes(urlAmt.toString())) {
            selectTier(urlAmt, tile);
            matched = true;
          }
        });
        if (!matched) {
          const input = document.getElementById('customInput');
          if (input) {
            input.value = urlAmt;
            handleCustomTier(urlAmt);
          }
        }
      }
    });
  </script>

<?php
get_footer();
