
<?php if( get_field('zulassiges_gesamtgewicht_standard_oder_minimal') ): ?>
<div class="space-dl">
	<dt>
		<?php _e('Zulässiges Gesamtgewicht standard oder minimal'); ?>
	</dt>
	<dd>
		<?php the_field('zulassiges_gesamtgewicht_standard_oder_minimal'); ?> kg
		<?php if( get_field('zulassiges_gesamtgewicht_maximal') ): ?>
			- <?php the_field('zulassiges_gesamtgewicht_maximal'); ?> kg
		<?php endif; ?>
	</dd>
</div>
<?php endif; ?>

<?php if( get_field('gewicht_ohne_E_minimal') ): ?>
<div class="space-dl">
	<dt>
		<?php _e('Gewicht ohne E minimal'); ?>
	</dt>
	<dd>
		<?php the_field('gewicht_ohne_E_minimal'); ?> kg
		<?php if( get_field('gewicht_ohne_E_maximal') ): ?>
			- <?php the_field('gewicht_ohne_E_maximal'); ?> kg
		<?php endif; ?>
	</dd>
</div>
<?php endif; ?>

<?php if( get_field('gewicht_mit_e_minimal') ): ?>
<div class="space-dl">
	<dt>
		<?php _e('Gewicht mit E minimal'); ?>
	</dt>
	<dd>
		<?php the_field('gewicht_mit_e_minimal'); ?> kg
		<?php if( get_field('gewicht_mit_e_maximal') ): ?>
			- <?php the_field('gewicht_mit_e_maximal'); ?> kg
		<?php endif; ?>
	</dd>
</div>
<?php endif; ?>
