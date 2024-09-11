<?php get_header(); ?>
<?php while (have_posts()):
	the_post(); ?>

<?php if (have_rows('columns')): ?>
<?php while (have_rows('columns')):
	the_row(); ?>
<div class="flex scrollers h-screen transition ease-in-out duration-300 px-6">
    <?php if (have_rows('left_column')): ?>
    <div class="scroller overflow-auto h-screen hide-scrollbar px-3 w-2/3 ">
        <?php if (is_single()) { ?>
        <h1><?php the_title(); ?></h1>
        <?php } else { ?>
        <h1 class="sr-only"><?php the_title(); ?></h1>
        <?php } ?>
        <?php while (have_rows('left_column')):
        	the_row(); ?>
        <?php if (have_rows('column')): ?>
        <div>
            <?php while (have_rows('column')):
            	the_row(); ?>
            <?php get_template_part('template-parts/layouts/paragraph'); ?>
            <?php get_template_part('template-parts/layouts/video'); ?>
            <?php get_template_part('template-parts/layouts/image'); ?>
            <?php get_template_part('template-parts/layouts/projects'); ?>
            <?php get_template_part('template-parts/layouts/template-part-name'); ?>
            <?php
            endwhile; ?>
        </div>
        <?php endif; ?>
        <?php
        endwhile; ?>
        <footer class="mt-24 p-4" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <?php wp_nav_menu([
            	'theme_location' => 'footer', // Replace with your menu location
            	'menu_class' => 'menu horizontal', // Add any additional classes you need
            	'container' => false,
            	// Don't wrap the menu in a container
            ]); ?>
        </footer>
    </div>
    <?php endif; ?>
    <?php if (have_rows('right_column')): ?>
    <div class="scroller overflow-auto h-screen w-1/3 px-3" x-init="() => {
    const scrollableDiv = document.getElementById('scrollableDiv');
    scrollableDiv.addEventListener('scroll', () => {
      isScrolled = scrollableDiv.scrollTop > 0;
    });
  }" id="scrollableDiv">

        <?php while (have_rows('right_column')):
        	the_row(); ?>
        <?php if (have_rows('column')): ?>
        <div>
            <?php while (have_rows('column')):
            	the_row(); ?>
            <?php get_template_part('template-parts/layouts/paragraph'); ?>
            <?php get_template_part('template-parts/layouts/video'); ?>
            <?php get_template_part('template-parts/layouts/image'); ?>
            <?php get_template_part('template-parts/layouts/projects'); ?>
            <?php get_template_part('template-parts/layouts/template-part-name'); ?>
            <?php get_template_part('template-parts/layouts/headline'); ?>
            <?php
            endwhile; ?>
        </div>
        <?php endif; ?>
        <?php
        endwhile; ?>
    </div>
    <?php endif; ?>
</div>
<?php
endwhile; ?>
<?php else: ?>
<?php endif; ?>
<?php
endwhile; ?>

<?php get_footer(); ?>