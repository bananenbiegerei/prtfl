<a class="h-full" href="<?php echo get_permalink(); ?>">
    <div class="shadow-xl overflow-hidden w-full h-full rounded-2xl bg-primary-100 text-black">
        <?php if (has_post_thumbnail()): ?>
        <div class="aspect-w-16 aspect-h-9">
            <?php the_post_thumbnail('medium', ['class' => 'object-fit object-cover']); ?>
        </div>
        <?php endif; ?>
        <div class="py-2 px-4">
            <h2 class="text-lg"><?php the_title(); ?></h2>
            <?php
            $field_value = get_field('konstellation');
            if ($field_value): ?>
            <div class="text-sm font-mono border-t mt-2 pt-2">
                <?php echo strip_tags($field_value); ?>
            </div>
            <?php endif;
            ?>
        </div>
    </div>
</a>