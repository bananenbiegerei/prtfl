<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full no-js">

<?php get_template_part('head'); ?>

<body <?php body_class('yellow-theme'); ?>>
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