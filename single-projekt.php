<?php get_header(); ?>
<article class="grid grid-cols-12 gap-1 p-1">
    <?php /* if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php if (get_the_content()) : ?>
            <div class="col-span-8">
                <?php the_content(); ?>
            </div>
        <?php endif; ?>
    <?php endwhile; endif; */ ?>
    <div class="col-span-8">
        <?php get_template_part('template-parts/swiper-desktop-gallery'); ?>
    </div>
    <div class="col-span-4">
        <div class="relative p-4 space-y-4 rounded-lg bg-neutral-100">
            <?php //get_template_part( 'template-parts/project-taxonomies'); ?>
            <?php get_template_part('template-parts/project-metas'); ?>
            <?php get_template_part('template-parts/project-client'); ?>
            <?php get_template_part('template-parts/project-related-projects'); ?>
        </div>
    </div>
    <div class="col-span-2 col-start-7">
        <?php get_template_part('template-parts/swiper-mobile-gallery'); ?>
    </div>
    <div class="col-span-4">
        <?php get_template_part('template-parts/swiper-tablet-gallery'); ?>
    </div>
</article>
<?php get_footer(); ?>