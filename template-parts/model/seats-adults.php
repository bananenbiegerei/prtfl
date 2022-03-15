<?php if( get_field('anzahl_sitze_erwachsene') ): ?>
<div class="space-dl">
	<dt>
	<?php _e('Anzahl der Sitze für Erwachsene') ?>	
	</dt>
	<dd>
		<?php the_field( 'anzahl_sitze_erwachsene' ); ?>
	</dd>
</div>
<?php endif; ?>