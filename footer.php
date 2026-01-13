</main>
<footer class="pl-8 pr-4 mt-8 bg-white/80 backdrop-blur">
    <div class="items-center justify-between gap-4 py-2 min-h-12 md:flex">
        <nav class="flex items-center">
        <?php
        wp_nav_menu([
        'theme_location' => 'footer',
        'container' => false,
        'menu_class' => 'md:flex text-sm gap-4  text-base text-black font-mono',
        'fallback_cb' => false,
        ]);
        ?>
    </nav>
    <div class="items-center gap-8 leading-snug md:flex">
        <?php if (have_rows('contact_info', 'option')) : ?>
            <?php while (have_rows('contact_info', 'option')) : the_row(); ?>
                <div class="font-mono text-sm text-black">
                    <?php echo wp_kses_post(get_sub_field('content')); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>