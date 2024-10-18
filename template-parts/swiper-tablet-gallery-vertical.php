<p class="text-xs flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 32 32">
                    <path fill="currentColor" d="M19 24v2h-6v-2z" />
                    <path fill="currentColor"
                        d="M25 30H7a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h18a2 2 0 0 1 2 2v24a2.003 2.003 0 0 1-2 2M7 4v24h18V4Z" />
                </svg>
                tablet
            </p>
            <div class="swiper tablet-gallery-vertical h-screen relative pl-2">
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