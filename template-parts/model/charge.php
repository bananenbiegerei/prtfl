<?php if( get_field('ladung') ): ?>
  <div class="space-dl">
  <dt>
    <?php _e('Ladung') ?>
  </dt>
  <dd>
    <?php the_field( 'ladung' ); ?>
  </dd>
  </div>
<?php endif; ?>


<?php if ( have_rows( 'kinder' ) ) : ?>
  <?php while ( have_rows( 'kinder' ) ) : the_row(); ?>
  <?php if( get_sub_field('anzahl_kindersitze_standard_oder_minimal') ): ?>
    <div class="space-dl">
    <dt>
      <?php _e('Anzahl der Kindersitze') ?>
    </dt>
    <dd>
      <?php the_sub_field( 'anzahl_kindersitze_standard_oder_minimal' ); ?>
      <?php if( get_sub_field('anzahl_kindersitze_max') ): ?>
        <?php the_sub_field('anzahl_kindersitze_max'); ?>
      <?php endif; ?>
    </dd>
    </div>
  <?php endif; ?>
  <?php if( get_sub_field('option_babytransport') ): ?>
  <div class="space-dl">
  <dt>
    <?php _e('Option Babytransport') ?>
  </dt>
  <dd>
    <?php if ( $option_babytransport_values ) : ?>
      <?php foreach ( $option_babytransport_values as $option_babytransport_value ) : ?>
         <?php echo esc_html( $option_babytransport_value ); ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </dd>
  </div> 
  <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php if( get_field('wetterschutz_passagiere') ): ?>
<div class="space-dl">
  <dt>
    <?php _e('Wetterschutz für Passagiere'); ?>
  </dt>
  <dd>
    <?php the_field( 'wetterschutz_passagiere' ); ?>
  </dd>
  </div> 
<?php endif; ?>
