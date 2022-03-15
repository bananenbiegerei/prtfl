<?php if( get_field('lange_standard_oder_minimal') ): ?>
<div class="space-dl">
	<dt>
		<?php _e('Länge standard oder minimal') ?>
	</dt>
	<dd>
		<?php the_field('lange_standard_oder_minimal'); ?> cm
		<?php if( get_field('lange_maximal') ): ?>
			– <?php the_field('lange_maximal'); ?> cm
		<?php endif; ?>
	</dd>
</div>
<?php endif; ?>