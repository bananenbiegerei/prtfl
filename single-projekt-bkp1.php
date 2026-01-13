<?php get_header(); ?>
<?php
// Get ACF fields for projekt post type
$arbeitskonstellation = get_field('konstellation');
$client = get_field('client');
$link_to_website = get_field('link_to_website');
$services = get_field('services');
$technologies = get_field('technologies');

// Check if any meta fields have values
$has_metas = $arbeitskonstellation || $client || $link_to_website || $year || $services || $technologies;
?>
<article class="grid grid-cols-12 gap-8">
    <div class="col-span-2 overflow-hidden title-container">
        <div class="flex items-end w-full px-4 origin-top-left title">
            <h1 class="text-xl leading-none text-primary lg:text-2xl xl:text-3xl 2xl:text-4xl"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="col-span-10 mb-36">
        <?php
        // Check if desktop_gallery exists, otherwise use fallback gallery
        if (get_field('desktop_gallery')) {
            get_template_part('template-parts/swiper-desktop-gallery');
        } elseif (get_field('gallery')) {
            get_template_part('template-parts/swiper-gallery-fallback');
        }
        ?>
    </div>
    <div class="col-span-6">
        <?php if ($has_metas) : ?>
        <!-- Layout WITH metas: content and metas side by side or stacked -->
        <div class="mb-8">
            <?php if (get_the_content()) : ?>
            <p class="mb-8 text-xl leading-10 text-primary">
                <?php echo wp_strip_all_tags(get_the_content()); ?>
            </p>
            <?php endif; ?>

            <div>
                <?php include(get_template_directory() . '/template-parts/project-metas.php'); ?>
            </div>
        </div>
        <?php else : ?>
        <!-- Layout WITHOUT metas: content only, centered and wider -->
            <?php if (get_the_content()) : ?>
            <p class="mb-8 text-xl leading-10 text-primary">
                <?php echo wp_strip_all_tags(get_the_content()); ?>
            </p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="col-span-6">
        <?php
        // Only show mobile gallery if it exists (no fallback for mobile)
        if (get_field('mobile_gallery')) {
            get_template_part('template-parts/swiper-mobile-gallery');
        }
        ?>
    </div>
    <?php get_template_part('template-parts/project-related-projects'); ?>
</article>
<?php get_footer(); ?>