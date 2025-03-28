<?php
/**
 * Template Name: Eunoia App
 */
get_header();
?>

<div class="content-wrapper content-boder bg-pink">
    <div class="content-container">

        <div class="row align-items-center">

            <div class="col-12 col-md-6">
              <h1 class=" fw-bold display-5 ">Online therapy with a licensed therapist for the Benefit</h1>
              <ul class="list-unstyled mt-3 fs-5 font-color">
                <li class="d-flex align-items-center mb-2">
                  <i class=" bi-check-circle  me-2"></i> No wait lists
                </li>
                <li class="d-flex align-items-center mb-2">
                  <i class=" bi-check-circle  me-2"></i> Match with a therapist today
                </li>
                <li class="d-flex align-items-center mb-2">
                  <i class=" bi-check-circle  me-2"></i> Most insured members have a 0 copay
                </li>
              </ul>
              <a href="#" class="btn btn-dark1 fw-bold btn-lg px-4 py-2 mt-3">Learn More</a>
             
            </div>
 
            <div class="col-12 col-md-6 text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/images/therapy.png" alt="Therapy" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <div class="content-container">
      <!--Benefits of Eunoia-->
      <section class="py-5 bg-white">
        <div class="container">
          <h2 class="text-center fw-bold mb-4 mb-lg-5">Benefits of Eunoia</h2>
          <div class="row justify-content-center g-4 font-color">

            <div class="col-12 col-md-6 col-lg-4 d-flex">
              <div class="p-3 p-lg-4 rounded-3 text-center w-100 bg-support">
                <img src="<?php echo get_template_directory_uri(); ?>/images/support.svg" alt="Support Icon" class="mb-2 mb-lg-3" width="90">
                <h5 class="fw-bold mb-3">Accessible Support:</h5>
                <ul class="list-unstyled text-start m-0">
                  <li>• 24/7 helpline or chat support</li>
                </ul>
              </div>
            </div>
      
            <div class="col-12 col-md-6 col-lg-4 d-flex">
              <div class="p-3 p-lg-4 rounded-3 text-center w-100 bg-support">
                <img src="<?php echo get_template_directory_uri(); ?>/images/resources.svg" alt="Education Icon" class="mb-2 mb-lg-3" width="90">
                <h5 class="fw-bold mb-3">Educational Resources:</h5>
                <ul class="list-unstyled text-start m-0">
                  <li>• Articles, Videos, and 
                    interactive content on mental 
                    health awareness</li>
                  <li>• Information on common 
                    mental health issues among 
                    students</li>
              
                </ul>
              </div>
            </div>
 
            <div class="col-12 col-md-6 col-lg-4 d-flex">
              <div class="p-3 p-lg-4 rounded-3 text-center w-100 bg-support">
                <img src="<?php echo get_template_directory_uri(); ?>/images/forums.svg" alt="Community Icon" class="mb-2 mb-lg-3" width="90">
                <h5 class="fw-bold mb-3">Community and Forums:</h5>
                <ul class="list-unstyled text-start m-0">
                  <li>• Safe online space for students 
                    to share experiences</li>
                 
                  <li>• Moderated forums for 
                    discussions and peer-led 
                    initiatives
                    </li>
                </ul>
              </div>
            </div>
      
          </div>
        </div>
      </section>
</div>
</div>

      <!--Last section-->
      <section class=" container-fluid py-5 bg-pink" >
        <div class="container bg-pink">
            <h2 class="text-center fw-bold mb-4 display-5">Here’s How It Works</h2>
    
            <div class="row align-items-center">
    
                <div class="col-12 col-md-6 order-1 order-md-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/How-It-Works.jpg" alt="Team Discussion" class="img-fluid rounded-3" style="height: 100%;">
                </div>
   
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <p class="text-left mb-3 sec-p">
                        If the path is beautiful, let us not ask where it leads. my<br> 
                        religion is very simple. my religion is kindness. each of us<br> 
                        has within our power the ability.
                    </p>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-start mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Team.svg" alt="Team" class="me-3 " width="80" height="80">
                            <div>
                                <h4 class="fw-bold">Team</h4> 
                                <p class="fs-5">Talk to AI copilot for support and personalized recommendations. Connect with mental health</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/track_progress.svg" alt="Track Progress"  class="me-3 " width="80" height="80">
                            <div>
                                <h4 class="fw-bold">Track Progress</h4>
                                <p class="fs-5">Take a personalized mental health assessment to identify symptoms and triggers</p>
                            </div>
                        </li>
                        <li class="d-flex align-items-start">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/AI_Copilot.svg" alt="AI Copilot"  class="me-3 " width="80" height="80">
                            <div>
                                <h4 class="fw-bold">AI Copilot</h4>
                                <p class="fs-5">If the path is beautiful, let us not ask where it leads.</p>
                            </div>
                        </li>
                    </ul>
                </div>
    
            </div>
        </div>
    </section>


<?php get_footer(); ?>

