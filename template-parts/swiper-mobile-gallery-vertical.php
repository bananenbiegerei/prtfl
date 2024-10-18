<p class="text-xs flex gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                    height="1.5em" viewBox="0 0 32 32">
                    <path fill="currentColor"
                        d="M22 4H10a2 2 0 0 0-2 2v22a2 2 0 0 0 2 2h12a2.003 2.003 0 0 0 2-2V6a2 2 0 0 0-2-2m0 2v2H10V6ZM10 28V10h12v18Z" />
                </svg> mobile</p>
            <div class="swiper mobile-gallery-vertical h-screen relative pl-2">
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