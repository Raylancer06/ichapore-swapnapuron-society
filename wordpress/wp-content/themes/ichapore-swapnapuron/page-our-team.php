<?php
/**
 * Template Name: Our Team
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
        <span class="text-light"><?php esc_html_e('Our Team', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-5 fw-extrabold text-uppercase tracking-tight text-white mb-3"><?php esc_html_e('Our Team', 'ichapore-swapnapuron'); ?></h1>
      <p class="lead text-light opacity-90 mb-0" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('Behind every initiative and every milestone is a dedicated team of individuals working together with passion, empathy, and commitment to create a better tomorrow for our community.', 'ichapore-swapnapuron'); ?>
      </p>
    </div>
  </section>

  <!-- BOARD OF MANAGEMENT -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 680px;">
        <div class="d-inline-flex align-items-center gap-2 text-moss fw-bold text-uppercase mb-2" style="font-size:0.75rem; letter-spacing:0.1em;">
          <span class="material-symbols-outlined fs-6">supervised_user_circle</span>
          <span><?php esc_html_e('Leadership & Governance', 'ichapore-swapnapuron'); ?></span>
        </div>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Our Board of Management', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('Guiding our mission with vision, integrity, and lifelong dedication to community welfare.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="d-flex flex-column gap-4" style="max-width: 900px; margin: 0 auto;">
        <!-- Member 1: Mr. Sandip Pramanik -->
        <div class="p-4 p-sm-5 rounded-4 bg-white border border-sand-300 shadow-sm">
          <div class="d-flex flex-column flex-sm-row gap-4 align-items-start">
            <div class="rounded-circle p-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width:72px; height:72px; background: var(--moss-100); color: var(--moss-600);">
              <span class="material-symbols-outlined fs-1">person</span>
            </div>
            <div>
              <div class="d-flex flex-wrap align-items-center gap-2 mb-1">
                <h3 class="h4 fw-extrabold mb-0"><?php esc_html_e('Mr. Sandip Pramanik', 'ichapore-swapnapuron'); ?></h3>
                <span class="badge rounded-pill bg-success bg-opacity-10 text-moss px-3 py-1 fw-bold text-uppercase" style="font-size:0.68rem; letter-spacing:0.06em;"><?php esc_html_e('Founder & Strategic Lead', 'ichapore-swapnapuron'); ?></span>
              </div>
              <p class="text-secondary lh-lg mb-0 mt-3">
                <?php esc_html_e('Mr. Sandip Pramanik, a graphic designer and alumnus of Bharatiya Vidya Bhavan Salt Lake, is an expert in strategic management and organization building. In 2009, Mr. Pramanik joined hands with like-minded people to found the Ichapore Swapnapuron Society. Since its inception, he has led the scaling of the organization, helping it transform from a small veranda initiative into a well-known social enterprise serving thousands of lives across Bengal.', 'ichapore-swapnapuron'); ?>
              </p>
            </div>
          </div>
        </div>

        <!-- Member 2: Mrs. Beauty Mondal -->
        <div class="p-4 p-sm-5 rounded-4 bg-white border border-sand-300 shadow-sm">
          <div class="d-flex flex-column flex-sm-row gap-4 align-items-start">
            <div class="rounded-circle p-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width:72px; height:72px; background: #fdf0f7; color: #a32274;">
              <span class="material-symbols-outlined fs-1">person_4</span>
            </div>
            <div>
              <div class="d-flex flex-wrap align-items-center gap-2 mb-1">
                <h3 class="h4 fw-extrabold mb-0"><?php esc_html_e('Mrs. Beauty Mondal', 'ichapore-swapnapuron'); ?></h3>
                <span class="badge rounded-pill bg-danger bg-opacity-10 text-danger px-3 py-1 fw-bold text-uppercase" style="font-size:0.68rem; letter-spacing:0.06em;"><?php esc_html_e('Philanthropist & Social Worker', 'ichapore-swapnapuron'); ?></span>
              </div>
              <p class="text-secondary lh-lg mb-0 mt-3">
                <?php esc_html_e('A social worker and devoted housewife, Mrs. Beauty Mondal is an expert in entrepreneurship development. As an investor and philanthropist, she brings multifaceted experience in various fields across Hooghly. She has been deeply involved in grassroots social change through education, healthcare, and humanitarian initiatives for more than a decade.', 'ichapore-swapnapuron'); ?>
              </p>
            </div>
          </div>
        </div>

        <!-- Member 3: Mr. Bejon Mondal -->
        <div class="p-4 p-sm-5 rounded-4 bg-white border border-sand-300 shadow-sm">
          <div class="d-flex flex-column flex-sm-row gap-4 align-items-start">
            <div class="rounded-circle p-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width:72px; height:72px; background: #eef3ff; color: #1e5ab8;">
              <span class="material-symbols-outlined fs-1">person</span>
            </div>
            <div>
              <div class="d-flex flex-wrap align-items-center gap-2 mb-1">
                <h3 class="h4 fw-extrabold mb-0"><?php esc_html_e('Mr. Bejon Mondal', 'ichapore-swapnapuron'); ?></h3>
                <span class="badge rounded-pill bg-primary bg-opacity-10 text-primary px-3 py-1 fw-bold text-uppercase" style="font-size:0.68rem; letter-spacing:0.06em;"><?php esc_html_e('Founding Member & Advisor', 'ichapore-swapnapuron'); ?></span>
              </div>
              <p class="text-secondary lh-lg mb-0 mt-3">
                <?php esc_html_e('Mr. Bijan Mandal is a retired government employee who skillfully managed school administrative operations through dedicated practice for over 35 years. Beyond his career, Mr. Mandal is driven by a deep sense of social duty, quietly contributing to education and community causes. His long-standing commitment to giving back has supported the society since its very inception.', 'ichapore-swapnapuron'); ?>
              </p>
            </div>
          </div>
        </div>

        <!-- Member 4: Mrs. Tapati Mondal -->
        <div class="p-4 p-sm-5 rounded-4 bg-white border border-sand-300 shadow-sm">
          <div class="d-flex flex-column flex-sm-row gap-4 align-items-start">
            <div class="rounded-circle p-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width:72px; height:72px; background: #fff6eb; color: #c46800;">
              <span class="material-symbols-outlined fs-1">person_4</span>
            </div>
            <div>
              <div class="d-flex flex-wrap align-items-center gap-2 mb-1">
                <h3 class="h4 fw-extrabold mb-0"><?php esc_html_e('Mrs. Tapati Mondal', 'ichapore-swapnapuron'); ?></h3>
                <span class="badge rounded-pill bg-warning bg-opacity-10 text-dark px-3 py-1 fw-bold text-uppercase" style="font-size:0.68rem; letter-spacing:0.06em;"><?php esc_html_e('Founding Member', 'ichapore-swapnapuron'); ?></span>
              </div>
              <p class="text-secondary lh-lg mb-0 mt-3">
                <?php esc_html_e('A devoted housewife for whom social service is a true calling. A steadfast champion of community welfare and child protection, Mrs. Tapati Mondal has been a founding pillar of Ichapore Swapnapuron Society since 2009, constantly advocating for the nutritional and emotional support of street children.', 'ichapore-swapnapuron'); ?>
              </p>
            </div>
          </div>
        </div>

        <!-- Member 5: Mrs. Dipali Pramanick -->
        <div class="p-4 p-sm-5 rounded-4 bg-white border border-sand-300 shadow-sm">
          <div class="d-flex flex-column flex-sm-row gap-4 align-items-start">
            <div class="rounded-circle p-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width:72px; height:72px; background: var(--terracotta-100); color: var(--terracotta-600);">
              <span class="material-symbols-outlined fs-1">person_4</span>
            </div>
            <div>
              <div class="d-flex flex-wrap align-items-center gap-2 mb-1">
                <h3 class="h4 fw-extrabold mb-0"><?php esc_html_e('Mrs. Dipali Pramanick', 'ichapore-swapnapuron'); ?></h3>
                <span class="badge rounded-pill bg-danger bg-opacity-10 text-danger px-3 py-1 fw-bold text-uppercase" style="font-size:0.68rem; letter-spacing:0.06em;"><?php esc_html_e('Elder Member & Mentor', 'ichapore-swapnapuron'); ?></span>
              </div>
              <p class="text-secondary lh-lg mb-0 mt-3">
                <?php esc_html_e('An esteemed elder member who embodies the spirit of dedication and service. Seamlessly balancing family responsibilities with impactful social work, she has been a steadfast pillar of wisdom and emotional support since 2009. Her compassionate nature and unwavering commitment continue to enrich the lives of everyone around her.', 'ichapore-swapnapuron'); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VOLUNTEERS & FIELD CORPS -->
  <section class="bg-sand-warm py-5 py-lg-6 border-top border-bottom border-sand-300">
    <div class="container">
      <div class="row align-items-center g-4 g-lg-5">
        <div class="col-lg-6">
          <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Grassroots Backbone', 'ichapore-swapnapuron'); ?></span>
          <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Our Volunteers & Field Champions', 'ichapore-swapnapuron'); ?></h2>
          <p class="text-secondary lh-lg mb-4">
            <?php esc_html_e('Beyond the Board of Management, the real pulse of Swapnapuron Society beats through our passionate volunteer corps. From doctors who volunteer weekend clinical hours at our mobile camps to college youth teaching English phonics and animal lovers tagging street dogs with safety collars, they make real change possible every single day.', 'ichapore-swapnapuron'); ?>
          </p>
          <div class="row g-3">
            <div class="col-6">
              <div class="p-3 bg-white rounded-3 border border-sand-300">
                <div class="fw-black fs-4 text-terracotta">12+</div>
                <small class="text-secondary fw-semibold"><?php esc_html_e('Active Field Leads', 'ichapore-swapnapuron'); ?></small>
              </div>
            </div>
            <div class="col-6">
              <div class="p-3 bg-white rounded-3 border border-sand-300">
                <div class="fw-black fs-4 text-moss">100+</div>
                <small class="text-secondary fw-semibold"><?php esc_html_e('Event Volunteers', 'ichapore-swapnapuron'); ?></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="rounded-4 overflow-hidden shadow-lg border border-4 border-white">
            <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/winter-relief.jpg'); ?>" alt="Volunteers in action distributing winter aid" class="w-100 object-fit-cover" style="height: 340px;">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRE-FOOTER BANNER -->
  <section class="py-5">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Join Our Circle', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Together For A Better Tomorrow', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('United by purpose, driven by compassion, we work together for a stronger, healthier, and greener community.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2" style="font-size:0.78rem; letter-spacing:0.06em;">
            <span><?php esc_html_e('Become A Volunteer', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6 text-terracotta">volunteer_activism</span>
          </a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-terracotta rounded-pill px-4 py-3 d-inline-flex align-items-center gap-2 shadow">
            <span><?php esc_html_e('Contact Our Team', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6">arrow_forward</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
