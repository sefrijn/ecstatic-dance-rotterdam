<section id="team" class="text-center max-w-screen-sm">
    <?php
    $post = get_page_by_path("team");
    echo "<h2>{$post->post_title}</h2>";
    echo apply_filters("the_content", $post->post_content);
    ?>
</section>
<div class="text-center my-12">
    <h3>DJ's</h3>
    <?php
    // Define the arguments for the query
    $args = [
        "post_type" => "dj",
        "posts_per_page" => -1,
        "orderby" => "menu_order",
        "order" => "ASC",
    ];

    // Create a new query object
    $query = new WP_Query($args);

    // Display the posts
    if ($query->have_posts()) {
        echo '<ul class="grid grid-cols-3 gap-5 mx-auto max-w-screen-md items-start">';

        while ($query->have_posts()) {
            $query->the_post();

            echo '<div class="dj-bio flex flex-col items-center justify-center">';
            echo get_the_post_thumbnail(get_the_ID(), "large", [
                "class" => "object-cover aspect-square w-full",
            ]);
            echo '<h4 class="group-hover:text-rose-500">' .
                get_the_title() .
                "</h4>";
            echo apply_filters("the_content", $post->post_content);

            echo "</div>";
        }

        echo "</ul>";

        // Reset the query to its original state
        wp_reset_postdata();
    }
    ?>
</div>

<div class="text-center my-12">
    <h3>Volunteers</h3>
    <?php
    // Define the arguments for the query
    $args = [
        "post_type" => "volunteer",
        "posts_per_page" => -1,
        "orderby" => "menu_order",
        "order" => "ASC",
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        echo '<ul class="grid grid-cols-5 gap-5 mx-auto max-w-screen-md">';

        while ($query->have_posts()) {
            $query->the_post();

            echo '<li class="flex flex-col items-center justify-center">';
            echo get_the_post_thumbnail(get_the_ID(), "medium", [
                "class" => "object-cover aspect-square w-full",
            ]);
            echo "<h4>" . get_the_title() . "</h4>";
            echo "</li>";
        }

        echo "</ul>";

        wp_reset_postdata();
    }
    ?>
</div>