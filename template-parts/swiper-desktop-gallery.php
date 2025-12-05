    <div class="h-[80vh] p-4 swiper desktop-gallery mb-28">
        <div class="swiper-wrapper">
            <?php
        $images = get_field('desktop_gallery');
        if ($images):
        foreach ($images as $image): ?>
            <div class="swiper-slide !h-full w-auto max-w-full">
                <img class="w-auto h-full border shadow-lg rounded-2xl" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <?php endforeach;
        endif;
        ?>
        </div>
        <div class="mt-4 swiper-pagination"></div>
    </div>
