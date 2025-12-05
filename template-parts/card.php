<article class="flex items-start gap-4 leading-none group text-primary">
        <?php if (has_post_thumbnail()) { ?>
            <?php echo get_the_post_thumbnail(get_the_ID(), 'two-columns', array('class' => 'w-auto mr-2 rounded md:rounded-lg shadow-md border transition-transform group-hover:scale-105 h-[1em]')); ?>
        <?php } ?>
    <a class=""
       href="<?php the_permalink(); ?>"
       aria-label="<?php echo esc_attr(get_the_title()); ?>">
        <h3 class="inline transition-colors leading-thight group-hover:text-primary-700 link"><?php the_title(); ?></h3>
    </a>
</article>