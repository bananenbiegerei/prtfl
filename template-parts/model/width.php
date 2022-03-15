<?php if( get_field('breite_standard_oder_minimal') ): ?>
<div class="space-dl">
	<dt>
		<?php _e('Breite standard oder minimal') ?>
	</dt>
	<dd>
		<?php the_field('breite_standard_oder_minimal'); ?> cm
		<?php if( get_field('breite_maximal') ): ?>
			– <?php the_field('breite_maximal'); ?> cm
		<?php endif; ?>
	</dd>
</div>
<?php endif; ?>