<?php
/**
 * Template Name: Anandadhara
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

  <!-- PAGE HEADER -->
  <section class="page-header" style="background: linear-gradient(135deg, #271a0c 0%, #15181b 100%);">
    <div class="page-header-glow" style="background: rgba(230, 126, 34, 0.35);"></div>
    <div class="container position-relative">
      <div class="breadcrumb-editorial mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-white-50"><?php esc_html_e('Our Projects', 'ichapore-swapnapuron'); ?></span> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php esc_html_e('Anandadhara', 'ichapore-swapnapuron'); ?></span>
      </div>
      <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
        <span class="pulse-dot" style="background-color: #f39c12;"></span>
        <span class="text-uppercase fw-bold text-white small" style="letter-spacing:0.08em;"><?php esc_html_e('Food Rescue & Hunger Relief', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-4 fw-extrabold text-uppercase tracking-tight text-white mb-2"><?php esc_html_e('ANANDADHARA', 'ichapore-swapnapuron'); ?></h1>
      <h2 class="h3 fw-bold text-warning mb-3"><?php esc_html_e('Your help is very important to provide these people with a little better food', 'ichapore-swapnapuron'); ?></h2>
      <p class="lead text-light opacity-90 mb-4" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('Anandadhara collects surplus wedding banquet food and canceled food orders, packaging them into fresh hygienic foil meals distributed nightly to homeless and vagrant people at local stations.', 'ichapore-swapnapuron'); ?>
      </p>

      <div class="d-flex flex-wrap gap-2 gap-sm-3 text-light small fw-semibold pt-1">
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">restaurant</span>
          <span><?php esc_html_e('Food Rescue', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">inventory_2</span>
          <span><?php esc_html_e('Foil Packaging', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">train</span>
          <span><?php esc_html_e('Station Reach', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">volunteer_activism</span>
          <span><?php esc_html_e('Zero Food Waste', 'ichapore-swapnapuron'); ?></span>
        </span>
      </div>
    </div>
  </section>

  <!-- PROJECT OVERVIEW -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4 g-lg-5 align-items-center">
        <div class="col-lg-6">
          <div class="d-inline-flex align-items-center gap-2 text-warning fw-bold text-uppercase mb-2" style="font-size:0.75rem; letter-spacing:0.1em; color:#b87a00 !important;">
            <span class="material-symbols-outlined fs-6">rice_bowl</span>
            <span><?php esc_html_e('Why Anandadhara', 'ichapore-swapnapuron'); ?></span>
          </div>
          <h2 class="display-6 fw-extrabold mb-4"><?php esc_html_e('Feeding the Helpless with Dignity and Compassion', 'ichapore-swapnapuron'); ?></h2>
          <p class="text-secondary lh-lg mb-3">
            <?php esc_html_e('Anandadhara project is dedicated to the homeless and helpless people. We have many festival houses in Ichhapur, where many times food is wasted due to insufficient number of guests on many occasions.', 'ichapore-swapnapuron'); ?>
          </p>
          <p class="text-secondary lh-lg mb-4">
            <?php esc_html_e('Our pleasure is to collect those leftover food items, foil them separately, and distribute them to the vagrants and helpless people living in the remote areas and stations of Ichhapur, Barakpur, Palta, and Shyamnagar. Even in many food shops of Barakpur, if any ordered food is canceled, we collect and distribute it so no edible food is ever dumped.', 'ichapore-swapnapuron'); ?>
          </p>

          <div class="p-3 rounded-4 bg-sand-soft border border-sand-300 d-flex align-items-center gap-3">
            <span class="material-symbols-outlined text-warning fs-2" style="color:#d48806 !important;">verified</span>
            <div>
              <div class="fw-bold text-dark"><?php esc_html_e('Hygienic Foil Packaged Meals', 'ichapore-swapnapuron'); ?></div>
              <small class="text-secondary"><?php esc_html_e('Hot, clean, and nutritious meals packaged right after collection with zero contamination.', 'ichapore-swapnapuron'); ?></small>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="editorial-card shadow-lg">
            <div class="position-relative overflow-hidden" style="height: 380px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/anandadhara-food.jpg'); ?>" alt="Anandadhara night food distribution drive" class="w-100 h-100 object-fit-cover" onerror="this.onerror=null; this.src='<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/tutoring-academy.jpg'); ?>';">
            </div>
            <div class="p-4 bg-white border-top border-sand-300">
              <span class="text-uppercase fw-bold text-warning d-block mb-1" style="font-size:0.7rem; letter-spacing:0.08em; color:#b87a00 !important;"><?php esc_html_e('Night Patrol & Rescue', 'ichapore-swapnapuron'); ?></span>
              <p class="small text-secondary mb-0"><?php esc_html_e('Volunteers distributing freshly sealed meals to pavement dwellers and platform vagrants at Ichapore and Barrackpore.', 'ichapore-swapnapuron'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- KEY SERVICES WE PROVIDE -->
  <section class="bg-sand-warm py-5 py-lg-6 border-top border-bottom border-sand-300">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 680px;">
        <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('What We Deliver', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Key Highlights of Anandadhara', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('A reliable bridge turning celebration surplus into life-saving meals for the destitute.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Service 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #fff8e6; color: #b87a00;">
              <span class="material-symbols-outlined fs-3">event_seat</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Banquet Food Collection', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Prompt response upon receiving alerts from wedding banquet halls and event hosts when excess fresh food remains.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #eef3ff; color: #1e5ab8;">
              <span class="material-symbols-outlined fs-3">takeout_dining</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Hygienic Foil Sealing', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Meals are individually portioned and sealed into clean aluminum foil trays with separate curries, rice, and drinking water.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #e8f5e9; color: #2e7d32;">
              <span class="material-symbols-outlined fs-3">directions_bike</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Direct Midnight Distribution', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Volunteers travel through Ichapore, Palta, Barrackpore, and Shyamnagar stations to hand-deliver meals before people sleep hungry.', 'ichapore-swapnapuron'); ?>
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
        <span class="text-uppercase fw-bold text-moss d-block mb-1" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Direct Track Record', 'ichapore-swapnapuron'); ?></span>
        <h2 class="h3 fw-extrabold mb-0"><?php esc_html_e('Our Impact So Far', 'ichapore-swapnapuron'); ?></h2>
      </div>

      <div class="row g-3 g-md-4">
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-warning mb-1" style="color:#d48806 !important;">12,500+</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Meals Distributed', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Foil packed hot dinners', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-moss mb-1">40+</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Banquets & Shops', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Active surplus food donors', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-primary mb-1">4</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Railway Stations', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Ichapore, Palta, Barrackpore, Shyamnagar', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-terracotta mb-1">Zero</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Food Wasted', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('From our partnered events', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PROJECT HIGHLIGHTS & PHOTOS -->
  <section class="bg-sand-soft py-5 border-top border-sand-300">
    <div class="container">
      <div class="row g-4 g-lg-5 align-items-center">
        <div class="col-lg-6 order-lg-2">
          <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('How It Works', 'ichapore-swapnapuron'); ?></span>
          <h3 class="display-6 fw-extrabold mb-4"><?php esc_html_e('Project Highlights', 'ichapore-swapnapuron'); ?></h3>
          <ul class="list-unstyled space-y-3 d-flex flex-column gap-3 mb-0">
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Dedicated volunteer helpline for banquet owners, catering services, and community halls.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Strict temperature and hygiene checks ensuring only fresh, safe meals are distributed.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Citizens can celebrate birthdays, wedding anniversaries, or memorials by sponsoring food packages.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Reaching vulnerable pavement elders, destitute mothers, and abandoned vagrants.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Eligible for up to 50% tax benefit under Section 80G.', 'ichapore-swapnapuron'); ?></span>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="rounded-4 overflow-hidden shadow-lg border border-4 border-white">
            <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/tutoring-academy.jpg'); ?>" alt="Swapnapuron volunteers organizing meal distributions" class="w-100 object-fit-cover" style="height: 380px;">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRE-FOOTER BANNER -->
  <section class="py-5">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Zero Hunger', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Help Us Feed A Pavement Elder Tonight', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('Just ₹250 sponsors clean packaging trays, transportation fuel, and drinking water for 10 freshly prepared meals.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-5 py-3 d-inline-flex align-items-center gap-2 shadow">
            <span><?php esc_html_e('Sponsor Foil Meals', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6">favorite</span>
          </a>
          <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2" style="font-size:0.78rem; letter-spacing:0.06em;">
            <span><?php esc_html_e('Join Food Patrol', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6 text-warning">volunteer_activism</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
