<?php

/**
 * Template Name: Blog Home
 */
get_header();
?>

<!--Blogs Hero Section-->
<section>
  <div class="content-wrapper">
    <div class="content-container">
      <?php
      // Fetch the latest post as the hero post
      $hero_query = new WP_Query([
        'posts_per_page' => 1,
        'post_status' => 'publish',
      ]);

      if ($hero_query->have_posts()) :
        while ($hero_query->have_posts()) : $hero_query->the_post();
      ?>
          <div class="row hero-blog-section mt-5 pt-5">
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
              <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="blog-image mw-100" />
              <?php endif; ?>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center hero-blog-content fs-5 align-items-left">
              <div class="mb-4 success-text">
                <span class="green-text"><?php the_category(', '); ?></span>
                <strong>-</strong>
                <span class="date-text"><?php echo get_the_date(); ?></span>
              </div>
              <h2 class="mb-4 fw-bold heading-text">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <p class="mb-4 des-text"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>

              <div class="row user-image">
                <div class="col-lg-1 col-md-2 col-sm-2 col-2 p-0 d-flex justify-content-center align-items-center">
                  <?php echo get_avatar(get_the_author_meta('ID'), 50, '', '', ['class' => 'rounded-circle border border-dark border-2 h-75 m-0 blog-user-img p-0']); ?>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10 d-dflex justify-content-center blog-user-content align-items-left">
                  <p class="fs-4 fw-medium m-0 p-0"><?php the_author(); ?></p>
                  <p class="m-0 p-0 des-text"><?php the_author_meta('description'); ?></p>
                </div>
              </div>
            </div>
          </div>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>
</section>

<!-- Blog Section with Pagination -->
<section class="content-wrapper">
  <div class="content-container">
    <div class="row mt-5">
      <?php
      // Pagination setup
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $posts_per_page = 4;

      // Fetch paginated blog posts
      $blog_query = new WP_Query([
        'posts_per_page' => $posts_per_page,
        'paged' => $paged,
        'post_status' => 'publish',
        'offset' => 1 // Offset to skip the hero post
      ]);

      if ($blog_query->have_posts()) :
        while ($blog_query->have_posts()) : $blog_query->the_post();
      ?>
          <div class="col-lg-6 d-flex flex-column blog-article gap-5 p-5">
            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="blog-image mw-100" />
            <div class="d-flex flex-column justify-content-center hero-blog-content fs-5 align-items-left">
              <div class="mb-4 success-text">
                <span class="green-text "><?php the_category(', '); ?></span>
                <strong>-</strong>
                <span class="date-text"><?php echo get_the_date(); ?></span>
              </div>
              <h2 class="mb-4 fw-normal heading-text">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <p class="mb-4 des-text"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>

              <div class="row user-image">
                <div class="col-lg-1 col-md-2 col-sm-2 col-2 p-0 d-flex justify-content-center align-items-center">
                  <?php echo get_avatar(get_the_author_meta('ID'), 50, '', '', ['class' => 'rounded-circle border border-dark border-2 h-75 m-0 blog-user-img p-0']); ?>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-10 d-dflex justify-content-center blog-user-content align-items-left">
                  <p class="fs-4 fw-medium  m-0 p-0"><?php the_author(); ?></p>
                  <p class="m-0 p-0 des-text"><?php the_author_meta('description'); ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php
        endwhile;
        ?>
    </div>

    <!-- Pagination -->
    <div class="pagination mt-4 text-center">
      <?php
        echo paginate_links([
          'total' => $blog_query->max_num_pages,
          'current' => $paged,
          'prev_text' => '&laquo; Previous',
          'next_text' => 'Next &raquo;',
        ]);
      ?>
    </div>

  <?php
        wp_reset_postdata();
      else :
        echo '<p class="text-center">No posts available.</p>';
      endif;
  ?>
  </div>
</section>

<?php get_footer(); ?>