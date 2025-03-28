<?php
/**
 * Default Page Template
 */
get_header();
?>

<main class="page-content">
    <div class="container">
        <h1><?php the_title(); ?></h1>
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

