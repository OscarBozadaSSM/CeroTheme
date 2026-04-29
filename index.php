<?php get_header(); ?>

<main style="max-width:1200px; margin:0 auto; padding:20px;">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>