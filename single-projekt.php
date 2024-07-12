<?php get_header('single'); ?>
<article>
    <div class="shadow-xl p-4 rounded-b-xl flex gap-8 mx-4">
        <div class="basis-2/3">
            <header>
                date: <?php the_date(); ?>
                <h1><?php the_title(); ?></h1>
            </header>
            <div class="mb-4">
                <?php the_content(); ?>
            </div>
            <a class="btn btn-ghost" href="#" onclick="event.preventDefault(); window.history.back();"><svg
                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 32 32">
                    <path fill="currentColor" d="m14 26l1.41-1.41L7.83 17H28v-2H7.83l7.58-7.59L14 6L4 16z" />
                </svg><span class="sr-only">
                    <?php _e('Back'); ?></span>
            </a>
        </div>
        <div class="basis-1/3 space-y-4">
            <?php get_template_part( 'template-parts/single-taxonomies'); ?>
            <?php get_template_part( 'template-parts/single-metas'); ?>
            <?php get_template_part( 'template-parts/single-relations'); ?>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6 md:h-single-full-header overflow-hidden p-4">
    <div class="col-span-4 md:col-span-2">
            <div class="swiper mobile-gallery h-screen relative pl-2">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <?php
                $images_mobile = get_field('mobile_gallery');
                if ($images_mobile):
                    foreach ($images_mobile as $image): ?>
                    <div class="swiper-slide !h-auto">
                        <img class="rounded-xl shadow-xl" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <?php endforeach;
                endif;
                ?>
                </div>
            </div>
        </div>
        <div class="col-span-12 md:col-span-6">
            <div class="swiper desktop-gallery h-screen relative pl-2">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <?php
                $images = get_field('desktop_gallery');
                if ($images):
                	foreach ($images as $image): ?>
                    <div class="swiper-slide !h-auto">
                        <img class="rounded-xl shadow-xl" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <?php endforeach;
                endif;
                ?>
                </div>
            </div>
        </div>
        <div class="col-span-8 md:col-span-4">
            <div class="swiper tablet-gallery h-screen relative pl-2">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <?php
                $images_tablet = get_field('tablet_gallery');
                if ($images_tablet):
                	foreach ($images_tablet as $image): ?>
                    <div class="swiper-slide !h-auto">
                        <img class="rounded-xl shadow-xl" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <?php endforeach;
                endif;
                ?>
                </div>
            </div>
        </div>
    </div>
</article>
<?php get_footer(); ?>