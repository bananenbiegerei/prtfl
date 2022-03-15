<div class="pt-4 mt-4 border-t border-gray-300">
	<?php $modelle = get_field( 'modelle' ); ?>
	<?php if ( $modelle ) : ?>
	<div class="relative swiper single-manufacturer-swiper">
		<div class="swiper-wrapper">
			<?php foreach ( $modelle as $post ) : ?>
			<?php setup_postdata( $post ); ?>
			<div class="swiper-slide">
				<div class="mb-2">
					<?php get_template_part("template-parts/content/content-model-card-small"); ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<div class="swiper-pagination"></div>
	</div>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</div>