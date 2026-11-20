<?php
/**
 * The template for displaying all single pages
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

while (have_posts()) : the_post();
?>

  <!-- PAGE HEADER -->
  <section class="page-header" style="background: linear-gradient(135deg, #1b1717 0%, #15181b 100%);">
    <div class="page-header-glow" style="background: rgba(220, 62, 38, 0.35);"></div>
    <div class="container position-relative">
      <div class="breadcrumb-editorial mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php the_title(); ?></span>
      </div>
      <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
        <span class="pulse-dot"></span>
        <span class="text-uppercase fw-bold text-white small" style="letter-spacing:0.08em;"><?php esc_html_e('Ichapore Swapnapuron Society', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-4 fw-extrabold text-uppercase tracking-tight text-white mb-2"><?php the_title(); ?></h1>
      <?php if (has_excerpt()): ?>
        <p class="lead text-light opacity-90 mb-0" style="max-width: 720px; font-weight: 400;">
          <?php echo get_the_excerpt(); ?>
        </p>
      <?php endif; ?>
    </div>
  </section>

  <!-- PAGE CONTENT -->
  <main class="py-5 py-lg-6">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="editorial-article-body bg-white p-4 p-md-5 rounded-4 border border-sand-300 shadow-sm lh-lg text-secondary">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- PRE-FOOTER BANNER -->
  <section class="py-5">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Be The Change', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Support Our Grassroots Operations', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('Join us as a volunteer on field or support with an 80G tax-exempt donation.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-5 py-3 d-inline-flex align-items-center gap-2 shadow">
            <span><?php esc_html_e('Donate (80G Tax Benefit)', 'ichapore-swapnapuron'); ?></span>
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
