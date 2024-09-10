</main>
<footer class="bg-primary p-4 flex flex-col justify-between rounded-t-abcd min-h-[160px]">
    <div class="flex gap-2">
        <div class="flex-1">
            <p>
                yes,this is website is accessible
            </p>
        </div>
        <div>
            <nav>
                <?php wp_nav_menu([
                        'theme_location' => 'footer',
                        'container' => false,
                        'items_wrap' => '<ul class="menu right">%3$s</ul>',
                        'link_before' => '<span class="text-lg">',
                        'link_after' => '</span>',
                    ]); ?>
            </nav>
        </div>
    </div>
    <div class="flex gap-2">
        <div class="flex-1">
        <?php get_template_part( 'template-parts/logo'); ?>
        </div>
        <?php get_template_part( 'template-parts/cta'); ?>
    </div>
</footer>
</div><!-- x-data init container -->
<?php wp_footer(); ?>
</body>

</html>