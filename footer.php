</main>
<footer class="hidden">
    footer
    <nav>
        <?php wp_nav_menu([
        'theme_location' => 'footer',
        'container' => false,
        'items_wrap' => '<ul class="flex items-end gap-2 leading-tight sm:gap-0 sm:flex-col">%3$s</ul>',
        'link_before' => '<span class="sm:text-lg">',
        'link_after' => '</span>',
        ]); ?>
    </nav>
</footer>
<?php wp_footer(); ?>
</body>

</html>