<?php
/**
 * The template for displaying the footer
 *
 * 1-to-1 exact match with index.html
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

$site_name = swapnapuron_site_name();
$phone1 = swapnapuron_opt('swapnapuron_phone_1', '+91 83360 66390');
$phone2 = swapnapuron_opt('swapnapuron_phone_2', '+91 89183 97307');
$email  = swapnapuron_opt('swapnapuron_email', 'ichaporeswapnapuronsociety@gmail.com');
$addr   = swapnapuron_opt('swapnapuron_address', '41 Jatin Das Road, Ichapore Majher Para, North 24 Parganas');
?>

  <!-- FOOTER -->
  <footer class="bg-charcoal-deep pt-5 pb-4">
    <div class="container">
      <div class="row g-4 pb-5 border-bottom border-secondary border-opacity-25">
        <div class="col-lg-5">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="p-1 rounded-circle bg-white shadow-sm flex-shrink-0">
              <img alt="Ichapore Swapnapuron Society Emblem" class="rounded-circle object-fit-contain" width="48" height="48" loading="lazy" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDx6yWAmHDCrVbZI5uzhW1gAPtZh4t95nomk0bfPffp68fRLPrwJ-YTGQZfiVZ38oVa8pqcdN5svrB-pK4U945N5UIqEiCerEf8eGfKIAGNseQ0Klr3dOKqbkhCgxb1On4D7JMgzDHIj5qkgRvtFQTDck-kwvDnePjPtafPvWBhOAKec7Xa_-g84NucEPs7KjAFqcjiPlGgAhgALek6lgEnVO3l0bsOUtJB5vt9PtIBLdY7z-gCKt55A">
            </div>
            <div>
              <div class="fw-bold text-white"><?php echo esc_html($site_name); ?></div>
              <div class="small text-white-50"><?php esc_html_e('Bringing Smiles Through Education', 'ichapore-swapnapuron'); ?> &bull; <?php esc_html_e('Est.', 'ichapore-swapnapuron'); ?> <?php echo esc_html(swapnapuron_opt('swapnapuron_estd', '2009')); ?></div>
            </div>
          </div>
          <p class="small text-white-50 mb-3" style="max-width: 380px;">
            <?php esc_html_e('Dedicated to social transformation through street children education, women\'s healthcare, Thalassemia awareness, and environmental conservation.', 'ichapore-swapnapuron'); ?>
          </p>
          <div class="d-flex gap-2 mb-3">
            <a href="<?php echo esc_url(swapnapuron_opt('swapnapuron_facebook', 'https://www.facebook.com/ichaporeswapnapuronsociety')); ?>" target="_blank" rel="noopener" class="social-pill" aria-label="Facebook">FB</a>
            <a href="<?php echo esc_url(swapnapuron_opt('swapnapuron_twitter', 'https://x.com/swapnapuron')); ?>" target="_blank" rel="noopener" class="social-pill" aria-label="X / Twitter">X</a>
            <a href="<?php echo esc_url(swapnapuron_opt('swapnapuron_instagram', 'https://www.instagram.com/ichaporeswapnapuronsociety')); ?>" target="_blank" rel="noopener" class="social-pill" aria-label="Instagram">IG</a>
            <a href="<?php echo esc_url(swapnapuron_opt('swapnapuron_youtube', 'https://www.youtube.com/channel/UCEfK5BRdIoTHRtRqBZDkIkg?view_as=subscriber')); ?>" target="_blank" rel="noopener" class="social-pill" aria-label="YouTube">YT</a>
          </div>
        </div>

        <div class="col-sm-6 col-lg-3">
          <h4 class="h6 fw-bold text-uppercase text-white mb-3" style="letter-spacing:0.08em;"><?php esc_html_e('Quick Links', 'ichapore-swapnapuron'); ?></h4>
          <ul class="list-unstyled small d-flex flex-column gap-2 mb-0">
            <li><a href="<?php echo esc_url(home_url('/')); ?>" class="text-white-50 text-decoration-none"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/who-we-are/')); ?>" class="text-white-50 text-decoration-none"><?php esc_html_e('Who We Are', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/mission-vision/')); ?>" class="text-white-50 text-decoration-none"><?php esc_html_e('Mission & Vision', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/our-team/')); ?>" class="text-white-50 text-decoration-none"><?php esc_html_e('Our Team', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/why-trust-us/')); ?>" class="text-white-50 text-decoration-none"><?php esc_html_e('Why Trust Us', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/swasthya-chakra/')); ?>" class="text-white-50 text-decoration-none"><?php esc_html_e('Swasthya Chakra', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/janmataru/')); ?>" class="text-white-50 text-decoration-none"><?php esc_html_e('Janmataru', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/ayushman-bhava/')); ?>" class="text-white-50 text-decoration-none"><?php esc_html_e('Ayushman Bhava', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/happy/')); ?>" class="text-white-50 text-decoration-none"><?php esc_html_e('Smile with Santa', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/udaan/')); ?>" class="text-white-50 text-decoration-none"><?php esc_html_e('Project Udaan', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/anandadhara/')); ?>" class="text-white-50 text-decoration-none"><?php esc_html_e('Anandadhara', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/vidharthi/')); ?>" class="text-white-50 text-decoration-none"><?php esc_html_e('Vidharthi', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/ashiana/')); ?>" class="text-white-50 text-decoration-none"><?php esc_html_e('Ashiana', 'ichapore-swapnapuron'); ?></a></li>
            <li><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="text-white-50 text-decoration-none"><?php esc_html_e('Privacy Policy', 'ichapore-swapnapuron'); ?></a></li>
          </ul>
        </div>

        <div class="col-sm-6 col-lg-4">
          <h4 class="h6 fw-bold text-uppercase text-white mb-3" style="letter-spacing:0.08em;"><?php esc_html_e('Contact Us', 'ichapore-swapnapuron'); ?></h4>
          <p class="small text-white-50 mb-2"><?php echo esc_html($addr); ?></p>
          
          <p class="small mb-1">
            <?php if ($phone1): ?>
              <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone1)); ?>" class="text-light text-decoration-none"><?php echo esc_html($phone1); ?></a>
            <?php endif; ?>
            <?php if ($phone2): ?>
              / <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone2)); ?>" class="text-light text-decoration-none"><?php echo esc_html($phone2); ?></a>
            <?php endif; ?>
          </p>

          <?php if ($email): ?>
            <p class="small mb-0">
              <a href="mailto:<?php echo esc_attr($email); ?>" class="text-light text-decoration-none text-break"><?php echo esc_html($email); ?></a>
            </p>
          <?php endif; ?>
        </div>
      </div>

      <div class="pt-4 d-flex flex-column flex-sm-row align-items-center justify-content-between gap-2 small text-white-50 text-center text-sm-start">
        <span>&copy; <?php echo esc_html($site_name); ?>. <?php esc_html_e('All rights reserved.', 'ichapore-swapnapuron'); ?></span>
        <a href="#top" class="text-light text-decoration-none fw-semibold"><?php esc_html_e('Back to Top ↑', 'ichapore-swapnapuron'); ?></a>
      </div>
    </div>
  </footer>

  <script>
    // Auto-close Bootstrap mobile navbar & sync menu/close icon
    const navCollapse = document.getElementById('mainNav');
    const mobileTogglerIcon = document.getElementById('mobileTogglerIcon');

    if (navCollapse && mobileTogglerIcon) {
      navCollapse.addEventListener('show.bs.collapse', () => {
        mobileTogglerIcon.textContent = 'close';
      });
      navCollapse.addEventListener('hide.bs.collapse', () => {
        mobileTogglerIcon.textContent = 'menu';
      });

      document.querySelectorAll('#mainNav .nav-link, #mainNav .mobile-nav-cta').forEach(link => {
        link.addEventListener('click', () => {
          if (navCollapse.classList.contains('show')) {
            bootstrap.Collapse.getOrCreateInstance(navCollapse).hide();
          }
        });
      });
    }
  </script>

  <?php wp_footer(); ?>
</body>
</html>
