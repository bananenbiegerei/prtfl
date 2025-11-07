<?php $client = get_field( 'client' ); ?>
<?php if ( $client ) : ?>
	<?php $post = $client; ?>
	<?php setup_postdata( $post ); ?>
    <div>
	<p class="text-xs mb-0 italic"><?php _e('Client:', BB_TEXT_DOMAIN) ?></p>
	<h3 class="text-sm max-w-[200px]"><?php the_title(); ?></h3>
	</div>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>