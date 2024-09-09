<a class="h-full mb-8" href="<?php echo get_permalink(); ?>">
    <?php if (has_post_thumbnail()): ?>
    <div class="aspect-w-4 aspect-h-3">
        <?php the_post_thumbnail('large', ['class' => 'bg-neutral-500 object-fit object-cover rounded-3xl shadow-xl border-neutral-100 border']); ?>
    </div>
    <?php endif; ?>
    <div class="max-w-sm px-6 mt-2">
        <h2><?php the_title(); ?></h2>
        <?php
        $field_value = get_field('konstellation');
        if ($field_value): ?>
        <p class="text-lg text-neutral-500 line-clamp-2 mb-0">
            <?php echo strip_tags($field_value); ?>
        </p>
        <?php endif;
        ?>
    </div>
</a>