<?php
/**
 * Template Name: Why Trust Us
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
        <span class="text-light"><?php esc_html_e('Why Trust Us', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-5 fw-extrabold text-uppercase tracking-tight text-white mb-3"><?php esc_html_e('Why Trust Us ?', 'ichapore-swapnapuron'); ?></h1>
      <p class="lead text-light opacity-90 mb-0" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('Credibility and accountability have always been the benchmark for Ichapore Swapnapuron Society and are achieved through the promotion of principles of good governance in our processes, audit practices, and statutory compliance.', 'ichapore-swapnapuron'); ?>
      </p>
    </div>
  </section>

  <!-- STATUTORY REGISTRATION & GOVERNANCE -->
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row g-4 g-lg-5 align-items-center">
        <div class="col-lg-6">
          <div class="d-inline-flex align-items-center gap-2 text-moss fw-bold text-uppercase mb-2" style="font-size:0.75rem; letter-spacing:0.1em;">
            <span class="material-symbols-outlined fs-6">gavel</span>
            <span><?php esc_html_e('Legal Status', 'ichapore-swapnapuron'); ?></span>
          </div>
          <h2 class="display-6 fw-extrabold mb-4"><?php esc_html_e('Official Registration & Tax Certifications', 'ichapore-swapnapuron'); ?></h2>
          <p class="text-secondary lh-lg mb-4">
            <?php esc_html_e('Ichapore Swapnapuron Society has a comprehensive system of regulations and is continually updating and strengthening them in accordance with statutory government norms.', 'ichapore-swapnapuron'); ?>
          </p>

          <div class="space-y-3 d-flex flex-column gap-3">
            <div class="p-3 p-sm-4 rounded-4 bg-white border border-sand-300 shadow-sm d-flex gap-3 align-items-start">
              <span class="material-symbols-outlined text-moss fs-2">verified</span>
              <div>
                <h3 class="h6 fw-bold mb-1"><?php esc_html_e('Societies Registration Act, 1961', 'ichapore-swapnapuron'); ?></h3>
                <p class="text-secondary small mb-1"><?php esc_html_e('Registered under the West Bengal Societies Registration Act XXVI of 1961.', 'ichapore-swapnapuron'); ?></p>
                <span class="badge bg-light text-dark border"><?php esc_html_e('Registration No. S/1L/61464 of 2009-2010', 'ichapore-swapnapuron'); ?></span>
              </div>
            </div>

            <div class="p-3 p-sm-4 rounded-4 bg-white border border-sand-300 shadow-sm d-flex gap-3 align-items-start">
              <span class="material-symbols-outlined text-terracotta fs-2">receipt_long</span>
              <div>
                <h3 class="h6 fw-bold mb-1"><?php esc_html_e('12A & 80G Tax Exemption (Income Tax Act, 1961)', 'ichapore-swapnapuron'); ?></h3>
                <p class="text-secondary small mb-2"><?php esc_html_e('Donations are eligible for 50% tax deduction under Section 80G.', 'ichapore-swapnapuron'); ?></p>
                <div class="d-flex flex-wrap gap-2">
                  <span class="badge bg-light text-dark border"><?php echo esc_html('80G URN: ' . swapnapuron_opt('swapnapuron_80g_urn', 'AAAAI9694KF20251')); ?></span>
                  <span class="badge bg-light text-dark border"><?php echo esc_html('12A URN: ' . swapnapuron_opt('swapnapuron_12a_urn', 'AAAAI9694KE20216')); ?></span>
                  <span class="badge bg-light text-dark border"><?php echo esc_html('PAN: ' . swapnapuron_opt('swapnapuron_pan', 'AAAAI9694K')); ?></span>
                </div>
              </div>
            </div>

            <div class="p-3 p-sm-4 rounded-4 bg-white border border-sand-300 shadow-sm d-flex gap-3 align-items-start">
              <span class="material-symbols-outlined text-primary fs-2">account_balance</span>
              <div>
                <h3 class="h6 fw-bold mb-1"><?php esc_html_e('NITI Aayog NGO-Darpan Portal', 'ichapore-swapnapuron'); ?></h3>
                <p class="text-secondary small mb-0"><?php esc_html_e('Formally registered and verified on the official Government of India NGO-Darpan portal for non-profit transparency.', 'ichapore-swapnapuron'); ?></p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="editorial-card shadow-lg">
            <div class="card-img-wrap" style="height: 320px;">
              <img src="<?php echo esc_url(SWAPNAPURON_URI . '/assets/images/tutoring-academy.jpg'); ?>" alt="Child learning and empowerment" loading="lazy">
              <span class="badge rounded-pill bg-dark position-absolute top-0 start-0 m-3 px-3 py-2 text-uppercase" style="font-size:0.7rem; letter-spacing:0.08em;">
                <?php esc_html_e('Strict CA Audits', 'ichapore-swapnapuron'); ?>
              </span>
            </div>
            <div class="p-4 p-sm-5 bg-white">
              <div class="d-inline-flex align-items-center gap-2 text-moss fw-bold text-uppercase mb-2" style="font-size:0.75rem; letter-spacing:0.1em;">
                <span class="material-symbols-outlined fs-6">fact_check</span>
                <span><?php esc_html_e('Three-Tier Audit System', 'ichapore-swapnapuron'); ?></span>
              </div>
              <h3 class="h4 fw-extrabold mb-3"><?php esc_html_e('Multi-Tier Financial Scrutiny', 'ichapore-swapnapuron'); ?></h3>
              <p class="text-secondary lh-lg mb-0 small">
                <?php esc_html_e('Society operates a strict three-tier audit system – internal, statutory, and external conducted by qualified Chartered Accountants to ensure that every single rupee is utilized for the direct development of people, animals, and the environment.', 'ichapore-swapnapuron'); ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- UTILISATION OF FUNDS -->
  <section class="bg-sand-warm py-5 py-lg-6 border-top border-bottom border-sand-300">
    <div class="container">
      <div class="text-center mx-auto mb-5" style="max-width: 680px;">
        <span class="text-uppercase fw-bold text-terracotta d-block mb-2" style="font-size:0.75rem; letter-spacing:0.1em;"><?php esc_html_e('Where Your Money Goes', 'ichapore-swapnapuron'); ?></span>
        <h2 class="display-6 fw-extrabold mb-3"><?php esc_html_e('Utilisation of Funds', 'ichapore-swapnapuron'); ?></h2>
        <p class="text-secondary small mb-0"><?php esc_html_e('We maintain an industry-leading program expenditure ratio, keeping administrative overhead to the bare minimum.', 'ichapore-swapnapuron'); ?></p>
      </div>

      <div class="row align-items-center g-4 g-lg-5" style="max-width: 1000px; margin: 0 auto;">
        <!-- Visual Progress Breakdown -->
        <div class="col-lg-7">
          <div class="bg-white rounded-4 p-4 p-sm-5 border border-sand-300 shadow-sm">
            <div class="mb-4">
              <div class="d-flex justify-content-between align-items-center mb-1">
                <span class="fw-bold text-dark"><?php esc_html_e('Direct Project & Field Programs', 'ichapore-swapnapuron'); ?></span>
                <span class="fw-black fs-5 text-moss">93%</span>
              </div>
              <div class="progress" style="height: 14px; border-radius: 999px;">
                <div class="progress-bar" role="progressbar" style="width: 93%; background-color: var(--moss-600);" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small class="text-muted"><?php esc_html_e('Education materials, mobile medical camps, Thalassemia care, animal collars, and winter blankets.', 'ichapore-swapnapuron'); ?></small>
            </div>

            <div class="mb-4">
              <div class="d-flex justify-content-between align-items-center mb-1">
                <span class="fw-bold text-dark"><?php esc_html_e('Contingency Accumulation For Next Year', 'ichapore-swapnapuron'); ?></span>
                <span class="fw-black fs-5 text-terracotta">5%</span>
              </div>
              <div class="progress" style="height: 14px; border-radius: 999px;">
                <div class="progress-bar" role="progressbar" style="width: 5%; background-color: var(--terracotta-600);" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small class="text-muted"><?php esc_html_e('Emergency buffer fund for unexpected humanitarian crises or medical disasters.', 'ichapore-swapnapuron'); ?></small>
            </div>

            <div>
              <div class="d-flex justify-content-between align-items-center mb-1">
                <span class="fw-bold text-dark"><?php esc_html_e('Administrative & Office Expenses', 'ichapore-swapnapuron'); ?></span>
                <span class="fw-black fs-5 text-secondary">2%</span>
              </div>
              <div class="progress" style="height: 14px; border-radius: 999px;">
                <div class="progress-bar bg-secondary" role="progressbar" style="width: 2%;" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <small class="text-muted"><?php esc_html_e('Bare minimum compliance, audit filing, and communication costs.', 'ichapore-swapnapuron'); ?></small>
            </div>
          </div>
        </div>

        <!-- Highlight Card -->
        <div class="col-lg-5">
          <div class="rounded-4 p-4 p-sm-5 text-white h-100 d-flex flex-column justify-content-between" style="background: linear-gradient(145deg, #1a3e29 0%, #0e2417 100%);">
            <div>
              <span class="badge rounded-pill bg-white text-moss mb-3 px-3 py-2 text-uppercase fw-bold" style="font-size:0.7rem;"><?php esc_html_e('Highest Efficiency', 'ichapore-swapnapuron'); ?></span>
              <div class="display-3 fw-black text-white mb-2">93%</div>
              <h3 class="h5 fw-bold mb-3"><?php esc_html_e('Reaches Frontline Communities Directly', 'ichapore-swapnapuron'); ?></h3>
              <p class="small opacity-90 lh-lg mb-0">
                <?php esc_html_e('Unlike organizations burdened by corporate overhead, 93 out of every 100 rupees donated translates straight into children\'s books, life-saving blood vials, spectacles, saplings, and winter warmth.', 'ichapore-swapnapuron'); ?>
              </p>
            </div>
            <div class="pt-4 border-top border-white border-opacity-25 mt-4">
              <a href="<?php echo esc_url(home_url('/donate')); ?>" class="btn btn-terracotta rounded-pill w-100 py-3 d-inline-flex align-items-center justify-content-center gap-2 shadow">
                <span><?php esc_html_e('Donate With Confidence', 'ichapore-swapnapuron'); ?></span>
                <span class="material-symbols-outlined fs-6">arrow_forward</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
