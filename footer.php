<?php $slug = get_post_field('post_name', get_post()); ?>
<?php if ($slug !== "contact") : ?>
    <div class="bg-sky-950 my-0 py-1">
        <section class="text-center max-w-screen-sm text-white">
            <?php
            $post = get_page_by_path("contact");
            echo "<h2>{$post->post_title}</h2>";
            echo apply_filters("the_content", $post->post_content);
            ?>
        </section>
    </div>
<?php endif; ?>
<footer class="bg-sky-100 text-center px-4 py-6">
    © Ecstatic Dance Rotterdam 2023 | <span class="dashicons dashicons-facebook-alt"></span> <a href="https://facebook.com/ecstaticdancerotterdam/">Find us on Facebook</a> | Site designed &amp; coded by <a href="http://www.howaboutyes.com/">How About Yes</a>
</footer>
<script>
    const navbar = document.getElementById('navbar');
    const scrollThreshold = 380; // set the scroll distance at which to decrease padding

    window.addEventListener('scroll', function() {
        if (window.scrollY > scrollThreshold) {
            navbar.classList.add('scroll');
        }
        if (window.scrollY < scrollThreshold - 50) {
            navbar.classList.remove('scroll');
        }
    });
</script>

<?php wp_footer(); ?>
</body>

</html>