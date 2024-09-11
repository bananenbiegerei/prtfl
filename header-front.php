<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full no-js">

<?php get_template_part('head'); ?>

<body <?php body_class('flex h-screen flex-col overflow-hidden'); ?>>
    <div x-data="{ isScrolled: false }" x-init="(() => {
        const targetElement = document.querySelector('.scroller');
        const updateScrollState = () => {
            isScrolled = window.scrollY > 10 || (targetElement && targetElement.scrollTop > 10);
        };
        window.addEventListener('scroll', updateScrollState);
        if (targetElement) {
            targetElement.addEventListener('scroll', updateScrollState);
        }
    })()">
        <?php get_template_part('template-parts/header-inner'); ?>
        <main class="main-content flex-1 transition-fade" id="swup">
            <!-- <div class="h-desktop-header transition-all duration-500" :class="{ '!h-0': isScrolled }"></div> -->