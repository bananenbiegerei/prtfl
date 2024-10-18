<?php $related_projects = get_field( 'related_projects' );
$rotation = 0; // Initialize rotation angle
$counter = 0; // Initialize counter
?>
<?php if ( $related_projects ) :
    $rotation = -15;
    ?>
<h4 class="text-xs"><?php _e('related projects:'); ?></h4>
<div class="relative grid grid-cols-2 gap-2">
    <?php foreach ( $related_projects as $post ) :
        $rotation += 15; // Increment rotation by 15 degrees for each project
        $rotation_class = 'rotate-' . $rotation;
        $counter++; // Increment counter
        ?>
    <?php setup_postdata ( $post ); ?>
    <div class="">
        <?php get_template_part( 'template-parts/card-mini' ); ?>
    </div>
    <?php endforeach; //var_dump($counter);?>
</div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>