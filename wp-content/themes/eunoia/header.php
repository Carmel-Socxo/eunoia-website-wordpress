<?php

/**
 * Header Template
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(''); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
    <div class="content-wrapper bg-pink">
      <div class="content-container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/eunoia_lgo.svg" alt="Logo" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="navbarTogglerButton">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a
                    class="nav-link <?php echo (is_front_page() ? 'active' : ''); ?>"
                    aria-current="<?php echo (is_front_page() ? 'page' : 'false'); ?>"
                    href="<?php echo home_url(); ?>">
                    Home
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo (is_page('eunoia-app') ? 'active' : ''); ?>"
                    href="<?php echo home_url('/eunoia-app/'); ?>">
                    Eunoia App
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo (is_home() || is_category() || is_single() ? 'active' : ''); ?>"
                    href="<?php echo home_url('/blog/'); ?>">
                    Knowledge
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?php echo (is_page('about-us') ? 'active' : ''); ?>"
                    href="<?php echo home_url('/about-us/'); ?>">
                    About Us
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>