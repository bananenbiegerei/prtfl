<?php
get_header();
?>
<?php $marke = get_field( 'marke' ); ?>

<div class="container mx-auto px-5">
	<div class="max-w-2xl mx-auto lg:max-w-none">
		<!-- Product -->
		<div class="lg:grid lg:grid-cols-12 lg:gap-x-8 lg:items-start">
			<div class="col-span-12">
				<?php if ($marke) : ?>
				<h2 class="text-blue text-3xl lg:inline">
					<?php echo get_the_title($marke); ?>
				</h2>
				<?php endif; ?>
				<h1 class="inline">
					<?php the_title(); ?>
				</h1>
				<p class="text-xl lg:text-2xl mb-8">
					Für <?php the_field( 'nutzungsart' ); ?>e Nutzung und
					<?php
						if( get_field('fahrweise') == 'Variabel' ) {
							echo 'variable';
						}
						if( get_field('fahrweise') == 'Agil' ) {
							echo 'agile';
						}
						if( get_field('fahrweise') == 'Standard' ) {
							echo 'normale';
						}
						if( get_field('fahrweise') == 'Bequem' ) {
							echo 'bequeme';
						}
						?>

					Fahrweise.
				</p>
			</div>
			<!-- Image gallery -->
			<?php get_template_part('template-parts/model/single-swiper'); ?>
			<!-- Product info -->
			<div class="mt-10 sm:mt-16 lg:mt-0 col-span-5">
				<?php if ( $marke ) : ?>
				<?php $post = $marke;
							  setup_postdata( $post );
							  $logo = get_field( 'logo' );
							  $size = 'four-columns';
							  if ( $logo ) : ?>

				<a class="orientation-container" href="<?php the_permalink(); ?>">
					<?php echo wp_get_attachment_image( $logo, $size, "", ["class" => "max-h-20 w-auto px-4 py-4 bg-white"] );?>
					<h2 class="sr-only">
						<?php the_title(); ?>
					</h2>
				</a>

				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>

				<div class="mt-6">
					<h3 class="sr-only"><?php _e('Global Daten zum Model') ?></h3>

					<dl class="styled-dl large">
						<?php get_template_part('template-parts/model/variations'); ?>
						<?php get_template_part('template-parts/model/price'); ?>
						<?php get_template_part('template-parts/model/website'); ?>
						<?php //get_template_part('template-parts/model/usage'); ?>
						<?php //get_template_part('template-parts/model/company'); ?>

						<?php //get_template_part('template-parts/model/driving-style'); ?>

					</dl>
					<?php if ( $marke ) : ?>
					<?php $post = $marke;
					  setup_postdata( $post ); ?>
					<?php if( get_field('handlernetz') ): ?>
					<a href="<?php the_field('handlernetz'); ?>" target="_blank" class="button">
						<?php _e('Händlernetz'); ?> <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
						</svg>
					</a>
					<?php endif; ?>
					<?php if( get_field('probefahrt') ): ?>
					<a href="<?php the_field('probefahrt'); ?>'); ?>" target="_blank" class="button">
						<?php _e('Probfahrt vereinbaren'); ?> <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
						</svg>
					</a>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>

				</div>
				<?php get_template_part("template-parts/model/accordion"); ?>
			</div>
		</div>


		<?php 
		$related_posts = new WP_Query(array(
		  'post_type' => 'modell',
		  'post__not_in' => array(get_the_id()),
		  'meta_key' => 'marke',
		  'meta_value' => $marke->ID,
		  'meta_compare' => 'IN',
		));
	  ?>
		<?php if ($related_posts->have_posts()) : ?>
		<section aria-labelledby="related-heading" class="mt-8 lg:mt-12">
			<h2 id="related-heading" class="text-xl font-bold "><?php _e('Bikes vom gleichen Hersteller'); ?></h2>
			<div class="mt-4 lg:mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">

				<?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
				<?php echo get_template_part('template-parts/content/content-model', 'card'); ?>
				<?php endwhile; ?>

			</div>
		</section>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>

	</div>
</div>

<?php
get_footer();
