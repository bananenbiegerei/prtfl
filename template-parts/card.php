<div class="flex flex-col">
    <a class="relative transform-gpu hover:scale-[1.025] transition duration-500 mb-2" href="<?php the_permalink();?>">
        <div class="aspect-w-4 aspect-h-3">
            <?php
                    if (has_post_thumbnail()) {
                        echo get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'rounded-abcd shadow-abcd w-full h-full object-cover mb-4 realtive z-10'));
                    }
                    ?>
        </div>
        <div
            class="absolute top-0 left-0 h-full bg-gradient-to-t from-black to-transparent rounded-abcd w-full z-20 transition-opacity duration-500 opacity-25 hover:opacity-80">
        </div>
    </a>
    <header class="flex-1 flex flex-col px-8">
        <div class="text-base">
            <?php the_date() ?>
        </div>
        <a href="<?php the_permalink();?>">
            <h2 class="text-base sm:text-lg mb-2"><?php the_title(); ?></h2>
        </a>
        <p class="text-base"><?= $konstellation; ?></p>
    </header>
</div>