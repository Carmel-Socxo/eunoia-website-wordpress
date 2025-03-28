<?php

/**
 * Template Name: Home
 */
get_header();
?>

<section>
  <div class="content-wrapper position-relative bg-pink">
    <div class="content-container">
      <div
        class="hero-section row justify-content-center align-items-center">
        <div class="col-lg-7 hero-content position-relative text-start">
          <h1>Empowering Students, Nurturing their Well-Being</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viva
            mus viverra auctor velit. Vestibulum id velit aliquam, placerat
            lacus et, consequat leo.
          </p>
          <button
            class="btn learn-btn rounded-2 fw-bold d-flex align-items-center justify-content-center fs-5 px-4 py-2">
            Learn More
          </button>
        </div>
        <div class="col-lg-5 hero-image">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/home-page-banner.png"
            alt="home-page-banner"
            class="img-fluid h-image" />
        </div>
      </div>
    </div>
    <div
      class="black-box row d-flex justify-content-start align-items-center ps-5">
      <div
        class="text-white col-lg-2 d-flex flex-column justify-content-center align-items-center">
        <h1>700+</h1>
        <p>Total</p>
      </div>
      <div
        class="text-white col-lg-2 d-flex flex-column justify-content-center align-items-center">
        <h1>95%</h1>
        <p>Patient Retention</p>
      </div>
      <div
        class="text-white col-lg-2 d-flex flex-column justify-content-center align-items-center">
        <h1>4.9</h1>
        <p>Average Rating</p>
      </div>
    </div>
  </div>
</section>

<!--Problem Statement-->
<section>
  <div class="content-wrapper">
    <div class="content-container statement-section text-center py-5 px-4">
      <h1 class="mb-5 fw-bold">Problem Statement</h1>
      <p class="mb-5">
        Many students face a tough battle with mental health, and it's time
        we understand their challenges. Lack of awareness and stigma
        surrounding mental health is real and often force students into
        silence, making it hard to seek professional help. Access to mental
        health professionals is limited, and when available, the quality of
        care is often expensive and may not meet the diverse needs of
        students.
      </p>
      <p class="mb-5">
        We are on a mission to change the narrative around students’ mental
        health, address their struggles through awareness, education,
        provide resources and empower them to thrive in the face of
        challenges. We envision creating a community where every student can
        flourish emotionally, academically, and socially.
      </p>
    </div>
  </div>
</section>

<!--Benefits of Learning From Us-->
<section class="content-wrapper bg-pink">
  <div class="content-container">
    <div class="row benefit-learning p-5">
      <div
        class="col-lg-6 text-start benefit-content d-flex flex-column justify-content-center align-items-center">
        <h1 class="fw-bold">What are the Benefits of Learning From Us?</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viva mus
          viverra auctor velit. Vestibulum id velit aliquam, placerat lacus
          et, consequat leo.
        </p>
        <button
          class="btn learn-btn rounded-2 fw-bold fs-5 px-4 py-2 align-self-start">
          Read More
        </button>
      </div>
      <div
        class="col-lg-6 benefit-blocks d-flex flex-column justify-content-center align-items-center gap-3">
        <div class="benefit-block block-1 bg-white rounded-3 mb-3">
          <div class="row w-100 h-100 m-0 p-0">
            <div
              class="col-lg-3 col-md-4 col-sm-4 col-4 d-flex flex-column justify-content-center align-items-center">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/Learn.svg"
                alt="home-page-banner"
                class="img-fluid benefit-img" />
            </div>
            <div
              class="col-lg-9 col-md-8 col-sm-8 col-8 d-flex flex-column justify-content-center align-items-left gap-2">
              <p class="m-0 p-0">Learn</p>
              <div class="bg-body-secondary w-100 h-80 rounded-3"></div>
              <div class="bg-body-secondary w-75 h-80 rounded-3"></div>
            </div>
          </div>
        </div>
        <div class="benefit-block block-2 bg-white rounded-3 mb-3">
          <div class="row w-100 h-100 m-0 p-0">
            <div
              class="col-lg-3 col-md-4 col-sm-4 col-4 d-flex flex-column justify-content-center align-items-center">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/Graduate.svg"
                alt="home-page-banner"
                class="img-fluid benefit-img" />
            </div>
            <div
              class="col-lg-9 col-md-8 col-sm-8 col-8 d-flex flex-column justify-content-center align-items-left gap-2">
              <p class="m-0 p-0">Graduate</p>
              <div class="bg-body-secondary w-100 h-80 rounded-3"></div>
              <div class="bg-body-secondary w-75 h-80 rounded-3"></div>
            </div>
          </div>
        </div>
        <div class="benefit-block block-3 bg-white rounded-3">
          <div class="row w-100 h-100 m-0 p-0">
            <div
              class="col-lg-3 col-md-4 col-sm-4 col-4 d-flex flex-column justify-content-center align-items-center">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/Work.svg"
                alt="home-page-banner"
                class="img-fluid benefit-img" />
            </div>
            <div
              class="col-lg-9 col-md-8 col-sm-8 col-8 d-flex flex-column justify-content-center align-items-left gap-2">
              <p class="m-0 p-0">Work</p>
              <div class="bg-body-secondary w-100 h-80 rounded-3"></div>
              <div class="bg-body-secondary w-75 h-80 rounded-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Getting to Know More-->
