<?php if ( have_rows( 'dinge' ) ) : ?>

<?php while ( have_rows( 'dinge' ) ) : the_row(); ?>

<?php if( get_sub_field('weitere_eigenschaften_haupttransportvorrichtung') ): ?>
<div class="space-dl">
<dt>
  <?php _e('weitere Eigenschaften Haupttransportvorrichtung') ?>
</dt>
<dd>
  <?php $weitere_eigenschaften_haupttransportvorrichtung_values = get_sub_field( 'weitere_eigenschaften_haupttransportvorrichtung' ); ?>
  <?php if ( $weitere_eigenschaften_haupttransportvorrichtung_values ) : ?>
  <ul class="list">
    <?php foreach ( $weitere_eigenschaften_haupttransportvorrichtung_values as $weitere_eigenschaften_haupttransportvorrichtung_value ) : ?>
     <li>
       <?php echo esc_html( $weitere_eigenschaften_haupttransportvorrichtung_value ); ?>
     </li>
  <?php endforeach; ?>
  </ul>
  <?php endif; ?>
</dd>
</div>
<?php endif; ?>

<?php if( get_sub_field('grose_ladeflache_standard_oder_minimal') ): ?>
<div class="space-dl">
<dt>
  <?php _e('Große Ladefläche standard oder minimal Wert(e)') ?>
</dt>
<dd>
  <?php $grose_ladeflache_standard_oder_minimal_values = get_sub_field( 'grose_ladeflache_standard_oder_minimal' ); ?>
  <?php if ( $grose_ladeflache_standard_oder_minimal_values ) : ?>
  <ul class="list">
    <?php foreach ( $grose_ladeflache_standard_oder_minimal_values as $grose_ladeflache_standard_oder_minimal_value ) : ?>
     <li>
       <?php echo esc_html( $grose_ladeflache_standard_oder_minimal_value ); ?>
     </li>
  <?php endforeach; ?>
  </ul>
  <?php endif; ?>
</dd>
</div>
<?php endif; ?>

<?php if( get_sub_field('grose_ladeflache_maximal') ): ?>
<div class="space-dl">
<dt>
  <?php _e('Große Ladefläche maximal Wert(e)') ?>
</dt>
<dd>
  <?php $grose_ladeflache_maximal_values = get_sub_field( 'grose_ladeflache_maximal' ); ?>
  <?php if ( $grose_ladeflache_maximal_values ) : ?>
  <ul class="list">
    <?php foreach ( $grose_ladeflache_maximal_values as $grose_ladeflache_maximal_value ) : ?>
     <li>
      <?php echo esc_html( $grose_ladeflache_maximal_value ); ?>
     </li>
  <?php endforeach; ?>
  </ul>
  <?php endif; ?>
</dd>
</div>
<?php endif; ?>

<?php if( get_sub_field('umschlossenes_transportvolumen_standard_oder_minimal') ): ?>
<div class="space-dl">
<dt>
  <?php _e('Umschlossenes Transportvolumen standard oder minimal') ?>
</dt>
<dd>
  <?php the_sub_field( 'umschlossenes_transportvolumen_standard_oder_minimal' ); ?> l
  <?php if( get_sub_field('umschlossenes_transportvolumen_maximal') ): ?>
    – <?php the_sub_field('umschlossenes_transportvolumen_maximal'); ?> l
  <?php endif; ?>
</dd>
</div>
<?php endif; ?>
  
<?php endwhile; ?>
<?php endif; ?>