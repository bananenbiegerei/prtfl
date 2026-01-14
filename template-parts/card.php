<li class="relative">
    <article class="relative flex flex-col items-start leading-none lg:gap-2 group text-primary">
        <?php if (has_post_thumbnail()) : ?>
            <?php echo get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'transition-transform border rounded shadow-md md:rounded-lg group-hover:scale-105 w-full h-auto')); ?>
        <?php endif; ?>
        <h3 class="mb-2 text-base md:text-lg">
            <a href="<?php the_permalink(); ?>" class="transition-colors link group-hover:text-primary-700 before:absolute before:inset-0 before:z-10">
                <?php the_title(); ?>
            </a>
        </h3>
    </article>
</li>
