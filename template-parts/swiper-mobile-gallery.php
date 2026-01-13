<?php if ( get_field('mobile_gallery') ) : ?>
<div class="-mr-8 swiper mobile-gallery"> <!-- -mr-8 to make it flush to the end of viewport -->
    <div class="swiper-wrapper">
        <?php
        $images = get_field('mobile_gallery');
        if ($images):
        foreach ($images as $image): ?>
        <div class="swiper-slide !w-[70%] md:!w-[40%] h-auto">
            <img class="w-auto h-full border rounded-lg shadow-md md:rounded-2xl" src="<?php echo esc_url($image['url']); ?>"
                alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
        <?php endforeach;
        endif;
        ?>
    </div>
    <?php get_template_part('template-parts/swiper-nav'); ?>
</div>
<?php endif; ?>