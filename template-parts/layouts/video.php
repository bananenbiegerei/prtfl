<?php if ( get_row_layout() == 'video' ) : ?>
	<?php $video = get_sub_field( 'video' ); ?>
	<?php if ( $video ) : ?>
		<video autoplay loop muted playsinline class="w-full h-auto" id="video">
		  <source src="<?php echo esc_url( $video['url'] ); ?>" type="video/mp4">
		  Your browser does not support the video tag.
		</video>
	<?php endif; ?>
<?php endif; ?>
