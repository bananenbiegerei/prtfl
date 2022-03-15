<?php $specials_values = get_field( 'specials' ); ?>
<?php if ( $specials_values ) : ?>
  <ul class="list">
    <?php foreach ( $specials_values as $specials_value ) : ?>
     <li>
       <?php echo esc_html( $specials_value ); ?>
     </li>
     <?php endforeach; ?>
  </ul>
<?php endif; ?>