<?php get_header('single'); ?>
<article class="p-2">
    <h1 class="col-span-12"><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <div class="flex gap-6">
        <div class="basis-1/3">
            <div class="swiper desktop-gallery h-screen">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <?php
                $images = get_field('desktop_gallery');
                if ($images):
                	foreach ($images as $image): ?>
                    <div class="swiper-slide !h-auto">
                        <img class="rounded" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <?php endforeach;
                endif;
                ?>
                </div>
            </div>
        </div>
        <div>
            <div class="swiper tablet-gallery h-screen">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <?php
                $images_tablet = get_field('tablet_gallery');
                if ($images_tablet):
                	foreach ($images_tablet as $image): ?>
                    <div class="swiper-slide !h-auto">
                        <img class="rounded" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <?php endforeach;
                endif;
                ?>
                </div>
            </div>
        </div>
        <div>
            <div class="swiper mobile-gallery h-screen">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <?php
                $images_mobile = get_field('mobile_gallery');
                if ($images_mobile):
                    foreach ($images_mobile as $image): ?>
                    <div class="swiper-slide !h-auto">
                        <img class="rounded" src="<?php echo esc_url($image['url']); ?>"
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