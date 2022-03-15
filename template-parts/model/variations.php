<?php if ( have_rows( 'modellvarianten' ) ) : ?>
<div class="space-dl">
<dt>
  <?php _e('Variationen des Modells'); ?>
</dt>
<dd>
  <ul class="list">
    <?php while ( have_rows( 'modellvarianten' ) ) : the_row(); ?>
    <li>
      <?php the_sub_field( 'name_modellvariante' ); ?>
    </li>
  <?php endwhile; ?>
  </ul>
</dd>
</div>
<?php else : ?>
<?php // no rows found ?>
<?php endif; ?>