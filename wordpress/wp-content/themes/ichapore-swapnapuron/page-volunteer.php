<?php
/**
 * Template Name: Volunteer Registration
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
        <span class="text-white-50"><?php esc_html_e('Get Involved', 'ichapore-swapnapuron'); ?></span> 
        <span class="mx-2 text-white-50">/</span> 
        <span class="text-light"><?php esc_html_e('Volunteer Registration', 'ichapore-swapnapuron'); ?></span>
      </div>
      <h1 class="display-5 fw-extrabold text-uppercase tracking-tight text-white mb-3"><?php esc_html_e('Volunteer Registration Form', 'ichapore-swapnapuron'); ?></h1>
      <p class="lead text-light opacity-90 mb-0" style="max-width: 720px; font-weight: 400;">
        <?php esc_html_e('Volunteers are the backbone of our organization. Please fill in the details below to join hands with Ichapore Swapnapuron Society and spread positive change.', 'ichapore-swapnapuron'); ?>
      </p>
    </div>
  </section>

  <!-- FORM CONTAINER -->
  <section class="py-5 py-lg-6">
    <div class="container" style="max-width: 900px;">
      <div class="bg-white rounded-4 p-4 p-sm-5 border border-sand-300 shadow-sm">
        <div class="border-bottom pb-4 mb-4">
          <span class="badge bg-light text-dark border px-3 py-1.5 text-uppercase fw-bold mb-2" style="font-size:0.7rem; letter-spacing:0.08em;">
            <?php esc_html_e('Community Enrollment', 'ichapore-swapnapuron'); ?>
          </span>
          <h2 class="h3 fw-extrabold text-charcoal-900 mb-2"><?php esc_html_e('Be The Catalyst for Grassroots Upliftment', 'ichapore-swapnapuron'); ?></h2>
          <p class="text-secondary small mb-0">
            <?php esc_html_e('Whether you can give 2 hours on a weekend or contribute creative skills remotely, there is a meaningful place for you in our mission.', 'ichapore-swapnapuron'); ?>
          </p>
        </div>

        <form id="volunteerForm" onsubmit="handleVolunteerSubmit(event)">
          <!-- 1. Personal Information -->
          <div class="mb-4">
            <h3 class="h6 fw-bold text-uppercase text-terracotta mb-3" style="letter-spacing:0.08em;"><?php esc_html_e('1. Personal Details', 'ichapore-swapnapuron'); ?></h3>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label small fw-bold text-secondary"><?php esc_html_e('First Name *', 'ichapore-swapnapuron'); ?></label>
                <input type="text" class="form-control" placeholder="First name" required>
              </div>
              <div class="col-sm-6">
                <label class="form-label small fw-bold text-secondary"><?php esc_html_e('Last Name *', 'ichapore-swapnapuron'); ?></label>
                <input type="text" class="form-control" placeholder="Last name" required>
              </div>
              <div class="col-sm-6">
                <label class="form-label small fw-bold text-secondary"><?php esc_html_e('Email Address *', 'ichapore-swapnapuron'); ?></label>
                <input type="email" class="form-control" placeholder="your.email@example.com" required>
              </div>
              <div class="col-sm-6">
                <label class="form-label small fw-bold text-secondary"><?php esc_html_e('Mobile Number (Calling) *', 'ichapore-swapnapuron'); ?></label>
                <div class="input-group">
                  <span class="input-group-text bg-light fw-bold small">+91</span>
                  <input type="tel" class="form-control" placeholder="98000 00000" required>
                </div>
              </div>
              <div class="col-sm-6">
                <label class="form-label small fw-bold text-secondary"><?php esc_html_e('WhatsApp Number *', 'ichapore-swapnapuron'); ?></label>
                <input type="tel" class="form-control" placeholder="WhatsApp number" required>
              </div>
              <div class="col-sm-6">
                <label class="form-label small fw-bold text-secondary"><?php esc_html_e('Age Group *', 'ichapore-swapnapuron'); ?></label>
                <select class="form-select" required>
                  <option value="" selected disabled><?php esc_html_e('Select age group', 'ichapore-swapnapuron'); ?></option>
                  <option value="below18">Below 18</option>
                  <option value="18-24">18 - 24 years</option>
                  <option value="25-34">25 - 34 years</option>
                  <option value="35-50">35 - 50 years</option>
                  <option value="above50">Above 50 years</option>
                </select>
              </div>
            </div>
          </div>

          <!-- 2. Location & Occupation -->
          <div class="mb-4 pt-3 border-top">
            <h3 class="h6 fw-bold text-uppercase text-terracotta mb-3" style="letter-spacing:0.08em;"><?php esc_html_e('2. Location & Occupation', 'ichapore-swapnapuron'); ?></h3>
            <div class="row g-3">
              <div class="col-sm-4">
                <label class="form-label small fw-bold text-secondary"><?php esc_html_e('State *', 'ichapore-swapnapuron'); ?></label>
                <select class="form-select" required>
                  <option value="West Bengal" selected>West Bengal</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="col-sm-4">
                <label class="form-label small fw-bold text-secondary"><?php esc_html_e('District *', 'ichapore-swapnapuron'); ?></label>
                <select class="form-select" required>
                  <option value="North 24 Parganas" selected>North 24 Parganas</option>
                  <option value="Kolkata">Kolkata</option>
                  <option value="Nadia">Nadia</option>
                  <option value="Hooghly">Hooghly</option>
                  <option value="South 24 Parganas">South 24 Parganas</option>
                  <option value="Howrah">Howrah</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="col-sm-4">
                <label class="form-label small fw-bold text-secondary"><?php esc_html_e('City / Neighborhood *', 'ichapore-swapnapuron'); ?></label>
                <input type="text" class="form-control" placeholder="e.g. Ichapore / Barrackpore" required>
              </div>
              <div class="col-12">
                <label class="form-label small fw-bold text-secondary"><?php esc_html_e('Current Occupation *', 'ichapore-swapnapuron'); ?></label>
                <select class="form-select" required>
                  <option value="" selected disabled><?php esc_html_e('Select occupation', 'ichapore-swapnapuron'); ?></option>
                  <option value="student">Student</option>
                  <option value="professional">Working Professional</option>
                  <option value="freelancer">Freelancer</option>
                  <option value="homemaker">Homemaker</option>
                  <option value="retired">Retired</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
          </div>

          <!-- 3. Areas of Interest -->
          <div class="mb-4 pt-3 border-top">
            <div class="d-flex justify-content-between align-items-center mb-2">
              <h3 class="h6 fw-bold text-uppercase text-terracotta mb-0" style="letter-spacing:0.08em;"><?php esc_html_e('3. How Would You Like To Volunteer? *', 'ichapore-swapnapuron'); ?></h3>
              <small class="text-muted"><?php esc_html_e('Select all that apply', 'ichapore-swapnapuron'); ?></small>
            </div>
            <p class="text-secondary small mb-3"><?php esc_html_e('Choose the programs or skills where you feel most comfortable contributing:', 'ichapore-swapnapuron'); ?></p>

            <div class="row g-2">
              <div class="col-md-6">
                <div class="form-check p-2 rounded-3 bg-light">
                  <input class="form-check-input ms-1" type="checkbox" id="int1">
                  <label class="form-check-label small fw-semibold ms-2" for="int1">Teaching & Tutoring Children</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check p-2 rounded-3 bg-light">
                  <input class="form-check-input ms-1" type="checkbox" id="int2">
                  <label class="form-check-label small fw-semibold ms-2" for="int2">Healthcare & Medical Camps</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check p-2 rounded-3 bg-light">
                  <input class="form-check-input ms-1" type="checkbox" id="int3">
                  <label class="form-check-label small fw-semibold ms-2" for="int3">Menstrual Hygiene & Pad Distribution</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check p-2 rounded-3 bg-light">
                  <input class="form-check-input ms-1" type="checkbox" id="int4">
                  <label class="form-check-label small fw-semibold ms-2" for="int4">Thalassemia Awareness & Screening (Udaan)</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check p-2 rounded-3 bg-light">
                  <input class="form-check-input ms-1" type="checkbox" id="int5">
                  <label class="form-check-label small fw-semibold ms-2" for="int5">Tree Plantation & Newborn Drives (Janmataru)</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check p-2 rounded-3 bg-light">
                  <input class="form-check-input ms-1" type="checkbox" id="int6">
                  <label class="form-check-label small fw-semibold ms-2" for="int6">Street Animal Welfare (Ayushman Bhava)</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check p-2 rounded-3 bg-light">
                  <input class="form-check-input ms-1" type="checkbox" id="int7">
                  <label class="form-check-label small fw-semibold ms-2" for="int7">Event Organization & Management</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check p-2 rounded-3 bg-light">
                  <input class="form-check-input ms-1" type="checkbox" id="int8">
                  <label class="form-check-label small fw-semibold ms-2" for="int8">Social Media & Content Writing</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check p-2 rounded-3 bg-light">
                  <input class="form-check-input ms-1" type="checkbox" id="int9">
                  <label class="form-check-label small fw-semibold ms-2" for="int9">Photography & Videography</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check p-2 rounded-3 bg-light">
                  <input class="form-check-input ms-1" type="checkbox" id="int10">
                  <label class="form-check-label small fw-semibold ms-2" for="int10">Graphic Designing & Creative Art</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check p-2 rounded-3 bg-light">
                  <input class="form-check-input ms-1" type="checkbox" id="int11">
                  <label class="form-check-label small fw-semibold ms-2" for="int11">Website & Tech Support</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check p-2 rounded-3 bg-light">
                  <input class="form-check-input ms-1" type="checkbox" id="int12">
                  <label class="form-check-label small fw-semibold ms-2" for="int12">Fundraising & Donor Relations</label>
                </div>
              </div>
            </div>
          </div>

          <!-- 4. Availability & Mode -->
          <div class="mb-4 pt-3 border-top">
            <h3 class="h6 fw-bold text-uppercase text-terracotta mb-3" style="letter-spacing:0.08em;"><?php esc_html_e('4. Time Commitment & Mode', 'ichapore-swapnapuron'); ?></h3>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label small fw-bold text-secondary"><?php esc_html_e('How much time can you dedicate? *', 'ichapore-swapnapuron'); ?></label>
                <select class="form-select" required>
                  <option value="" selected disabled><?php esc_html_e('Select commitment', 'ichapore-swapnapuron'); ?></option>
                  <option value="1-2hrs">1 - 2 hours per week</option>
                  <option value="3-5hrs">3 - 5 hours per week</option>
                  <option value="weekends">Weekends only</option>
                  <option value="oncall">On-call / Event-based</option>
                  <option value="fulltime">Full-time / Internship</option>
                </select>
              </div>
              <div class="col-sm-6">
                <label class="form-label small fw-bold text-secondary"><?php esc_html_e('How can you help us? *', 'ichapore-swapnapuron'); ?></label>
                <select class="form-select" required>
                  <option value="" selected disabled><?php esc_html_e('Select mode', 'ichapore-swapnapuron'); ?></option>
                  <option value="physical">Physically (on-field in Bengal)</option>
                  <option value="remote">Remotely (online / digital)</option>
                  <option value="both">Both (hybrid)</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label small fw-bold text-secondary"><?php esc_html_e('Why do you want to volunteer with Ichapore Swapnapuron Society?', 'ichapore-swapnapuron'); ?></label>
                <textarea class="form-control" rows="3" placeholder="Tell us a little about your motivation, background, or past experience..."></textarea>
              </div>
            </div>
          </div>

          <!-- 5. Declaration & Submit -->
          <div class="p-3 rounded-3 bg-sand-soft border border-sand-300 mb-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="declarationCheck" required>
              <label class="form-check-label small text-secondary" for="declarationCheck">
                <?php esc_html_e('I declare that the information provided is true and accurate. I am willing to abide by the rules and regulations of Ichapore Swapnapuron Society and contribute wholeheartedly towards its grassroots mission.', 'ichapore-swapnapuron'); ?>
              </label>
            </div>
          </div>

          <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between gap-3">
            <button type="submit" class="btn btn-terracotta rounded-pill px-5 py-3 fw-bold text-uppercase w-100 w-sm-auto shadow">
              <?php esc_html_e('Submit Volunteer Registration', 'ichapore-swapnapuron'); ?>
            </button>
            <span class="small text-muted"><?php esc_html_e('Our coordinator will connect with you within 48 hours.', 'ichapore-swapnapuron'); ?></span>
          </div>

          <div id="volunteerSuccess" class="alert alert-success mt-4 mb-0 d-none" role="alert">
            <div class="d-flex align-items-center gap-2">
              <span class="material-symbols-outlined fs-4">check_circle</span>
              <div>
                <strong><?php esc_html_e('Thank you for registering!', 'ichapore-swapnapuron'); ?></strong> <?php esc_html_e('We have received your volunteer application. Our field coordinator from Ichapore will contact you shortly on WhatsApp or phone.', 'ichapore-swapnapuron'); ?>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <script>
    function handleVolunteerSubmit(e) {
      e.preventDefault();
      document.getElementById('volunteerSuccess').classList.remove('d-none');
      e.target.reset();
      document.getElementById('volunteerSuccess').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
  </script>

<?php
get_footer();
