<?php $related_projects = get_field( 'related_projects' );
$rotation = 0; // Initialize rotation angle
$counter = 0; // Initialize counter
?>
<?php if ( $related_projects ) :
    $rotation = -15;
    ?>
<h4 class="text-xs"><?php _e('related projects:'); ?></h4>
<div class="relative group">
    <div class="bg-yellow-500 absolute top-0 left-0 w-full h-full group-hover:grid group-hover:grid-cols-2 -rotate-60 group-hover:rotate-0 transition">
    <?php foreach ( $related_projects as $post ) :
        $rotation += 15; // Increment rotation by 15 degrees for each project
        $rotation_class = 'rotate-' . $rotation;
        $counter++; // Increment counter
        ?>
    <?php setup_postdata ( $post ); ?>

    <div class="bg-red-500 group-hover:relative absolute origin-bottom-left top-0 -left-16 origin-center-center group-hover:rotate-0 <?php echo $rotation_class; ?> scale-50 group-hover:scale-100 transition">
        <div class="bg-lime-500">
            <?php get_template_part( 'template-parts/card-mini' ); ?>
        </div>
    </div>
    <?php endforeach; //var_dump($counter);?>
    </div>
</div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>