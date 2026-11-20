<?php
/**
 * The template for displaying Project archives
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

  <!-- PAGE HEADER -->
  <section class="page-header" style="background: linear-gradient(135deg, #1b1717 0%, #15181b 100%);">
    <div class="page-header-glow" style="background: rgba(220, 62, 38, 0.35);"></div>
    <div class="container position-relative">
      <div class="breadcrumb-editorial mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php esc_html_e('Our Projects', 'ichapore-swapnapuron'); ?></span>
      </div>
      <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
        <span class="pulse-dot"></span>
        <span class="text-uppercase fw-bold text-white small" style="letter-spacing:0.08em;"><?php esc_html_e('Field Initiatives', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-4 fw-extrabold text-uppercase tracking-tight text-white mb-2"><?php esc_html_e('OUR ACTIVE PROJECTS', 'ichapore-swapnapuron'); ?></h1>
      <h2 class="h3 fw-bold text-warning mb-3"><?php esc_html_e('Direct Humanitarian & Environmental Action in North 24 Parganas', 'ichapore-swapnapuron'); ?></h2>
      <p class="lead text-light opacity-90 mb-0" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('Explore our eight core initiatives spanning child education, women and elder healthcare, thalassemia awareness, midnight hunger rescue, urban forestry, and stray animal protection.', 'ichapore-swapnapuron'); ?>
      </p>
    </div>
  </section>

  <!-- PROJECTS GRID -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4">
        <?php if (have_posts()) : while (have_posts()) : the_post(); 
            $badge = get_post_meta(get_the_ID(), '_project_badge', true) ?: __('Active Project', 'ichapore-swapnapuron');
        ?>
          <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden d-flex flex-column justify-content-between" style="border: 1px solid var(--sand-300) !important;">
              <div class="position-relative overflow-hidden" style="height: 230px;">
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
                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
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
        <?php endwhile; ?>
        <?php else: ?>
          <div class="col-12 text-center py-5">
            <p class="lead text-muted"><?php esc_html_e('No initiatives found.', 'ichapore-swapnapuron'); ?></p>
          </div>
        <?php endif; ?>
      </div>

      <div class="pt-4 text-center">
        <?php the_posts_pagination(array(
            'prev_text' => __('&laquo; Previous', 'ichapore-swapnapuron'),
            'next_text' => __('Next &raquo;', 'ichapore-swapnapuron'),
        )); ?>
      </div>
    </div>
  </section>

<?php
get_footer();
