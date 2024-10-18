<nav class="mt-2 mb-2 sm:mt-4 block flex-1 sm:order-2">
    <?php wp_nav_menu([
                        'theme_location' => 'top',
                        'container' => false,
                        'items_wrap' => '<ul class="flex gap-2 sm:gap-0 sm:flex-col leading-tight items-end">%3$s</ul>',
                        'link_before' => '<span class="sm:text-lg hover:bg-primary-50 px-2 rounded-full transition">',
                        'link_after' => '</span>',
                    ]); ?>
</nav>
<?php if (!is_front_page()) : ?>
<div class="sm:order-1 flex items-baseline gap-4">
    <h1>
        <?php the_title(); ?>
    </h1>
    <?php /* if (is_single('projekt')) : ?>
    Single
    <?php endif; */ ?>
    <?php if ( get_field('link_to_website') ) : ?>
    <a href="<?php echo get_field('link_to_website'); ?>" target="_blank"
        class="btn btn-outline btn-xs h-6"><?php _e('Website', BB_TEXT_DOMAIN); ?> <svg
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 32 32">
            <path fill="currentColor" d="M10 6v2h12.59L6 24.59L7.41 26L24 9.41V22h2V6z" />
        </svg></a>
    <?php endif; ?>
</div>
<?php else : ?>
<h1 class="sm:order-1"><?php _e('Hello.', BB_TEXT_DOMAIN); ?></h1>
<?php endif; ?>