</main>
<footer class="flex w-full">
<div class="transform scale-y-[-1]">
        <?php get_template_part('template-parts/wing'); ?>
    </div>
    <div class="flex-1 bg-primary p-4 flex flex-col justify-between rounded-t-abcd sm:min-h-[160px]">
    <div class="sm:flex gap-2">
        <div class="flex-1">
            <p class="mb-0">
                <?php _e('yes,this is website is accessible', BB_TEXT_DOMAIN); ?>
            </p>
        </div>
        <div>
            <nav>
                <?php wp_nav_menu([
                        'theme_location' => 'footer',
                        'container' => false,
                        'items_wrap' => '<ul class="flex gap-2 sm:gap-0 sm:flex-col leading-tight items-end">%3$s</ul>',
                        'link_before' => '<span class="sm:text-lg">',
                        'link_after' => '</span>',
                    ]); ?>
            </nav>
        </div>
    </div>
    <div class="sm:flex gap-2">
        <div class="flex-1">
        <?php get_template_part( 'template-parts/logo'); ?>
        </div>
        <?php get_template_part( 'template-parts/cta'); ?>
    </div>
    </div>
    <div class="transform scale-x-[-1] scale-y-[-1]">
        <?php get_template_part('template-parts/wing'); ?>
    </div>
</footer>
</div><!-- x-data init container -->
<?php wp_footer(); ?>
</body>

</html>