<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full no-js">

<?php get_template_part('head'); ?>

<body <?php body_class('yellow-theme bg-primary-50'); ?>>
    <div class="flex min-h-screen flex-col justify-between" x-data="{ isScrolled: false }" x-init="
    window.addEventListener('scroll', () => {
        isScrolled = window.scrollY > 10;
    })">
        <?php get_template_part('template-parts/header-inner'); ?>
        <div class="h-desktop-header"></div>
        <main class="main-content flex-1 transition-fade" id="swup">