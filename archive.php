<?php get_header();?>
	  <div class="container mx-auto max-w-12xl px-5">
		<div class="space-y-12">
		  <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
			  <?php
			  $args = array(
				  'post_type'              => array( 'brand' ),
				  'posts_per_page'				 => '-1',
			  );
			  $query = new WP_Query( $args );
			  if ( $query->have_posts() ) {
				  while ( $query->have_posts() ) {
					  $query->the_post();
					  get_template_part('template-parts/content/content','brand');
				  }
			  } else {
			  }
			  wp_reset_postdata();
			  ?>
		  </ul>
		</div>
	  </div>

<?php get_footer(); ?>
