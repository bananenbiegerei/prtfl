<?php if ( have_rows( 'kinder' ) ) : ?>
<?php while ( have_rows( 'kinder' ) ) : the_row(); ?>
<div class="space-dl">
<dt>
  <?php _e('Kindersitze standard oder minimal') ?>
</dt>
<dd>
  <?php the_sub_field( 'anzahl_kindersitze_standard_oder_minimal' ); ?>
</dd>
<?php if( get_sub_field('anzahl_kindersitze_max') ): ?>
<dt>
  <?php _e('Kindersitze maximal') ?>
</dt>
<dd>
  <?php the_sub_field('anzahl_kindersitze_max'); ?>
</dd>
<?php endif; ?>
<?php if( get_sub_field('option_babytransport') ): ?>
<dt>
  <?php _e('Option(en) für Babytransport') ?>
</dt>
<dd>
  <?php $option_babytransport_values = get_sub_field( 'option_babytransport' ); ?>
  <?php if ( $option_babytransport_values ) : ?>
  <ul class="list">
    <?php foreach ( $option_babytransport_values as $option_babytransport_value ) : ?>
    <li>
      <?php echo esc_html( $option_babytransport_value ); ?>
    </li>
    <?php endforeach; ?>
  </ul>
  <?php endif; ?>
</dd>
<?php endif; ?>
</div>
<?php endwhile; ?>
<?php endif; ?>