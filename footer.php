</main>
<footer class="flex items-center h-12 ml-12">
    <nav>
        <?php
        wp_nav_menu([
        'theme_location' => 'footer',
        'container' => false,
        'menu_class' => 'flex text-sm gap-4 lowercase text-base text-black font-mono',
        'fallback_cb' => false,
        ]);
        ?>
    </nav>
</footer>
<?php wp_footer(); ?>
</body>

</html>