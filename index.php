<?php get_header(); ?>
<div class="relative w-full">
    <img class="absolute z-0 object-cover left-0 top-0 w-full h-full" src="<?php echo get_template_directory_uri(); ?>/public/header.jpg" alt="Ecstatic Dance Rotterdam main background graphic">
    <img class="relative z-10 py-16 w-full px-5 max-w-screen-sm mx-auto" src="<?php echo get_template_directory_uri(); ?>/public/ed_logo.png" alt="Ecstatic Dance Rotterdam logo" />
</div>
<?php include "templates/intro.php"; ?>
<?php include "templates/events.php"; ?>
<?php include "templates/team.php"; ?>
<?php include "templates/about.php"; ?>

<?php get_footer(); ?>