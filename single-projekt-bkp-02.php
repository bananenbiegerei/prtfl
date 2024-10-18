<?php get_header('single'); ?>
<article class="container-fluid">
    <div class="flex items-baseline gap-8 p-4 max-h-screen overflow-auto">
        <div class="basis-2/3">
            <p class="text-xl">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga quae nostrum iusto. Quas quos unde
                laboriosam laudantium consequatur. Esse fuga illo quibusdam consequuntur magnam dolorum eaque labore,
                inventore soluta officiis.
                Quaerat dolor itaque voluptatem culpa facilis praesentium quo? Modi molestias, nesciunt velit in neque
                tempore fugiat voluptates beatae voluptas? Maxime, aliquid. Repellendus saepe deserunt sequi eligendi
                nostrum. Delectus, sapiente minima.
            </p>
        </div>
        <div class="basis-1/3">
            <div class="relative">
                <?php get_template_part( 'template-parts/single-taxonomies'); ?>
                <?php get_template_part( 'template-parts/single-metas'); ?>
                <?php get_template_part( 'template-parts/single-client'); ?>
                <?php get_template_part( 'template-parts/single-related-projects'); ?>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6 sm:h-single-full-header overflow-hidden">
        <div class="col-span-4 sm:col-span-2">
            <p class="text-xs flex gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                    height="1.5em" viewBox="0 0 32 32">
                    <path fill="currentColor"
                        d="M22 4H10a2 2 0 0 0-2 2v22a2 2 0 0 0 2 2h12a2.003 2.003 0 0 0 2-2V6a2 2 0 0 0-2-2m0 2v2H10V6ZM10 28V10h12v18Z" />
                </svg> mobile</p>
            <div class="swiper mobile-gallery h-screen relative pl-2">
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
        </div>
        <div class="col-span-12 sm:col-span-6">
            <p class="text-xs flex gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                    height="1.5em" viewBox="0 0 32 32">
                    <path fill="currentColor"
                        d="M26 24.005H6a2 2 0 0 1-2-2v-14a2 2 0 0 1 2-2h20a2 2 0 0 1 2 2v14a2.003 2.003 0 0 1-2 2m-20-16v14h20v-14Zm-4 18h28v2H2z" />
                </svg>desktop</p>
            <div class="swiper desktop-gallery h-screen relative pl-2">
                <div class="swiper-pagination"></div>
                <div class="swiper-wrapper">
                    <?php
                $images = get_field('desktop_gallery');
                if ($images):
                	foreach ($images as $image): ?>
                    <div class="swiper-slide !h-auto">
                        <img class="rounded-xl shadow-xl" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <?php endforeach;
                endif;
                ?>
                </div>
            </div>
        </div>
        <div class="col-span-8 sm:col-span-4">
            <p class="text-xs flex gap-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 32 32">
                    <path fill="currentColor" d="M19 24v2h-6v-2z" />
                    <path fill="currentColor"
                        d="M25 30H7a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h18a2 2 0 0 1 2 2v24a2.003 2.003 0 0 1-2 2M7 4v24h18V4Z" />
                </svg>
                tablet
            </p>
            <div class="swiper tablet-gallery h-screen relative pl-2">
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
        </div>
    </div>
</article>
<?php get_footer(); ?>