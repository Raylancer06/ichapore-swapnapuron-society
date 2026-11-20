<?php
/**
 * Template Name: Swasthya Chakra
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

  <!-- PAGE HEADER -->
  <section class="page-header" style="background: linear-gradient(135deg, #0e2417 0%, #12181b 100%);">
    <div class="page-header-glow" style="background: rgba(47, 109, 72, 0.35);"></div>
    <div class="container position-relative">
      <div class="breadcrumb-editorial mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-white-50"><?php esc_html_e('Our Projects', 'ichapore-swapnapuron'); ?></span> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php esc_html_e('Swasthya Chakra', 'ichapore-swapnapuron'); ?></span>
      </div>
      <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
        <span class="pulse-dot" style="background-color: #2ed573;"></span>
        <span class="text-uppercase fw-bold text-white small" style="letter-spacing:0.08em;"><?php esc_html_e('Mobile Healthcare Initiative', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-4 fw-extrabold text-uppercase tracking-tight text-white mb-3"><?php esc_html_e('Swasthya Chakra', 'ichapore-swapnapuron'); ?></h1>
      <p class="lead text-light opacity-90 mb-4" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('Swasthya Chakra is our mobile healthcare initiative bringing quality medical care, clinical screenings, and free medicines right to the doorstep of underserved slum communities.', 'ichapore-swapnapuron'); ?>
      </p>

      <div class="d-flex flex-wrap gap-2 gap-sm-3 text-light small fw-semibold pt-1">
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-success fs-6">medical_services</span>
          <span><?php esc_html_e('Preventive Care', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-success fs-6">door_front</span>
          <span><?php esc_html_e('Accessible For All', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-success fs-6">groups</span>
          <span><?php esc_html_e('Healthy Slums', 'ichapore-swapnapuron'); ?></span>
        </span>
      </div>
    </div>
  </section>

  <!-- PROJECT OVERVIEW -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4 g-lg-5 align-items-center">
        <div class="col-lg-6">
          <div class="d-inline-flex align-items-center gap-2 text-moss fw-bold text-uppercase mb-2" style="font-size:0.75rem; letter-spacing:0.1em;">
            <span class="material-symbols-outlined fs-6">ambulance</span>
            <span><?php esc_html_e('Project Overview', 'ichapore-swapnapuron'); ?></span>
          </div>
          <h2 class="display-6 fw-extrabold mb-4"><?php esc_html_e('Doctor at Your Doorstep When Distance Blocks Care', 'ichapore-swapnapuron'); ?></h2>
          <p class="text-secondary lh-lg mb-3">
            <strong><?php esc_html_e('Swasthya Chakra', 'ichapore-swapnapuron'); ?></strong> <?php esc_html_e('is a fully equipped mobile health unit and dedicated clinical camp that travels across remote, neglected, and impoverished slum hamlets throughout North 24 Parganas to deliver essential healthcare services.', 'ichapore-swapnapuron'); ?>
          </p>
          <p class="text-secondary lh-lg mb-4">
            <?php esc_html_e('Our mission is to ensure that no mother, child, or elder is deprived of primary healthcare due to physical distance, transport costs, or lack of financial means. By bringing licensed medical professionals and diagnostics right into village courtyards, we diagnose hypertension, diabetes, and infections before they turn catastrophic.', 'ichapore-swapnapuron'); ?>
          </p>

          <div class="p-3 rounded-4 bg-sand-soft border border-sand-300 d-flex align-items-center gap-3">
            <span class="material-symbols-outlined text-moss fs-2">verified</span>
            <div>
              <div class="fw-bold text-dark"><?php esc_html_e('Zero-Cost Primary Consultation', 'ichapore-swapnapuron'); ?></div>
              <small class="text-secondary"><?php esc_html_e('Free vital checks, eye screening, and essential medicines distributed on-spot.', 'ichapore-swapnapuron'); ?></small>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="editorial-card shadow-lg">
            <div class="position-relative overflow-hidden" style="height: 380px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/swasthya chakra/02.avif'); ?>" alt="Swasthya Chakra Mobile Healthcare Unit" class="w-100 h-100 object-fit-cover" onerror="this.onerror=null; this.src='<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/medical-camp.jpg'); ?>';">
            </div>
            <div class="p-4 bg-white border-top border-sand-300">
              <span class="text-uppercase fw-bold text-moss d-block mb-1" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Mobile Outreach Van', 'ichapore-swapnapuron'); ?></span>
              <p class="small text-secondary mb-0"><?php esc_html_e('Reaching unpaved settlement roads where ambulance services rarely venture.', 'ichapore-swapnapuron'); ?></p>
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
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Key Services We Provide', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('Comprehensive frontline healthcare delivered with compassion, dignity, and clinical accuracy.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="row g-4 justify-content-center">
        <!-- Service 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: var(--moss-100); color: var(--moss-600);">
              <span class="material-symbols-outlined fs-3">stethoscope</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('General Consultation', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Comprehensive OPD consultation and patient examinations conducted by registered doctors.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #eef3ff; color: #1e5ab8;">
              <span class="material-symbols-outlined fs-3">assignment_turned_in</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Health Check-ups', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Regular blood pressure monitoring, blood sugar testing, ECG triage, vision tests, and vital signs screening.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: var(--terracotta-100); color: var(--terracotta-600);">
              <span class="material-symbols-outlined fs-3">biotech</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Diagnostics', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Point-of-care rapid diagnostics and subsidized lab partnerships ensuring timely detection of anemia and chronic conditions.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Service 4 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #fff6eb; color: #c46800;">
              <span class="material-symbols-outlined fs-3">pill</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Medicine Distribution', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Free distribution of doctor-prescribed essential antibiotics, iron & folic acid syrups, antacids, and vitamins.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Service 5 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #fdf0f7; color: #a32274;">
              <span class="material-symbols-outlined fs-3">diversity_1</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Health Awareness', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Community workshops on drinking water safety, menstrual hygiene, balanced nutrition, and Thalassemia carrier prevention.', 'ichapore-swapnapuron'); ?>
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
            <div class="stat-number text-moss mb-1">495</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('People Reached', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Individual clinical visits', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-terracotta mb-1">12</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Health Check-up Camps', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Conducted on field', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-primary mb-1">220</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Women & Children', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Provided specialized care', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-success mb-1">10+</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Awareness Sessions', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Hygiene & disease prevention', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRE-FOOTER BANNER -->
  <section class="py-5 bg-sand-soft border-top border-sand-300">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Support Healthcare', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Sponsor A Slum Medical Camp', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('Just ₹2,500 funds medical diagnostic strips, doctor travel, and basic pharmaceuticals for an entire afternoon clinical camp.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-5 py-3 d-inline-flex align-items-center gap-2 shadow">
            <span><?php esc_html_e('Support A Medical Camp', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6">favorite</span>
          </a>
          <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2" style="font-size:0.78rem; letter-spacing:0.06em;">
            <span><?php esc_html_e('Volunteer As Doctor / Nurse', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6 text-moss">medical_services</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
