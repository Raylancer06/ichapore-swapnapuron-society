<?php
/**
 * Template Name: Vidharthi
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

  <!-- PAGE HEADER -->
  <section class="page-header" style="background: linear-gradient(135deg, #102619 0%, #15181b 100%);">
    <div class="page-header-glow" style="background: rgba(39, 174, 96, 0.35);"></div>
    <div class="container position-relative">
      <div class="breadcrumb-editorial mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-white-50"><?php esc_html_e('Our Projects', 'ichapore-swapnapuron'); ?></span> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php esc_html_e('Vidharthi', 'ichapore-swapnapuron'); ?></span>
      </div>
      <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
        <span class="pulse-dot" style="background-color: #2ecc71;"></span>
        <span class="text-uppercase fw-bold text-white small" style="letter-spacing:0.08em;"><?php esc_html_e('Child Education & Empowerment', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-4 fw-extrabold text-uppercase tracking-tight text-white mb-2"><?php esc_html_e('VIDHARTHI', 'ichapore-swapnapuron'); ?></h1>
      <h2 class="h3 fw-bold text-warning mb-3"><?php esc_html_e('Your support is crucial to ensuring education for all', 'ichapore-swapnapuron'); ?></h2>
      <p class="lead text-light opacity-90 mb-4" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('Vidharthi distributes essential school bags, notebooks, pens, and learning materials completely free of charge to underprivileged street children, empowering them to pursue their education without interruption.', 'ichapore-swapnapuron'); ?>
      </p>

      <div class="d-flex flex-wrap gap-2 gap-sm-3 text-light small fw-semibold pt-1">
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">school</span>
          <span><?php esc_html_e('Free School Kits', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">menu_book</span>
          <span><?php esc_html_e('Notebooks & Pens', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">backpack</span>
          <span><?php esc_html_e('Durable Bags', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">favorite</span>
          <span><?php esc_html_e('Break Poverty Cycle', 'ichapore-swapnapuron'); ?></span>
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
            <span class="material-symbols-outlined fs-6">local_library</span>
            <span><?php esc_html_e('Why Vidharthi', 'ichapore-swapnapuron'); ?></span>
          </div>
          <h2 class="display-6 fw-extrabold mb-4"><?php esc_html_e('Empowering Street Children with the Tools to Learn', 'ichapore-swapnapuron'); ?></h2>
          <p class="text-secondary lh-lg mb-3">
            <?php esc_html_e('Our project, Vidharthi, is a dedicated initiative aimed at supporting the education of underprivileged street children who often face significant barriers to learning.', 'ichapore-swapnapuron'); ?>
          </p>
          <p class="text-secondary lh-lg mb-4">
            <?php esc_html_e('Recognizing that these children are the future of our society, we believe that equitable access to educational resources is essential. To this end, we are committed to distributing essential school supplies completely free of charge, including School Bags, Notebooks, Pens, Pencil Boxes, and other related materials. This initiative not only empowers these children with the tools they need for basic education but also serves as a lifeline for their families, helping to break the cycle of poverty.', 'ichapore-swapnapuron'); ?>
          </p>

          <div class="p-3 rounded-4 bg-sand-soft border border-sand-300 d-flex align-items-center gap-3">
            <span class="material-symbols-outlined text-success fs-2">verified</span>
            <div>
              <div class="fw-bold text-dark"><?php esc_html_e('Zero-Cost Educational Supplies', 'ichapore-swapnapuron'); ?></div>
              <small class="text-secondary"><?php esc_html_e('Providing an environment where every child can dream big and pursue schooling.', 'ichapore-swapnapuron'); ?></small>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="editorial-card shadow-lg">
            <div class="position-relative overflow-hidden" style="height: 380px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/vidharthi-education.jpg'); ?>" alt="Vidharthi school supplies distribution drive" class="w-100 h-100 object-fit-cover" onerror="this.onerror=null; this.src='<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/hero-school.jpg'); ?>';">
            </div>
            <div class="p-4 bg-white border-top border-sand-300">
              <span class="text-uppercase fw-bold text-success d-block mb-1" style="font-size:0.7rem; letter-spacing:0.08em; color:#2e7d32 !important;"><?php esc_html_e('Tools for Tomorrow', 'ichapore-swapnapuron'); ?></span>
              <p class="small text-secondary mb-0"><?php esc_html_e('Distributing new backpacks, stationery sets, and textbooks to street children across local primary schools.', 'ichapore-swapnapuron'); ?></p>
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
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Key Highlights of Project Vidharthi', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('Providing comprehensive academic resources so no child\'s education is interrupted by economic hardship.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Service 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #e8f5e9; color: #2e7d32;">
              <span class="material-symbols-outlined fs-3">backpack</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Free Backpacks & Kits', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Durable, water-resistant school bags fitted with pencil cases, pens, pencils, erasers, and rulers.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #eef3ff; color: #1e5ab8;">
              <span class="material-symbols-outlined fs-3">menu_book</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Notebooks & Textbooks', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Distributing lined and plain exercise books, syllabus readers, and bilingual learning guides for all classes.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #fff8e6; color: #b87a00;">
              <span class="material-symbols-outlined fs-3">history_edu</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Evening Study Circles', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Volunteer mentors tutor first-generation learners, helping with homework, literacy, and exam confidence.', 'ichapore-swapnapuron'); ?>
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
            <div class="stat-number text-success mb-1">850+</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Students Equipped', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Complete annual kits', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-terracotta mb-1">2,500+</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Notebooks Given', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Free study material', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-primary mb-1">10+</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Partner Schools', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Local primary schools', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-moss mb-1">0%</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Dropout Rate', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Among mentored students', 'ichapore-swapnapuron'); ?></span>
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
              <span class="text-secondary"><?php esc_html_e('Direct identification of children whose parents face extreme economic vulnerability.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Providing quality, durable school supplies so children feel dignity among peers.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Consistent academic tracking, parent counseling, and moral encouragement.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Promoting girls\' education to break generational poverty and early dropouts.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Contributions eligible for 50% tax benefit under Section 80G.', 'ichapore-swapnapuron'); ?></span>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="rounded-4 overflow-hidden shadow-lg border border-4 border-white">
            <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/hero-school.jpg'); ?>" alt="Children happily studying with new school kits" class="w-100 object-fit-cover" style="height: 380px;">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRE-FOOTER BANNER -->
  <section class="py-5">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Support Education', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Sponsor A Child\'s School Kit', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('A contribution of ₹500 provides a student with a complete annual kit: school bag, notebooks, pencil box, and stationery.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-5 py-3 d-inline-flex align-items-center gap-2 shadow">
            <span><?php esc_html_e('Sponsor a School Kit (₹500)', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6">favorite</span>
          </a>
          <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2" style="font-size:0.78rem; letter-spacing:0.06em;">
            <span><?php esc_html_e('Teach & Tutor', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6 text-success">school</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
