<?php
    // Fallback gallery for older projects
    $images = get_field('gallery');
    if ($images) : ?>
    <div class="relative p-4 swiper desktop-gallery">
        <div class="swiper-wrapper">
            <?php foreach ($images as $image): ?>
            <div class="swiper-slide !w-[80%] h-auto">
                <img class="w-full h-auto border shadow-lg rounded-2xl" src="<?php echo esc_url($image['url']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <?php endforeach; ?>
        </div>
        <?php get_template_part('template-parts/swiper-nav'); ?>
    </div>
<?php endif; ?>
