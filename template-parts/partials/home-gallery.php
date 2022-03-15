	  <div class="xl:container max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
	  	<h2 id="products-heading" class="sr-only">Eindrücke</h2>

	  	<div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:gap-x-8">
	  		<?php
			$args = array(
				'post_type'              => array( 'modell' ),
				'posts_per_page'         => '15',
				'order'                  => 'RAND',
				'orderby'                => 'date',
			);
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post(); ?>
	  		<?php get_template_part('template-parts/content/content-model-card'); ?>
	  		<?php }
			} else {
			}
			wp_reset_postdata();
			?>
	  	</div>
	  </div>