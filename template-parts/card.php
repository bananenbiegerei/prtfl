<a class="h-full" href="<?php echo get_permalink(); ?>">
    <?php if (has_post_thumbnail()): ?>
    <div class="aspect-w-16 aspect-h-9">
        <?php the_post_thumbnail('medium', ['class' => 'object-fit object-cover rounded-lg']); ?>
    </div>
    <?php endif; ?>
    <div class="py-2 max-w-xs">
        <h2><?php the_title(); ?></h2>
        <?php
        $field_value = get_field('konstellation');
        if ($field_value): ?>
        <p class="text-base">
            <?php echo strip_tags($field_value); ?>
        </p>
        <?php endif;
        ?>
    </div>
</a>