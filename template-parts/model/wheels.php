<?php if( get_field('anzahl_der_raeder') ): ?>
<div class="space-dl">
  <dt>
    <?php _e( 'Anzahl der Räder' ); ?>
  </dt>
  <dd>
    <?php the_field( 'anzahl_der_raeder' ); ?>
    <?php
    if( get_field('anzahl_der_raeder') == '2' ) {
      get_template_part('template-parts/model/2-wheels');
    }
    if( get_field('anzahl_der_raeder') == '3' ) {
      get_template_part('template-parts/model/3-wheels');
    }
    ?>
  </dd>
</div>
<?php endif; ?>

