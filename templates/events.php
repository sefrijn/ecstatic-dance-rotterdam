<section class="text-center max-w-screen-md">
    <?php
    $post = get_page_by_path("events-home");
    echo "<h2>{$post->post_title}</h2>";
    echo apply_filters("the_content", $post->post_content);
    ?>
</section>