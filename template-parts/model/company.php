<?php $unternehmen = get_field( 'unternehmen' ); ?>
<?php if ( $unternehmen ) : ?>
<div class="space-dl">
	<?php $post = $unternehmen; ?>
	<?php setup_postdata( $post ); ?>
	<dt>
		  Unternehmen
		</dt>
		<dd>
		  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</dd>
	<?php wp_reset_postdata(); ?>
</div>
<?php endif; ?>

