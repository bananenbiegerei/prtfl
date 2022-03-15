<div class="mb-5 pb-5 border-b border-gray-200">
	<div class="md:grid md:grid-cols-1 md:gap-4">
		<h3 class="text-base"><?php _e('Partner'); ?></h3>
		<div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:grid-cols-4">
			<?php if ( have_rows( 'partner', 'option' ) ) : ?>
			<?php while ( have_rows( 'partner', 'option' ) ) : the_row(); ?>
			<?php $logo = get_sub_field( 'logo' ); ?>
			<?php $size = 'two-columns'; ?>
			<?php if ( get_sub_field( 'link' ) ): ?>
			<a href="<?php the_sub_field( 'link' ); ?>" target="_blank">
				<?php echo wp_get_attachment_image( $logo, $size, "", array( "class" => "" ) ); ?>
			</a>
			<?php else: ?>
			<?php echo wp_get_attachment_image( $logo, $size, "", array( "class" => "" ) ); ?>
			<?php endif; ?>
			<?php endwhile; ?>
			<?php else : ?>
			<?php // No rows found ?>
			<?php endif; ?>
		</div>
	</div>
</div>