<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full no-js">

<?php get_template_part('head'); ?>
<body <?php body_class('flex flex-col h-full min-h-screen'); ?>>
        <div class="fixed top-0 left-0 grid hidden w-full h-full grid-cols-12 gap-8 px-8 opacity-10 -z-10">
                <div class="bg-red-100"></div>
                <div class="bg-red-100"></div>
                <div class="bg-red-100"></div>
                <div class="bg-red-100"></div>
                <div class="bg-red-100"></div>
                <div class="bg-red-100"></div>
                <div class="bg-red-100"></div>
                <div class="bg-red-100"></div>
                <div class="bg-red-100"></div>
                <div class="bg-red-100"></div>
                <div class="bg-red-100"></div>
                <div class="bg-red-100"></div>
        </div>
        <header class="fixed -left-[100vh] top-0 w-[100vh] z-50 origin-top-right -rotate-90 h-8 flex items-center px-4 justify-between">
                <nav class="text-primary whitespace-nowrap" aria-label="<?php esc_attr_e('Top Menu', 'BB_TEXT_DOMAIN'); ?>">
                        <?php
                        wp_nav_menu([
                                'theme_location' => 'top',
                                'container' => false,
                                'menu_class' => 'flex text-sm gap-4  text-base text-black font-mono',
                                'fallback_cb' => false,
                        ]);
                        ?>
                </nav>
                <div>
                <a href="<?php echo esc_url(home_url('/')); ?>">abcd.<span class="font-logotype">works</span></a>
                </div>
        </header>
        <main class="flex-1 ml-8 main-content" id="swup">