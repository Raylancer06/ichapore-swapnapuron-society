<?php
/**
 * Template Name: Smile with Santa
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

  <!-- PAGE HEADER -->
  <section class="page-header" style="background: linear-gradient(135deg, #2c1214 0%, #15181b 100%);">
    <div class="page-header-glow" style="background: rgba(220, 62, 38, 0.35);"></div>
    <div class="container position-relative">
      <div class="breadcrumb-editorial mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-white-50"><?php esc_html_e('Our Projects', 'ichapore-swapnapuron'); ?></span> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php esc_html_e('Smile with Santa', 'ichapore-swapnapuron'); ?></span>
      </div>
      <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
        <span class="pulse-dot" style="background-color: #ff5252;"></span>
        <span class="text-uppercase fw-bold text-white small" style="letter-spacing:0.08em;"><?php esc_html_e('Child Welfare & Winter Joy', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-4 fw-extrabold text-uppercase tracking-tight text-white mb-2"><?php esc_html_e('SMILE WITH SANTA', 'ichapore-swapnapuron'); ?></h1>
      <h2 class="h3 fw-bold text-warning mb-3"><?php esc_html_e('Santa Claus is anyone who loves another and seeks to make them happy', 'ichapore-swapnapuron'); ?></h2>
      <p class="lead text-light opacity-90 mb-4" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('We have often heard in our childhood that Santa Claus brings joy and gifts to children. With this initiative, we ensure street children experience this warmth, receiving woolens, learning toys, and holiday meals.', 'ichapore-swapnapuron'); ?>
      </p>

      <div class="d-flex flex-wrap gap-2 gap-sm-3 text-light small fw-semibold pt-1">
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">sentiment_satisfied</span>
          <span><?php esc_html_e('Spreading Joy', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">redeem</span>
          <span><?php esc_html_e('Gift Hampers', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">ac_unit</span>
          <span><?php esc_html_e('Warm Sweaters', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">favorite</span>
          <span><?php esc_html_e('Compassion in Action', 'ichapore-swapnapuron'); ?></span>
        </span>
      </div>
    </div>
  </section>

  <!-- PROJECT OVERVIEW -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4 g-lg-5 align-items-center">
        <div class="col-lg-6">
          <div class="d-inline-flex align-items-center gap-2 text-terracotta fw-bold text-uppercase mb-2" style="font-size:0.75rem; letter-spacing:0.1em;">
            <span class="material-symbols-outlined fs-6">volunteer_activism</span>
            <span><?php esc_html_e('Why Smile', 'ichapore-swapnapuron'); ?></span>
          </div>
          <h2 class="display-6 fw-extrabold mb-4"><?php esc_html_e('No Child Should Be Deprived of Happiness', 'ichapore-swapnapuron'); ?></h2>
          <p class="text-secondary lh-lg mb-3">
            <?php esc_html_e('We have often heard in our childhood that Santa Claus brings joy and gifts to children. With this initiative, we aim to ensure that street children also experience this joy and receive gifts. It is essential that these underprivileged children are not deprived of happiness and presents on this special day.', 'ichapore-swapnapuron'); ?>
          </p>
          <p class="text-secondary lh-lg mb-4">
            <?php esc_html_e('On this special occasion, our Santa Claus delivers numerous gifts to underprivileged children. Our initiative, named Smile, aims to bring joy and happiness to these children, allowing them to celebrate this day with a sense of delight and a bright smile.', 'ichapore-swapnapuron'); ?>
          </p>

          <div class="p-3 rounded-4 bg-sand-soft border border-sand-300 d-flex align-items-center gap-3">
            <span class="material-symbols-outlined text-terracotta fs-2">format_quote</span>
            <div>
              <div class="fw-bold text-dark">"<?php esc_html_e('There is only one happiness in life, to love and be loved.', 'ichapore-swapnapuron'); ?>"</div>
              <small class="text-secondary"><?php esc_html_e('Core belief of Ichapore Swapnapuron Society\'s Smile Mission.', 'ichapore-swapnapuron'); ?></small>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="editorial-card shadow-lg">
            <div class="position-relative overflow-hidden" style="height: 380px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/happy-santa.jpg'); ?>" alt="Santa Claus delivering gifts to street children" class="w-100 h-100 object-fit-cover" onerror="this.onerror=null; this.src='<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/winter-relief.jpg'); ?>';">
            </div>
            <div class="p-4 bg-white border-top border-sand-300">
              <span class="text-uppercase fw-bold text-terracotta d-block mb-1" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Winter Gift Delivery', 'ichapore-swapnapuron'); ?></span>
              <p class="small text-secondary mb-0"><?php esc_html_e('Delivering holiday hampers, new sweaters, drawing books, and wholesome meals to slum children in Ichapore, Barrackpore, and nearby stations.', 'ichapore-swapnapuron'); ?></p>
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
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Key Highlights of Project Smile', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('Direct grassroots support delivering warmth, learning, and nutrition to vulnerable street kids.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Service 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: var(--terracotta-100); color: var(--terracotta-600);">
              <span class="material-symbols-outlined fs-3">styler</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Winter Woolens & Sweaters', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Brand new warm sweaters, socks, monkey caps, and blankets distributed before peak December and January cold spells.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #fff8e6; color: #b87a00;">
              <span class="material-symbols-outlined fs-3">toys</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Toys & Creative Kits', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Coloring books, wax crayons, storybooks, and interactive toys designed to spark childhood wonder and creativity.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #eef3ff; color: #1e5ab8;">
              <span class="material-symbols-outlined fs-3">bakery_dining</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Festive Feasts & Sweets', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Fresh fruit hampers, nutritious cooked meals, cakes, and sweets shared in a loving, dignified community atmosphere.', 'ichapore-swapnapuron'); ?>
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
            <div class="stat-number text-terracotta mb-1">350+</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Children Gifted', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Holiday hampers delivered', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-moss mb-1">500+</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Woolens Distributed', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Sweaters, caps & blankets', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-primary mb-1">8</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Slum Settlements', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('In Ichapore & Barrackpore', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-success mb-1">100%</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Volunteer Driven', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Youth & community members', 'ichapore-swapnapuron'); ?></span>
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
              <span class="text-secondary"><?php esc_html_e('Delivering warm sweaters, caps, and socks to protect little ones from freezing winter nights.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Custom educational gift packs containing drawing books, crayons, and interactive puzzles.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Direct personal visits to railway platform dwellers, roadside shanties, and remote brickfield families.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Encouraging neighborhood youth to dress up as Santa and personally share holiday cheer.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Contributions eligible for up to 50% tax exemption under Section 80G.', 'ichapore-swapnapuron'); ?></span>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="rounded-4 overflow-hidden shadow-lg border border-4 border-white">
            <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/winter-relief.jpg'); ?>" alt="Winter relief drive by Ichapore Swapnapuron Society" class="w-100 object-fit-cover" style="height: 380px;">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRE-FOOTER BANNER -->
  <section class="py-5">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Act Now', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Bring a Smile to a Child\'s Face Today', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('Your small contribution provides a complete winter package: cozy sweater, educational toys, sweets, and warm food. Contributions eligible for 80G tax benefit.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-5 py-3 d-inline-flex align-items-center gap-2 shadow">
            <span><?php esc_html_e('Support Project Smile', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6">favorite</span>
          </a>
          <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2" style="font-size:0.78rem; letter-spacing:0.06em;">
            <span><?php esc_html_e('Become a Secret Santa', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6 text-warning">volunteer_activism</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
