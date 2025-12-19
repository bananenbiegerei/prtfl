<?php if ( get_field('mobile_gallery') ) : ?>
    <div class="p-4 mb-16 swiper mobile-gallery">
    <div class="swiper-wrapper">
        <?php
        $images = get_field('mobile_gallery');
        if ($images):
        foreach ($images as $image): ?>
        <div class="swiper-slide  !w-[40%] h-auto">
            <img class="w-auto h-full border shadow-lg rounded-2xl" src="<?php echo esc_url($image['url']); ?>"
                alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
        <?php endforeach;
        endif;
        ?>
    </div>
    <?php get_template_part('template-parts/swiper-nav'); ?>
</div>
<?php endif; ?>