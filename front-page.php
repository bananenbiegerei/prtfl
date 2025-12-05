<?php get_header(); ?>
<div class="p-4 text-lg leading-none lowercase sm:text-2xl lg:text-4xl xl:text-5xl 2xl:text-6xl">
    <h1 class="inline text-primary"><?php the_title(); ?> of: <span class="">abcd<span class="font-logotype">.works</span></h1><span class="text-accent"> – studio
        for digital products.</span><span class="text-error"> accessible, beautiful, custom, digital.</span>
    <?php get_template_part('template-parts/featured-projects'); ?>
    <?php get_template_part('template-parts/contact'); ?>
</div>
<?php get_footer(); ?>