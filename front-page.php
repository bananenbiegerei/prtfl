<?php get_header(); ?>
<div class="mx-8 my-3 leading-none text-custom-mobile md:text-custom">
    <h1 class="inline text-primary"><?php the_title(); ?> of: <span class="">wörk<span class="font-logotype">.work</span></h1><span class="text-accent"> – people
        for digital products.</span><span class="text-accent"> accessible, beautiful, custom, digital.</span>
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