<?php
/**
 * The template for displaying all single Project posts
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

while (have_posts()) : the_post();
    $post_id     = get_the_ID();
    $badge       = get_post_meta($post_id, '_project_badge', true) ?: __('Initiative', 'ichapore-swapnapuron');
    $tagline     = get_post_meta($post_id, '_project_tagline', true);
    $glow_color  = get_post_meta($post_id, '_project_glow_color', true) ?: 'rgba(220, 62, 38, 0.35)';
    $quote       = get_post_meta($post_id, '_project_quote', true);
    $quote_sub   = get_post_meta($post_id, '_project_quote_sub', true);

    $deliverables = get_post_meta($post_id, '_project_deliverables', true);
    $stats        = get_post_meta($post_id, '_project_stats', true);
    $highlights   = get_post_meta($post_id, '_project_highlights', true);
?>

  <!-- PAGE HEADER -->
  <section class="page-header" style="background: linear-gradient(135deg, #1b1717 0%, #15181b 100%);">
    <div class="page-header-glow" style="background: <?php echo esc_attr($glow_color); ?>;"></div>
    <div class="container position-relative">
      <div class="breadcrumb-editorial mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <a href="<?php echo esc_url(home_url('/projects')); ?>" class="text-white-50"><?php esc_html_e('Our Projects', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php the_title(); ?></span>
      </div>

      <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
        <span class="pulse-dot"></span>
        <span class="text-uppercase fw-bold text-white small" style="letter-spacing:0.08em;"><?php echo esc_html($badge); ?></span>
      </div>

      <h1 class="display-4 fw-extrabold text-uppercase tracking-tight text-white mb-2"><?php the_title(); ?></h1>
      
      <?php if ($tagline): ?>
        <h2 class="h3 fw-bold text-warning mb-3"><?php echo esc_html($tagline); ?></h2>
      <?php endif; ?>

      <?php if (has_excerpt()): ?>
        <p class="lead text-light opacity-90 mb-4" style="max-width: 720px; font-weight: 400;">
          <?php echo get_the_excerpt(); ?>
        </p>
      <?php endif; ?>

      <?php swapnapuron_render_chips($post_id); ?>
    </div>
  </section>

  <!-- PROJECT OVERVIEW -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4 g-lg-5 align-items-center">
        <div class="col-lg-6">
          <div class="d-inline-flex align-items-center gap-2 text-terracotta fw-bold text-uppercase mb-2" style="font-size:0.75rem; letter-spacing:0.1em;">
            <span class="material-symbols-outlined fs-6">volunteer_activism</span>
            <span><?php esc_html_e('Why This Initiative', 'ichapore-swapnapuron'); ?></span>
          </div>

          <div class="project-content text-secondary lh-lg mb-4">
            <?php the_content(); ?>
          </div>

          <?php if ($quote): ?>
            <div class="p-3 rounded-4 bg-sand-soft border border-sand-300 d-flex align-items-center gap-3">
              <span class="material-symbols-outlined text-terracotta fs-2">format_quote</span>
              <div>
                <div class="fw-bold text-dark">"<?php echo esc_html($quote); ?>"</div>
                <?php if ($quote_sub): ?>
                  <small class="text-secondary"><?php echo esc_html($quote_sub); ?></small>
                <?php endif; ?>
              </div>
            </div>
          <?php endif; ?>
        </div>

        <div class="col-lg-6">
          <div class="editorial-card shadow-lg">
            <div class="position-relative overflow-hidden" style="height: 380px;">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full', array('class' => 'w-100 h-100 object-fit-cover')); ?>
              <?php else: ?>
                <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/hero-school.jpg'); ?>" alt="<?php the_title_attribute(); ?>" class="w-100 h-100 object-fit-cover">
              <?php endif; ?>
            </div>
            <div class="p-4 bg-white border-top border-sand-300">
              <span class="text-uppercase fw-bold text-terracotta d-block mb-1" style="font-size:0.7rem; letter-spacing:0.08em;"><?php the_title(); ?> <?php esc_html_e('In Action', 'ichapore-swapnapuron'); ?></span>
              <p class="small text-secondary mb-0"><?php esc_html_e('Direct grassroots intervention organized by Swapnapuron volunteers across North 24 Parganas.', 'ichapore-swapnapuron'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- KEY SERVICES WE PROVIDE -->
  <?php if (!empty($deliverables) && is_array($deliverables)): ?>
  <section class="bg-sand-warm py-5 py-lg-6 border-top border-bottom border-sand-300">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 680px;">
        <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('What We Deliver', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Key Pillars of the Campaign', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('Structured humanitarian operations designed to bring enduring grassroots relief.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="row g-4 justify-content-center">
        <?php foreach ($deliverables as $deliv): ?>
          <?php if (!empty($deliv['title'])): ?>
            <div class="col-md-6 col-lg-4">
              <div class="feature-box h-100">
                <div class="feature-icon-wrap" style="background: var(--terracotta-100); color: var(--terracotta-600);">
                  <span class="material-symbols-outlined fs-3"><?php echo esc_attr($deliv['icon'] ?: 'star'); ?></span>
                </div>
                <h3 class="h5 fw-bold mb-2"><?php echo esc_html($deliv['title']); ?></h3>
                <p class="text-secondary small mb-0 lh-base"><?php echo esc_html($deliv['desc']); ?></p>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- IMPACT SO FAR STATS -->
  <?php if (!empty($stats) && is_array($stats)): ?>
  <section class="py-5">
    <div class="container">
      <div class="text-center mx-auto mb-4" style="max-width: 600px;">
        <span class="text-uppercase fw-bold text-moss d-block mb-1" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Direct Track Record', 'ichapore-swapnapuron'); ?></span>
        <h2 class="h3 fw-extrabold mb-0"><?php esc_html_e('Our Impact So Far', 'ichapore-swapnapuron'); ?></h2>
      </div>

      <div class="row g-3 g-md-4">
        <?php 
        $colors = array('text-terracotta', 'text-moss', 'text-primary', 'text-success');
        foreach ($stats as $idx => $st): 
          if (!empty($st['num'])):
        ?>
          <div class="col-6 col-lg-3">
            <div class="stat-card p-4 text-center">
              <div class="stat-number <?php echo esc_attr($colors[$idx % 4]); ?> mb-1"><?php echo esc_html($st['num']); ?></div>
              <p class="small fw-bold text-dark mb-0"><?php echo esc_html($st['label']); ?></p>
              <?php if (!empty($st['sub'])): ?>
                <span class="text-muted" style="font-size:0.72rem;"><?php echo esc_html($st['sub']); ?></span>
              <?php endif; ?>
            </div>
          </div>
        <?php 
          endif;
        endforeach; 
        ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- PROJECT HIGHLIGHTS & CHECKLIST -->
  <?php if (!empty($highlights) && is_array($highlights)): ?>
  <section class="bg-sand-soft py-5 border-top border-sand-300">
    <div class="container">
      <div class="row g-4 g-lg-5 align-items-center">
        <div class="col-lg-6 order-lg-2">
          <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Field Blueprint', 'ichapore-swapnapuron'); ?></span>
          <h3 class="display-6 fw-extrabold mb-4"><?php esc_html_e('Project Highlights', 'ichapore-swapnapuron'); ?></h3>
          <ul class="list-unstyled space-y-3 d-flex flex-column gap-3 mb-0">
            <?php foreach ($highlights as $hl): ?>
              <?php if (!empty($hl)): ?>
                <li class="d-flex align-items-start gap-3">
                  <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
                  <span class="text-secondary"><?php echo esc_html($hl); ?></span>
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="rounded-4 overflow-hidden shadow-lg border border-4 border-white">
            <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/winter-relief.jpg'); ?>" alt="<?php the_title_attribute(); ?>" class="w-100 object-fit-cover" style="height: 380px;">
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <!-- PRE-FOOTER BANNER -->
  <section class="py-5">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Support The Cause', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Make a Difference Today', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('Your contribution directly empowers our volunteers with equipment, medicine, and field supplies. Eligible for up to 50% 80G tax benefit.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-5 py-3 d-inline-flex align-items-center gap-2 shadow">
            <span><?php esc_html_e('Support With Donation', 'ichapore-swapnapuron'); ?></span>
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
endwhile;

get_footer();
