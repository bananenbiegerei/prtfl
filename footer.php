</main>
<footer>
    <nav class="flex items-center h-8 ml-8">
        <?php
        wp_nav_menu([
        'theme_location' => 'footer',
        'container' => false,
        'menu_class' => 'flex text-sm gap-4  text-base text-black font-mono',
        'fallback_cb' => false,
        ]);
        ?>
    </nav>
</footer>
<?php wp_footer(); ?>
</body>

</html>