<?php get_header(); ?>
<section class="max-w-screen-md">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
    <?php }
    }
    ?>
</section>
<?php get_footer(); ?>