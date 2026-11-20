<?php
/**
 * The front page template for Ichapore Swapnapuron Society
 *
 * 1-to-1 exact replica of index.html
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$phone1 = swapnapuron_opt('swapnapuron_phone_1', '+91 83360 66390');
$phone2 = swapnapuron_opt('swapnapuron_phone_2', '+91 89183 97307');
$email  = swapnapuron_opt('swapnapuron_email', 'ichaporeswapnapuronsociety@gmail.com');
$addr   = swapnapuron_opt('swapnapuron_address', '41 Jatin Das Road, Ichapore Majher Para, North 24 Parganas, West Bengal');
?>

  <!-- HERO SECTION WITH LIVE WEBSITE VIDEO -->
  <section class="hero-section py-5">
    <video class="hero-video-bg" autoplay muted loop playsinline poster="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/hero-school.jpg'); ?>">
      <source src="https://video.wixstatic.com/video/93f81a_b2f4ab6cc6154cee8f23b067e9e188dd/1080p/mp4/file.mp4" type="video/mp4">
    </video>
    <div class="hero-scrim"></div>

    <div class="container hero-content py-4 py-lg-5">
      <div class="row align-items-center g-5">
        <div class="col-lg-7">
          <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-4" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.22); backdrop-filter: blur(6px);">
            <span class="pulse-dot"></span>
            <span class="text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.1em; color:#fff;"><?php esc_html_e('Ichapore, North 24 Parganas &bull; West Bengal', 'ichapore-swapnapuron'); ?></span>
          </div>

          <h1 class="hero-title text-uppercase mb-4 text-white">
            Bringing <span class="hero-accent">Smiles</span> Through Education
          </h1>

          <p class="lead text-light opacity-90 mb-4" style="max-width: 600px; font-weight: 400;">
            <?php esc_html_e('Empowering marginalized children, women, and communities across 110+ slums through quality education, Thalassemia awareness, women\'s healthcare, and environmental conservation since 2009.', 'ichapore-swapnapuron'); ?>
          </p>

          <div class="d-flex flex-column flex-sm-row gap-3 mb-5">
            <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-terracotta rounded-pill px-4 py-3 d-inline-flex align-items-center justify-content-center gap-2 shadow-lg">
              <span><?php esc_html_e('Get Involved', 'ichapore-swapnapuron'); ?></span>
              <span class="material-symbols-outlined fs-5">volunteer_activism</span>
            </a>
            <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center justify-content-center gap-2" style="font-size:0.78rem; letter-spacing:0.06em;">
              <span><?php esc_html_e('Support Our Mission', 'ichapore-swapnapuron'); ?></span>
              <span class="material-symbols-outlined fs-5 text-terracotta">favorite</span>
            </a>
          </div>

          <div class="row g-3 pt-3 border-top border-light border-opacity-25 text-light small fw-semibold">
            <div class="col-12 col-sm-4 d-flex align-items-center gap-2">
              <span class="material-symbols-outlined text-warning">school</span>
              <span><?php esc_html_e('Street Children Education', 'ichapore-swapnapuron'); ?></span>
            </div>
            <div class="col-12 col-sm-4 d-flex align-items-center gap-2">
              <span class="material-symbols-outlined text-warning">medical_services</span>
              <span><?php esc_html_e('Women & Child Healthcare', 'ichapore-swapnapuron'); ?></span>
            </div>
            <div class="col-12 col-sm-4 d-flex align-items-center gap-2">
              <span class="material-symbols-outlined text-warning">forest</span>
              <span><?php esc_html_e('10 Conservation Programs', 'ichapore-swapnapuron'); ?></span>
            </div>
          </div>
        </div>

        <!-- Side Documentary Card with HD Photo -->
        <div class="col-lg-5 d-none d-md-block">
          <div class="position-relative mx-auto" style="max-width: 420px;">
            <div class="rounded-4 overflow-hidden shadow-lg border border-4 border-white bg-dark">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/hero-school.jpg'); ?>" alt="Children studying happily at Ichapore Swapnapuron Society" class="w-100 object-fit-cover" style="height: 440px;">
            </div>
            <div class="position-absolute bottom-0 start-0 m-3 p-3 rounded-4 bg-white text-dark shadow-lg d-flex align-items-center gap-3" style="max-width: 280px;">
              <div class="rounded-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width:44px; height:44px; background: var(--terracotta-100); color: var(--terracotta-600);">
                <span class="material-symbols-outlined">child_care</span>
              </div>
              <div>
                <div class="fw-black fs-5 lh-1 fw-bold"><?php esc_html_e('60+ Children', 'ichapore-swapnapuron'); ?></div>
                <small class="text-muted fw-medium"><?php esc_html_e('Impacted every year with free education', 'ichapore-swapnapuron'); ?></small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- IMPACT METRICS STRIP -->
  <section class="bg-sand-warm py-5 border-bottom" style="border-color: var(--sand-300) !important;" id="metrics">
    <div class="container">
      <div class="row g-3 g-md-4">
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="stat-card p-4 h-100 d-flex flex-column justify-content-between">
            <div>
              <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.7rem; letter-spacing:0.1em;"><?php esc_html_e('Education', 'ichapore-swapnapuron'); ?></span>
              <div class="stat-number mb-2">60</div>
              <p class="fw-bold mb-0 small"><?php esc_html_e('Children are impacted every year', 'ichapore-swapnapuron'); ?></p>
            </div>
            <p class="text-muted mb-0 mt-3 pt-2 border-top" style="font-size:0.78rem;"><?php esc_html_e('Access to quality education, mentorship, and learning resources.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="stat-card p-4 h-100 d-flex flex-column justify-content-between">
            <div>
              <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.7rem; letter-spacing:0.1em;"><?php esc_html_e('Community Reach', 'ichapore-swapnapuron'); ?></span>
              <div class="stat-number mb-2">110+</div>
              <p class="fw-bold mb-0 small"><?php esc_html_e('Slums are reached out to across the district', 'ichapore-swapnapuron'); ?></p>
            </div>
            <p class="text-muted mb-0 mt-3 pt-2 border-top" style="font-size:0.78rem;"><?php esc_html_e('Grassroots relief, awareness, and community support drives.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="stat-card p-4 h-100 d-flex flex-column justify-content-between">
            <div>
              <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.7rem; letter-spacing:0.1em;"><?php esc_html_e('Healthcare', 'ichapore-swapnapuron'); ?></span>
              <div class="stat-number mb-2">300+</div>
              <p class="fw-bold mb-0 small"><?php esc_html_e('Women\'s health care provided', 'ichapore-swapnapuron'); ?></p>
            </div>
            <p class="text-muted mb-0 mt-3 pt-2 border-top" style="font-size:0.78rem;"><?php esc_html_e('Preventive screenings, maternal care, and essential medicines.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="stat-card p-4 h-100 d-flex flex-column justify-content-between">
            <div>
              <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.7rem; letter-spacing:0.1em;"><?php esc_html_e('Environment', 'ichapore-swapnapuron'); ?></span>
              <div class="stat-number mb-2">10</div>
              <p class="fw-bold mb-0 small"><?php esc_html_e('Conservation Programs', 'ichapore-swapnapuron'); ?></p>
            </div>
            <p class="text-muted mb-0 mt-3 pt-2 border-top" style="font-size:0.78rem;"><?php esc_html_e('Tree plantation, ecological awareness, and green initiatives.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- OUR STORY & WHY TRUST US -->
  <section class="py-5 py-lg-6 border-bottom" style="border-color: var(--sand-300) !important;" id="story">
    <div class="container py-lg-4">
      <div class="row g-4 g-lg-5 align-items-stretch">
        <!-- Our Story -->
        <div class="col-lg-6">
          <div class="editorial-card h-100 d-flex flex-column">
            <div class="card-img-wrap">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/tutoring-academy.jpg'); ?>" alt="Open-air community tutoring session in Ichapore" loading="lazy">
              <span class="badge rounded-pill bg-dark bg-opacity-75 position-absolute top-0 start-0 m-3 px-3 py-2 text-uppercase" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Since 2009', 'ichapore-swapnapuron'); ?></span>
            </div>
            <div class="p-4 p-sm-5 d-flex flex-column justify-content-between flex-grow-1">
              <div>
                <div class="d-flex align-items-center gap-2 text-terracotta fw-bold text-uppercase mb-2" style="font-size:0.72rem; letter-spacing:0.08em;">
                  <span class="material-symbols-outlined fs-6">history_edu</span>
                  <span><?php esc_html_e('Our Story', 'ichapore-swapnapuron'); ?></span>
                </div>
                <h2 class="h3 fw-extrabold mb-3"><?php esc_html_e('A Decade & More of Grassroots Transformation', 'ichapore-swapnapuron'); ?></h2>
                <p class="text-secondary lh-lg mb-4">
                  <?php esc_html_e('Founded in 2009 by a group of passionate individuals committed to creating positive change, the Ichapore Swapnapuron Society has been at the forefront of social transformation in our community.', 'ichapore-swapnapuron'); ?>
                </p>
              </div>
              <div>
                <a href="<?php echo esc_url(home_url('/who-we-are')); ?>" class="text-decoration-none fw-bold text-uppercase text-terracotta d-inline-flex align-items-center gap-1" style="font-size:0.78rem; letter-spacing:0.06em;">
                  <span><?php esc_html_e('Read More About Us', 'ichapore-swapnapuron'); ?></span>
                  <span class="material-symbols-outlined fs-6">arrow_forward</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Why Trust Us -->
        <div class="col-lg-6">
          <div class="editorial-card h-100 d-flex flex-column">
            <div class="card-img-wrap">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/medical-camp.jpg'); ?>" alt="Community healthcare camp in rural Bengal" loading="lazy">
              <span class="badge rounded-pill bg-success position-absolute top-0 start-0 m-3 px-3 py-2 text-uppercase" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Good Governance', 'ichapore-swapnapuron'); ?></span>
            </div>
            <div class="p-4 p-sm-5 d-flex flex-column justify-content-between flex-grow-1">
              <div>
                <div class="d-flex align-items-center gap-2 text-moss fw-bold text-uppercase mb-2" style="font-size:0.72rem; letter-spacing:0.08em;">
                  <span class="material-symbols-outlined fs-6">verified_user</span>
                  <span><?php esc_html_e('Why Trust Us', 'ichapore-swapnapuron'); ?></span>
                </div>
                <h2 class="h3 fw-extrabold mb-3"><?php esc_html_e('Credibility, Accountability & Transparency', 'ichapore-swapnapuron'); ?></h2>
                <p class="text-secondary lh-lg mb-4">
                  <?php esc_html_e('Credibility and accountability have always been the benchmark for Ichapore Swapnapuron Society and are achieved through the promotion of principles of good governance in the processes and practices.', 'ichapore-swapnapuron'); ?>
                </p>
              </div>
              <div>
                <a href="<?php echo esc_url(home_url('/why-trust-us')); ?>" class="text-decoration-none fw-bold text-uppercase text-terracotta d-inline-flex align-items-center gap-1" style="font-size:0.78rem; letter-spacing:0.06em;">
                  <span><?php esc_html_e('Read Why Trust Us', 'ichapore-swapnapuron'); ?></span>
                  <span class="material-symbols-outlined fs-6">arrow_forward</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VISION & MISSION -->
  <section class="bg-sand-soft py-5 border-bottom" style="border-color: var(--sand-300) !important;" id="vision-mission">
    <div class="container py-lg-4">
      <div class="text-center mx-auto mb-5" style="max-width: 680px;">
        <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Purpose & Direction', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold"><?php esc_html_e('Our Vision & Mission', 'ichapore-swapnapuron'); ?></h2>
      </div>

      <div class="row g-4">
        <div class="col-md-6">
          <div class="bg-white rounded-4 p-4 p-sm-5 border h-100 shadow-sm" style="border-color: var(--sand-300) !important;">
            <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width:48px; height:48px; background: var(--terracotta-100); color: var(--terracotta-600);">
              <span class="material-symbols-outlined">visibility</span>
            </div>
            <h3 class="h4 fw-extrabold text-capitalize mb-3"><?php esc_html_e('Vision', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary lh-lg mb-4">
              <?php esc_html_e('At Ichapore Swapnapuron Society, our vision is to cultivate a compassionate and equitable society where every child has access to quality education, every woman enjoys optimal health, and every living being is treated with kindness and respect.', 'ichapore-swapnapuron'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/mission-vision')); ?>" class="text-decoration-none fw-bold text-uppercase text-terracotta small d-inline-flex align-items-center gap-1">
              <span><?php esc_html_e('Explore Full Mission & Vision', 'ichapore-swapnapuron'); ?></span>
              <span class="material-symbols-outlined fs-6">arrow_forward</span>
            </a>
          </div>
        </div>

        <div class="col-md-6">
          <div class="bg-white rounded-4 p-4 p-sm-5 border h-100 shadow-sm" style="border-color: var(--sand-300) !important;">
            <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width:48px; height:48px; background: #e8f3ec; color: var(--moss-600);">
              <span class="material-symbols-outlined">flag</span>
            </div>
            <h3 class="h4 fw-extrabold mb-3"><?php esc_html_e('Mission', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary lh-lg mb-4">
              <?php esc_html_e('Our mission is to uplift and empower marginalized individuals and communities through targeted initiatives that focus on Education for Street Children: providing street children with access to quality education, mentorship, and resources that enable them to break the cycle of poverty and realize their full potential.', 'ichapore-swapnapuron'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/mission-vision')); ?>" class="text-decoration-none fw-bold text-uppercase text-terracotta small d-inline-flex align-items-center gap-1">
              <span><?php esc_html_e('Explore Full Mission & Vision', 'ichapore-swapnapuron'); ?></span>
              <span class="material-symbols-outlined fs-6">arrow_forward</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- UPCOMING EVENTS & FLAGSHIP INITIATIVES -->
  <section class="py-5 border-bottom" style="border-color: var(--sand-300) !important;" id="events">
    <div class="container py-lg-4">
      <div class="row align-items-end mb-5 g-3">
        <div class="col-lg-8">
          <div class="d-inline-flex align-items-center gap-2 text-terracotta fw-bold text-uppercase mb-2" style="font-size:0.75rem; letter-spacing:0.1em;">
            <span class="material-symbols-outlined fs-6">event_available</span>
            <span><?php esc_html_e('Upcoming Events & Flagship Campaigns', 'ichapore-swapnapuron'); ?></span>
          </div>
          <h2 class="display-6 fw-extrabold mb-0"><?php esc_html_e('Join Our Active Community Drives', 'ichapore-swapnapuron'); ?></h2>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-outline-sand rounded-pill px-4 py-2">
            <?php esc_html_e('Get Involved', 'ichapore-swapnapuron'); ?>
          </a>
        </div>
      </div>

      <div class="row g-4">
        <!-- Event 1: Let's Stop Thalassemia -->
        <div class="col-md-6">
          <div class="editorial-card h-100 d-flex flex-column">
            <div class="card-img-wrap" style="height: 280px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/thalassemia-care.jpg'); ?>" alt="Let's Stop Thalassemia - Udaan Initiative" loading="lazy">
              <span class="badge rounded-pill bg-danger position-absolute top-0 start-0 m-3 px-3 py-2 text-uppercase" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Project Udaan • Healthcare', 'ichapore-swapnapuron'); ?></span>
            </div>
            <div class="p-4 p-sm-5 d-flex flex-column justify-content-between flex-grow-1">
              <div>
                <h3 class="h3 fw-extrabold mb-3"><?php esc_html_e('Let\'s Stop Thalassemia', 'ichapore-swapnapuron'); ?></h3>
                <p class="text-secondary lh-lg mb-4">
                  <?php esc_html_e('Our flagship Thalassemia awareness, screening, and patient support initiative. Join us in spreading awareness, facilitating carrier testing, and supporting children fighting Thalassemia.', 'ichapore-swapnapuron'); ?>
                </p>
              </div>
              <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 pt-3 border-top">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-terracotta rounded-pill px-4 py-2 d-inline-flex align-items-center gap-2">
                  <span><?php esc_html_e('Join with Us', 'ichapore-swapnapuron'); ?></span>
                  <span class="material-symbols-outlined fs-6">arrow_forward</span>
                </a>
                <a href="<?php echo esc_url(home_url('/donate')); ?>" class="text-decoration-none fw-bold text-dark small"><?php esc_html_e('Support Udaan →', 'ichapore-swapnapuron'); ?></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Event 2: Smile with Santa -->
        <div class="col-md-6">
          <div class="editorial-card h-100 d-flex flex-column">
            <div class="card-img-wrap" style="height: 280px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/winter-relief.jpg'); ?>" alt="Smile with Santa - Winter Relief and Joy" loading="lazy">
              <span class="badge rounded-pill bg-dark position-absolute top-0 start-0 m-3 px-3 py-2 text-uppercase" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Winter Relief • Project Smile', 'ichapore-swapnapuron'); ?></span>
            </div>
            <div class="p-4 p-sm-5 d-flex flex-column justify-content-between flex-grow-1">
              <div>
                <h3 class="h3 fw-extrabold mb-2"><?php esc_html_e('Smile with Santa', 'ichapore-swapnapuron'); ?></h3>
                <p class="fst-italic text-terracotta fw-semibold small mb-3">
                  "It's not how much we give but how much love we put into giving"
                </p>
                <p class="text-secondary lh-lg mb-4">
                  <?php esc_html_e('Bringing warmth, blankets, gifts, and festive joy to underprivileged children and families across our community during the winter season.', 'ichapore-swapnapuron'); ?>
                </p>
              </div>
              <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 pt-3 border-top">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-terracotta rounded-pill px-4 py-2 d-inline-flex align-items-center gap-2">
                  <span><?php esc_html_e('Join with Us', 'ichapore-swapnapuron'); ?></span>
                  <span class="material-symbols-outlined fs-6">arrow_forward</span>
                </a>
                <a href="<?php echo esc_url(home_url('/donate')); ?>" class="text-decoration-none fw-bold text-dark small"><?php esc_html_e('Gift Warmth →', 'ichapore-swapnapuron'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW YOU CAN HELP / VOLUNTEER -->
  <section class="bg-sand-warm py-5 border-bottom" style="border-color: var(--sand-300) !important;" id="volunteer">
    <div class="container py-lg-4">
      <div class="bg-white rounded-4 p-4 p-sm-5 shadow-lg border" style="border-color: var(--sand-300) !important;">
        <div class="row g-4 g-lg-5 align-items-center">
          <div class="col-lg-7">
            <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('How You Can Help', 'ichapore-swapnapuron'); ?></span>
            <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Volunteer to Serve, Spread Some Smiles!', 'ichapore-swapnapuron'); ?></h2>
            <p class="text-secondary lh-lg mb-4">
              <?php esc_html_e('Ichapore Swapnapuron Society believes that unless members of the civil society are involved proactively in the process of development, sustainable change will not happen. We encourage and invite individuals for volunteer opportunities and volunteer registration, to be an active part of our organization and share the same vision and purpose as us – to work for the welfare of children and their families.', 'ichapore-swapnapuron'); ?>
            </p>
            <p class="text-secondary lh-lg mb-4">
              <?php esc_html_e('Volunteers are the backbone of every organization – they not only carry the organization’s ideals within them, but also spread the message far and beyond, sensitizing the society towards the cause.', 'ichapore-swapnapuron'); ?>
            </p>
            <div class="d-flex flex-wrap gap-3">
              <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-terracotta rounded-pill px-4 py-3 d-inline-flex align-items-center gap-2">
                <span><?php esc_html_e('Join Us as a Volunteer', 'ichapore-swapnapuron'); ?></span>
                <span class="material-symbols-outlined fs-6">arrow_forward</span>
              </a>
              <?php $ig_link = swapnapuron_opt('swapnapuron_instagram', 'https://www.instagram.com/ichaporeswapnapuronsociety'); ?>
              <?php if ($ig_link): ?>
                <a href="<?php echo esc_url($ig_link); ?>" target="_blank" rel="noopener" class="btn btn-outline-sand rounded-pill px-4 py-3 d-inline-flex align-items-center gap-2">
                  <span><?php esc_html_e('Follow Us on Instagram', 'ichapore-swapnapuron'); ?></span>
                  <span class="material-symbols-outlined fs-6">photo_camera</span>
                </a>
              <?php endif; ?>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="rounded-4 overflow-hidden shadow-sm border">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/hero-school.jpg'); ?>" alt="Volunteers and students at Ichapore Swapnapuron Society" class="w-100 object-fit-cover" style="height: 360px;" loading="lazy">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DIRECT DONATION SECTION -->
  <section class="bg-charcoal py-5" id="donate">
    <div class="container py-lg-4" style="max-width: 880px;">
      <div class="text-center mb-5">
        <span class="badge rounded-pill px-3 py-2 mb-3 text-uppercase" style="background: var(--charcoal-800); border: 1px solid var(--charcoal-700); color:#fbe7e4; letter-spacing:0.08em;">
          <?php esc_html_e('Direct Community Support', 'ichapore-swapnapuron'); ?>
        </span>
        <h2 class="display-5 fw-black text-white mb-3"><?php esc_html_e('Make a Contribution Today', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-light opacity-75 mx-auto" style="max-width: 600px;">
          <?php esc_html_e('Every contribution directly supports street children\'s education, Thalassemia awareness & patient aid, women\'s healthcare, and seasonal relief drives.', 'ichapore-swapnapuron'); ?>
        </p>
      </div>

      <div class="bg-white text-dark rounded-4 p-4 p-sm-5 shadow-lg position-relative swapnapuron-donation-widget" data-initiative="General Frontline Fund">
        <!-- Frequency Selector & Badge -->
        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3 pb-4 border-bottom">
          <div class="freq-pill d-inline-flex">
            <button type="button" class="freq-btn active" id="freq-monthly" onclick="setHomeFreq('monthly')"><?php esc_html_e('Monthly Support', 'ichapore-swapnapuron'); ?></button>
            <button type="button" class="freq-btn" id="freq-once" onclick="setHomeFreq('once')"><?php esc_html_e('One-Time Gift', 'ichapore-swapnapuron'); ?></button>
          </div>
          <div class="d-flex align-items-center gap-1 text-moss fw-semibold small">
            <span class="material-symbols-outlined fs-6">verified</span>
            <span><?php esc_html_e('Official Society Portal &bull; Section 80G Certified', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>

        <!-- Amount Selection Cards -->
        <div class="my-4">
          <label class="form-label text-uppercase fw-bold small text-secondary d-flex justify-content-between align-items-center mb-2">
            <span><?php esc_html_e('Select Contribution Amount (INR)', 'ichapore-swapnapuron'); ?></span>
            <span class="text-terracotta fw-bold small" id="home-sustainer-label"><?php esc_html_e('Monthly Sustainer', 'ichapore-swapnapuron'); ?></span>
          </label>
          <div class="row g-2 g-sm-3 mb-3">
            <div class="col-6 col-sm-3">
              <button type="button" class="w-100 amount-btn donation-tier-btn active fs-5" data-amount="500" onclick="selectHomeAmount(500, this)">
                <span class="d-block fw-extrabold amount-val">₹500</span>
                <span class="d-block text-muted amount-desc" style="font-size:0.7rem; font-weight:normal;">Nutrition &amp; Meds</span>
              </button>
            </div>
            <div class="col-6 col-sm-3">
              <button type="button" class="w-100 amount-btn donation-tier-btn fs-5" data-amount="1500" onclick="selectHomeAmount(1500, this)">
                <span class="d-block fw-extrabold amount-val">₹1,500</span>
                <span class="d-block text-muted amount-desc" style="font-size:0.7rem; font-weight:normal;">School Bags &amp; Kits</span>
              </button>
            </div>
            <div class="col-6 col-sm-3">
              <button type="button" class="w-100 amount-btn donation-tier-btn fs-5" data-amount="2500" onclick="selectHomeAmount(2500, this)">
                <span class="d-block fw-extrabold amount-val">₹2,500</span>
                <span class="d-block text-muted amount-desc" style="font-size:0.7rem; font-weight:normal;">Health &amp; Dog Collars</span>
              </button>
            </div>
            <div class="col-6 col-sm-3">
              <button type="button" class="w-100 amount-btn donation-tier-btn fs-5" data-amount="5000" onclick="selectHomeAmount(5000, this)">
                <span class="d-block fw-extrabold amount-val">₹5,000</span>
                <span class="d-block text-muted amount-desc" style="font-size:0.7rem; font-weight:normal;">Thalassemia &amp; Camps</span>
              </button>
            </div>
          </div>

          <!-- Custom Amount Input -->
          <div class="input-group input-group-lg">
            <span class="input-group-text bg-light fw-bold text-dark border-end-0">₹ INR</span>
            <input type="number" min="10" id="swapnapuron-custom-amount" class="form-control border-start-0 ps-0 fw-bold" placeholder="<?php esc_attr_e('Or enter custom amount in INR', 'ichapore-swapnapuron'); ?>" value="500" oninput="handleHomeCustomAmount(this.value)">
          </div>
        </div>

        <!-- Live Impact Banner -->
        <div class="p-3 rounded-3 d-flex align-items-start gap-3 mb-4" style="background: var(--terracotta-50); border: 1px solid var(--terracotta-100);">
          <span class="material-symbols-outlined text-terracotta fs-4 mt-1">volunteer_activism</span>
          <div>
            <span class="d-block text-uppercase fw-bold text-terracotta" style="font-size:0.72rem; letter-spacing:0.06em;"><?php esc_html_e('Your Direct Impact', 'ichapore-swapnapuron'); ?></span>
            <p class="mb-0 small fw-medium" id="impact-description">
              <strong>₹500</strong> supports learning materials, notebooks, and mentorship for street children in our education program.
            </p>
          </div>
        </div>

        <!-- Donor Information Fields -->
        <div class="donor-details-section pt-3 border-top mb-4">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <span class="fw-bold small text-uppercase text-secondary" style="letter-spacing:0.06em;"><?php esc_html_e('Donor Information (For 80G Tax Receipt)', 'ichapore-swapnapuron'); ?></span>
            <span class="badge rounded-pill bg-light text-muted border" style="font-size:0.68rem;"><?php esc_html_e('50% Tax Deduction', 'ichapore-swapnapuron'); ?></span>
          </div>

          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label small fw-bold text-secondary mb-1"><?php esc_html_e('Full Name *', 'ichapore-swapnapuron'); ?></label>
              <input type="text" id="donor_name" class="form-control" placeholder="<?php esc_attr_e('e.g. Sourav Mukherjee', 'ichapore-swapnapuron'); ?>" required>
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-bold text-secondary mb-1"><?php esc_html_e('Email Address *', 'ichapore-swapnapuron'); ?></label>
              <input type="email" id="donor_email" class="form-control" placeholder="<?php esc_attr_e('name@example.com', 'ichapore-swapnapuron'); ?>" required>
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-bold text-secondary mb-1"><?php esc_html_e('WhatsApp / Mobile Number *', 'ichapore-swapnapuron'); ?></label>
              <input type="tel" id="donor_phone" class="form-control" placeholder="<?php esc_attr_e('+91 98765 43210', 'ichapore-swapnapuron'); ?>" required>
            </div>
            <div class="col-md-6">
              <label class="form-label small fw-bold text-secondary mb-1"><?php esc_html_e('PAN Number (Optional, for Form 10BE)', 'ichapore-swapnapuron'); ?></label>
              <input type="text" id="donor_pan" class="form-control text-uppercase" placeholder="<?php esc_attr_e('ABCDE1234F', 'ichapore-swapnapuron'); ?>" maxlength="10">
            </div>
            <div class="col-12">
              <input type="hidden" id="donor_address" value="Bengal Supporter">
              <div class="form-check mt-1">
                <input class="form-check-input" type="checkbox" id="claim_80g" checked>
                <label class="form-check-label small text-secondary" for="claim_80g">
                  <?php esc_html_e('I require an Indian Income Tax Section 80G Tax Exemption Certificate.', 'ichapore-swapnapuron'); ?>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- Action Buttons & Subtext -->
        <div class="d-flex flex-column gap-3">
          <button type="button" id="btn-submit-donation" class="btn btn-terracotta rounded-pill px-5 py-3 w-100 fw-bold d-inline-flex align-items-center justify-content-center gap-2 shadow text-white" style="font-size:1.05rem;">
            <span class="material-symbols-outlined fs-5">lock</span>
            <span><?php esc_html_e('Donate Securely', 'ichapore-swapnapuron'); ?> ₹<span id="display-btn-amount">500</span> <span id="display-btn-freq">(Monthly)</span></span>
            <span class="material-symbols-outlined fs-6">arrow_forward</span>
          </button>
          
          <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 small text-muted">
            <span class="d-inline-flex align-items-center gap-1">
              <span class="material-symbols-outlined text-moss fs-6">shield</span>
              <span><?php esc_html_e('Supports UPI (GPay, PhonePe, Paytm), Cards & Netbanking', 'ichapore-swapnapuron'); ?></span>
            </span>
            <a href="<?php echo esc_url(home_url('/donate')); ?>" class="text-terracotta fw-semibold text-decoration-underline">
              <?php esc_html_e('Prefer Direct UPI QR Code / Bank Wire? &rarr;', 'ichapore-swapnapuron'); ?>
            </a>
          </div>
        </div>

        <!-- Notice Alert for Simulation/Success -->
        <div id="home-donate-notice" class="alert alert-success mt-4 mb-0 rounded-4 d-none" role="alert"></div>

        <!-- Modal for 80G Receipt Display -->
        <div id="swapnapuron-receipt-modal" class="swapnapuron-modal" style="display:none;">
          <div class="swapnapuron-modal-content">
            <span class="swapnapuron-modal-close" onclick="document.getElementById('swapnapuron-receipt-modal').style.display='none'">&times;</span>
            <div id="swapnapuron-receipt-body"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT INFORMATION SECTION -->
  <section class="bg-sand-soft py-5 border-bottom" style="border-color: var(--sand-300) !important;" id="contact">
    <div class="container py-lg-4">
      <div class="row g-4 g-lg-5 align-items-start">
        <div class="col-lg-5">
          <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Reach Out', 'ichapore-swapnapuron'); ?></span>
          <h2 class="display-6 fw-extrabold mb-4"><?php esc_html_e('Contact Information', 'ichapore-swapnapuron'); ?></h2>

          <div class="space-y-3 d-flex flex-column gap-3">
            <div class="bg-white rounded-4 p-4 border shadow-sm" style="border-color: var(--sand-300) !important;">
              <h3 class="h6 fw-bold text-uppercase text-terracotta mb-2"><?php esc_html_e('Address', 'ichapore-swapnapuron'); ?></h3>
              <p class="mb-0 text-secondary"><?php echo esc_html($addr); ?></p>
            </div>

            <div class="bg-white rounded-4 p-4 border shadow-sm" style="border-color: var(--sand-300) !important;">
              <h3 class="h6 fw-bold text-uppercase text-terracotta mb-2"><?php esc_html_e('Phone', 'ichapore-swapnapuron'); ?></h3>
              <div class="d-flex flex-column gap-1">
                <?php if ($phone1): ?>
                  <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone1)); ?>" class="text-decoration-none text-dark fw-semibold"><?php echo esc_html($phone1); ?></a>
                <?php endif; ?>
                <?php if ($phone2): ?>
                  <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone2)); ?>" class="text-decoration-none text-dark fw-semibold"><?php echo esc_html($phone2); ?></a>
                <?php endif; ?>
              </div>
            </div>

            <div class="bg-white rounded-4 p-4 border shadow-sm" style="border-color: var(--sand-300) !important;">
              <h3 class="h6 fw-bold text-uppercase text-terracotta mb-2"><?php esc_html_e('Email', 'ichapore-swapnapuron'); ?></h3>
              <a href="mailto:<?php echo esc_attr($email); ?>" class="text-decoration-none text-dark fw-semibold text-break">
                <?php echo esc_html($email); ?>
              </a>
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="bg-white rounded-4 p-4 p-sm-5 border shadow-sm" style="border-color: var(--sand-300) !important;">
            <h3 class="h4 fw-extrabold mb-1"><?php esc_html_e('Send Us a Message', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-muted small mb-4"><?php esc_html_e('Have questions about volunteering, donations, or community programs? Write to us directly.', 'ichapore-swapnapuron'); ?></p>
            <form id="contact-form" onsubmit="handleHomeContactSubmit(event)">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label class="form-label small fw-bold text-uppercase text-secondary"><?php esc_html_e('First Name *', 'ichapore-swapnapuron'); ?></label>
                  <input type="text" class="form-control" placeholder="First name" required>
                </div>
                <div class="col-sm-6">
                  <label class="form-label small fw-bold text-uppercase text-secondary"><?php esc_html_e('Last Name *', 'ichapore-swapnapuron'); ?></label>
                  <input type="text" class="form-control" placeholder="Last name" required>
                </div>
                <div class="col-sm-6">
                  <label class="form-label small fw-bold text-uppercase text-secondary"><?php esc_html_e('Email *', 'ichapore-swapnapuron'); ?></label>
                  <input type="email" class="form-control" placeholder="you@example.com" required>
                </div>
                <div class="col-sm-6">
                  <label class="form-label small fw-bold text-uppercase text-secondary"><?php esc_html_e('Phone *', 'ichapore-swapnapuron'); ?></label>
                  <input type="tel" class="form-control" placeholder="+91 98000 00000" required>
                </div>
                <div class="col-12">
                  <label class="form-label small fw-bold text-uppercase text-secondary"><?php esc_html_e('Address', 'ichapore-swapnapuron'); ?></label>
                  <input type="text" class="form-control" placeholder="Your city / neighborhood">
                </div>
                <div class="col-12">
                  <label class="form-label small fw-bold text-uppercase text-secondary"><?php esc_html_e('Additional Information', 'ichapore-swapnapuron'); ?></label>
                  <textarea class="form-control" rows="4" placeholder="Tell us how you would like to connect or help..."></textarea>
                </div>
                <div class="col-12 pt-2">
                  <button type="submit" class="btn btn-dark rounded-pill px-5 py-3 fw-bold text-uppercase w-100 w-sm-auto" style="font-size:0.78rem; letter-spacing:0.06em;">
                    <?php esc_html_e('Submit Message', 'ichapore-swapnapuron'); ?>
                  </button>
                </div>
              </div>
              <div id="contact-success" class="alert alert-success mt-3 mb-0 d-none" role="alert">
                <?php esc_html_e('Thank you for reaching out! Our team will contact you shortly, or you can call us at +91 83360 66390.', 'ichapore-swapnapuron'); ?>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    const impactDescriptions = {
      500: "<strong>₹500</strong> supports learning materials, notebooks, and mentorship for street children in our education program.",
      1500: "<strong>₹1,500</strong> helps fund Thalassemia awareness, screening, and patient support under Project Udaan.",
      2500: "<strong>₹2,500</strong> supports women's preventive health checkups and essential medicines in underserved communities.",
      5000: "<strong>₹5,000</strong> powers community-wide winter relief kits (Smile with Santa) and outreach across slum clusters."
    };

    let homeAmount = 500;
    let homeFreq = 'monthly';

    function updateHomeDonateUI() {
      const displayAmt = document.getElementById('display-btn-amount');
      if (displayAmt) displayAmt.textContent = Number(homeAmount).toLocaleString('en-IN');
      
      const displayFreq = document.getElementById('display-btn-freq');
      if (displayFreq) displayFreq.textContent = homeFreq === 'monthly' ? '(Monthly)' : '(One-Time)';

      const sustainerLabel = document.getElementById('home-sustainer-label');
      if (sustainerLabel) sustainerLabel.textContent = homeFreq === 'monthly' ? '<?php echo esc_js(__('Monthly Sustainer', 'ichapore-swapnapuron')); ?>' : '<?php echo esc_js(__('One-Time Contribution', 'ichapore-swapnapuron')); ?>';

      const customInput = document.getElementById('swapnapuron-custom-amount');
      if (customInput && customInput.value != homeAmount) {
        customInput.value = homeAmount;
      }
    }

    function selectHomeAmount(amt, el) {
      homeAmount = amt;
      document.querySelectorAll('.amount-btn').forEach(btn => btn.classList.remove('active'));
      if (el) el.classList.add('active');
      const desc = document.getElementById('impact-description');
      if (desc && impactDescriptions[amt]) desc.innerHTML = impactDescriptions[amt];
      updateHomeDonateUI();
    }

    function handleHomeCustomAmount(val) {
      const amt = parseInt(val, 10);
      if (!amt || amt <= 0) return;
      homeAmount = amt;
      document.querySelectorAll('.amount-btn').forEach(btn => {
        if (btn.getAttribute('data-amount') == amt) {
          btn.classList.add('active');
        } else {
          btn.classList.remove('active');
        }
      });
      const desc = document.getElementById('impact-description');
      if (desc) {
        desc.innerHTML = `<strong>₹${amt.toLocaleString('en-IN')}</strong> will directly support Ichapore Swapnapuron Society's education, healthcare, and community relief programs.`;
      }
      const displayAmt = document.getElementById('display-btn-amount');
      if (displayAmt) displayAmt.textContent = Number(amt).toLocaleString('en-IN');
    }

    function setHomeFreq(type) {
      homeFreq = type;
      document.getElementById('freq-monthly').classList.toggle('active', type === 'monthly');
      document.getElementById('freq-once').classList.toggle('active', type === 'once');
      updateHomeDonateUI();
    }

    document.addEventListener('DOMContentLoaded', function() {
      const submitBtn = document.getElementById('btn-submit-donation');
      if (submitBtn) {
        submitBtn.addEventListener('click', function(e) {
          if (window.swapnapuronDonationData) {
            // Handled by donation.js Razorpay logic
            return;
          }
          e.preventDefault();
          const name = document.getElementById('donor_name')?.value?.trim();
          const email = document.getElementById('donor_email')?.value?.trim();
          const phone = document.getElementById('donor_phone')?.value?.trim();
          if (!name || !email || !phone) {
            alert('Please provide your Full Name, Email, and Phone number.');
            return;
          }
          const notice = document.getElementById('home-donate-notice');
          if (notice) {
            notice.innerHTML = `<div class="d-flex align-items-start gap-2"><span class="material-symbols-outlined text-success fs-4">check_circle</span><div><h5 class="h6 fw-bold mb-1">Thank you, ${name}!</h5><p class="small mb-1">Your pledge of <strong>₹${Number(homeAmount).toLocaleString('en-IN')} (${homeFreq})</strong> has been registered. Please complete payment using UPI ID: <strong>ichaporeswapnapuronsociety@pnb</strong> or Bank Transfer to PNB A/C: <strong>2101002100009707</strong>.</p><p class="small text-muted mb-0">Your 80G certificate will be dispatched to <strong>${email}</strong>.</p></div></div>`;
            notice.classList.remove('d-none');
            notice.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
          }
        });
      }
    });

    function handleHomeContactSubmit(e) {
      e.preventDefault();
      document.getElementById('contact-success').classList.remove('d-none');
      e.target.reset();
    }
  </script>

<?php
get_footer();
