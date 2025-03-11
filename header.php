<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full no-js">

<?php get_template_part('head'); ?>
<?php
if (is_front_page()) {
    $color_scheme = 'yellow-theme';
} elseif (is_page_template('templates/template-work.php')) {
    $color_scheme = 'lime-theme';
} elseif (is_page('profile')) {
    $color_scheme = 'cyan-theme';
} else {
    $color_scheme = 'gray-theme';
}
?>
<body <?php body_class($color_scheme); ?>>
    <div class="flex min-h-screen flex-col justify-between" x-data="{ isScrolled: false }" x-init="
    window.addEventListener('scroll', () => {
        isScrolled = window.scrollY > 10;
    })">
        <?php get_template_part('template-parts/header-inner'); ?>
        <?php if (is_front_page()) : ?>
        <?php else : ?>
            <div class="h-mobile-header sm:h-desktop-header"></div>
        <?php endif; ?>
        <main class="main-content flex-1 transition-fade" id="swup">