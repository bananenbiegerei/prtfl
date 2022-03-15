<div class="space-y-4">
	<?php if( get_field('website') ): ?>
		<a class="text-sm" href="<?php the_field('website'); ?>" target="_blank">
			<?php the_field('website'); ?>
		</a>
	<?php endif; ?>
	<div class="flex items-center justify-between">
		<?php if( get_field('handlernetz') ): ?>
				<a class="button small hollow" href="<?php the_field('handlernetz'); ?>" target="_blank">
					<?php _e('Händlernetz'); ?>
				</a>
		<?php endif; ?>
		<?php get_template_part("template-parts/brand/social-media"); ?>
	</div>
</div>