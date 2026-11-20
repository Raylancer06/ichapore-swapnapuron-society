<?php
/**
 * Template Name: Project Udaan
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

  <!-- PAGE HEADER -->
  <section class="page-header" style="background: linear-gradient(135deg, #0e1d33 0%, #15181b 100%);">
    <div class="page-header-glow" style="background: rgba(30, 90, 184, 0.35);"></div>
    <div class="container position-relative">
      <div class="breadcrumb-editorial mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-white-50"><?php esc_html_e('Our Projects', 'ichapore-swapnapuron'); ?></span> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php esc_html_e('Project Udaan', 'ichapore-swapnapuron'); ?></span>
      </div>
      <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
        <span class="pulse-dot" style="background-color: #3880ff;"></span>
        <span class="text-uppercase fw-bold text-white small" style="letter-spacing:0.08em;"><?php esc_html_e('Healthcare & Disease Prevention', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-4 fw-extrabold text-uppercase tracking-tight text-white mb-2"><?php esc_html_e('PROJECT UDAAN', 'ichapore-swapnapuron'); ?></h1>
      <h2 class="h3 fw-bold text-warning mb-3"><?php esc_html_e('Your help is crucial in eliminating thalassemia', 'ichapore-swapnapuron'); ?></h2>
      <p class="lead text-light opacity-90 mb-4" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('Udaan is our dedicated mission educating young boys and girls in schools about thalassemia carrier testing, early diagnosis, and preventive health counseling to ensure healthier future generations.', 'ichapore-swapnapuron'); ?>
      </p>

      <div class="d-flex flex-wrap gap-2 gap-sm-3 text-light small fw-semibold pt-1">
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">biotech</span>
          <span><?php esc_html_e('Carrier Screening', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">school</span>
          <span><?php esc_html_e('School Seminars', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">psychology</span>
          <span><?php esc_html_e('Genetic Counseling', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-warning fs-6">bloodtype</span>
          <span><?php esc_html_e('Save Future Lives', 'ichapore-swapnapuron'); ?></span>
        </span>
      </div>
    </div>
  </section>

  <!-- PROJECT OVERVIEW -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4 g-lg-5 align-items-center">
        <div class="col-lg-6">
          <div class="d-inline-flex align-items-center gap-2 text-primary fw-bold text-uppercase mb-2" style="font-size:0.75rem; letter-spacing:0.1em; color:#1e5ab8 !important;">
            <span class="material-symbols-outlined fs-6">bloodtype</span>
            <span><?php esc_html_e('Why Udaan Matters', 'ichapore-swapnapuron'); ?></span>
          </div>
          <h2 class="display-6 fw-extrabold mb-4"><?php esc_html_e('Empowering Youth to Stop a Preventable Disease', 'ichapore-swapnapuron'); ?></h2>
          <p class="text-secondary lh-lg mb-3">
            <?php esc_html_e('The Ichapore Swapnapuron Society is proud to introduce our initiative, Uraan (Udaan), aimed at raising awareness about thalassemia, a genetic blood disorder that affects millions worldwide.', 'ichapore-swapnapuron'); ?>
          </p>
          <p class="text-secondary lh-lg mb-4">
            <?php esc_html_e('Through this project, we are dedicated to educating both boys and girls in various schools about the importance of thalassemia carrier testing and how it can help in identifying and managing the disease. Our commitment begins with informing young individuals about the condition and encouraging them to participate in carrier testing so they can make informed decisions regarding their health and future families.', 'ichapore-swapnapuron'); ?>
          </p>

          <div class="p-3 rounded-4 bg-sand-soft border border-sand-300 d-flex align-items-center gap-3">
            <span class="material-symbols-outlined text-primary fs-2">verified</span>
            <div>
              <div class="fw-bold text-dark"><?php esc_html_e('Pre-Marital & Adolescent Screening', 'ichapore-swapnapuron'); ?></div>
              <small class="text-secondary"><?php esc_html_e('A simple blood test prevents major genetic transmission in future offspring.', 'ichapore-swapnapuron'); ?></small>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="editorial-card shadow-lg">
            <div class="position-relative overflow-hidden" style="height: 380px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/udaan-thalassemia.jpg'); ?>" alt="Thalassemia screening camp by Ichapore Swapnapuron Society" class="w-100 h-100 object-fit-cover" onerror="this.onerror=null; this.src='<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/thalassemia-care.jpg'); ?>';">
            </div>
            <div class="p-4 bg-white border-top border-sand-300">
              <span class="text-uppercase fw-bold text-primary d-block mb-1" style="font-size:0.7rem; letter-spacing:0.08em; color:#1e5ab8 !important;"><?php esc_html_e('School Blood Screening Camps', 'ichapore-swapnapuron'); ?></span>
              <p class="small text-secondary mb-0"><?php esc_html_e('Free HPLC testing camps conducted in partnership with authorized laboratories and clinical experts.', 'ichapore-swapnapuron'); ?></p>
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
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Key Features of Project Udaan', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('Bridging medical science, school education, and clinical diagnosis to protect future generations.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Service 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #eef3ff; color: #1e5ab8;">
              <span class="material-symbols-outlined fs-3">co_present</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('School & College Workshops', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Hosting interactive seminars and science sessions in schools, spreading awareness on causes, inheritance, and prevention.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #fde8e4; color: #d94a38;">
              <span class="material-symbols-outlined fs-3">biotech</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Carrier Testing Camps', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Organizing accessible, certified blood tests to identify thalassemia minor carriers early and clearly explain their reports.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #e8f5e9; color: #2e7d32;">
              <span class="material-symbols-outlined fs-3">diversity_1</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Patient Guidance & Support', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Connecting families of affected children with regular voluntary blood donors, iron chelation resources, and emotional care.', 'ichapore-swapnapuron'); ?>
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
            <div class="stat-number text-primary mb-1">1,200+</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Students Tested', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('HPLC carrier screenings', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-terracotta mb-1">15+</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('School Seminars', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Interactive doctor lectures', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-moss mb-1">85+</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Carriers Identified', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Counseled for safe future', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-success mb-1">100%</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Confidential Care', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Certified medical ethics', 'ichapore-swapnapuron'); ?></span>
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
          <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Program Pillars', 'ichapore-swapnapuron'); ?></span>
          <h3 class="display-6 fw-extrabold mb-4"><?php esc_html_e('Project Highlights', 'ichapore-swapnapuron'); ?></h3>
          <ul class="list-unstyled space-y-3 d-flex flex-column gap-3 mb-0">
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Dedicated focus on secondary school and higher secondary students in their formative years.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Dispelling deep-rooted societal taboos and social stigmas surrounding blood disorders.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Certified pathological tie-ups ensuring gold-standard high performance liquid chromatography testing.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Active collaborations with regional blood banks to help patients requiring periodic transfusions.', 'ichapore-swapnapuron'); ?></span>
            </li>
            <li class="d-flex align-items-start gap-3">
              <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
              <span class="text-secondary"><?php esc_html_e('Eligible for 50% tax exemption under Section 80G.', 'ichapore-swapnapuron'); ?></span>
            </li>
          </ul>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="rounded-4 overflow-hidden shadow-lg border border-4 border-white">
            <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/thalassemia-care.jpg'); ?>" alt="Thalassemia testing camp in Ichapore" class="w-100 object-fit-cover" style="height: 380px;">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRE-FOOTER BANNER -->
  <section class="py-5">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Support Udaan', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Help Us Sponsor School Testing Camps', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('A contribution of ₹500 covers complete carrier screening and medical counseling for two underprivileged school students.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-5 py-3 d-inline-flex align-items-center gap-2 shadow">
            <span><?php esc_html_e('Donate for Testing Camps', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6">favorite</span>
          </a>
          <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2" style="font-size:0.78rem; letter-spacing:0.06em;">
            <span><?php esc_html_e('Volunteer with Udaan', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6 text-primary">volunteer_activism</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
