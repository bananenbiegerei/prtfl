<?php if ( have_rows( 'uvp_ab' ) ) : ?>
<?php while ( have_rows( 'uvp_ab' ) ) : the_row(); ?>

<?php if( get_sub_field('uvp_ohne_e_minimal') ): ?>
<div class="space-dl">
<dt>
  <?php _e( 'UVP ohne E' ); ?>
</dt>
<dd>
  <?php the_sub_field( 'uvp_ohne_e_minimal' ); ?> €
  <?php if( get_sub_field('uvp_ohne_e_maximal') ): ?>
  – 
    <?php the_sub_field( 'uvp_ohne_e_maximal' ); ?> €
  <?php endif; ?>
</dd>
</div>
<?php endif; ?>

<?php if( get_sub_field('uvp_pedelec25_minimal') ): ?>
<div class="space-dl">
<dt>
  <?php _e( 'UVP Pedelec25' ); ?>
</dt>
<dd>
  <?php the_sub_field( 'uvp_pedelec25_minimal' ); ?> €
  <?php if( get_sub_field('uvp_pedelec25_maximal') ): ?>
  – 
  <?php the_sub_field( 'uvp_pedelec25_maximal' ); ?> €

  <?php endif; ?>
</dd>
</div>
<?php endif; ?>

<?php if( get_sub_field('uvp_pedelec45_minimal') ): ?>
<div class="space-dl">
<dt>
  <?php _e( 'UVP Pedelec45 minimal' ); ?>
</dt>
<dd>
  <?php the_sub_field( 'uvp_pedelec45_minimal' ); ?> €
  <?php if( get_sub_field('uvp_pedelec45_maximal') ): ?>
  – <?php the_sub_field( 'uvp_pedelec45_maximal' ); ?> €
  <?php endif; ?>
</dd>
</div>
<?php endif; ?>

<?php if( get_sub_field('uvp_andere_motorisierung_minimal') ): ?>
<div class="space-dl">
<dt>
  <?php _e( 'UVP andere Motorisierung' ); ?>
</dt>
<dd>
  <?php the_sub_field( 'uvp_andere_motorisierung_minimal' ); ?> €
  <?php if( get_sub_field('uvp_andere_motorisierung_minimal') ): ?>
  – <?php the_sub_field( 'uvp_andere_motorisierung_minimal' ); ?> €
  <?php endif; ?>
</dd>
</div>
<?php endif; ?>


  
<?php endwhile; ?>
<?php endif; ?>