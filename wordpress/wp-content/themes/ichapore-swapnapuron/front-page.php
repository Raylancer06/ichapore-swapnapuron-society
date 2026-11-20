<?php
/**
 * The front page template for Ichapore Swapnapuron Society
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

  <!-- HERO SECTION -->
  <section class="hero-section position-relative overflow-hidden text-white d-flex align-items-center" style="min-height: 85vh; background-color: var(--charcoal-950);">
    <!-- Background Video -->
    <video autoplay muted loop playsinline class="hero-video-bg position-absolute w-100 h-100 object-fit-cover" style="inset:0; z-index:0; opacity: 0.35;">
      <source src="https://video.wixstatic.com/video/93f81a_b378051771194380a0684f85e49c7f1a/1080p/mp4/file.mp4" type="video/mp4">
    </video>

    <!-- Scrim -->
    <div class="position-absolute w-100 h-100" style="inset:0; z-index:1; background: linear-gradient(105deg, rgba(11, 16, 18, 0.94) 0%, rgba(18, 24, 27, 0.82) 55%, rgba(18, 24, 27, 0.6) 100%);"></div>

    <div class="container position-relative py-5 my-lg-4" style="z-index: 2;">
      <div class="row align-items-center g-5">
        <!-- Hero Text (Left) -->
        <div class="col-lg-7">
          <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill mb-3" style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.18);">
            <span class="pulse-dot"></span>
            <span class="text-uppercase fw-bold text-white small" style="letter-spacing:0.08em;"><?php esc_html_e('Non-Profit Society &bull; Reg: S0011507', 'ichapore-swapnapuron'); ?></span>
          </div>

          <h1 class="display-3 fw-extrabold text-uppercase tracking-tight text-white mb-3 lh-sm" style="font-weight: 900; letter-spacing: -0.02em;">
            <?php esc_html_e('Bringing Smiles Through Action & Compassion', 'ichapore-swapnapuron'); ?>
          </h1>

          <p class="lead text-light opacity-90 mb-4" style="max-width: 620px; font-weight: 400; font-size: 1.15rem; line-height: 1.7;">
            <?php esc_html_e('From free primary schooling and night hunger rescue to thalassemia carrier testing and stray animal safety, Ichapore Swapnapuron Society transforms vulnerable lives across West Bengal.', 'ichapore-swapnapuron'); ?>
          </p>

          <div class="d-flex flex-wrap gap-3 mb-4">
            <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta btn-lg rounded-pill px-5 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2 shadow-lg" style="font-size:0.85rem; letter-spacing:0.05em;">
              <span><?php esc_html_e('Donate Now (80G Benefit)', 'ichapore-swapnapuron'); ?></span>
              <span class="material-symbols-outlined fs-5">arrow_forward</span>
            </a>
            <a href="#projects" class="btn btn-outline-light btn-lg rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2" style="font-size:0.85rem; letter-spacing:0.05em;">
              <span><?php esc_html_e('Explore Initiatives', 'ichapore-swapnapuron'); ?></span>
              <span class="material-symbols-outlined fs-5">expand_more</span>
            </a>
          </div>

          <div class="d-flex flex-wrap gap-2 gap-sm-3 text-light small fw-semibold pt-1">
            <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
              <span class="material-symbols-outlined text-warning fs-6">verified</span>
              <span>50% Tax Exemption (80G)</span>
            </span>
            <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
              <span class="material-symbols-outlined text-warning fs-6">volunteer_activism</span>
              <span>100% Volunteer Driven</span>
            </span>
            <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
              <span class="material-symbols-outlined text-warning fs-6">diversity_3</span>
              <span>25,000+ Lives Reached</span>
            </span>
          </div>
        </div>

        <!-- Floating Quick Impact Card (Right) -->
        <div class="col-lg-5">
          <div class="p-4 p-sm-5 rounded-4 shadow-2xl text-white position-relative overflow-hidden" style="background: rgba(18, 24, 27, 0.88); backdrop-filter: blur(16px); border: 1px solid rgba(255,255,255,0.15); box-shadow: 0 25px 50px -12px rgba(0,0,0,0.7);">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <span class="badge rounded-pill bg-warning text-dark fw-bold px-3 py-1.5 small text-uppercase" style="letter-spacing:0.06em;">Quick Contribution</span>
              <span class="text-white-50 small"><i class="material-symbols-outlined fs-6 align-middle text-success">lock</i> SSL Encrypted</span>
            </div>
            <h3 class="h4 fw-extrabold text-white mb-2">Fuel Grassroots Relief</h3>
            <p class="text-white-50 small mb-4">Every rupee directly funds school bags, thalassemia carrier tests, and animal safety collars.</p>

            <div class="row g-2 mb-3">
              <div class="col-4">
                <a href="<?php echo esc_url(home_url('/donate?amount=500')); ?>" class="btn btn-outline-light w-100 rounded-3 py-2 text-center text-decoration-none">
                  <strong class="d-block fs-6">₹500</strong>
                  <span class="small text-white-50" style="font-size:0.68rem;">1 Child Kit</span>
                </a>
              </div>
              <div class="col-4">
                <a href="<?php echo esc_url(home_url('/donate?amount=1000')); ?>" class="btn btn-outline-light w-100 rounded-3 py-2 text-center text-decoration-none">
                  <strong class="d-block fs-6">₹1,000</strong>
                  <span class="small text-white-50" style="font-size:0.68rem;">2 Students</span>
                </a>
              </div>
              <div class="col-4">
                <a href="<?php echo esc_url(home_url('/donate?amount=2500')); ?>" class="btn btn-warning w-100 rounded-3 py-2 text-center text-dark fw-bold text-decoration-none">
                  <strong class="d-block fs-6">₹2,500</strong>
                  <span class="small text-dark" style="font-size:0.68rem;">Health Camp</span>
                </a>
              </div>
            </div>

            <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta btn-lg w-100 rounded-pill py-3 fw-bold text-uppercase d-flex align-items-center justify-content-center gap-2 shadow">
              <span>Donate Online with UPI / Cards</span>
              <span class="material-symbols-outlined fs-5">arrow_forward</span>
            </a>

            <div class="text-center mt-3">
              <span class="text-white-50" style="font-size:0.75rem;">Immediate 80G Tax Exemption Receipt (Form 10BE)</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- IMPACT TICKER BAR -->
  <section class="py-3 bg-charcoal text-white border-bottom border-secondary border-opacity-25" style="background-color: var(--charcoal-900);">
    <div class="container">
      <div class="row g-3 text-center align-items-center">
        <div class="col-6 col-md-3">
          <div class="fw-extrabold fs-4 text-warning">25,000+</div>
          <div class="small text-white-50 text-uppercase" style="font-size:0.7rem; letter-spacing:0.06em;"><?php esc_html_e('Beneficiaries Touched', 'ichapore-swapnapuron'); ?></div>
        </div>
        <div class="col-6 col-md-3">
          <div class="fw-extrabold fs-4 text-white">15+ Years</div>
          <div class="small text-white-50 text-uppercase" style="font-size:0.7rem; letter-spacing:0.06em;"><?php esc_html_e('Grassroots Track Record', 'ichapore-swapnapuron'); ?></div>
        </div>
        <div class="col-6 col-md-3">
          <div class="fw-extrabold fs-4 text-warning">80G &bull; 12A</div>
          <div class="small text-white-50 text-uppercase" style="font-size:0.7rem; letter-spacing:0.06em;"><?php esc_html_e('Government Certified', 'ichapore-swapnapuron'); ?></div>
        </div>
        <div class="col-6 col-md-3">
          <div class="fw-extrabold fs-4 text-white">100% Direct</div>
          <div class="small text-white-50 text-uppercase" style="font-size:0.7rem; letter-spacing:0.06em;"><?php esc_html_e('Field Delivery', 'ichapore-swapnapuron'); ?></div>
        </div>
      </div>
    </div>
  </section>

  <!-- OUR PROJECTS GRID (WITH 100% RELIABLE FALLBACK) -->
  <section class="py-5 py-lg-6" id="projects" style="background-color: var(--sand-50);">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 680px;">
        <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Our Active Programs', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Grassroots Action Across Bengal', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('Every initiative tackles an acute humanitarian or ecological crisis with hands-on volunteer action.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="row g-4">
        <?php
        $projects_query = new WP_Query(array(
            'post_type'      => 'project',
            'posts_per_page' => 9,
            'orderby'        => 'menu_order',
            'order'          => 'ASC'
        ));

        if ($projects_query->have_posts()):
            while ($projects_query->have_posts()): $projects_query->the_post();
                $slug = get_post_field('post_name', get_the_ID());
                $badge = get_post_meta(get_the_ID(), '_project_badge', true) ?: __('Active Initiative', 'ichapore-swapnapuron');
                $img_url = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium_large') : swapnapuron_get_project_image($slug);
        ?>
          <div class="col-md-6 col-lg-4">
            <div class="editorial-card h-100 d-flex flex-column justify-content-between">
              <div class="card-img-wrap position-relative">
                <img src="<?php echo esc_url($img_url); ?>" class="w-100 h-100 object-fit-cover" alt="<?php the_title_attribute(); ?>" loading="lazy">
                <span class="badge position-absolute top-0 end-0 m-3 bg-charcoal text-white small px-2.5 py-1 rounded-pill shadow-sm"><?php echo esc_html($badge); ?></span>
              </div>
              <div class="p-4 bg-white d-flex flex-column justify-content-between flex-grow-1">
                <div>
                  <h3 class="h5 fw-bold mb-2">
                    <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none hover-terracotta"><?php the_title(); ?></a>
                  </h3>
                  <p class="small text-secondary mb-3 lh-base">
                    <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                  </p>
                </div>
                <div class="pt-3 border-top border-sand-200 d-flex align-items-center justify-content-between">
                  <a href="<?php the_permalink(); ?>" class="text-terracotta fw-bold small text-decoration-none d-inline-flex align-items-center gap-1">
                    <span><?php esc_html_e('View Blueprint', 'ichapore-swapnapuron'); ?></span>
                    <span class="material-symbols-outlined fs-6">arrow_forward</span>
                  </a>
                  <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-sm btn-terracotta rounded-pill px-3 py-1 font-weight-bold" style="font-size:0.75rem;">
                    <?php esc_html_e('Donate', 'ichapore-swapnapuron'); ?>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else:
            // High-quality static fallback for all 8 initiatives
            $default_projects = array(
                array(
                    'slug'  => 'swasthya-chakra',
                    'title' => 'Swasthya Chakra',
                    'badge' => 'Healthcare & Medical Outreach',
                    'desc'  => 'Delivering free doctor consultations, screenings, ECGs, and vital medicines to underserved slum families.',
                ),
                array(
                    'slug'  => 'janmataru',
                    'title' => 'Janmataru',
                    'badge' => 'Afforestation Initiative',
                    'desc'  => 'Planting dedicated saplings for birthdays and anniversaries, turning climate action into cherished relationships.',
                ),
                array(
                    'slug'  => 'ayushman-bhava',
                    'title' => 'Ayushman Bhava',
                    'badge' => 'Animal Safety & Welfare',
                    'desc'  => 'Fitting durable reflective collars on highway street dogs to eliminate fatal nocturnal road accidents.',
                ),
                array(
                    'slug'  => 'happy',
                    'title' => 'Smile with Santa',
                    'badge' => 'Childhood Joy & Winter Relief',
                    'desc'  => 'Distributing warm woollen sweaters, blankets, storybooks, and holiday gift hampers to pavement children.',
                ),
                array(
                    'slug'  => 'udaan',
                    'title' => 'Project Udaan',
                    'badge' => 'Thalassemia Prevention',
                    'desc'  => 'School carrier blood testing, pre-marital counselling, and blood donor drives to eliminate Thalassemia.',
                ),
                array(
                    'slug'  => 'anandadhara',
                    'title' => 'Anandadhara',
                    'badge' => 'Food Rescue & Zero Hunger',
                    'desc'  => 'Hygienic surplus banquet food rescue and midnight warm meal delivery to hungry railway platform families.',
                ),
                array(
                    'slug'  => 'vidharthi',
                    'title' => 'Vidharthi',
                    'badge' => 'Mission Education',
                    'desc'  => 'School supplies, textbooks, geometry kits, and evening remedial tutoring for marginalized slum children.',
                ),
                array(
                    'slug'  => 'ashiana',
                    'title' => 'Project Ashiana',
                    'badge' => 'Bird Protection & Ecology',
                    'desc'  => 'Handcrafted clay nesting handis and freshwater feeders hung across urban trees to save sparrow biodiversity.',
                ),
            );

            foreach ($default_projects as $dp):
                $img_url = swapnapuron_get_project_image($dp['slug']);
                $link = esc_url(home_url('/project/' . $dp['slug'] . '/'));
        ?>
          <div class="col-md-6 col-lg-4">
            <div class="editorial-card h-100 d-flex flex-column justify-content-between">
              <div class="card-img-wrap position-relative">
                <img src="<?php echo esc_url($img_url); ?>" class="w-100 h-100 object-fit-cover" alt="<?php echo esc_attr($dp['title']); ?>" loading="lazy">
                <span class="badge position-absolute top-0 end-0 m-3 bg-charcoal text-white small px-2.5 py-1 rounded-pill shadow-sm"><?php echo esc_html($dp['badge']); ?></span>
              </div>
              <div class="p-4 bg-white d-flex flex-column justify-content-between flex-grow-1">
                <div>
                  <h3 class="h5 fw-bold mb-2">
                    <a href="<?php echo $link; ?>" class="text-dark text-decoration-none hover-terracotta"><?php echo esc_html($dp['title']); ?></a>
                  </h3>
                  <p class="small text-secondary mb-3 lh-base">
                    <?php echo esc_html($dp['desc']); ?>
                  </p>
                </div>
                <div class="pt-3 border-top border-sand-200 d-flex align-items-center justify-content-between">
                  <a href="<?php echo $link; ?>" class="text-terracotta fw-bold small text-decoration-none d-inline-flex align-items-center gap-1">
                    <span><?php esc_html_e('View Blueprint', 'ichapore-swapnapuron'); ?></span>
                    <span class="material-symbols-outlined fs-6">arrow_forward</span>
                  </a>
                  <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-sm btn-terracotta rounded-pill px-3 py-1 font-weight-bold" style="font-size:0.75rem;">
                    <?php esc_html_e('Donate', 'ichapore-swapnapuron'); ?>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php
            endforeach;
        endif;
        ?>
      </div>
    </div>
  </section>

  <!-- IMPACT METRICS STRIP -->
  <section class="bg-sand-warm py-5 border-top border-bottom border-sand-300">
    <div class="container">
      <div class="row g-3 g-md-4">
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="stat-card p-4 h-100 d-flex flex-column justify-content-between">
            <div>
              <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.7rem; letter-spacing:0.1em;">Education</span>
              <div class="stat-number mb-2">60</div>
              <p class="fw-bold mb-0 small">Children are impacted every year</p>
            </div>
            <p class="text-muted mb-0 mt-3 pt-2 border-top" style="font-size:0.78rem;">Access to quality education, mentorship, and learning resources.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="stat-card p-4 h-100 d-flex flex-column justify-content-between">
            <div>
              <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.7rem; letter-spacing:0.1em;">Community Reach</span>
              <div class="stat-number mb-2">110+</div>
              <p class="fw-bold mb-0 small">Slums are reached out to across the district</p>
            </div>
            <p class="text-muted mb-0 mt-3 pt-2 border-top" style="font-size:0.78rem;">Grassroots relief, awareness, and community support drives.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="stat-card p-4 h-100 d-flex flex-column justify-content-between">
            <div>
              <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.7rem; letter-spacing:0.1em;">Healthcare</span>
              <div class="stat-number mb-2">300+</div>
              <p class="fw-bold mb-0 small">Women's health care provided</p>
            </div>
            <p class="text-muted mb-0 mt-3 pt-2 border-top" style="font-size:0.78rem;">Preventive screenings, maternal care, and essential medicines.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="stat-card p-4 h-100 d-flex flex-column justify-content-between">
            <div>
              <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.7rem; letter-spacing:0.1em;">Environment</span>
              <div class="stat-number mb-2">10</div>
              <p class="fw-bold mb-0 small">Conservation Programs</p>
            </div>
            <p class="text-muted mb-0 mt-3 pt-2 border-top" style="font-size:0.78rem;">Tree plantation, ecological awareness, and green initiatives.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- OUR STORY & WHY TRUST US -->
  <section class="py-5 py-lg-6 border-bottom border-sand-300" style="background-color: var(--sand-50);">
    <div class="container py-lg-4">
      <div class="row g-4 g-lg-5 align-items-stretch">
        <div class="col-lg-6">
          <div class="editorial-card h-100 d-flex flex-column">
            <div class="card-img-wrap">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/tutoring-academy.jpg'); ?>" alt="Community tutoring session in Ichapore" loading="lazy">
              <span class="badge rounded-pill bg-dark bg-opacity-75 position-absolute top-0 start-0 m-3 px-3 py-2 text-uppercase" style="font-size:0.7rem; letter-spacing:0.08em;">Since 2009</span>
            </div>
            <div class="p-4 p-sm-5 d-flex flex-column justify-content-between flex-grow-1">
              <div>
                <div class="d-flex align-items-center gap-2 text-terracotta fw-bold text-uppercase mb-2" style="font-size:0.72rem; letter-spacing:0.08em;">
                  <span class="material-symbols-outlined fs-6">history_edu</span>
                  <span>Our Story</span>
                </div>
                <h2 class="h3 fw-extrabold mb-3">A Decade &amp; More of Grassroots Transformation</h2>
                <p class="text-secondary lh-lg mb-4">
                  Founded in 2009 by passionate volunteers committed to grassroots upliftment, Ichapore Swapnapuron Society has been at the forefront of social transformation across North 24 Parganas.
                </p>
              </div>
              <div>
                <a href="<?php echo esc_url(home_url('/who-we-are')); ?>" class="text-decoration-none fw-bold text-uppercase text-terracotta d-inline-flex align-items-center gap-1" style="font-size:0.78rem; letter-spacing:0.06em;">
                  <span>Read More About Us</span>
                  <span class="material-symbols-outlined fs-6">arrow_forward</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="editorial-card h-100 d-flex flex-column">
            <div class="card-img-wrap">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/medical-camp.jpg'); ?>" alt="Community healthcare camp in rural Bengal" loading="lazy">
              <span class="badge rounded-pill bg-success position-absolute top-0 start-0 m-3 px-3 py-2 text-uppercase" style="font-size:0.7rem; letter-spacing:0.08em;">Good Governance</span>
            </div>
            <div class="p-4 p-sm-5 d-flex flex-column justify-content-between flex-grow-1">
              <div>
                <div class="d-flex align-items-center gap-2 text-moss fw-bold text-uppercase mb-2" style="font-size:0.72rem; letter-spacing:0.08em;">
                  <span class="material-symbols-outlined fs-6">verified_user</span>
                  <span>Why Trust Us</span>
                </div>
                <h2 class="h3 fw-extrabold mb-3">Credibility, Accountability &amp; Transparency</h2>
                <p class="text-secondary lh-lg mb-4">
                  Credibility and accountability have always been our benchmark. Operating under Section 80G and 12A with audited transparent accounts ensures 100% of donor funding translates directly into field impact.
                </p>
              </div>
              <div>
                <a href="<?php echo esc_url(home_url('/why-trust-us')); ?>" class="text-decoration-none fw-bold text-uppercase text-terracotta d-inline-flex align-items-center gap-1" style="font-size:0.78rem; letter-spacing:0.06em;">
                  <span>Read Why Trust Us</span>
                  <span class="material-symbols-outlined fs-6">arrow_forward</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4 STRATEGIC PILLARS -->
  <section class="py-5 py-lg-6 bg-charcoal text-white" style="background-color: var(--charcoal-900);">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <span class="text-uppercase fw-bold text-warning d-block mb-1" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Four Strategic Pillars', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold text-white mb-0"><?php esc_html_e('How We Drive Lasting Change', 'ichapore-swapnapuron'); ?></h2>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);">
            <div class="d-inline-flex align-items-center justify-content-center rounded-3 p-3 mb-3 text-warning" style="background: rgba(241, 196, 15, 0.15);">
              <span class="material-symbols-outlined fs-2">medical_services</span>
            </div>
            <h3 class="h5 fw-bold text-white mb-2"><?php esc_html_e('Healthcare & Thalassemia', 'ichapore-swapnapuron'); ?></h3>
            <p class="small text-white-50 mb-0 lh-base"><?php esc_html_e('Doorstep mobile slum diagnosis, free medicines, and student carrier screening camps under Swasthya Chakra & Udaan.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);">
            <div class="d-inline-flex align-items-center justify-content-center rounded-3 p-3 mb-3 text-info" style="background: rgba(52, 152, 219, 0.15);">
              <span class="material-symbols-outlined fs-2">school</span>
            </div>
            <h3 class="h5 fw-bold text-white mb-2"><?php esc_html_e('Child Education & Joy', 'ichapore-swapnapuron'); ?></h3>
            <p class="small text-white-50 mb-0 lh-base"><?php esc_html_e('Free backpacks, stationery, textbooks, and holiday winter relief drives for pavement children under Vidharthi & Smile.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);">
            <div class="d-inline-flex align-items-center justify-content-center rounded-3 p-3 mb-3 text-success" style="background: rgba(39, 174, 96, 0.15);">
              <span class="material-symbols-outlined fs-2">restaurant</span>
            </div>
            <h3 class="h5 fw-bold text-white mb-2"><?php esc_html_e('Food Rescue & Zero Hunger', 'ichapore-swapnapuron'); ?></h3>
            <p class="small text-white-50 mb-0 lh-base"><?php esc_html_e('Collecting banquet surplus, hygienic foil packaging, and midnight platform distributions under Anandadhara.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);">
            <div class="d-inline-flex align-items-center justify-content-center rounded-3 p-3 mb-3 text-danger" style="background: rgba(231, 76, 60, 0.15);">
              <span class="material-symbols-outlined fs-2">pets</span>
            </div>
            <h3 class="h5 fw-bold text-white mb-2"><?php esc_html_e('Animal Safety & Ecology', 'ichapore-swapnapuron'); ?></h3>
            <p class="small text-white-50 mb-0 lh-base"><?php esc_html_e('Fitting reflective safety collars on highway street dogs (Ayushman Bhava) and hanging clay sparrow nests (Ashiana).', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRE-FOOTER BANNER -->
  <section class="py-5" style="background-color: var(--sand-100);">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Tax Benefit Section 80G', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Your Small Kindness Protects a Life Tomorrow', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto text-secondary" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('Contributions eligible for 50% tax exemption. Donate via UPI, Net Banking, or Cards with instant certificate issuance.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-5 py-3 d-inline-flex align-items-center gap-2 shadow">
            <span><?php esc_html_e('Donate to General Fund', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6">favorite</span>
          </a>
          <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2 border" style="font-size:0.78rem; letter-spacing:0.06em;">
            <span><?php esc_html_e('Volunteer on Field', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6 text-terracotta">volunteer_activism</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
