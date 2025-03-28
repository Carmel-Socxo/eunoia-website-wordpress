<?php
/**
 * Footer Template
 */
?>

<footer class="mt-auto border-top">
      <div class="container py-5">
        <div class="row mb-3 pb-4 border-bottom align-items-center">
          <div class="col-12 col-md-6">
            <h1 class="mb-2 mb-md-5 fw-semibold">
              Stay Updated with<br />Our Mental Health Newsletter
            </h1>
          </div>
          <div class="col-12 col-md-6 mt-3 mt-md-0">
            <div
              class="d-flex flex-column flex-md-row gap-3 w-100 newsletter-container"
            >
              <input
                type="email"
                class="form-control rounded-1 py-3 flex-grow-1"
                placeholder="Enter your email"
                style="font-size: 1.1rem; max-width: 100%"
              />
              <button
                class="btn btn-dark rounded-1 py-3 fw-bold d-flex align-items-center justify-content-center gap-2 px-4"
              >
                Subscribe <span class="fs-5">→</span>
              </button>
            </div>
          </div>
        </div>

        <div class="row g-5 border-bottom">
          <div class="col-12 col-md-3 order-md-1 pe-5">
            <img
              src="<?php echo get_template_directory_uri(); ?>/images/eunoia_white_logo.svg"
              alt="Eunoia logo"
              class="img-fluid mb-4 footer-logo"
            />
            <p class="footer-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
              viverra auctor velit. Vestibulum id velit aliquam, placerat lacus
              et, consequat leo. Quisque vel lobortis lectus.
            </p>
          </div>

          <div class="col-6 col-md-3 order-md-2 ps-md-5">
            <ul class="list-unstyled">
              <li class="mb-2">
                <a href="about.html" class="footer-link">About Us</a>
              </li>
              <li class="mb-2">
                <a href="contact.hmtl" class="footer-link">Contact Us</a>
              </li>
            </ul>
          </div>

          <div class="col-6 col-md-3 order-md-3">
            <h5 class="footer-link mb-3">Important Links</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#" class="footer-link">FAQ</a></li>
              <li class="ms-3"><a href="#" class="footer-link">App</a></li>
              <li class="ms-3"><a href="#" class="footer-link">Website</a></li>
              <li class="mb-2">
                <a href="blog.html" class="footer-link">Blog</a>
              </li>
              <li class="mb-2"><a href="#" class="footer-link">Videos</a></li>
              <li class="mb-2">
                <a href="#" class="footer-link">Terms of Service</a>
              </li>
              <li class="mb-2">
                <a href="#" class="footer-link">Privacy Policy</a>
              </li>
            </ul>
          </div>

          <div class="col-12 col-md-3 order-md-4 text-md-center">
            <h5 class="footer-link mb-3">Follow Us</h5>
            <div class="d-flex justify-content-center gap-4 social-icons">
              <a href="#" class="text-decoration-none text-white">
                <i class="bi bi-facebook fs-4"></i>
              </a>
              <a href="#" class="text-decoration-none text-white">
                <i class="bi bi-twitter fs-4"></i>
              </a>
              <a href="#" class="text-decoration-none text-white">
                <i class="bi bi-youtube fs-4"></i>
              </a>
              <a href="#" class="text-decoration-none text-white">
                <i class="bi bi-instagram fs-4"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col text-left small">&copy; <?php echo date('Y'); ?>. All rights reserved.</div>
        </div>
      </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>
