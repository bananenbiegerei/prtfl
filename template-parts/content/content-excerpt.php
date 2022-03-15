<article class="cell">
	<a href="<?php the_permalink(); ?>">
		<div class="card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if( get_field( 'freisteller_bild', $post->ID ) ) : ?>
				<?php
				$image = get_field('freisteller_bild', $post->ID);
				$size = 'three-columns-four-three'; // (thumbnail, medium, large, full or custom size)
				if ( $image ) : ?>
				<?php echo wp_get_attachment_image( $image, $size ); ?>
			<?php endif;?>
		<?php endif; ?>
		<div class="card-section">
			<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			<?php the_excerpt(); ?>
		</div>
	</div>
</a>
</article>
