<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full no-js">

<?php get_template_part('head'); ?>

<body <?php body_class('flex flex-col h-screen overflow-hidden'); ?>
    x-data="{ isScrolled: window.matchMedia('(max-width: 640px)').matches ? true : false }">
    <?php get_template_part('template-parts/header-inner-desktop'); ?>
    <?php get_template_part('template-parts/header-inner-mobile'); ?>

    <main class="main-content flex-1 transition-fade" id="swup">