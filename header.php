<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full no-js">

<?php get_template_part('head'); ?>

<body <?php body_class('bg-primary-100'); ?>
    x-data="{ isScrolled: window.matchMedia('(max-width: 640px)').matches ? true : true }">
    <?php get_template_part('template-parts/header-inner'); ?>
    <main class="main-content mt-20">