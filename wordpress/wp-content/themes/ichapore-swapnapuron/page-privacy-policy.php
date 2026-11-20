<?php
/**
 * Template Name: Privacy Policy
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

  <!-- PAGE HEADER -->
  <section class="page-header">
    <div class="page-header-glow"></div>
    <div class="container position-relative">
      <div class="breadcrumb-editorial mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php esc_html_e('Privacy Policy', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-5 fw-extrabold text-uppercase tracking-tight text-white mb-2"><?php esc_html_e('Privacy Policy & Terms', 'ichapore-swapnapuron'); ?></h1>
      <p class="lead text-light opacity-90 mb-0" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('Ichapore Swapnapuron Society is committed to protecting your privacy, safeguarding personal donor information, and maintaining ethical standards of non-profit governance.', 'ichapore-swapnapuron'); ?>
      </p>
    </div>
  </section>

  <!-- POLICY CONTENT -->
  <section class="py-5 py-lg-6">
    <div class="container" style="max-width: 900px;">
      <div class="bg-white rounded-4 p-4 p-sm-5 border border-sand-300 shadow-sm">
        <div class="space-y-4 d-flex flex-column gap-4 text-secondary lh-lg">
          <div>
            <h2 class="h5 fw-bold text-charcoal-900 mb-2"><?php esc_html_e('1. Information Gathering', 'ichapore-swapnapuron'); ?></h2>
            <p class="small mb-0">
              <?php esc_html_e('Ichapore Swapnapuron Society collects information from visitors and donors only when voluntarily submitted—such as making an online or offline donation, filling out our volunteer registration form, or contacting us. This information may include your full name, email address, mailing address, contact phone number, and PAN number (for 80G tax exemption certificates). Browsing on our website remains completely anonymous.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>

          <div class="pt-3 border-top">
            <h2 class="h5 fw-bold text-charcoal-900 mb-2"><?php esc_html_e('2. Use of Personal Information', 'ichapore-swapnapuron'); ?></h2>
            <p class="small mb-0">
              <?php esc_html_e('Personal information submitted to the society is treated as strictly confidential. We use it solely for official society communications, issuing 80G tax exemption receipts, sending program impact updates, and coordinating field volunteer operations. Under no circumstances do we sell, rent, lease, or trade personal data to commercial third parties. You may request deletion or modification of your contact records at any time by writing to', 'ichapore-swapnapuron'); ?> <strong>ichaporeswapnapuronsociety@gmail.com</strong>.
            </p>
          </div>

          <div class="pt-3 border-top">
            <h2 class="h5 fw-bold text-charcoal-900 mb-2"><?php esc_html_e('3. Privacy of E-Mail Lists', 'ichapore-swapnapuron'); ?></h2>
            <p class="small mb-0">
              <?php esc_html_e('Ichapore Swapnapuron Society maintains internal mailing lists for volunteer mobilization and donor updates. Individuals who sign up will only receive official communications from our registered coordinators. We never disclose email subscriber lists to external organizations.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>

          <div class="pt-3 border-top">
            <h2 class="h5 fw-bold text-charcoal-900 mb-2"><?php esc_html_e('4. Payment Gateway Security', 'ichapore-swapnapuron'); ?></h2>
            <p class="small mb-0">
              <?php esc_html_e('All financial transactions and online contributions are processed through verified, industry-compliant payment gateways using standard 256-bit SSL encryption. We do not store sensitive credit/debit card numbers or net banking passwords on our local servers.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>

          <div class="pt-3 border-top">
            <h2 class="h5 fw-bold text-charcoal-900 mb-2"><?php esc_html_e('5. Refund and Cancellation Policy', 'ichapore-swapnapuron'); ?></h2>
            <p class="small mb-0">
              <?php esc_html_e('As a charitable non-profit organization, all voluntary contributions, online donations, and sponsorships are immediately committed towards purchasing student books, pediatric blood vials, hospital medicines, reflective dog collars, or winter blankets. Consequently, donations once processed are non-refundable and cannot be cancelled. If an accidental duplicate transaction occurs due to technical gateway error, please notify us within 48 hours at', 'ichapore-swapnapuron'); ?> <strong>ichaporeswapnapuronsociety@gmail.com</strong> <?php esc_html_e('with payment proof.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>

          <div class="pt-3 border-top">
            <h2 class="h5 fw-bold text-charcoal-900 mb-2"><?php esc_html_e('6. Terms and Conditions of Website Usage', 'ichapore-swapnapuron'); ?></h2>
            <p class="small mb-0">
              <?php esc_html_e('By accessing and browsing this website, you agree to comply with all applicable laws and use the content exclusively for lawful and non-commercial purposes. Content, reports, and photographs depicting our children, volunteers, and beneficiaries remain the intellectual property of Ichapore Swapnapuron Society and may not be reproduced commercially without prior written authorization.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>

          <div class="pt-3 border-top">
            <h2 class="h5 fw-bold text-charcoal-900 mb-2"><?php esc_html_e('7. Contact & Governance Queries', 'ichapore-swapnapuron'); ?></h2>
            <p class="small mb-0">
              <?php esc_html_e('If you have any questions or concerns regarding our privacy policies or statutory compliance, please contact our administrative office:', 'ichapore-swapnapuron'); ?><br>
              <strong><?php esc_html_e('Ichapore Swapnapuron Society', 'ichapore-swapnapuron'); ?></strong><br>
              <?php esc_html_e('41 Jatin Das Road, Ichapore Majher Para, Post: Ichapore Nawabganj, North 24 Parganas, West Bengal - 743144', 'ichapore-swapnapuron'); ?><br>
              Email: <strong>ichaporeswapnapuronsociety@gmail.com</strong> | Phone: <strong>+91 83360 66390</strong>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
