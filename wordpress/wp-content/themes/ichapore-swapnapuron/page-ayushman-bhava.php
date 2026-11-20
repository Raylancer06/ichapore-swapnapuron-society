<?php
/**
 * Template Name: Ayushman Bhava
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

  <!-- PAGE HEADER -->
  <section class="page-header" style="background: linear-gradient(135deg, #241a0b 0%, #15181b 100%);">
    <div class="page-header-glow" style="background: rgba(220, 140, 38, 0.35);"></div>
    <div class="container position-relative">
      <div class="breadcrumb-editorial mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-white-50"><?php esc_html_e('Our Projects', 'ichapore-swapnapuron'); ?></span> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php esc_html_e('Ayushman Bhava', 'ichapore-swapnapuron'); ?></span>
      </div>
      <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
        <span class="pulse-dot" style="background-color: #f1c40f;"></span>
        <span class="text-uppercase fw-bold text-white small" style="letter-spacing:0.08em;"><?php esc_html_e('Animal Safety & Welfare Initiative', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-4 fw-extrabold text-uppercase tracking-tight text-white mb-2"><?php esc_html_e('Ayushman Bhava', 'ichapore-swapnapuron'); ?></h1>
      <h2 class="h3 fw-bold text-warning mb-3"><?php esc_html_e('Reflective Collar Initiative for Street Dogs', 'ichapore-swapnapuron'); ?></h2>
      <p class="lead text-light opacity-90 mb-4" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('Ayushman Bhava is our grassroots animal welfare campaign protecting street dogs from fatal night road accidents by fitting durable, high-visibility reflective collars.', 'ichapore-swapnapuron'); ?>
      </p>

      <div class="d-flex flex-wrap gap-2 gap-sm-3 text-light small fw-semibold pt-1">
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">shield</span>
          <span><?php esc_html_e('Enhance Safety', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">no_crash</span>
          <span><?php esc_html_e('Prevent Night Crashes', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">pets</span>
          <span><?php esc_html_e('Care for Strays', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">favorite</span>
          <span><?php esc_html_e('Compassionate Towns', 'ichapore-swapnapuron'); ?></span>
        </span>
      </div>
    </div>
  </section>

  <!-- OVERVIEW -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4 g-lg-5 align-items-center">
        <div class="col-lg-6">
          <div class="d-inline-flex align-items-center gap-2 text-warning fw-bold text-uppercase mb-2" style="font-size:0.75rem; letter-spacing:0.1em; color:#b87a00 !important;">
            <span class="material-symbols-outlined fs-6">pets</span>
            <span><?php esc_html_e('Why This Matters', 'ichapore-swapnapuron'); ?></span>
          </div>
          <h2 class="display-6 fw-extrabold mb-4"><?php esc_html_e('Protecting Our Voiceless Friends in the Dark', 'ichapore-swapnapuron'); ?></h2>
          <p class="text-secondary lh-lg mb-3">
            <?php esc_html_e('Every night on busy highways, markets, and dimly lit suburban roads, countless street dogs suffer fatal collisions simply because speeding drivers cannot see them until it is too late.', 'ichapore-swapnapuron'); ?>
          </p>
          <p class="text-secondary lh-lg mb-3">
            <strong><?php esc_html_e('Ayushman Bhava', 'ichapore-swapnapuron'); ?></strong> <?php esc_html_e('aims to make them visible, safe, and respected by outfitting street dogs with high-grade, neon reflective collars. When vehicle headlights shine even hundreds of meters away, the glowing collar immediately warns drivers to slow down.', 'ichapore-swapnapuron'); ?>
          </p>
          <p class="text-secondary lh-lg mb-0">
            <?php esc_html_e('Beyond physical collars, our volunteer drives educate neighborhood residents, drivers, and shopkeepers to treat community animals with kindness and responsibility.', 'ichapore-swapnapuron'); ?>
          </p>
        </div>

        <div class="col-lg-6">
          <div class="editorial-card shadow-lg">
            <div class="position-relative overflow-hidden" style="height: 380px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/Ayushman Bhav/ayusman-bhaban-01.avif'); ?>" alt="Volunteer fitting reflective collar on street dog" class="w-100 h-100 object-fit-cover" onerror="this.onerror=null; this.src='<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/hero-school.jpg'); ?>';">
            </div>
            <div class="p-4 bg-white border-top border-sand-300">
              <span class="text-uppercase fw-bold text-warning d-block mb-1" style="font-size:0.7rem; letter-spacing:0.08em; color:#b87a00 !important;"><?php esc_html_e('Safety In The Dark', 'ichapore-swapnapuron'); ?></span>
              <p class="small text-secondary mb-0"><?php esc_html_e('High-grade retroreflective fabric visible from up to 300 meters away.', 'ichapore-swapnapuron'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- KEY FEATURES -->
  <section class="bg-sand-warm py-5 py-lg-6 border-top border-bottom border-sand-300">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 680px;">
        <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Campaign Pillars', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Key Features of Ayushman Bhava', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('Comprehensive humane strategy combining road safety equipment, veterinary care, and community empathy.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Feature 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #fff8e6; color: #b87a00;">
              <span class="material-symbols-outlined fs-3">adjust</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Reflective Collar Distribution', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('We distribute durable, weather-resistant, and comfortable reflective collars that make street dogs instantly visible in the dark.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #eef3ff; color: #1e5ab8;">
              <span class="material-symbols-outlined fs-3">no_crash</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Accident Prevention', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('The reflective strip bounces headlight beams back to drivers, granting critical seconds to brake and prevent deadly collisions.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: var(--terracotta-100); color: var(--terracotta-600);">
              <span class="material-symbols-outlined fs-3">pets</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Animal Welfare & Health', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('We monitor stray health, administer anti-rabies guidance, provide first-aid for wounds, and feed vulnerable animals.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Feature 4 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: var(--moss-100); color: var(--moss-600);">
              <span class="material-symbols-outlined fs-3">diversity_3</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Community Involvement', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('We engage local youth, shopkeepers, and rickshaw unions as local guardians who look out for tagged neighborhood dogs.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Feature 5 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #fdf0f7; color: #a32274;">
              <span class="material-symbols-outlined fs-3">sentiment_satisfied</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Compassionate Society', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Fostering respect and love for all living creatures, transforming fear into harmony between citizens and community dogs.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- IMPACT SO FAR STATS -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mx-auto mb-4" style="max-width: 600px;">
        <span class="text-uppercase fw-bold text-warning d-block mb-1" style="font-size:0.75rem; letter-spacing:0.1em; color:#b87a00 !important;"><?php esc_html_e('Animal Protection Record', 'ichapore-swapnapuron'); ?></span>
        <h2 class="h3 fw-extrabold mb-0"><?php esc_html_e('Our Impact So Far', 'ichapore-swapnapuron'); ?></h2>
      </div>

      <div class="row g-3 g-md-4">
        <div class="col-6 col-lg">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-warning mb-1" style="color:#c46800 !important;">45</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Reflective Collars', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Fitted by our volunteers', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-moss mb-1">40</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Street Dogs Benefited', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Safe from night crashes', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-primary mb-1">4</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('High-Risk Zones', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Major intersections covered', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-terracotta mb-1">12</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Volunteers Involved', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Field animal lovers', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRE-FOOTER BANNER -->
  <section class="py-5 bg-sand-soft border-top border-sand-300">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Save Strays', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Sponsor Reflective Collars for Street Dogs', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('A contribution of ₹150 funds a durable, non-choking reflective collar and nutritious meal for a street animal.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-5 py-3 d-inline-flex align-items-center gap-2 shadow">
            <span><?php esc_html_e('Sponsor Collars', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6">favorite</span>
          </a>
          <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2" style="font-size:0.78rem; letter-spacing:0.06em;">
            <span><?php esc_html_e('Volunteer on Night Patrol', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6 text-warning">pets</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
