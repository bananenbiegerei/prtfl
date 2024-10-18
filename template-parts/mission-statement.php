<div id="mission-statement" class="bg-white rounded-abcd p-12 sm:p-24">
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
            <div class="swiper-slide">
                <?php get_template_part( 'template-parts/mission-statement-1'); ?>
            </div>
            <div class="swiper-slide">
                <?php get_template_part( 'template-parts/mission-statement-2'); ?>
            </div>
            <div class="swiper-slide">
                <?php get_template_part( 'template-parts/mission-statement-3'); ?>
            </div>
            <div class="swiper-slide">
                <?php get_template_part( 'template-parts/mission-statement-4'); ?>
            </div>
        </div>
    </div>
</div>