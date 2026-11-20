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
    <div class="position-absolute w-100 h-100" style="inset:0; z-index:1; background: linear-gradient(105deg, rgba(11, 16, 18, 0.92) 0%, rgba(18, 24, 27, 0.78) 55%, rgba(18, 24, 27, 0.5) 100%);"></div>

    <div class="container position-relative py-5 my-lg-4" style="z-index: 2;">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill mb-3" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
            <span class="pulse-dot"></span>
            <span class="text-uppercase fw-bold text-white small" style="letter-spacing:0.08em;"><?php esc_html_e('Non-Profit Society &bull; Reg: S0011507', 'ichapore-swapnapuron'); ?></span>
          </div>

          <h1 class="display-3 fw-extrabold text-uppercase tracking-tight text-white mb-3 lh-sm">
            <?php esc_html_e('Bringing Smiles Through Action & Compassion', 'ichapore-swapnapuron'); ?>
          </h1>

          <p class="lead text-light opacity-90 mb-4" style="max-width: 680px; font-weight: 400; font-size: 1.15rem;">
            <?php esc_html_e('From free primary schooling and night hunger rescue to thalassemia carrier testing and stray animal safety, Ichapore Swapnapuron Society transforms vulnerable lives across West Bengal.', 'ichapore-swapnapuron'); ?>
          </p>

          <div class="d-flex flex-wrap gap-3 mb-4">
            <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta btn-lg rounded-pill px-5 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2 shadow-lg" style="font-size:0.85rem; letter-spacing:0.05em;">
              <span><?php esc_html_e('Donate Now (80G Benefit)', 'ichapore-swapnapuron'); ?></span>
              <span class="material-symbols-outlined fs-5">arrow_forward</span>
            </a>
            <a href="<?php echo esc_url(home_url('/projects')); ?>" class="btn btn-outline-light btn-lg rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2" style="font-size:0.85rem; letter-spacing:0.05em;">
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
      </div>
    </div>
  </section>

  <!-- IMPACT TICKER BAR -->
  <section class="py-3 bg-charcoal text-white border-bottom border-secondary border-opacity-25">
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

  <!-- OUR PROJECTS GRID (DYNAMIC) -->
  <section class="py-5 py-lg-6" id="projects">
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
                $badge = get_post_meta(get_the_ID(), '_project_badge', true) ?: __('Active Project', 'ichapore-swapnapuron');
        ?>
          <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-column justify-content-between" style="border: 1px solid var(--sand-300) !important;">
              <div class="position-relative overflow-hidden" style="height: 220px;">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('medium_large', array('class' => 'w-100 h-100 object-fit-cover')); ?>
                <?php else: ?>
                  <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/hero-school.jpg'); ?>" class="w-100 h-100 object-fit-cover" alt="<?php the_title_attribute(); ?>">
                <?php endif; ?>
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
                  <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1 font-weight-bold" style="font-size:0.75rem;">
                    <?php esc_html_e('Donate', 'ichapore-swapnapuron'); ?>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>
  </section>

  <!-- 4 PILLARS OF ACTION -->
  <section class="bg-sand-warm py-5 py-lg-6 border-top border-bottom border-sand-300">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <span class="text-uppercase fw-bold text-terracotta d-block mb-1" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Four Strategic Pillars', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-0"><?php esc_html_e('How We Drive Lasting Change', 'ichapore-swapnapuron'); ?></h2>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="feature-box h-100">
            <div class="feature-icon-wrap" style="background: var(--moss-100); color: var(--moss-600);">
              <span class="material-symbols-outlined fs-2">medical_services</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Healthcare & Thalassemia', 'ichapore-swapnapuron'); ?></h3>
            <p class="small text-secondary mb-0 lh-base"><?php esc_html_e('Doorstep mobile slum diagnosis, free medicines, and student carrier screening camps under Swasthya Chakra & Udaan.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-box h-100">
            <div class="feature-icon-wrap" style="background: #eef3ff; color: #1e5ab8;">
              <span class="material-symbols-outlined fs-2">school</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Child Education & Joy', 'ichapore-swapnapuron'); ?></h3>
            <p class="small text-secondary mb-0 lh-base"><?php esc_html_e('Free backpacks, stationery, textbooks, and holiday winter relief drives for pavement children under Vidharthi & Smile.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-box h-100">
            <div class="feature-icon-wrap" style="background: #fff8e6; color: #b87a00;">
              <span class="material-symbols-outlined fs-2">restaurant</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Food Rescue & Zero Hunger', 'ichapore-swapnapuron'); ?></h3>
            <p class="small text-secondary mb-0 lh-base"><?php esc_html_e('Collecting banquet surplus, hygienic foil packaging, and midnight platform distributions under Anandadhara.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="feature-box h-100">
            <div class="feature-icon-wrap" style="background: #fde8e4; color: #d94a38;">
              <span class="material-symbols-outlined fs-2">pets</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Animal Safety & Ecology', 'ichapore-swapnapuron'); ?></h3>
            <p class="small text-secondary mb-0 lh-base"><?php esc_html_e('Fitting reflective safety collars on highway street dogs (Ayushman Bhava) and hanging clay sparrow nests (Ashiana).', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRE-FOOTER BANNER -->
  <section class="py-5">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Tax Benefit Section 80G', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Your Small Kindness Protects a Life Tomorrow', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('Contributions eligible for 50% tax exemption. Donate via UPI, Net Banking, or Cards with instant certificate issuance.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-5 py-3 d-inline-flex align-items-center gap-2 shadow">
            <span><?php esc_html_e('Donate to General Fund', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6">favorite</span>
          </a>
          <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2" style="font-size:0.78rem; letter-spacing:0.06em;">
            <span><?php esc_html_e('Volunteer on Field', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6 text-terracotta">volunteer_activism</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
