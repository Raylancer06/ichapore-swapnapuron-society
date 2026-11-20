<?php
/**
 * Template Name: Contact Us
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$phone1  = swapnapuron_opt('swapnapuron_phone_1', '+91 83360 66390');
$phone2  = swapnapuron_opt('swapnapuron_phone_2', '+91 89183 97307');
$email   = swapnapuron_opt('swapnapuron_email', 'ichaporeswapnapuronsociety@gmail.com');
$address = swapnapuron_opt('swapnapuron_address', '41 Jatin Das Road, Ichapore Majher Para, North 24 Parganas, West Bengal - 743144');
?>

  <!-- PAGE HEADER -->
  <section class="page-header" style="background: linear-gradient(135deg, #121c24 0%, #0b1012 100%);">
    <div class="page-header-glow" style="background: rgba(30, 90, 184, 0.35);"></div>
    <div class="container position-relative">
      <div class="breadcrumb-editorial mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php esc_html_e('Contact Us', 'ichapore-swapnapuron'); ?></span>
      </div>
      <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
        <span class="pulse-dot"></span>
        <span class="text-uppercase fw-bold text-white small" style="letter-spacing:0.08em;"><?php esc_html_e('Open Mon - Sat: 9:00 AM - 6:00 PM', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-4 fw-extrabold text-uppercase tracking-tight text-white mb-3"><?php esc_html_e('We Are Here To Help & Connect', 'ichapore-swapnapuron'); ?></h1>
      <p class="lead text-light opacity-90 mb-4" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('Have a question about volunteering, donations, CSR collaborations, or field medical camps? We would love to hear from you.', 'ichapore-swapnapuron'); ?>
      </p>

      <div class="d-flex flex-wrap gap-3">
        <a href="#messageForm" class="btn btn-terracotta rounded-pill px-4 py-2.5 d-inline-flex align-items-center gap-2 shadow">
          <span><?php esc_html_e('Send A Message', 'ichapore-swapnapuron'); ?></span>
          <span class="material-symbols-outlined fs-6">mail</span>
        </a>
        <a href="https://wa.me/918336066390" target="_blank" rel="noopener" class="btn btn-success rounded-pill px-4 py-2.5 d-inline-flex align-items-center gap-2 shadow" style="background-color: #25d366; border-color: #25d366;">
          <span><?php esc_html_e('Chat on WhatsApp', 'ichapore-swapnapuron'); ?></span>
          <span class="material-symbols-outlined fs-6">chat</span>
        </a>
      </div>
    </div>
  </section>

  <!-- CONTACT DETAILS & FORM -->
  <section class="py-5 py-lg-6" id="messageForm">
    <div class="container">
      <div class="row g-4 g-lg-5">
        <!-- Contact Cards Column -->
        <div class="col-lg-5">
          <div class="d-inline-flex align-items-center gap-2 text-terracotta fw-bold text-uppercase mb-2" style="font-size:0.75rem; letter-spacing:0.1em;">
            <span class="material-symbols-outlined fs-6">contact_phone</span>
            <span><?php esc_html_e('Get In Touch', 'ichapore-swapnapuron'); ?></span>
          </div>
          <h2 class="display-6 fw-extrabold mb-4"><?php esc_html_e('Our Contact Coordinates', 'ichapore-swapnapuron'); ?></h2>

          <div class="space-y-3 d-flex flex-column gap-3 mb-4">
            <!-- Address Card -->
            <div class="p-3 p-sm-4 rounded-4 bg-white border border-sand-300 shadow-sm d-flex gap-3 align-items-start">
              <div class="feature-icon-wrap flex-shrink-0 mb-0" style="background: var(--terracotta-100); color: var(--terracotta-600); width:46px; height:46px;">
                <span class="material-symbols-outlined fs-5">location_on</span>
              </div>
              <div>
                <h3 class="h6 fw-bold mb-1"><?php esc_html_e('Our Address', 'ichapore-swapnapuron'); ?></h3>
                <p class="text-secondary small mb-0 lh-base">
                  <?php echo nl2br(esc_html($address)); ?>
                </p>
              </div>
            </div>

            <!-- Phone Card -->
            <div class="p-3 p-sm-4 rounded-4 bg-white border border-sand-300 shadow-sm d-flex gap-3 align-items-start">
              <div class="feature-icon-wrap flex-shrink-0 mb-0" style="background: var(--moss-100); color: var(--moss-600); width:46px; height:46px;">
                <span class="material-symbols-outlined fs-5">call</span>
              </div>
              <div>
                <h3 class="h6 fw-bold mb-1"><?php esc_html_e('Call Us', 'ichapore-swapnapuron'); ?></h3>
                <div class="d-flex flex-column gap-1">
                  <a href="<?php echo esc_url('tel:' . preg_replace('/[^\d+]/', '', $phone1)); ?>" class="text-decoration-none text-dark fw-bold small"><?php echo esc_html($phone1); ?></a>
                  <a href="<?php echo esc_url('tel:' . preg_replace('/[^\d+]/', '', $phone2)); ?>" class="text-decoration-none text-dark fw-bold small"><?php echo esc_html($phone2); ?></a>
                </div>
              </div>
            </div>

            <!-- Email Card -->
            <div class="p-3 p-sm-4 rounded-4 bg-white border border-sand-300 shadow-sm d-flex gap-3 align-items-start">
              <div class="feature-icon-wrap flex-shrink-0 mb-0" style="background: #eef3ff; color: #1e5ab8; width:46px; height:46px;">
                <span class="material-symbols-outlined fs-5">mail</span>
              </div>
              <div>
                <h3 class="h6 fw-bold mb-1"><?php esc_html_e('Email Us', 'ichapore-swapnapuron'); ?></h3>
                <a href="<?php echo esc_url('mailto:' . $email); ?>" class="text-decoration-none text-dark small fw-semibold text-break">
                  <?php echo esc_html($email); ?>
                </a>
              </div>
            </div>

            <!-- Hours Card -->
            <div class="p-3 p-sm-4 rounded-4 bg-white border border-sand-300 shadow-sm d-flex gap-3 align-items-start">
              <div class="feature-icon-wrap flex-shrink-0 mb-0" style="background: #fff6eb; color: #c46800; width:46px; height:46px;">
                <span class="material-symbols-outlined fs-5">schedule</span>
              </div>
              <div>
                <h3 class="h6 fw-bold mb-1"><?php esc_html_e('Office Hours', 'ichapore-swapnapuron'); ?></h3>
                <p class="text-secondary small mb-0"><?php esc_html_e('Monday – Saturday: 9:00 AM – 6:00 PM', 'ichapore-swapnapuron'); ?><br><span class="text-danger fw-semibold"><?php esc_html_e('Sunday: Closed for field operations', 'ichapore-swapnapuron'); ?></span></p>
              </div>
            </div>

            <!-- WhatsApp Direct Card -->
            <div class="p-3 p-sm-4 rounded-4 bg-white border border-sand-300 shadow-sm d-flex gap-3 align-items-start">
              <div class="feature-icon-wrap flex-shrink-0 mb-0" style="background: #e9fbf0; color: #25d366; width:46px; height:46px;">
                <span class="material-symbols-outlined fs-5">chat</span>
              </div>
              <div>
                <h3 class="h6 fw-bold mb-1"><?php esc_html_e('WhatsApp Quick Support', 'ichapore-swapnapuron'); ?></h3>
                <p class="text-secondary small mb-2"><?php echo esc_html($phone1); ?> (<?php esc_html_e('Instant queries & volunteer coordination', 'ichapore-swapnapuron'); ?>)</p>
                <a href="https://wa.me/918336066390" target="_blank" rel="noopener" class="btn btn-sm btn-outline-success rounded-pill px-3 py-1 fw-bold" style="font-size:0.75rem;">
                  <?php esc_html_e('Open WhatsApp Chat →', 'ichapore-swapnapuron'); ?>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form Column -->
        <div class="col-lg-7">
          <div class="bg-white rounded-4 p-4 p-sm-5 border border-sand-300 shadow-sm">
            <h3 class="h4 fw-extrabold mb-1"><?php esc_html_e('Send Us a Direct Message', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-4"><?php esc_html_e('Please fill in the form below and our team will get back to you promptly.', 'ichapore-swapnapuron'); ?></p>

            <form onsubmit="handleContactPageSubmit(event)">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label small fw-bold text-secondary"><?php esc_html_e('First Name *', 'ichapore-swapnapuron'); ?></label>
                  <input type="text" class="form-control" placeholder="First name" required>
                </div>
                <div class="col-sm-6">
                  <label class="form-label small fw-bold text-secondary"><?php esc_html_e('Last Name *', 'ichapore-swapnapuron'); ?></label>
                  <input type="text" class="form-control" placeholder="Last name" required>
                </div>
                <div class="col-sm-6">
                  <label class="form-label small fw-bold text-secondary"><?php esc_html_e('Email Address *', 'ichapore-swapnapuron'); ?></label>
                  <input type="email" class="form-control" placeholder="you@example.com" required>
                </div>
                <div class="col-sm-6">
                  <label class="form-label small fw-bold text-secondary"><?php esc_html_e('Phone Number *', 'ichapore-swapnapuron'); ?></label>
                  <input type="tel" class="form-control" placeholder="+91 98000 00000" required>
                </div>
                <div class="col-12">
                  <label class="form-label small fw-bold text-secondary"><?php esc_html_e('Subject / Nature of Inquiry', 'ichapore-swapnapuron'); ?></label>
                  <select class="form-select">
                    <option value="general"><?php esc_html_e('General Inquiry', 'ichapore-swapnapuron'); ?></option>
                    <option value="volunteer"><?php esc_html_e('Volunteering Opportunity', 'ichapore-swapnapuron'); ?></option>
                    <option value="donation"><?php esc_html_e('Donation / 80G Tax Receipt', 'ichapore-swapnapuron'); ?></option>
                    <option value="csr"><?php esc_html_e('Corporate Social Responsibility (CSR)', 'ichapore-swapnapuron'); ?></option>
                    <option value="medical"><?php esc_html_e('Medical Camp Request', 'ichapore-swapnapuron'); ?></option>
                    <option value="animal"><?php esc_html_e('Ayushman Bhava / Animal Safety', 'ichapore-swapnapuron'); ?></option>
                    <option value="other"><?php esc_html_e('Other', 'ichapore-swapnapuron'); ?></option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label small fw-bold text-secondary"><?php esc_html_e('Your Message *', 'ichapore-swapnapuron'); ?></label>
                  <textarea class="form-control" rows="5" placeholder="<?php esc_attr_e('Share your message, query, or feedback with us...', 'ichapore-swapnapuron'); ?>" required></textarea>
                </div>
                <div class="col-12 pt-2">
                  <button type="submit" class="btn btn-dark rounded-pill px-5 py-3 fw-bold text-uppercase w-100 w-sm-auto shadow" style="font-size:0.78rem; letter-spacing:0.06em;">
                    <?php esc_html_e('Submit Message', 'ichapore-swapnapuron'); ?>
                  </button>
                </div>
              </div>

              <div id="contactPageNotice" class="alert alert-success mt-4 mb-0 d-none" role="alert">
                <div class="d-flex align-items-center gap-2">
                  <span class="material-symbols-outlined fs-4">check_circle</span>
                  <div>
                    <strong><?php esc_html_e('Message submitted successfully!', 'ichapore-swapnapuron'); ?></strong> <?php esc_html_e('Our coordinator will reach out to you within 24 to 48 hours. For urgent inquiries, call us directly at', 'ichapore-swapnapuron'); ?> <strong><?php echo esc_html($phone1); ?></strong>.
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    function handleContactPageSubmit(e) {
      e.preventDefault();
      document.getElementById('contactPageNotice').classList.remove('d-none');
      e.target.reset();
      document.getElementById('contactPageNotice').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
  </script>

<?php
get_footer();
