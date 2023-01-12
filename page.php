<?php get_header(); ?>
<?php while (have_posts()):
	the_post(); ?>
	<div class="container">
		<h1>Page</h1>
		<?php the_content(); ?>
	</div>
<?php
endwhile; ?>
<?php get_footer(); ?>
