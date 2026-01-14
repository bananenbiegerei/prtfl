<?php get_header(); ?>
<div class="mx-8 my-3 text-lg leading-none md:m-8 md:text-xl lg:text-3xl xl:text-4xl">
    <h1 class="inline text-primary"><?php the_title(); ?> of: <span class="">abcd<span class="font-logotype">.works</span></h1><span class="text-accent"> – people
        for digital products.</span><span class="text-error"> accessible, beautiful, custom, digital.</span>

    <?php
    if (wp_is_mobile()) {
        get_template_part('template-parts/featured-projects-mobile');
    } else {
        get_template_part('template-parts/featured-projects');
    }
    ?>
    <?php get_template_part('template-parts/contact'); ?>
</div>
<?php get_footer(); ?>