<?php if ( get_field( 'website_des_modells' ) ): ?>
<div class="space-dl">
<dd>
<a class="button hollow" target="_blank" href="<?php the_field( 'website_des_modells' ); ?>">
  <?php _e('Modell-Website'); ?>
</a>
</dd>
</div>
<?php else: ?>

<?php if( get_field( 'website_des_modells_2' ) ) : ?>
<div class="space-dl">
  <dd>
    <a class="button hollow" target="_blank" href="<?php the_field( 'website_des_modells_2' ); ?>">
      <?php _e('Modell-Website'); ?>
    </a>
  </dd>
</div>
<?php endif; ?>

<?php endif; ?>
