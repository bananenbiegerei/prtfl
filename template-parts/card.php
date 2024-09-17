<div class=" flex flex-col">
        <div class="flex-1 flex flex-col justify-end">
            <div class=" text-neutral-500 text-base">
                <?php the_date() ?>
            </div>
            <a class="pl-8" href="<?php the_permalink();?>">
                <h2 class="text-base"><?php the_title(); ?></h2>
            </a>
            <p class="pl-8 text-neutral-500 text-base"><?= $konstellation; ?></p>
        </div>
        <a class="relative hover:scale-105 transition" href="<?php the_permalink();?>">
            <div class="aspect-w-4 aspect-h-3">
                    <?php
                    if (has_post_thumbnail()) {
                        echo get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'rounded-abcd shadow-lg w-full h-full object-cover mb-4 realtive z-10'));
                    }
                    ?>
            </div>
            <div class="absolute top-0 left-0 h-full bg-gradient-to-t from-black/10 to-transparent rounded-abcd w-full z-20 transition hover:from-black/50 hover:transition">
            </div>
        </a>
    </div>