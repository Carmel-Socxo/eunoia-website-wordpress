<?php
/**
 * Single Post Template
 */
get_header();
?>

<main class="single-post">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="post-meta">
            <span>Published on: <?php the_date(); ?></span>
            <span>By: <?php the_author(); ?></span>
        </div>
        <div class="content">
            <?php
            while (have_posts()) : the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
