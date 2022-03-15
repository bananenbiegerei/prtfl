<?php $motorisierungsklasse_values = get_field( 'motorisierungsklasse' ); ?>
<?php if ( $motorisierungsklasse_values ) : ?>
<div class="space-dl">
<dt>
  <?php _e('Motorisierungsklasse'); ?>
</dt>
<dd>
  <ul class="list">
    <?php foreach ( $motorisierungsklasse_values as $motorisierungsklasse_value ) : ?>
    <li>
      <?php echo esc_html( $motorisierungsklasse_value ); ?>
    </li>
    <?php endforeach; ?>
  </ul>
</dd>
</div>
<?php endif; ?>

<?php $motorlage_values = get_field( 'motorlage' ); ?>
<?php if ( $motorlage_values ) : ?>
<div class="space-dl">
<dt>
  <?php _e('Motorlage'); ?>
</dt>
<dd>
  <ul class="list">
    <?php foreach ( $motorlage_values as $motorlage_value ) : ?>
    <li>
      <?php echo esc_html( $motorlage_value ); ?>
    </li>
    <?php endforeach; ?>
  </ul>
</dd>
</div>
<?php endif; ?>