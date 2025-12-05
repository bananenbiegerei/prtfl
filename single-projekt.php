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
<article class="flex gap-4">
    <div class="flex-shrink-0 title-container">
        <h1
            class="px-4 leading-none origin-top-right -rotate-90 -translate-x-full project-title sm:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl text-primary w-specialscreen">
            <span class="block rotate-180">
                <?php the_title(); ?>
            </span>
        </h1>
    </div>
    <div class="flex flex-col flex-1 h-full min-h-specialscreen">
        <div class="flex-1">
            <?php get_template_part('template-parts/swiper-desktop-gallery'); ?>
        </div>

        <?php if ($has_metas) : ?>
        <!-- Layout WITH metas: content and metas side by side or stacked -->
        <div class="grid flex-shrink-0 grid-cols-1 gap-8 pr-4 mb-8 md:grid-cols-3">
            <?php if (get_the_content()) : ?>
            <div class="col-span-2">
                <p class="mb-8 text-xl leading-10 text-primary">
                    <?php echo wp_strip_all_tags(get_the_content()); ?>
                </p>
            </div>
            <?php endif; ?>

            <div>
                <?php include(get_template_directory() . '/template-parts/project-metas.php'); ?>
            </div>
        </div>
        <?php else : ?>
        <!-- Layout WITHOUT metas: content only, centered and wider -->
        <div class="flex-shrink-0">
            <?php if (get_the_content()) : ?>
            <p class="max-w-4xl pr-4 mx-auto mb-16 text-xl leading-10 text-center text-primary">
                <?php echo wp_strip_all_tags(get_the_content()); ?>
            </p>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php get_template_part('template-parts/swiper-mobile-gallery'); ?>
        <div class="pr-4 mb-16">
            <?php get_template_part('template-parts/project-related-projects'); ?>
        </div>
    </div>
</article>
<?php get_footer(); ?>