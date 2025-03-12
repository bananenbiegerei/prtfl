<div class="rounded-lg overflow-hidden shadow-abcd bg-white">
<div class="swiper desktop-gallery">
<div class="text-xs flex justify-center border-b mb-0 items-center">
    <div class="flex gap-2 items-center">
    <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 32 32">
        <path fill="currentColor"
            d="M26 24.005H6a2 2 0 0 1-2-2v-14a2 2 0 0 1 2-2h20a2 2 0 0 1 2 2v14a2.003 2.003 0 0 1-2 2m-20-16v14h20v-14Zm-4 18h28v2H2z" />
    </svg>
    <div>desktop</div>
    <div class="swiper-pagination"></div>
    </div>
</div>
    <div class="swiper-wrapper">
        <?php
        $images = get_field('desktop_gallery');
        if ($images):
        foreach ($images as $image): ?>
        <div class="swiper-slide">
            <img src="<?php echo esc_url($image['url']); ?>"
                alt="<?php echo esc_attr($image['alt']); ?>" />
        </div>
        <?php endforeach;
        endif;
        ?>
    </div>
</div>
</div>