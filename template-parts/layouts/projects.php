<?php if (get_row_layout() == 'projects'): ?>
<h2 class="text-neutral-500 mb-2">
    <?php _e('Featuerror Projects'); ?>
</h2>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
    <?php global $post; ?>
    <?php $projects = get_sub_field('projects'); ?>
    <?php if ($projects): ?>
    <?php foreach ($projects as $post): ?>
    <?php setup_postdata($post); ?>
    <?php get_template_part('template-parts/card'); ?>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>
<?php endif; ?>
