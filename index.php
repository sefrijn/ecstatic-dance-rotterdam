<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecstatic Dance Rotterdam</title>
    <link rel="stylesheet" href="https://use.typekit.net/moz2ugx.css">
    <?php wp_head(); ?> 

</head>
<body>
    <header class="relative w-full">
        <img class="absolute z-0 object-cover left-0 top-0 w-full h-full" src="<?php echo get_template_directory_uri(); ?>/public/header.jpg" alt="Ecstatic Dance Rotterdam main background graphic">
        <img class="relative z-10 py-16 max-w-screen-sm mx-auto" src="<?php echo get_template_directory_uri(); ?>/public/ed_logo.png" alt="Ecstatic Dance Rotterdam logo" />
    </header>
    <nav class="shadow flex items-center justify-center gap-10 py-6 text-xl text-slate-600">
        <a href="#">Events</a>
        <a href="#">Team</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </nav>
    <section class="text-center max-w-screen-sm">
        <?php
            $post = get_page_by_path("intro");
    echo "<h2>{$post->post_title}</h2>";
    echo apply_filters('the_content', $post->post_content);
    ?>
    </section>

    <section class="text-center max-w-screen-sm">
        <?php
            $post = get_page_by_path("team");
    echo "<h2>{$post->post_title}</h2>";
    echo apply_filters('the_content', $post->post_content);
    ?>
    </section>
    <div class="text-center my-12">
        <h3>DJ's</h3>
        <?php
// Define the arguments for the query
$args = array(
  'post_type' => 'dj',
  'posts_per_page' => -1,
  'orderby' => 'menu_order',
  'order' => 'ASC',

);

    // Create a new query object
    $query = new WP_Query($args);

    // Display the posts
    if ($query->have_posts()) {
        echo '<ul class="grid grid-cols-3 gap-5 mx-auto max-w-screen-md">';

        while ($query->have_posts()) {
            $query->the_post();

            echo '<a href="#" class="hover:bg-slate-50 group flex flex-col items-center justify-center">';
            echo get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'object-cover aspect-square w-full'));
            echo '<h4 class="group-hover:text-rose-500">' . get_the_title() . '</h4>';
            echo '</a>';
        }

        echo '</ul>';

        // Reset the query to its original state
        wp_reset_postdata();
    }
    ?>
    </div>

    <div class="text-center my-12">
        <h3>Vrijwilligers</h3>
        <?php
// Define the arguments for the query
$args = array(
  'post_type' => 'volunteer',
  'posts_per_page' => -1,
  'orderby' => 'menu_order',
  'order' => 'ASC',

);

    // Create a new query object
    $query = new WP_Query($args);

    // Display the posts
    if ($query->have_posts()) {
        echo '<ul class="grid grid-cols-5 gap-5 mx-auto max-w-screen-md">';

        while ($query->have_posts()) {
            $query->the_post();

            echo '<li class="flex flex-col items-center justify-center">';
            echo get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'object-cover aspect-square w-full'));
            echo '<h4>' . get_the_title() . '</h4>';
            echo '</li>';
        }

        echo '</ul>';

        // Reset the query to its original state
        wp_reset_postdata();
    }
    ?>
    </div>

    <div class="bg-gradient-to-b from-violet-950 to-blue-950 py-16">
    <section class="max-w-screen-lg text-white">
        <?php
            $post = get_page_by_path("about");
    echo '<div class="">'.apply_filters('the_content', $post->post_content)."</div>";
    ?>
    </section>

  
    </div>
    <?php wp_footer(); ?>
</body>
</html>

