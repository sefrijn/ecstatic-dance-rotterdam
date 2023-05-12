<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecstatic Dance Rotterdam</title>
    <link rel="stylesheet" href="https://use.typekit.net/moz2ugx.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="relative w-full">
        <img class="absolute z-0 object-cover left-0 top-0 w-full h-full" src="<?php echo get_template_directory_uri(); ?>/public/header.jpg" alt="Ecstatic Dance Rotterdam main background graphic">
        <a href="<?php echo get_home_url(); ?>">
            <img class="hover:brightness-90 hover:-translate-y-1 transition-all relative z-10 py-16 w-full px-5 max-w-screen-sm mx-auto" src="<?php echo get_template_directory_uri(); ?>/public/ed_logo.png" alt="Ecstatic Dance Rotterdam logo" />
        </a>
    </header>
    <?php $menuParameters = [
        "theme_location" => "primary-menu",
        "container" => false,
        "echo" => false,
        "items_wrap" => '%3$s',
        "depth" => 0,
    ]; ?>
    <nav id="navbar" class="z-50 transition-all shadow sticky top-0 bg-white flex items-center justify-center md:gap-10 sm:gap-6 gap-5 py-6 md:text-xl text-base text-slate-600">
        <?php echo strip_tags(wp_nav_menu($menuParameters), "<a>"); ?>
    </nav>