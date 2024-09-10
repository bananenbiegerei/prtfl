<?php get_header(); ?>
<?php while (have_posts()):
	the_post(); ?>
<div class="container">
    <div class="max-w-4xl">
        <?php the_content(); ?>
    </div>
</div>
<?php
endwhile; ?>
<?php get_footer(); ?>