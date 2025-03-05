<div id="mission-statement" class="container">
    <!-- Swiper -->
    <div class="swiper">
        <div class="flex gap-4 items-center">
            <div class="swiper-pagination w-auto"></div>
            <div class="swiper-button-prev">
                <?php _e('Previous', BB_TEXT_DOMAIN); ?>
            </div>
            <div class="swiper-button-next">
                <?php _e('Next', BB_TEXT_DOMAIN); ?>
            </div>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide w-2/3">
                <?php get_template_part( 'template-parts/mission-statement-1'); ?>
            </div>
            <div class="swiper-slide w-2/3">
                <?php get_template_part( 'template-parts/mission-statement-2'); ?>
            </div>
            <div class="swiper-slide w-2/3">
                <?php get_template_part( 'template-parts/mission-statement-3'); ?>
            </div>
        </div>
    </div>
</div>