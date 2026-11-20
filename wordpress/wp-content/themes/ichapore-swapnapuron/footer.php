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
        <span>&copy; <?php echo esc_html($site_name); ?>. <?php esc_html_e('All rights reserved.', 'ichapore-swapnapuron'); ?> &bull; <?php esc_html_e('Developed by', 'ichapore-swapnapuron'); ?> <a href="https://raylancer.com/" target="_blank" rel="noopener" class="text-white text-decoration-none fw-semibold">Raylancer Services</a></span>
        <a href="#top" class="text-light text-decoration-none fw-semibold"><?php esc_html_e('Back to Top ↑', 'ichapore-swapnapuron'); ?></a>
      </div>
    </div>
  </footer>

  <!-- FLOATING WHATSAPP CHAT WIDGET -->
  <div class="whatsapp-chat-widget" id="waChatWidget">
    <!-- Chat Popup Box -->
    <div class="whatsapp-card" id="waCard">
      <div class="whatsapp-card-header">
        <div class="d-flex align-items-center gap-2">
          <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDx6yWAmHDCrVbZI5uzhW1gAPtZh4t95nomk0bfPffp68fRLPrwJ-YTGQZfiVZ38oVa8pqcdN5svrB-pK4U945N5UIqEiCerEf8eGfKIAGNseQ0Klr3dOKqbkhCgxb1On4D7JMgzDHIj5qkgRvtFQTDck-kwvDnePjPtafPvWBhOAKec7Xa_-g84NucEPs7KjAFqcjiPlGgAhgALek6lgEnVO3l0bsOUtJB5vt9PtIBLdY7z-gCKt55A" alt="Avatar" class="wa-avatar">
          <div>
            <div class="fw-bold text-white" style="font-size:0.88rem;"><?php echo esc_html($site_name); ?></div>
            <div class="d-flex align-items-center gap-1" style="font-size:0.68rem; color:#bbf7d0;">
              <span class="rounded-circle bg-success border border-white" style="width:7px; height:7px; display:inline-block;"></span>
              <span><?php esc_html_e('Online • Instant Reply', 'ichapore-swapnapuron'); ?></span>
            </div>
          </div>
        </div>
        <button type="button" class="btn-close btn-close-white" style="font-size:0.65rem;" onclick="toggleWhatsAppCard(false)" aria-label="Close"></button>
      </div>
      <div class="whatsapp-card-body">
        <div class="whatsapp-chat-bubble">
          <?php esc_html_e('Namaskar! 🙏 Welcome to Ichapore Swapnapuron Society. How can we assist you today? Feel free to ask about our projects, volunteering, 80G tax exemptions, or donations.', 'ichapore-swapnapuron'); ?>
          <span class="whatsapp-chat-time"><?php echo date('h:i A'); ?></span>
        </div>
      </div>
      <div class="whatsapp-card-footer">
        <a href="https://wa.me/918336066390?text=Hello%20Ichapore%20Swapnapuron%20Society,%20I%20would%20like%20to%20know%20more%20about%20your%20initiatives." target="_blank" rel="noopener" class="whatsapp-cta-btn">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
          <span><?php esc_html_e('Start WhatsApp Chat', 'ichapore-swapnapuron'); ?></span>
        </a>
      </div>
    </div>

    <!-- Floating Circular Action Button -->
    <button type="button" class="whatsapp-trigger-btn" onclick="toggleWhatsAppCard()" aria-label="Open WhatsApp Chat">
      <div class="whatsapp-pulse"></div>
      <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
    </button>
  </div>

  <script>
    function toggleWhatsAppCard(forceState) {
      const card = document.getElementById('waCard');
      if (!card) return;
      if (typeof forceState === 'boolean') {
        if (forceState) card.classList.add('show');
        else card.classList.remove('show');
      } else {
        card.classList.toggle('show');
      }
    }

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
