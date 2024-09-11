<?php get_header(); ?>
<?php while (have_posts()):
	the_post(); ?>
<div class="p-12">
    <?php the_content(); ?>
</div>
<?php
endwhile; ?>
<?php get_footer(); ?>