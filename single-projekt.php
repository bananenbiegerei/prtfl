<?php get_header('single'); ?>
<article class="container-fluid grid grid-cols-12 gap-4 pt-12">
    <div class="col-span-8">
        <?php get_template_part('template-parts/swiper-desktop-gallery'); ?>
    </div>
    <div class="col-span-8 col-start-5">
            <p class="">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga quae nostrum iusto. Quas quos unde
                laboriosam laudantium consequatur. Esse fuga illo quibusdam consequuntur magnam dolorum eaque labore,
                inventore soluta officiis.
                Quaerat dolor itaque voluptatem culpa facilis praesentium quo? Modi molestias, nesciunt velit in neque
                tempore fugiat voluptates beatae voluptas? Maxime, aliquid. Repellendus saepe deserunt sequi eligendi
                nostrum. Delectus, sapiente minima.
            </p>
            <div class="relative">
                <?php get_template_part( 'template-parts/single-taxonomies'); ?>
                <?php get_template_part( 'template-parts/single-metas'); ?>
                <?php get_template_part( 'template-parts/single-client'); ?>
            </div>
    </div>
    <div class="col-span-3 col-start-3">
    <?php get_template_part('template-parts/swiper-mobile-gallery'); ?>
    </div>
    <div class="col-span-6">
    <?php get_template_part('template-parts/swiper-tablet-gallery'); ?>
    </div>
</article>
<?php get_footer(); ?>