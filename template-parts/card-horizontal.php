<div class="flex gap-8 py-8 isotope-item w-full <?= $category_classes; ?>">
    <div class="basis-2/12">
        <a class="max-w-44 h-auto relative transform-gpu transition duration-500"
            href="<?php the_permalink();?>">
            <div class="aspect-w-4 aspect-h-3">
                <?php if (has_post_thumbnail()) {
                        echo get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'rounded-lg shadow-abcd w-full h-full object-cover mb-4 realtive z-10'));
                    }
            ?>
            </div>
            <div
                class="absolute top-0 left-0 h-full bg-gradient-to-t from-black to-transparent rounded-lg w-full z-20 transition-opacity duration-500 opacity-25 hover:opacity-80">
            </div>
        </a>
    </div>
    <header class="basis-3/12 flex flex-col gap-1">
        <div class="text-base leading-none">
            <?php the_date() ?>
        </div>
        <a href="<?php the_permalink();?>">
            <h2 class="text-lg italic mb-4"><?php the_title(); ?></h2>
        </a>
        <div class="basis-3/12 space-y-2">
            <?php get_template_part( 'template-parts/project-taxonomies'); ?>
            <?php get_template_part( 'template-parts/project-metas'); ?>
        </div>
    </header>

    <div class="basis-5/12">
        <?php get_template_part( 'template-parts/project-relations-simple'); ?>
    </div>
</div>