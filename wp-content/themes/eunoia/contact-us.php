<?php
/**
 * Template Name: Contact Us
 */
get_header();
?>

<section
      class="mental-health-section py-5"
      style="background-color: #f8f9fa"
    >
      <div class="container">
        <h2 class="text-dark fw-bold display-5 mb-5">Contact Us</h2>
        <div
          class="d-flex flex-column flex-lg-row align-items-stretch shadow-sm bg-white rounded-4 p-5"
        >
          <div class="w-100 w-lg-50 pe-lg-5">
            <h1 class="mb-4 fw-bold text-dark display-5">
              Take care of your <br />
              mental health now
            </h1>
            <form class="font-color">
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label text-muted">Name</label>
                  <input
                    type="text"
                    class="form-control rounded-3 py-3"
                    placeholder="Name"
                  />
                </div>
                <div class="col-md-6">
                  <label class="form-label text-muted">Phone</label>
                  <input
                    type="tel"
                    class="form-control rounded-3 py-3"
                    placeholder="Phone number"
                  />
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label text-muted">Message</label>
                <textarea
                  class="form-control rounded-3 py-3"
                  placeholder="Text message"
                  rows="3"
                ></textarea>
              </div>
              <button class="btn learn-btn rounded-2 fw-bold d-flex align-items-center justify-content-center fs-5 px-4 py-2 btn custom-btn">Get a consultation</button>
            </form>
          </div>

          <div class="w-100 w-lg-50 ps-lg-5 mt-4 mt-lg-0">
            <p class="text-muted mb-6 fs-5 lh-lg">
              If you are going to use a passage of Lorem Ipsum, <br />
              you need to be sure there isn't <br />
              anything embarrassing hidden.
            </p>

            <div class="contact-info pt-5">
              <div class="row mb-4">
                <div class="col-md-6 d-flex align-items-center mb-4">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/phon_icon.svg"
                    alt="Phone"
                    class="me-3"
                    width="50"
                  />
                  <div>
                    <p class="text-muted mb-1">Phone</p>
                    <span>+91 3456 7812 35</span>
                  </div>
                </div>

                <div class="col-md-6 d-flex align-items-center mb-4">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/mail_icon.svg"
                    alt="Email"
                    class="me-3"
                    width="50"
                  />
                  <div>
                    <p class="text-muted mb-1">Email</p>
                    <span>info@talkingminds.com</span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div
                  class="col-12 d-flex align-items-center justify-content-start"
                >
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/images/location.svg"
                    alt="Location"
                    class="me-3"
                    width="50"
                  />
                  <div>
                    <p class="text-muted mb-1">Location</p>
                    <span>49, Caradon Hill, ULBSTER</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>

