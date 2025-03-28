<?php
/**
 * Archive Template
 */
get_header();
?>

<main class="archive-page">
    <div class="container">
        <h1><?php the_archive_title(); ?></h1>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <div class="post-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <?php
            endwhile;
        else :
            echo "<p>No posts found.</p>";
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>
