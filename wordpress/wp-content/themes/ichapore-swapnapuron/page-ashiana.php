<?php
/**
 * Template Name: Project Ashiana
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

  <!-- PAGE HEADER -->
  <section class="page-header" style="background: linear-gradient(135deg, #0e2920 0%, #15181b 100%);">
    <div class="page-header-glow" style="background: rgba(32, 191, 107, 0.35);"></div>
    <div class="container position-relative">
      <div class="breadcrumb-editorial mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-white-50"><?php esc_html_e('Our Projects', 'ichapore-swapnapuron'); ?></span> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php esc_html_e('Project Ashiana', 'ichapore-swapnapuron'); ?></span>
      </div>
      <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
        <span class="pulse-dot" style="background-color: #20bf6b;"></span>
        <span class="text-uppercase fw-bold text-white small" style="letter-spacing:0.08em;"><?php esc_html_e('Biodiversity & Sparrow Conservation', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-4 fw-extrabold text-uppercase tracking-tight text-white mb-2"><?php esc_html_e('PROJECT ASHIANA', 'ichapore-swapnapuron'); ?></h1>
      <h2 class="h3 fw-bold text-warning mb-3"><?php esc_html_e('Your help is crucial to providing safe havens for birds and saving them from extinction', 'ichapore-swapnapuron'); ?></h2>
      <p class="lead text-light opacity-90 mb-4" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('"Ashiana" means home in Bengali. We install handcrafted earthen nesting pots and clean freshwater troughs on park trees, restoring lost natural habitats and bringing house sparrows back to our towns.', 'ichapore-swapnapuron'); ?>
      </p>

      <div class="d-flex flex-wrap gap-2 gap-sm-3 text-light small fw-semibold pt-1">
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">nest_cam_wired_stand</span>
          <span><?php esc_html_e('Earthen Nests', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">flutter</span>
          <span><?php esc_html_e('Save House Sparrows', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">water_drop</span>
          <span><?php esc_html_e('Summer Water Bowls', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">park</span>
          <span><?php esc_html_e('Tree Sanctuaries', 'ichapore-swapnapuron'); ?></span>
        </span>
      </div>
    </div>
  </section>

  <!-- PROJECT OVERVIEW -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4 g-lg-5 align-items-center">
        <div class="col-lg-6">
          <div class="d-inline-flex align-items-center gap-2 text-success fw-bold text-uppercase mb-2" style="font-size:0.75rem; letter-spacing:0.1em; color:#2e7d32 !important;">
            <span class="material-symbols-outlined fs-6">forest</span>
            <span><?php esc_html_e('Why Ashiana', 'ichapore-swapnapuron'); ?></span>
          </div>
          <h2 class="display-6 fw-extrabold mb-4"><?php esc_html_e('Restoring Lost Habitats in Modern Concrete Towns', 'ichapore-swapnapuron'); ?></h2>
          <p class="text-secondary lh-lg mb-3">
            <?php esc_html_e('Ashiana means home in Bengali; our Ashiana project is to provide homes for birds and save them from extinction. In our country, the number of sparrows has decreased in the past few years, these birds are almost gone in urban areas.', 'ichapore-swapnapuron'); ?>
          </p>
          <p class="text-secondary lh-lg mb-4">
            <?php esc_html_e('In the past there were houses of Kardi Barga in various places and in those houses there were nesting places for these sparrows. Now these old houses are being demolished and modern houses are being built without eaves or safe cavities. Through our Ashiana project, we hang artificial earthen pots on different trees in Ichapur Metal & Steel Factory Park, adjacent to Barakpur Station, so these birds can build nests. As a result, the number of sparrows in our park area has increased as expected.', 'ichapore-swapnapuron'); ?>
          </p>

          <div class="p-3 rounded-4 bg-sand-soft border border-sand-300 d-flex align-items-center gap-3">
            <span class="material-symbols-outlined text-success fs-2">verified</span>
            <div>
              <div class="fw-bold text-dark"><?php esc_html_e('Proven Sparrow Population Recovery', 'ichapore-swapnapuron'); ?></div>
              <small class="text-secondary"><?php esc_html_e('Monitored nesting handis in Ichapur factory park show thriving seasonal chick broods.', 'ichapore-swapnapuron'); ?></small>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="editorial-card shadow-lg">
            <div class="position-relative overflow-hidden" style="height: 380px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/ashiana-birds.jpg'); ?>" alt="Earthen bird nest installed high in trees by Swapnapuron volunteers" class="w-100 h-100 object-fit-cover" onerror="this.onerror=null; this.src='<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/winter-relief.jpg'); ?>';">
            </div>
            <div class="p-4 bg-white border-top border-sand-300">
              <span class="text-uppercase fw-bold text-success d-block mb-1" style="font-size:0.7rem; letter-spacing:0.08em; color:#2e7d32 !important;"><?php esc_html_e('Clay Handi Bird Sanctuaries', 'ichapore-swapnapuron'); ?></span>
              <p class="small text-secondary mb-0"><?php esc_html_e('Hanging calibrated earthen pots with non-abrasive jute ropes on park boughs, complete with water bowls.', 'ichapore-swapnapuron'); ?></p>
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
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Key Highlights of Project Ashiana', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('Re-creating natural ecological niches to shelter avian wildlife amidst expanding urban townships.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Service 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #e8f5e9; color: #2e7d32;">
              <span class="material-symbols-outlined fs-3">nest_cam_wired_stand</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Earthen Nesting Pots', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Custom terracotta pots with calibrated entry openings that shelter small birds from predators and heavy summer squalls.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #eef3ff; color: #1e5ab8;">
              <span class="material-symbols-outlined fs-3">water_drop</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Summer Water & Grain Troughs', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Installed at tree forks and public parks during hot summer months so thirsty birds don\'t perish from heat exhaustion.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #fff8e6; color: #b87a00;">
              <span class="material-symbols-outlined fs-3">groups</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Community & Park Sensitization', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Educating morning walkers and children on keeping water dishes on house balconies and avoiding toxic agricultural pesticides.', 'ichapore-swapnapuron'); ?>
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
            <div class="stat-number text-success mb-1">450+</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Earthen Nests Hung', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Across park & station trees', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-primary mb-1">3</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Public Parks Protected', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Including Ichapore Factory Park', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-moss mb-1">2x</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Sparrow Population Rise', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Observed across green belts', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-terracotta mb-1">100+</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Balcony Adoptions', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Local homes with water pots', 'ichapore-swapnapuron'); ?></span>
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
              <span class="text-secondary"><?php esc_html_e('Securing clay handis securely on leafy branches using non-abrasive, natural jute ropes.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Orientation towards morning sunlight while preventing rainwater entry during monsoon storms.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Monitoring occupied nests to document sparrow and songbird breeding cycles without disturbing chicks.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Conducting tree-climbing maintenance drives before summer to refill fresh water bowls.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Contributions eligible for 50% tax benefit under Section 80G.', 'ichapore-swapnapuron'); ?></span>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="rounded-4 overflow-hidden shadow-lg border border-4 border-white">
            <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/winter-relief.jpg'); ?>" alt="Eco conservation drives by Swapnapuron Society" class="w-100 object-fit-cover" style="height: 380px;">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRE-FOOTER BANNER -->
  <section class="py-5">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Save Urban Wildlife', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Sponsor Earthen Nests for Park Birds', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('Just ₹300 sponsors two handcrafted earthen nesting pots and a dedicated freshwater trough mounted safely on park trees.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-5 py-3 d-inline-flex align-items-center gap-2 shadow">
            <span><?php esc_html_e('Sponsor Bird Nests', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6">favorite</span>
          </a>
          <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2" style="font-size:0.78rem; letter-spacing:0.06em;">
            <span><?php esc_html_e('Join Green Patrol', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6 text-success">park</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
