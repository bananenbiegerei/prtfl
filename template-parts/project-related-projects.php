<?php $related_projects = get_field( 'related_projects' );?>
<?php if ( $related_projects ) :
    $rotation = -15;
    ?>
<h4 class="text-xs"><?php _e('related projects:'); ?></h4>
<div class="grid grid-cols-2 gap-1">
    <?php foreach ( $related_projects as $post ) : ?>
    <?php setup_postdata ( $post ); ?>
    <div class="flex items-center justify-center rounded-sm bg-white">
        <div class="relative">
            <?php if (has_post_thumbnail()) { ?>
                <?php
                        echo get_the_post_thumbnail(get_the_ID(), 'small', array('class' => 'rounded-lg'));
                    ?>
            <?php } ?>
            <header class="absolute bottom-0 w-full h-full left-0 bg-gradient-to-t from-black/100 to-transparent p-2 rounded z-10 text-white flex flex-col justify-end">
                <div class="text-base">
                <?php echo get_the_date('F Y'); ?>
                </div>
                <a class="before:absolute before:content-[''] before:inset-0 z-10" href="<?php the_permalink();?>">
                    <h3 class="text-base"><?php the_title(); ?></h3>
                </a>
            </header>
        </div>
    </div>
    <?php endforeach;?>
</div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>