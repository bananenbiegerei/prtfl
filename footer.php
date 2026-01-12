</main>
<footer class="fixed bottom-0 flex items-center justify-between h-8 gap-4 pr-2 w-footer left-8 bg-white/80 backdrop-blur">
    <nav class="flex items-center">
        <?php
        wp_nav_menu([
        'theme_location' => 'footer',
        'container' => false,
        'menu_class' => 'flex text-sm gap-4  text-base text-black font-mono',
        'fallback_cb' => false,
        ]);
        ?>
    </nav>
    <p>test</p>
</footer>
<?php wp_footer(); ?>
</body>

</html>