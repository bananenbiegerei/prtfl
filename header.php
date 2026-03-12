<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full no-js">

<?php get_template_part('head'); ?>

<?php
$background_image = get_field('background_image');
$color_scheme = get_field('color_scheme');
$bg_style = $background_image ? ' style="background-image: url(\'' . esc_url($background_image['url']) . '\');"' : '';
?>

<body <?php body_class('flex flex-col h-full min-h-screen'); ?>
    x-data="{ showGrid: false }" @keydown.window.ctrl.g.prevent="showGrid = !showGrid"
    @keydown.window.meta.g.prevent="showGrid = !showGrid">
    <div class="fixed top-0 left-0 w-full h-full bg-yellow-100 custom-grid -z-10 md:bg-gray-100 lg:bg-red-100 xl:bg-lime-100"
        :class="{ '!hidden': !showGrid }">
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
    <div id="swup" class="flex flex-col flex-1 min-h-screen bg-cover bg-center bg-no-repeat <?php echo esc_attr($color_scheme); ?>"<?php echo $bg_style; ?>>
        <header
            class="fixed -left-[100vh] top-0 w-[100vh] z-50 origin-top-right -rotate-90 h-8 flex items-center gap-4 px-4 justify-between">
            <nav class="" aria-label="<?php esc_attr_e('Top Menu', 'BB_TEXT_DOMAIN'); ?>">
                <?php
                wp_nav_menu([
                'theme_location' => 'top',
                'container' => false,
                'menu_class' => 'flex',
                'fallback_cb' => false,
                ]);
                ?>
            </nav>
            <div class="flex items-center">
                <?php if (is_singular('project')) : ?>
                <a href="<?php echo esc_url(get_permalink(1879)); ?>" class="relative z-10 translate-x-4 btn btn-xs"><svg
                        class="rotate-90" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <path fill="currentColor" d="m14 26l1.41-1.41L7.83 17H28v-2H7.83l7.58-7.59L14 6L4 16z" />
                    </svg> <span class="mr-4">works overview</span></a>
                <?php endif; ?>
                <a class="btn btn-xs !gap-0 btn-ghost relative z-20" href="<?php echo esc_url(home_url('/')); ?>">wörk.<span
                        class="font-logotype">work</span></a>
            </div>
        </header>
        <main class="flex-1 main-content">