<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full no-js">

<?php get_template_part('head'); ?>

<body <?php body_class('bg-lime-100'); ?>>
    <div class="flex min-h-screen flex-col justify-between" x-data="{ isScrolled: false }" x-init="
    window.addEventListener('scroll', () => {
        isScrolled = window.scrollY > 10;
    })">
        <?php get_template_part('template-parts/header-inner'); ?>
        <main class="main-content flex-1 transition-fade" id="swup">