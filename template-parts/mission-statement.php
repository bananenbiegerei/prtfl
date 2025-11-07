<div id="mission-statement" class="flex justify-end w-full px-4">
    <!-- Swiper -->
    <div class="swiper">
        <div class="flex items-center gap-4">
            <div class="w-auto swiper-pagination"></div>
            <div class="swiper-button-prev">
                <?php _e('Previous', BB_TEXT_DOMAIN); ?>
            </div>
            <div class="swiper-button-next">
                <?php _e('Next', BB_TEXT_DOMAIN); ?>
            </div>
        </div>
        <div class="text-4xl swiper-wrapper">
            <div class="w-2/3 swiper-slide">
                <?php get_template_part( 'template-parts/mission-statement-1'); ?>
            </div>
            <div class="w-2/3 swiper-slide">
                <?php get_template_part( 'template-parts/mission-statement-2'); ?>
            </div>
            <div class="w-2/3 swiper-slide">
                <?php get_template_part( 'template-parts/mission-statement-3'); ?>
            </div>
        </div>
    </div>
</div>