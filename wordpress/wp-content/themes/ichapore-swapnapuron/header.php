<?php
/**
 * The header template for Ichapore Swapnapuron Society
 *
 * 1-to-1 match with index.html
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

$site_name = swapnapuron_site_name();
$site_desc = swapnapuron_site_desc();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">
<?php wp_body_open(); ?>

  <!-- TOP CONTACT & SOCIAL BAR -->
  <div class="top-bar py-2">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
        <div class="d-flex align-items-center gap-2">
          <span class="pulse-dot"></span>
          <span class="fw-bold text-uppercase" style="letter-spacing:0.06em; color:#fbe7e4;">
            <?php esc_html_e('Founded', 'ichapore-swapnapuron'); ?> <?php echo esc_html(swapnapuron_opt('swapnapuron_estd', '2009')); ?>
          </span>
          <span class="d-none d-sm-inline text-white-50">&bull;</span>
          <span class="d-none d-sm-inline">
            <?php echo esc_html(swapnapuron_opt('swapnapuron_address', '41 Jatin Das Road, Ichapore Majher Para')); ?>
          </span>
        </div>
        <div class="d-flex align-items-center gap-3 ms-auto">
          <?php $phone1 = swapnapuron_opt('swapnapuron_phone_1', '+91 83360 66390'); ?>
          <?php if ($phone1): ?>
            <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone1)); ?>" class="text-decoration-none text-light d-flex align-items-center gap-1">
              <span class="material-symbols-outlined fs-6">call</span>
              <span><?php echo esc_html($phone1); ?></span>
            </a>
          <?php endif; ?>

          <?php $phone2 = swapnapuron_opt('swapnapuron_phone_2', '+91 89183 97307'); ?>
          <?php if ($phone2): ?>
            <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone2)); ?>" class="text-decoration-none text-light d-none d-md-flex align-items-center gap-1">
              <span class="material-symbols-outlined fs-6">call</span>
              <span><?php echo esc_html($phone2); ?></span>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- STICKY BOOTSTRAP NAVBAR -->
  <header class="sticky-top navbar-glass">
    <nav class="navbar navbar-expand-lg navbar-light py-2 py-lg-3">
      <div class="container">
        <div class="d-flex align-items-center justify-content-between w-100 w-lg-auto gap-2">
          <a class="navbar-brand d-flex align-items-center gap-2 gap-sm-3 text-decoration-none me-0" href="<?php echo esc_url(home_url('/')); ?>" style="min-width: 0; flex: 1 1 auto;">
            <div class="p-1 rounded-circle bg-white shadow-sm border flex-shrink-0" style="border-color: var(--sand-200) !important;">
              <?php if (has_custom_logo()): ?>
                <?php the_custom_logo(); ?>
              <?php else: ?>
                <img alt="Ichapore Swapnapuron Society Emblem" class="rounded-circle object-fit-contain" width="42" height="42" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDx6yWAmHDCrVbZI5uzhW1gAPtZh4t95nomk0bfPffp68fRLPrwJ-YTGQZfiVZ38oVa8pqcdN5svrB-pK4U945N5UIqEiCerEf8eGfKIAGNseQ0Klr3dOKqbkhCgxb1On4D7JMgzDHIj5qkgRvtFQTDck-kwvDnePjPtafPvWBhOAKec7Xa_-g84NucEPs7KjAFqcjiPlGgAhgALek6lgEnVO3l0bsOUtJB5vt9PtIBLdY7z-gCKt55A">
              <?php endif; ?>
            </div>
            <div style="min-width: 0;">
              <span class="d-block fw-bold text-dark text-truncate lh-sm" style="font-size: clamp(0.85rem, 2.8vw, 1rem);"><?php echo esc_html($site_name); ?></span>
              <span class="d-none d-sm-block text-uppercase text-muted fw-semibold text-truncate" style="font-size:0.65rem; letter-spacing:0.1em;"><?php echo esc_html($site_desc); ?></span>
            </div>
          </a>

          <div class="d-flex align-items-center gap-2 flex-shrink-0 d-lg-none">
            <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-3 py-2 d-none d-sm-inline-flex align-items-center gap-1 shadow-sm">
              <span><?php esc_html_e('Donate', 'ichapore-swapnapuron'); ?></span>
              <span class="material-symbols-outlined fs-6">arrow_forward</span>
            </a>
            <button class="navbar-toggler border rounded-3 bg-white shadow-sm p-2 d-inline-flex align-items-center justify-content-center" style="border-color: var(--sand-300) !important;" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation" id="mobileToggler">
              <span class="material-symbols-outlined text-dark fs-4" id="mobileTogglerIcon">menu</span>
            </button>
          </div>
        </div>

        <div class="collapse navbar-collapse justify-content-center" id="mainNav">
          <ul class="navbar-nav gap-1 gap-lg-2 pt-3 pt-lg-0 pb-2 pb-lg-0 text-start text-lg-center">
            <li class="nav-item"><a class="nav-link nav-link-editorial px-3 px-lg-2 py-2 rounded-3 active" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link nav-link-editorial px-3 px-lg-2 py-2 rounded-3 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php esc_html_e('About Us', 'ichapore-swapnapuron'); ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-editorial shadow-sm border-0 p-2">
                <li><a class="dropdown-item dropdown-item-editorial" href="<?php echo esc_url(home_url('/who-we-are')); ?>"><?php esc_html_e('Who We Are', 'ichapore-swapnapuron'); ?></a></li>
                <li><a class="dropdown-item dropdown-item-editorial" href="<?php echo esc_url(home_url('/mission-vision')); ?>"><?php esc_html_e('Mission & Vision', 'ichapore-swapnapuron'); ?></a></li>
                <li><a class="dropdown-item dropdown-item-editorial" href="<?php echo esc_url(home_url('/our-team')); ?>"><?php esc_html_e('Our Team', 'ichapore-swapnapuron'); ?></a></li>
                <li><a class="dropdown-item dropdown-item-editorial" href="<?php echo esc_url(home_url('/why-trust-us')); ?>"><?php esc_html_e('Why Trust Us', 'ichapore-swapnapuron'); ?></a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link nav-link-editorial px-3 px-lg-2 py-2 rounded-3 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php esc_html_e('Our Projects', 'ichapore-swapnapuron'); ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-editorial shadow-sm border-0 p-2">
                <li><a class="dropdown-item dropdown-item-editorial" href="<?php echo esc_url(home_url('/swasthya-chakra/')); ?>">Swasthya Chakra (Healthcare)</a></li>
                <li><a class="dropdown-item dropdown-item-editorial" href="<?php echo esc_url(home_url('/janmataru/')); ?>">Janmataru (Green Newborns)</a></li>
                <li><a class="dropdown-item dropdown-item-editorial" href="<?php echo esc_url(home_url('/ayushman-bhava/')); ?>">Ayushman Bhava (Street Animals)</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item dropdown-item-editorial" href="<?php echo esc_url(home_url('/happy/')); ?>">Smile with Santa (Winter Joy)</a></li>
                <li><a class="dropdown-item dropdown-item-editorial" href="<?php echo esc_url(home_url('/udaan/')); ?>">Project Udaan (Thalassemia)</a></li>
                <li><a class="dropdown-item dropdown-item-editorial" href="<?php echo esc_url(home_url('/anandadhara/')); ?>">Anandadhara (Food Rescue)</a></li>
                <li><a class="dropdown-item dropdown-item-editorial" href="<?php echo esc_url(home_url('/vidharthi/')); ?>">Vidharthi (Mission Education)</a></li>
                <li><a class="dropdown-item dropdown-item-editorial" href="<?php echo esc_url(home_url('/ashiana/')); ?>">Ashiana (Bird Habitat)</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link nav-link-editorial px-3 px-lg-2 py-2 rounded-3" href="<?php echo esc_url(home_url('/volunteer')); ?>"><?php esc_html_e('Get Involved', 'ichapore-swapnapuron'); ?></a></li>
            <li class="nav-item"><a class="nav-link nav-link-editorial px-3 px-lg-2 py-2 rounded-3" href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Contact', 'ichapore-swapnapuron'); ?></a></li>
          </ul>

          <div class="d-grid gap-2 pt-2 pb-2 border-top d-lg-none" style="border-color: var(--sand-300) !important;">
            <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill py-2.5 d-inline-flex align-items-center justify-content-center gap-1 shadow-sm">
              <span><?php esc_html_e('Donate Now', 'ichapore-swapnapuron'); ?></span>
              <span class="material-symbols-outlined fs-6">arrow_forward</span>
            </a>
          </div>
        </div>

        <div class="d-none d-lg-flex align-items-center gap-2 flex-shrink-0">
          <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-4 py-2 d-inline-flex align-items-center gap-1 shadow-sm">
            <span><?php esc_html_e('Donate Now', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6">arrow_forward</span>
          </a>
        </div>
      </div>
    </nav>
  </header>
