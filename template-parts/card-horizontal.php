<div class="flex gap-8 py-8">
    <div class="basis-2/12">
    <a class="max-w-44 h-auto relative transform-gpu hover:scale-[1.025] transition duration-500"
        href="<?php the_permalink();?>">
        <div class="aspect-w-4 aspect-h-3">
            <?php if (has_post_thumbnail()) {
                        echo get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'rounded-abcd shadow-lg w-full h-full object-cover mb-4 realtive z-10'));
                    }
            ?>
        </div>
        <div
            class="absolute top-0 left-0 h-full bg-gradient-to-t from-black to-transparent rounded-abcd w-full z-20 transition-opacity duration-500 opacity-25 hover:opacity-80">
        </div>
    </a>
    </div>
    <header class="basis-3/12 flex flex-col gap-2">
        <div class="text-neutral-300 text-base sm:text-lg">
            <?php the_date() ?>
        </div>
        <a class="pl-8" href="<?php the_permalink();?>">
            <h2 class="text-base sm:text-lg"><?php the_title(); ?></h2>
        </a>
        <div>
        <a class="btn" href="<?php the_permalink();?>">
            <?php _e('view', BB_TEXT_DOMAIN); ?>
        </a>
        </div>
    </header>
    <div class="basis-3/12 space-y-2">
    <?php get_template_part( 'template-parts/single-taxonomies'); ?>
    <?php get_template_part( 'template-parts/single-metas'); ?>
    </div>
    <div class="basis-5/12">
    <?php get_template_part( 'template-parts/single-relations-simple'); ?>
    </div>
</div>