<?php
if (get_row_layout() == 'paragraph'):
$color = get_sub_field( 'color' );
?>
<p class="text-<?= $color;?>-500">
    <?php the_sub_field('paragraph'); ?>
</p>
<?php endif; ?>
