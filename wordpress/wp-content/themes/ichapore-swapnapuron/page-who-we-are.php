<?php
/**
 * Template Name: Who We Are
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

  <!-- PAGE HEADER -->
  <section class="page-header">
    <div class="page-header-glow"></div>
    <div class="container position-relative">
      <div class="breadcrumb-editorial mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-white-50"><?php esc_html_e('About Us', 'ichapore-swapnapuron'); ?></span> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php esc_html_e('Who We Are', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-5 fw-extrabold text-uppercase tracking-tight text-white mb-3"><?php esc_html_e('Who We Are', 'ichapore-swapnapuron'); ?></h1>
      <p class="lead text-light opacity-90 mb-0" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('Ichapore Swapnapuron Society is a registered non-profit organization working since 2009 for the holistic development of society with a focus on Health, Education, Women Empowerment, Environment Protection, and Animal Welfare.', 'ichapore-swapnapuron'); ?>
      </p>
    </div>
  </section>

  <!-- OUR IDENTITY SECTION -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row align-items-center g-4 g-lg-5">
        <div class="col-lg-6">
          <div class="d-inline-flex align-items-center gap-2 text-terracotta fw-bold text-uppercase mb-2" style="font-size:0.75rem; letter-spacing:0.1em;">
            <span class="material-symbols-outlined fs-6">fingerprint</span>
            <span><?php esc_html_e('Our Identity', 'ichapore-swapnapuron'); ?></span>
          </div>
          <h2 class="display-6 fw-extrabold mb-4"><?php esc_html_e('Born from a Compassionate Community Dream', 'ichapore-swapnapuron'); ?></h2>
          <p class="text-secondary lh-lg mb-3">
            <strong><?php esc_html_e('Ichapore Swapnapuron Society (ISS)', 'ichapore-swapnapuron'); ?></strong> <?php esc_html_e('is a registered voluntary organization founded in 2009 by a group of compassionate individuals from Ichapore and nearby areas who came together with a shared dream – to create a better, healthier, and more equitable society.', 'ichapore-swapnapuron'); ?>
          </p>
          <p class="text-secondary lh-lg mb-4">
            <?php esc_html_e('Over the years, we have grown into a community-driven organization with the active support of volunteers, well-wishers, and partners who believe in our mission. From educating children of daily-wage earners to organizing mobile health clinics, distributing reflective collars for street dogs, and planting saplings for newborns, our grassroots footprint touches lives every single day.', 'ichapore-swapnapuron'); ?>
          </p>

          <div class="row g-3 pt-2">
            <div class="col-sm-6">
              <div class="p-3 rounded-4 bg-sand-soft border border-sand-300">
                <span class="d-block fw-black fs-4 text-terracotta">2009</span>
                <span class="small fw-semibold text-secondary"><?php esc_html_e('Founded at Ichapore Majher Para', 'ichapore-swapnapuron'); ?></span>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="p-3 rounded-4 bg-sand-soft border border-sand-300">
                <span class="d-block fw-black fs-4 text-moss">100%</span>
                <span class="small fw-semibold text-secondary"><?php esc_html_e('Grassroots Community-Led', 'ichapore-swapnapuron'); ?></span>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="editorial-card shadow-lg">
            <div class="position-relative overflow-hidden" style="height: 380px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/tutoring-academy.jpg'); ?>" alt="Ichapore Swapnapuron Society field team and students" class="w-100 h-100 object-fit-cover">
            </div>
            <div class="p-4 bg-white border-top border-sand-300">
              <div class="d-flex align-items-center gap-3">
                <div class="p-2 rounded-circle bg-light text-terracotta">
                  <span class="material-symbols-outlined fs-3">favorite</span>
                </div>
                <div>
                  <h3 class="h6 fw-bold mb-1"><?php esc_html_e('Our Guiding Belief', 'ichapore-swapnapuron'); ?></h3>
                  <p class="small text-secondary mb-0">"<?php esc_html_e('Small steps, when taken together, create lasting impact.', 'ichapore-swapnapuron'); ?>"</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHAT WE DO: 6 CORE FOCUS AREAS -->
  <section class="bg-sand-warm py-5 py-lg-6 border-top border-bottom border-sand-300">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 680px;">
        <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('What We Do', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Six Pillars of Holistic Grassroots Action', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('We work at the grassroots level to bring positive and sustainable change in the communities we serve.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="row g-4">
        <!-- 1. Health -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: var(--terracotta-100); color: var(--terracotta-600);">
              <span class="material-symbols-outlined fs-3">health_and_safety</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Health', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Improving health and well-being through mobile clinics, diagnostic checkups, medicine distribution, and maternal screenings.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- 2. Education -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #e9f2ff; color: #1e5ab8;">
              <span class="material-symbols-outlined fs-3">school</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Education', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Promoting quality remedial coaching, English phonics, school bags, and daily nutritious meals for street children.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- 3. Women Empowerment -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #fdf0f7; color: #a32274;">
              <span class="material-symbols-outlined fs-3">woman</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Women Empowerment', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Empowering women through skill development, menstrual hygiene awareness, sanitary pad support, and maternal care.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- 4. Environment Protection -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: var(--moss-100); color: var(--moss-600);">
              <span class="material-symbols-outlined fs-3">forest</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Environment Protection', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Conserving nature and promoting a greener future through tree saplings for newborns (Janmataru) and plastic cleanups.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- 5. Animal Welfare -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #fff8e6; color: #b87a00;">
              <span class="material-symbols-outlined fs-3">pets</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Animal Welfare', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Working for the care and safety of street animals through high-visibility reflective collars (Ayushman Bhava) and community feeding.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- 6. Community Development -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #f0f7f5; color: #186f65;">
              <span class="material-symbols-outlined fs-3">groups</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Community Development', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Building stronger communities across 110+ slums through emergency winter relief, clean water, and disaster aid.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- OUR APPROACH & OUR BELIEF -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4 g-lg-5 align-items-stretch">
        <!-- Our Belief Callout Card -->
        <div class="col-lg-5">
          <div class="rounded-4 p-4 p-sm-5 h-100 d-flex flex-column justify-content-between text-white" style="background: linear-gradient(145deg, #184c79 0%, #0d2a45 100%);">
            <div>
              <span class="badge rounded-pill bg-light text-dark mb-4 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;">
                <?php esc_html_e('Our Core Belief', 'ichapore-swapnapuron'); ?>
              </span>
              <h3 class="display-6 fw-extrabold lh-sm mb-4">
                "<?php esc_html_e('We believe that small steps, when taken together, can create a big impact and build a better tomorrow for all.', 'ichapore-swapnapuron'); ?>"
              </h3>
            </div>
            <div class="pt-4 border-top border-light border-opacity-25 d-flex align-items-center gap-3">
              <span class="material-symbols-outlined fs-2">diversity_1</span>
              <span class="small fw-semibold opacity-90"><?php esc_html_e('Rooted in Ichapore • Transforming Bengal since 2009', 'ichapore-swapnapuron'); ?></span>
            </div>
          </div>
        </div>

        <!-- Our Approach: 4 Principles -->
        <div class="col-lg-7">
          <div class="d-inline-flex align-items-center gap-2 text-terracotta fw-bold text-uppercase mb-2" style="font-size:0.75rem; letter-spacing:0.1em;">
            <span class="material-symbols-outlined fs-6">alt_route</span>
            <span><?php esc_html_e('Our Approach', 'ichapore-swapnapuron'); ?></span>
          </div>
          <h2 class="h2 fw-extrabold mb-3"><?php esc_html_e('People-Centric & Participatory', 'ichapore-swapnapuron'); ?></h2>
          <p class="text-secondary mb-4"><?php esc_html_e('We follow an inclusive approach in everything we do, ensuring local community members actively shape each intervention.', 'ichapore-swapnapuron'); ?></p>

          <div class="space-y-3 d-flex flex-column gap-3">
            <div class="p-3 p-sm-4 rounded-4 bg-white border border-sand-300 shadow-sm d-flex gap-3 align-items-start">
              <div class="feature-icon-wrap flex-shrink-0 mb-0" style="background: var(--moss-100); color: var(--moss-600); width:44px; height:44px;">
                <span class="material-symbols-outlined fs-5">handshake</span>
              </div>
              <div>
                <h4 class="h6 fw-bold mb-1"><?php esc_html_e('Community First', 'ichapore-swapnapuron'); ?></h4>
                <p class="text-secondary small mb-0"><?php esc_html_e('We listen, learn, and work directly with the community, respecting local needs and voices.', 'ichapore-swapnapuron'); ?></p>
              </div>
            </div>

            <div class="p-3 p-sm-4 rounded-4 bg-white border border-sand-300 shadow-sm d-flex gap-3 align-items-start">
              <div class="feature-icon-wrap flex-shrink-0 mb-0" style="background: var(--terracotta-100); color: var(--terracotta-600); width:44px; height:44px;">
                <span class="material-symbols-outlined fs-5">verified_user</span>
              </div>
              <div>
                <h4 class="h6 fw-bold mb-1"><?php esc_html_e('Transparency & Accountability', 'ichapore-swapnapuron'); ?></h4>
                <p class="text-secondary small mb-0"><?php esc_html_e('We are committed to statutory compliance, CA-audited balance sheets, and open disclosure of funds.', 'ichapore-swapnapuron'); ?></p>
              </div>
            </div>

            <div class="p-3 p-sm-4 rounded-4 bg-white border border-sand-300 shadow-sm d-flex gap-3 align-items-start">
              <div class="feature-icon-wrap flex-shrink-0 mb-0" style="background: #eef3ff; color: #1e5ab8; width:44px; height:44px;">
                <span class="material-symbols-outlined fs-5">autorenew</span>
              </div>
              <div>
                <h4 class="h6 fw-bold mb-1"><?php esc_html_e('Sustainability', 'ichapore-swapnapuron'); ?></h4>
                <p class="text-secondary small mb-0"><?php esc_html_e('We focus on long-term, sustainable solutions rather than temporary band-aids.', 'ichapore-swapnapuron'); ?></p>
              </div>
            </div>

            <div class="p-3 p-sm-4 rounded-4 bg-white border border-sand-300 shadow-sm d-flex gap-3 align-items-start">
              <div class="feature-icon-wrap flex-shrink-0 mb-0" style="background: #fff6eb; color: #c46800; width:44px; height:44px;">
                <span class="material-symbols-outlined fs-5">hub</span>
              </div>
              <div>
                <h4 class="h6 fw-bold mb-1"><?php esc_html_e('Collaboration', 'ichapore-swapnapuron'); ?></h4>
                <p class="text-secondary small mb-0"><?php esc_html_e('We believe in the power of partnerships with doctors, teachers, local leaders, and volunteers.', 'ichapore-swapnapuron'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHERE WE WORK -->
  <section class="bg-sand-soft py-5 border-top border-sand-300">
    <div class="container">
      <div class="bg-white rounded-4 p-4 p-sm-5 border border-sand-300 shadow-sm">
        <div class="row align-items-center g-4">
          <div class="col-lg-7">
            <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Field Footprint', 'ichapore-swapnapuron'); ?></span>
            <h3 class="h3 fw-extrabold mb-3"><?php esc_html_e('Where We Work', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary lh-lg mb-4">
              <?php esc_html_e('We are headquartered at', 'ichapore-swapnapuron'); ?> <strong><?php echo esc_html(swapnapuron_opt('swapnapuron_address', '41 Jatin Das Road, Ichapore Majher Para, North 24 Parganas, West Bengal - 743144')); ?></strong>. <?php esc_html_e('Our direct outreach spans across 110+ slums, railway siding settlements, brick-kiln hamlets, and rural areas across North 24 Parganas, Nadia, and Hooghly districts.', 'ichapore-swapnapuron'); ?>
            </p>
            <div class="d-flex flex-wrap gap-3">
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline-sand rounded-pill px-4 py-2 d-inline-flex align-items-center gap-2">
                <span><?php esc_html_e('View Office Location', 'ichapore-swapnapuron'); ?></span>
                <span class="material-symbols-outlined fs-6">location_on</span>
              </a>
              <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-terracotta rounded-pill px-4 py-2 d-inline-flex align-items-center gap-2">
                <span><?php esc_html_e('Join Our Field Team', 'ichapore-swapnapuron'); ?></span>
                <span class="material-symbols-outlined fs-6">arrow_forward</span>
              </a>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="rounded-4 overflow-hidden border border-sand-300 shadow-sm">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/medical-camp.jpg'); ?>" alt="Medical Camp in North 24 Parganas" class="w-100 object-fit-cover" style="height: 260px;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRE-FOOTER CALLOUT BANNER -->
  <section class="py-5">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Together We Can Make A Difference', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Together, We Can Create A Better Tomorrow', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('Be a part of our journey and help us bring smiles, education, and healthcare to every child and family in need.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2" style="font-size:0.78rem; letter-spacing:0.06em;">
            <span><?php esc_html_e('Get Involved', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6 text-terracotta">volunteer_activism</span>
          </a>
          <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-4 py-3 d-inline-flex align-items-center gap-2 shadow">
            <span><?php esc_html_e('Support With Donation', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6">favorite</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