<section class="content-wrapper">
  <div class="content-container">
    <div class="row coursy-row p-5">
      <div
        class="col-lg-7 text-start coursy-content d-flex flex-column justify-content-center align-items-left">
        <h1 class="fw-bold">Getting to Know More about Coursy</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viva mus
          viverra auctor velit. Vestibulum id velit aliquam, placerat lacus
          et, consequat leo.
        </p>
        <button
          class="btn learn-btn rounded-2 fw-bold fs-5 px-4 py-2 align-self-start">
          Read More
        </button>
      </div>
      <div
        class="col-lg-5 position-relative coursy-image d-flex flex-column justify-content-center align-items-center">
        <div class="box bg-pink top-box"></div>
        <img
          src="<?php echo get_template_directory_uri(); ?>/images/video.png"
          class="position-absolute z-2 video-image top-50 start-50 translate-middle" />
        <div class="box bg-pink bottom-box"></div>
      </div>
    </div>
  </div>
</section>

<!--Benefits of Eunoia-->
<section class="content-wrapper">
  <div class="content-container p-5">
    <h1 class="text-center fw-bold">Benefits of Eunoia</h1>
    <div class="row justify-content-center font-color mt-5 benefit-section">
      <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
        <div
          class="p-3 p-lg-4 rounded-3 text-center w-100 bg-pink benefit-card mb-5">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/support.svg"
            alt="Support Icon"
            class="mb-2 mb-lg-3"
            width="90" />
          <h5 class="fw-bold mb-3 text-body-secondary">
            Accessible Support:
          </h5>
          <ul class="text-start m-0 text-body-secondary">
            <li>24/7 helpline or chat support</li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
        <div
          class="p-3 p-lg-4 rounded-3 text-center w-100 bg-pink benefit-card mb-5">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/resources.svg"
            alt="Education Icon"
            class="mb-2 mb-lg-3"
            width="90" />
          <h5 class="fw-bold mb-3 text-body-secondary">
            Educational Resources:
          </h5>
          <ul class="text-start m-0 text-body-secondary">
            <li>
              Articles, Videos, and interactive content on mental health
              awareness
            </li>
            <li>
              Information on common mental health issues among students
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-32 d-flex justify-content-center">
        <div
          class="p-3 p-lg-4 rounded-3 text-center w-100 bg-pink benefit-card mb-5">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/forums.svg"
            alt="Community Icon"
            class="mb-2 mb-lg-3"
            width="90" />
          <h5 class="fw-bold mb-3 text-body-secondary">
            Community and Forums:
          </h5>
          <ul class="text-start m-0 text-body-secondary">
            <li>Safe online space for students to share experiences</li>

            <li>
              Moderated forums for discussions and peer-led initiatives
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!--We Hear From Our Students-->
<section class="content-wrapper bg-pink">
  <div
    class="content-container hear-section p-5 d-flex flex-column justify-content-center align-items-center">
    <h1 class="text-center">We Hear From Our Students</h1>
    <div class="row hear-blocks p-4">
      <div
        class="col-lg-32 d-flex hear-block justify-content-center flex-column align-items-left gap-1 bg-white p-2 rounded-4 m-2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/star.svg" class="star-image m-0 p-0" />
        <p>
          Lorem ipsum dolor sit amet, consectetur adip iscing elit. Vivamus
          viverra auctor velit. Vestibulum id velit aliquam, placerat lacus
          et.
        </p>
        <div class="row">
          <div class="col-lg-1 col-md-2 col-sm-3 col-4 student-img p-0">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/p1.png"
              class="star-image align-self-start m-0 p-0" />
          </div>
          <div class="col-lg-10 col-md-10 col-sm-9 col-8">
            Samantha William
          </div>
        </div>
      </div>
      <div
        class="col-lg-32 d-flex hear-block justify-content-center flex-column align-items-left gap-1 bg-white p-2 rounded-4 m-2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/star.svg" class="star-image m-0 p-0" />
        <p>
          Lorem ipsum dolor sit amet, consectetur adip iscing elit. Vivamus
          viverra auctor velit. Vestibulum id velit aliquam, placerat lacus
          et.
        </p>
        <div class="row">
          <div class="col-lg-1 col-md-2 col-sm-3 col-4 student-img p-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/p2.png" class="star-image m-0 p-0" />
          </div>
          <div class="col-lg-10 col-md-10 col-sm-9 col-8">
            Brooklyn Simmons
          </div>
        </div>
      </div>
      <div
        class="col-lg-32 d-flex hear-block justify-content-center flex-column align-items-left gap-1 bg-white p-2 rounded-4 m-2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/star.svg" class="star-image m-0 p-0" />
        <p>
          Lorem ipsum dolor sit amet, consectetur adip iscing elit. Vivamus
          viverra auctor velit. Vestibulum id velit aliquam, placerat lacus
          et.
        </p>
        <div class="row">
          <div class="col-lg-1 col-md-2 col-sm-3 col-4 student-img p-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/p3.png" class="star-image m-0 p-0" />
          </div>
          <div class="col-lg-10 col-md-10 col-sm-9 col-8">Jenny Wilson</div>
        </div>
      </div>
    </div>
    <button class="btn learn-btn rounded-2 fw-bold fs-5 px-4 py-2">
      Try Eunoia Now
    </button>
  </div>
</section>


<?php get_footer(); ?>