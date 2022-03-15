<div class="space-dl">
<dt>
	<?php _e('Akkukapazität standard oder minimal'); ?>
</dt>
<dd>
	<?php the_field( 'akkukapazitat_standard_oder_minimal' ); ?> <?php _e('Wh'); ?>
	<?php if( get_field('akkukapazitat_maximal') ): ?>
	– <?php the_field('akkukapazitat_maximal'); ?> <?php _e('Wh'); ?>
	<?php endif; ?>
</dd>
</div>