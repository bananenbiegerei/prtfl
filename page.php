<?php get_header(); ?>
<?php while (have_posts()):
	the_post();
?>
<div class="accent-theme">
    <div class="flex ml-12 bg-lime-300 w-footer">
    <div class="bg-red-500 title-container">
        <div class="flex items-end w-full px-4 origin-top-left title">
            <h1 class="mb-0 text-lg leading-none text-primary md:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl"><?php the_title(); ?>
            </h1>
        </div>
    </div>
    <div class="col-span-3 mt-4 mb-0 text-lg leading-none lg:col-span-11 md:col-span-7 text-primary md:text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl">
        <?php the_content(); ?>
    </div>
</div>
</div>
<?php
endwhile; ?>
<?php get_footer(); ?>