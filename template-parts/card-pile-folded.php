<li class="absolute bottom-0 left-0" style="transform: rotate(<?php
        if ($item_count % 2 == 0) {
            echo $rotation;
            } else {
            echo $rotation*-1;
            }
        ?>deg); z-index: <?= $item_count*-1; ?>">
    <?php get_template_part( 'template-parts/card-mini' ); ?>
</li>