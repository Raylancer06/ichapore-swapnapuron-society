<?php
/**
 * Template Name: Mission & Vision
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
        <span class="text-light"><?php esc_html_e('Mission & Vision', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-5 fw-extrabold text-uppercase tracking-tight text-white mb-3"><?php esc_html_e('Mission & Vision', 'ichapore-swapnapuron'); ?></h1>
      <p class="lead text-light opacity-90 mb-0" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('Guided by compassion and driven by purpose, we work towards a healthier, educated, empowered, and sustainable society where every life can thrive with dignity and hope.', 'ichapore-swapnapuron'); ?>
      </p>
    </div>
  </section>

  <!-- MISSION & VISION DETAILED DUAL CARDS -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4 g-lg-5">
        <!-- Our Mission -->
        <div class="col-lg-6">
          <div class="rounded-4 p-4 p-sm-5 h-100 border border-sand-300 shadow-sm" style="background: linear-gradient(180deg, #fbfdfc 0%, #f4f9f6 100%);">
            <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-4" style="width:56px; height:56px; background: var(--moss-100); color: var(--moss-600);">
              <span class="material-symbols-outlined fs-2">crisis_alert</span>
            </div>
            <div class="text-uppercase fw-bold text-moss mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Guiding Mandate', 'ichapore-swapnapuron'); ?></div>
            <h2 class="display-6 fw-extrabold text-charcoal-900 mb-3"><?php esc_html_e('Our Mission', 'ichapore-swapnapuron'); ?></h2>
            <p class="lead fw-normal text-secondary mb-4" style="font-size:1.05rem;">
              <?php esc_html_e('To empower communities by improving health, creating educational opportunities, promoting gender equality, protecting the environment, and ensuring the welfare of animals.', 'ichapore-swapnapuron'); ?>
            </p>

            <ul class="list-unstyled space-y-3 d-flex flex-column gap-3 mb-0">
              <li class="d-flex align-items-start gap-3">
                <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
                <span class="fw-medium text-charcoal-800"><?php esc_html_e('Promote good health and well-being for all through frontline primary healthcare.', 'ichapore-swapnapuron'); ?></span>
              </li>
              <li class="d-flex align-items-start gap-3">
                <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
                <span class="fw-medium text-charcoal-800"><?php esc_html_e('Create quality education and learning opportunities for vulnerable street children.', 'ichapore-swapnapuron'); ?></span>
              </li>
              <li class="d-flex align-items-start gap-3">
                <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
                <span class="fw-medium text-charcoal-800"><?php esc_html_e('Empower women and improve livelihoods through health awareness and dignity.', 'ichapore-swapnapuron'); ?></span>
              </li>
              <li class="d-flex align-items-start gap-3">
                <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
                <span class="fw-medium text-charcoal-800"><?php esc_html_e('Protect nature and build a greener, cleaner, and sustainable future.', 'ichapore-swapnapuron'); ?></span>
              </li>
              <li class="d-flex align-items-start gap-3">
                <span class="material-symbols-outlined text-moss fs-5 mt-1">check_circle</span>
                <span class="fw-medium text-charcoal-800"><?php esc_html_e('Ensure kindness, safety, and care for all living beings including street animals.', 'ichapore-swapnapuron'); ?></span>
              </li>
            </ul>
          </div>
        </div>

        <!-- Our Vision -->
        <div class="col-lg-6">
          <div class="rounded-4 p-4 p-sm-5 h-100 border border-sand-300 shadow-sm" style="background: linear-gradient(180deg, #fdfbfa 0%, #faf3f1 100%);">
            <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-4" style="width:56px; height:56px; background: var(--terracotta-100); color: var(--terracotta-600);">
              <span class="material-symbols-outlined fs-2">visibility</span>
            </div>
            <div class="text-uppercase fw-bold text-terracotta mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Long-Term Horizon', 'ichapore-swapnapuron'); ?></div>
            <h2 class="display-6 fw-extrabold text-charcoal-900 mb-3"><?php esc_html_e('Our Vision', 'ichapore-swapnapuron'); ?></h2>
            <p class="lead fw-normal text-secondary mb-4" style="font-size:1.05rem;">
              <?php esc_html_e('A society where every individual lives with dignity, healthy, educated, empowered, and in harmony with nature and all living beings.', 'ichapore-swapnapuron'); ?>
            </p>

            <ul class="list-unstyled space-y-3 d-flex flex-column gap-3 mb-0">
              <li class="d-flex align-items-start gap-3">
                <span class="material-symbols-outlined text-terracotta fs-5 mt-1">stars</span>
                <span class="fw-medium text-charcoal-800"><?php esc_html_e('A healthy community with equitable access to preventive care and treatment for all.', 'ichapore-swapnapuron'); ?></span>
              </li>
              <li class="d-flex align-items-start gap-3">
                <span class="material-symbols-outlined text-terracotta fs-5 mt-1">stars</span>
                <span class="fw-medium text-charcoal-800"><?php esc_html_e('Quality education and equal opportunities breaking generational cycles of poverty.', 'ichapore-swapnapuron'); ?></span>
              </li>
              <li class="d-flex align-items-start gap-3">
                <span class="material-symbols-outlined text-terracotta fs-5 mt-1">stars</span>
                <span class="fw-medium text-charcoal-800"><?php esc_html_e('Empowered women leading resilient, independent, and prosperous families.', 'ichapore-swapnapuron'); ?></span>
              </li>
              <li class="d-flex align-items-start gap-3">
                <span class="material-symbols-outlined text-terracotta fs-5 mt-1">stars</span>
                <span class="fw-medium text-charcoal-800"><?php esc_html_e('A clean, green, and resilient environment safeguarded for future generations.', 'ichapore-swapnapuron'); ?></span>
              </li>
              <li class="d-flex align-items-start gap-3">
                <span class="material-symbols-outlined text-terracotta fs-5 mt-1">stars</span>
                <span class="fw-medium text-charcoal-800"><?php esc_html_e('A compassionate world where animals are safe, cared for, and respected.', 'ichapore-swapnapuron'); ?></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VALUES GUIDE OUR EVERY STEP -->
  <section class="bg-sand-warm py-5 py-lg-6 border-top border-bottom border-sand-300">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 680px;">
        <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Ethical North Star', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Our Values Guide Our Every Step', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('These values define how our volunteers, coordinators, and partners conduct every field program.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="row g-4">
        <!-- 1. Compassion -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box text-center">
            <div class="feature-icon-wrap mx-auto" style="background: var(--terracotta-100); color: var(--terracotta-600);">
              <span class="material-symbols-outlined fs-3">favorite</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Compassion', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0"><?php esc_html_e('We care deeply for people, animals, and the natural environment with empathy and kindness.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>

        <!-- 2. Integrity -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box text-center">
            <div class="feature-icon-wrap mx-auto" style="background: var(--moss-100); color: var(--moss-600);">
              <span class="material-symbols-outlined fs-3">verified</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Integrity', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0"><?php esc_html_e('We act with uncompromised honesty, transparency, and accountability in every action.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>

        <!-- 3. Inclusion -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box text-center">
            <div class="feature-icon-wrap mx-auto" style="background: #eef3ff; color: #1e5ab8;">
              <span class="material-symbols-outlined fs-3">diversity_3</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Inclusion', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0"><?php esc_html_e('We respect diversity, reject discrimination, and work collaboratively with everyone.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>

        <!-- 4. Sustainability -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box text-center">
            <div class="feature-icon-wrap mx-auto" style="background: #f0f7f5; color: #186f65;">
              <span class="material-symbols-outlined fs-3">eco</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Sustainability', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0"><?php esc_html_e('We protect nature, nurture trees for newborns, and build durable community solutions.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>

        <!-- 5. Empowerment -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box text-center">
            <div class="feature-icon-wrap mx-auto" style="background: #fdf0f7; color: #a32274;">
              <span class="material-symbols-outlined fs-3">psychology</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Empowerment', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0"><?php esc_html_e('We equip individuals and mothers with skills and confidence to lead positive change.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>

        <!-- 6. Service -->
        <div class="col-md-6 col-lg-4">
          <div class="feature-box text-center">
            <div class="feature-icon-wrap mx-auto" style="background: #fff8e6; color: #b87a00;">
              <span class="material-symbols-outlined fs-3">volunteer_activism</span>
            </div>
            <h3 class="h5 fw-bold mb-2"><?php esc_html_e('Service', 'ichapore-swapnapuron'); ?></h3>
            <p class="text-secondary small mb-0"><?php esc_html_e('We are dedicated to selfless service, volunteerism, and uplifting the most vulnerable.', 'ichapore-swapnapuron'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- THE IMPACT WE STRIVE FOR -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 680px;">
        <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Measurable Outcomes', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('The Impact We Strive For', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('Every project has clear, tangible metrics designed to lift living standards across North 24 Parganas.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="bg-white rounded-4 p-4 p-sm-5 border border-sand-300 shadow-sm">
        <div class="row g-4 text-center">
          <div class="col-6 col-lg border-end border-sand-300">
            <div class="p-2">
              <span class="material-symbols-outlined text-terracotta fs-1 mb-2">health_and_safety</span>
              <h3 class="h6 fw-bold mb-1"><?php esc_html_e('Better Health', 'ichapore-swapnapuron'); ?></h3>
              <p class="small text-secondary mb-0"><?php esc_html_e('For All Communities', 'ichapore-swapnapuron'); ?></p>
            </div>
          </div>
          <div class="col-6 col-lg border-end-lg border-sand-300">
            <div class="p-2">
              <span class="material-symbols-outlined text-moss fs-1 mb-2">school</span>
              <h3 class="h6 fw-bold mb-1"><?php esc_html_e('Quality Education', 'ichapore-swapnapuron'); ?></h3>
              <p class="small text-secondary mb-0"><?php esc_html_e('For Every Child', 'ichapore-swapnapuron'); ?></p>
            </div>
          </div>
          <div class="col-6 col-lg border-end border-sand-300">
            <div class="p-2">
              <span class="material-symbols-outlined text-primary fs-1 mb-2">female</span>
              <h3 class="h6 fw-bold mb-1"><?php esc_html_e('Empowered Women', 'ichapore-swapnapuron'); ?></h3>
              <p class="small text-secondary mb-0"><?php esc_html_e('Stronger Communities', 'ichapore-swapnapuron'); ?></p>
            </div>
          </div>
          <div class="col-6 col-lg border-end-lg border-sand-300">
            <div class="p-2">
              <span class="material-symbols-outlined text-success fs-1 mb-2">forest</span>
              <h3 class="h6 fw-bold mb-1"><?php esc_html_e('Greener Environment', 'ichapore-swapnapuron'); ?></h3>
              <p class="small text-secondary mb-0"><?php esc_html_e('Sustainable Future', 'ichapore-swapnapuron'); ?></p>
            </div>
          </div>
          <div class="col-12 col-lg">
            <div class="p-2">
              <span class="material-symbols-outlined text-warning fs-1 mb-2">pets</span>
              <h3 class="h6 fw-bold mb-1"><?php esc_html_e('Kindness & Care', 'ichapore-swapnapuron'); ?></h3>
              <p class="small text-secondary mb-0"><?php esc_html_e('For All Animals', 'ichapore-swapnapuron'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRE-FOOTER BANNER -->
  <section class="py-5 bg-sand-soft border-top border-sand-300">
    <div class="container">
      <div class="pre-footer-banner text-center mx-auto" style="max-width: 960px;">
        <span class="badge rounded-pill bg-white text-dark mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem; letter-spacing:0.08em;"><?php esc_html_e('Be A Changemaker', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Help Us Realize This Vision', 'ichapore-swapnapuron'); ?></h2>
        <p class="lead opacity-90 mb-4 mx-auto" style="max-width: 600px; font-size:1.05rem;">
          <?php esc_html_e('Your active partnership allows us to scale healthcare camps, educate more slum children, and care for neglected animals.', 'ichapore-swapnapuron'); ?>
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo esc_url(home_url('/volunteer')); ?>" class="btn btn-light rounded-pill px-4 py-3 fw-bold text-uppercase d-inline-flex align-items-center gap-2" style="font-size:0.78rem; letter-spacing:0.06em;">
            <span><?php esc_html_e('Join As Volunteer', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6 text-terracotta">volunteer_activism</span>
          </a>
          <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill px-4 py-3 d-inline-flex align-items-center gap-2 shadow">
            <span><?php esc_html_e('Support The Mission', 'ichapore-swapnapuron'); ?></span>
            <span class="material-symbols-outlined fs-6">favorite</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
