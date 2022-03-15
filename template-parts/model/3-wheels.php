<?php if ( have_rows( '3_rader' ) ) : ?>
<ul class="list">
<?php while ( have_rows( '3_rader' ) ) : the_row(); ?>
<li><?php the_sub_field( 'neigetechnik' ); ?></li>
<li><?php the_sub_field( 'vorderrader_oder_hinterrader' ); ?></li>
<li><?php the_sub_field( '2_vorderrader_lenkung' ); ?></li>
<li><?php the_sub_field( 'art_der_2_hinterrader' ); ?></li>
<?php endwhile; ?>
</ul>
<?php endif; ?>