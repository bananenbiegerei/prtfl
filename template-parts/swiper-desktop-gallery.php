<div class="relative p-4 swiper desktop-gallery">
    <div class="swiper-wrapper">
        <?php
        $images = get_field('desktop_gallery');
        if ($images):
        foreach ($images as $image): ?>
        <div class="swiper-slide !w-[80%] h-auto">
            <img class="border shadow-lg rounded-2xl" src="<?php echo esc_url($image['url']); ?>"
                alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
        <?php endforeach;
        endif;
        ?>
    </div>
    <?php get_template_part('template-parts/swiper-nav'); ?>
</div>