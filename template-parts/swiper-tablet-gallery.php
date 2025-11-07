<div class="rounded-lg overflow-hidden shadow-abcd bg-white">
    <div class="swiper tablet-gallery h-auto relative">
    <div class="text-xs flex justify-center p-2 border-b mb-0 gap-2 items-center bg-neutral-900 text-neutral-100 border-neutral-900">
        <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 32 32">
            <path fill="currentColor" d="M19 24v2h-6v-2z" />
            <path fill="currentColor"
                d="M25 30H7a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h18a2 2 0 0 1 2 2v24a2.003 2.003 0 0 1-2 2M7 4v24h18V4Z" />
        </svg>
        </div>
        <span>tablet</span>
        <span><div class="swiper-pagination"></div></span>
</div>

        <div class="swiper-wrapper">
            <?php
                $images_tablet = get_field('tablet_gallery');
                if ($images_tablet):
                	foreach ($images_tablet as $image): ?>
            <div class="swiper-slide">
                <img class="w-full h-auto" src="<?php echo esc_url($image['url']); ?>"
                    alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <?php endforeach;
                endif;
                ?>
        </div>
    </div>