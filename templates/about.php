<div id="about" class="relative py-16">
    <img class="brightness-75 absolute z-0 object-cover left-0 top-0 w-full h-full" src="<?php echo get_template_directory_uri(); ?>/public/bg-large.jpg" alt="">
    <section class="relative z-10 max-w-screen-lg text-white">
        <?php
        $post = get_page_by_path("about");
        echo '<div class="">' .
            apply_filters("the_content", $post->post_content) .
            "</div>";
        ?>
    </section>
</div>