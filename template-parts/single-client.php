<?php $client = get_field( 'client' ); ?>
<?php if ( $client ) : ?>
	<?php $post = $client; ?>
	<?php setup_postdata( $post ); ?>
    <p class="text-xs"><?php _e('Client:', BB_TEXT_DOMAIN) ?></p>
	<h3><?php the_title(); ?></h3>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>