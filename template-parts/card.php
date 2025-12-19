<article class="relative flex flex-col items-start gap-4 leading-none group text-primary">
        <?php if (has_post_thumbnail()) { ?>
                <?php echo get_the_post_thumbnail(get_the_ID(), 'four-columns', array('class' => 'rounded md:rounded-lg shadow-md border transition-transform group-hover:scale-105')); ?>
        <?php } ?>
    <a class="before:absolute before:inset-0 before:z-10"
       href="<?php the_permalink(); ?>"
       aria-label="<?php echo esc_attr(get_the_title()); ?>">
        <h3 class="inline text-base transition-colors leading-thight group-hover:text-primary-700 link"><?php the_title(); ?></h3>
    </a>
</article>