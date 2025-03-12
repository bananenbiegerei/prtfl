<?php get_header(); ?>
<article class="grid grid-cols-12 gap-4 p-4">
    <div class="col-span-8">
        <?php get_template_part('template-parts/swiper-desktop-gallery'); ?>
    </div>
    <div class="col-span-4">
    <div class="relative space-y-4">
                <?php //get_template_part( 'template-parts/single-taxonomies'); ?>
                <?php get_template_part( 'template-parts/single-metas'); ?>
                <?php get_template_part( 'template-parts/single-client'); ?>
                <?php get_template_part( 'template-parts/single-related-projects'); ?>
            </div>
    </div>
    <div class="col-span-8 col-start-3">
            <?php the_content(); ?>
    </div>
    <div class="col-span-3 col-start-3">
    <?php get_template_part('template-parts/swiper-mobile-gallery'); ?>
    </div>
    <div class="col-span-6">
    <?php get_template_part('template-parts/swiper-tablet-gallery'); ?>
    </div>
</article>
<?php get_footer(); ?>