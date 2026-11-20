<?php
/**
 * Template Name: Janmataru
 *
 * @package Ichapore_Swapnapuron
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

  <!-- PAGE HEADER -->
  <section class="page-header" style="background: linear-gradient(135deg, #102d1d 0%, #17241d 100%);">
    <div class="page-header-glow" style="background: rgba(46, 117, 72, 0.35);"></div>
    <div class="container position-relative">
      <div class="breadcrumb-editorial mb-3">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'ichapore-swapnapuron'); ?></a> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-white-50"><?php esc_html_e('Our Projects', 'ichapore-swapnapuron'); ?></span> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php esc_html_e('Janmataru', 'ichapore-swapnapuron'); ?></span>
      </div>
      <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: rgba(255,255,255,0.12); border: 1px solid rgba(255,255,255,0.2);">
        <span class="pulse-dot" style="background-color: #2ed573;"></span>
        <span class="text-uppercase fw-bold text-white small" style="letter-spacing:0.08em;"><?php esc_html_e('Environmental Initiative', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-4 fw-extrabold text-uppercase tracking-tight text-white mb-3"><?php esc_html_e('JANMATARU', 'ichapore-swapnapuron'); ?></h1>
      <h2 class="h3 fw-bold text-warning mb-3"><?php esc_html_e('A Tree for Every Newborn', 'ichapore-swapnapuron'); ?></h2>
      <p class="lead text-light opacity-90 mb-4" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('JANMATARU is our flagship green initiative that celebrates every birth by planting a tree. It creates a lifelong bond between the child and nature, nurturing responsibility, care, and a greener tomorrow.', 'ichapore-swapnapuron'); ?>
      </p>

      <div class="d-flex flex-wrap gap-2 gap-sm-3 text-light small fw-semibold pt-1">
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-success fs-6">child_care</span>
          <span><?php esc_html_e('Celebrate Birth', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-success fs-6">potted_plant</span>
          <span><?php esc_html_e('Plant a Tree', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-success fs-6">spa</span>
          <span><?php esc_html_e('Nurture Nature', 'ichapore-swapnapuron'); ?></span>
        </span>
        <span class="badge rounded-pill bg-white bg-opacity-10 border border-white border-opacity-20 px-3 py-2 d-inline-flex align-items-center gap-2 text-white">
          <span class="material-symbols-outlined text-success fs-6">nature_people</span>
          <span><?php esc_html_e('Ensure Future', 'ichapore-swapnapuron'); ?></span>
        </span>
      </div>
    </div>
  </section>

  <!-- OVERVIEW -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4 g-lg-5 align-items-center">
        <div class="col-lg-6">
          <div class="d-inline-flex align-items-center gap-2 text-moss fw-bold text-uppercase mb-2" style="font-size:0.75rem; letter-spacing:0.1em;">
            <span class="material-symbols-outlined fs-6">forest</span>
            <span><?php esc_html_e('Project Overview', 'ichapore-swapnapuron'); ?></span>
          </div>
          <h2 class="display-6 fw-extrabold mb-4"><?php esc_html_e('Tree of Life: Nurturing Nature from Day One', 'ichapore-swapnapuron'); ?></h2>
          <p class="text-secondary lh-lg mb-3">
            <strong><?php esc_html_e('JANMATARU', 'ichapore-swapnapuron'); ?></strong> <?php esc_html_e('(meaning "Tree of Life") is a unique grassroots campaign by Ichapore Swapnapuron Society to promote environmental responsibility right from the moment of birth.', 'ichapore-swapnapuron'); ?>
          </p>
          <p class="text-secondary lh-lg mb-3">
            <?php esc_html_e('For every child born in our partner hospitals and rural communities, we gift a hardy, native sapling to the parents along with a personalized birth certificate and a unique Tree ID. Families are encouraged to plant the sapling in their courtyard or community land, and nurture it as their own child grows.', 'ichapore-swapnapuron'); ?>
          </p>
          <p class="text-secondary lh-lg mb-0">
            <?php esc_html_e('This initiative not only increases green cover across North 24 Parganas, but also instills an unbreakable sense of affection and responsibility towards Mother Earth in future generations.', 'ichapore-swapnapuron'); ?>
          </p>
        </div>

        <div class="col-lg-6">
          <div class="editorial-card shadow-lg">
            <div class="position-relative overflow-hidden" style="height: 380px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/janmataru/janmataru-01.avif'); ?>" alt="Parents receiving Janmataru sapling for newborn" class="w-100 h-100 object-fit-cover" onerror="this.onerror=null; this.src='<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/hero-school.jpg'); ?>';">
            </div>
            <div class="p-4 bg-white border-top border-sand-300">
              <span class="text-uppercase fw-bold text-moss d-block mb-1" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('One Birth • One Tree • One Green Future', 'ichapore-swapnapuron'); ?></span>
              <p class="small text-secondary mb-0"><?php esc_html_e('Partnering with maternity wards and village healthcare centres.', 'ichapore-swapnapuron'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- KEY FEATURES -->
  <section class="bg-sand-warm py-5 py-lg-6 border-top border-bottom border-sand-300">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 680px;">
        <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Core Framework', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Key Features of JANMATARU', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('A thoughtfully structured ecological program uniting families, healthcare, and nature conservation.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="row g-4">
        <!-- Feature 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: var(--moss-100); color: var(--moss-600);">
              <span class="material-symbols-outlined fs-3">psychiatry</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('One Birth, One Tree', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('A high-quality native fruit-bearing or shade sapling is gifted to the family for every newborn child.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #eef3ff; color: #1e5ab8;">
              <span class="material-symbols-outlined fs-3">badge</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Personalized Certificate', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Each child receives a commemorative printed certificate complete with a unique registered Tree ID.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #fdf0f7; color: #a32274;">
              <span class="material-symbols-outlined fs-3">qr_code_2</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('QR Code Tracking', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Families can scan a QR code to update photographs of their tree’s growth and receive seasonal care tips.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Feature 4 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #fff6eb; color: #c46800;">
              <span class="material-symbols-outlined fs-3">family_restroom</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Family Participation', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Encourages parents, grandparents, and siblings to nurture and protect the sapling together.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Feature 5 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: var(--terracotta-100); color: var(--terracotta-600);">
              <span class="material-symbols-outlined fs-3">eco</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Environmental Impact', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Expands community green cover, combats heat islands, improves soil health, and shelters local birds.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>

        <!-- Feature 6 -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box">
            <div class="feature-icon-wrap" style="background: #f0f7f5; color: #186f65;">
              <span class="material-symbols-outlined fs-3">nature</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Sustainable Future', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0 lh-base">
              <?php esc_html_e('Building a greener, healthier, and climate-resilient tomorrow for generations yet to come.', 'ichapore-swapnapuron'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- IMPACT SO FAR -->
  <section class="py-5">
    <div class="container">
      <div class="text-center mx-auto mb-4" style="max-width: 600px;">
        <span class="text-uppercase fw-bold text-moss d-block mb-1" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Ecological Milestone', 'ichapore-swapnapuron'); ?></span>
        <h2 class="h3 fw-extrabold mb-0"><?php esc_html_e('Our Impact So Far', 'ichapore-swapnapuron'); ?></h2>
      </div>

      <div class="row g-3 g-md-4">
        <div class="col-6 col-lg">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-moss mb-1">25</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Saplings Distributed', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Native trees planted', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-terracotta mb-1">5</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Partner Hospitals', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Maternity clinic tie-ups', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-primary mb-1">20</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('Families Connected', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Active caretakers', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
        <div class="col-6 col-lg">
          <div class="stat-card p-4 text-center">
            <div class="stat-number text-success mb-1">35</div>
            <p class="small fw-bold text-dark mb-0"><?php esc_html_e('QR Updates', 'ichapore-swapnapuron'); ?></p>
            <span class="text-muted" style="font-size:0.72rem;"><?php esc_html_e('Tree progress logged', 'ichapore-swapnapuron'); ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRE-FOOTER BANNER -->
  <section class="py-5 bg-sand-soft border-top border-sand-300">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Plant Life', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Sponsor A Newborn Tree Kit', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('Just ₹200 sponsors a native sapling, commemorative certificate, tree guard, and QR registry for a newborn.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-5 py-3 d-inline-flex align-items-center gap-2 shadow">
            <span><?php esc_html_e('Sponsor A Tree Kit', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6">favorite</span>
          </a>
          <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2" style="font-size:0.78rem; letter-spacing:0.06em;">
            <span><?php esc_html_e('Join Janmataru Patrol', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6 text-moss">forest</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
