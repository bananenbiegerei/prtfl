<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full no-js" data-theme="numero">
<?php get_template_part('head') ?>
<?php
$site_title = get_bloginfo( 'name' );
$site_url = network_site_url( '/' );
$site_description = get_bloginfo( 'description' );
//echo 'The Network Home URL is: ' . $site_url;
//echo 'The Network Home Name is: ' . $site_title;
//echo 'The Network Home Tagline is: ' . $site_description;
?>
<body <?php body_class('bg-primary-light'); ?> data-theme="numero-light">
    <header class="site-header grid grid-cols-1 content-center">
      <!-- This example requires Tailwind CSS v2.0+ -->
      <nav class="bg-primary-light" x-data="{ open: false }">
        <div class="container fluid">
          <div class="relative flex justify-between h-16 sm:h-28">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
              <!-- Mobile menu button -->
              <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false" x-on:click="open = ! open">
                <span class="sr-only">Open main menu</span>
                <!--
                  Icon when menu is closed.
      
                  Heroicon name: outline/menu
      
                  Menu open: "hidden", Menu closed: "block"
                -->
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!--
                  Icon when menu is open.
      
                  Heroicon name: outline/x
      
                  Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:justify-start">
              <div class="hidden sm:flex sm:space-x-4">
                <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                <a href="#" class="button active"> Dashboard </a>
                <a href="#" class="button"> Team </a>
              </div>
            </div>
            <div class="flex-shrink-0 flex items-center">
                <img class="block lg:hidden h-9 w-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo-mobile.png" alt="Logo">
                <img class="logo hidden lg:block h-9 w-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo.png" alt="Logo">
              </div>
          </div>
        </div>
      
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu" x-show="open" x-transition>
          <div class="p-4 grid grid-cols-1 gap-6">
            <a href="#" class="button">Dashboard</a>
            <a href="#" class="button active">Team</a>
            <a href="#" class="button">Projects</a>
            <a href="#" class="button">Calendar</a>
          </div>
        </div>
      </nav>
    </header>
    
    <main class="main-content">