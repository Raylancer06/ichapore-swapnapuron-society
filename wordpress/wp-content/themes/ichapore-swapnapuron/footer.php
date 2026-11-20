<?php
/**
 * The template for displaying the footer
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

  <!-- FOOTER -->
  <footer class="bg-charcoal-deep pt-5 pb-4">
    <div class="container">
      <div class="row g-4 pb-5 border-bottom border-secondary border-opacity-25">
        <div class="col-lg-5">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="p-1 rounded-circle bg-white">
              <img alt="Ichapore Swapnapuron Society Emblem" class="rounded-circle object-fit-contain" width="48" height="48" loading="lazy" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDx6yWAmHDCrVbZI5uzhW1gAPtZh4t95nomk0bfPffp68fRLPrwJ-YTGQZfiVZ38oVa8pqcdN5svrB-pK4U945N5UIqEiCerEf8eGfKIAGNseQ0Klr3dOKqbkhCgxb1On4D7JMgzDHIj5qkgRvtFQTDck-kwvDnePjPtafPvWBhOAKec7Xa_-g84NucEPs7KjAFqcjiPlGgAhgALek6lgEnVO3l0bsOUtJB5vt9PtIBLdY7z-gCKt55A">
            </div>
            <div>
              <div class="fw-bold text-white"><?php bloginfo('name'); ?></div>
              <div class="small text-white-50"><?php esc_html_e('Bringing Smiles Through Education', 'ichapore-swapnapuron'); ?> &bull; <?php esc_html_e('Estd.', 'ichapore-swapnapuron'); ?> <?php echo esc_html(swapnapuron_opt('swapnapuron_estd', '2009')); ?></div>
            </div>
          </div>
          <p class="small text-white-50 mb-3" style="max-width: 380px;">
            <?php esc_html_e('Dedicated to grassroots social transformation through street children education, women\'s healthcare, thalassemia prevention, hunger relief, and animal welfare across North 24 Parganas.', 'ichapore-swapnapuron'); ?>
          </p>

          <div class="mb-3">
            <?php swapnapuron_social_pills(); ?>
          </div>

          <div class="small text-white-50" style="font-size:0.75rem;">
            <div><strong><?php esc_html_e('Society Reg:', 'ichapore-swapnapuron'); ?></strong> <?php echo esc_html(swapnapuron_opt('swapnapuron_reg_no', 'S0011507 of 2019-2020')); ?></div>
            <div><strong><?php esc_html_e('PAN:', 'ichapore-swapnapuron'); ?></strong> <?php echo esc_html(swapnapuron_opt('swapnapuron_pan', 'AAAAI9694K')); ?> &bull; <strong><?php esc_html_e('80G URN:', 'ichapore-swapnapuron'); ?></strong> <?php echo esc_html(swapnapuron_opt('swapnapuron_80g_urn', 'AAAAI9694KF20251')); ?></div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3">
          <h4 class="h6 fw-bold text-uppercase text-white mb-3" style="letter-spacing:0.08em;"><?php esc_html_e('Quick Links', 'ichapore-swapnapuron'); ?></h4>
          <ul class="list-unstyled small d-flex flex-column gap-2 mb-0">
            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="text-white-50 text-decoration-none hover-white"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/who-we-are')); ?>" class="text-white-50 text-decoration-none hover-white"><?php esc_html_e('Who We Are', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/mission-vision')); ?>" class="text-white-50 text-decoration-none hover-white"><?php esc_html_e('Mission & Vision', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/our-team')); ?>" class="text-white-50 text-decoration-none hover-white"><?php esc_html_e('Our Team', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/why-trust-us')); ?>" class="text-white-50 text-decoration-none hover-white"><?php esc_html_e('Why Trust Us', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/projects')); ?>" class="text-white-50 text-decoration-none hover-white"><?php esc_html_e('All Projects', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="text-white-50 text-decoration-none hover-white"><?php esc_html_e('Get Involved', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/donate')); ?>" class="text-white-50 text-decoration-none hover-white"><?php esc_html_e('Donate (80G Tax Benefit)', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="text-white-50 text-decoration-none hover-white"><?php esc_html_e('Privacy Policy', 'ichapore-swapnapuron'); ?></a></li>
          </ul>
        </div>

        <div class="col-sm-6 col-lg-4">
          <h4 class="h6 fw-bold text-uppercase text-white mb-3" style="letter-spacing:0.08em;"><?php esc_html_e('Contact Us', 'ichapore-swapnapuron'); ?></h4>
          <p class="small text-white-50 mb-2"><?php echo esc_html(swapnapuron_opt('swapnapuron_address', '41 Jatin Das Road, Ichapore Majher Para, West Bengal - 743144')); ?></p>
          
          <?php $phone1 = swapnapuron_opt('swapnapuron_phone_1', '+91 83360 66390'); ?>
          <?php $phone2 = swapnapuron_opt('swapnapuron_phone_2', '+91 89183 97307'); ?>
          <p class="small mb-1">
            <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone1)); ?>" class="text-light text-decoration-none"><?php echo esc_html($phone1); ?></a>
            <?php if ($phone2): ?>
              / <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone2)); ?>" class="text-light text-decoration-none"><?php echo esc_html($phone2); ?></a>
            <?php endif; ?>
          </p>

          <?php $email = swapnapuron_opt('swapnapuron_email', 'ichaporeswapnapuronsociety@gmail.com'); ?>
          <p class="small mb-0">
            <a href="mailto:<?php echo esc_attr($email); ?>" class="text-light text-decoration-none text-break"><?php echo esc_html($email); ?></a>
          </p>
        </div>
      </div>

      <div class="pt-4 d-flex flex-column flex-sm-row align-items-center justify-content-between gap-2 small text-white-50 text-center text-sm-start">
        <span>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'ichapore-swapnapuron'); ?></span>
        <a href="#top" class="text-light text-decoration-none fw-semibold"><?php esc_html_e('Back to Top ↑', 'ichapore-swapnapuron'); ?></a>
      </div>
    </div>
  </footer>

  <script>
    const navCollapse = document.getElementById('mainNav');
    const mobileTogglerIcon = document.getElementById('mobileTogglerIcon');
    if (navCollapse && mobileTogglerIcon) {
      navCollapse.addEventListener('show.bs.collapse', () => { mobileTogglerIcon.textContent = 'close'; });
      navCollapse.addEventListener('hide.bs.collapse', () => { mobileTogglerIcon.textContent = 'menu'; });
    }
  </script>

  <?php wp_footer(); ?>
</body>
</html>
