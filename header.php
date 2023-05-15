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
    <?php $menuParameters = [
        "theme_location" => "primary-menu",
        "container" => false,
        "echo" => false,
        "items_wrap" => '%3$s',
        "depth" => 0,
    ]; ?>

    <header id="navbar" class="transition-all flex py-3 justify-between px-4 z-50 shadow sticky top-0 bg-sky-100 items-center">
        <a class="!text-slate-800 hover:!text-rose-500 relative z-50 font-creative text-3xl" href="<?php echo home_url(); ?>">
            Ecstatic Dance Rotterdam
        </a>
        <button id="hamburger" class="relative z-50 block md:hidden hamburger hamburger--collapse">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        <nav id="navigation" class="hidden flex absolute md:relative md:flex items-center justify-center md:gap-10 sm:gap-6 gap-5 text-4xl md:text-xl text-base text-slate-600 bg-sky-300 md:bg-transparent h-screen md:h-auto w-screen md:w-auto left-0 top-0 flex-col md:flex-row">

            <?php echo strip_tags(wp_nav_menu($menuParameters), "<a>"); ?>
        </nav>
    </header>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navToggle = document.getElementById("hamburger");
            const navContent = document.getElementById("navigation");

            navToggle.addEventListener("click", function() {
                navContent.classList.toggle("hidden");
                navToggle.classList.toggle("is-active");
            });
        });
    </script>