<div class="group/card space-y-2">
    <header class="flex-1 flex flex-col rounded-lg text-accent relative">
        <div class="ml-4">
        <div class="text-base">
            <?php echo get_the_date('F Y'); ?>
        </div>
        <a class="before:absolute before:content-[''] before:inset-0 z-10" href="<?php the_permalink();?>">
            <h2 class="text-base sm:text-lg mb-2"><?php the_title(); ?></h2>
        </a>
        </div>
        <div>
        <?php if (has_post_thumbnail()) { ?>
            <?php
                echo get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'rounded-lg shadow-abcd group-hover/card:shadow-xl transition w-full h-full object-cover realtive z-10'));
            ?>
        <?php } ?>
        </div>
    </header>
    <p class="text-base text-accent ml-4"><?= $konstellation; ?></p>
</div>