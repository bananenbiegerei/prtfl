<li class="col-span-1 flex flex-col bg-white rounded-xl shadow p-5">
	<div class="flex items-center justify-center rounded-xl aspect-w-3 aspect-h-2">
		<div class="flex items-center justify-center w-full h-full">
		<?php
		$image = get_field('logo');
		$size = 'two-columns';
		if( $image ) {
		  echo wp_get_attachment_image( $image, $size, "", ["class" => "max-h-20 w-auto"] );
		}
		?>
		</div>
	</div>
	<div class="flex items-center justify-between">
		<h2 class="text-blue"><?php the_title() ;?></h2>
		<?php if( get_field('herkunftsland') ): ?>
		<div class="">
			<?php the_field('herkunftsland'); ?>
		</div>
		<?php endif; ?>
	</div>
	<?php get_template_part('template-parts/brand/details'); ?>
	<?php get_template_part("template-parts/brand/swiper"); ?>
</li>