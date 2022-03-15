<?php if ( have_rows( '2_rader' ) ) : ?>
<ul class="list">
<?php while ( have_rows( '2_rader' ) ) : the_row(); ?>
<?php if( get_sub_field('radstand') ): ?>
	<li><?php the_sub_field( 'radstand' ); ?></li>
<?php endif; ?>
<?php if( get_sub_field('ohne_verlangerten_radstand') ): ?>
	<li><?php the_sub_field( 'ohne_verlangerten_radstand' ); ?></li>
<?php endif; ?>
<?php if( get_sub_field('mit_verlangertem_radstand_nach_hinten') ): ?>
	<li><?php the_sub_field( 'mit_verlangertem_radstand_nach_hinten' ); ?></li>
<?php endif; ?>
<?php if( get_sub_field('mit_verlangertem_radstand_nach_vorne') ): ?>
	<li><?php the_sub_field( 'mit_verlangertem_radstand_nach_vorne' ); ?></li>
<?php endif; ?>
<?php endwhile; ?>
</ul>
<?php endif; ?>