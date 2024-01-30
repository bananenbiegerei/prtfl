<?php if (get_row_layout() == 'projects'): ?>
<h1 class="font-icon animation-test">☀✯➟⬤🌝🏵🐈🐕🐢💡🔒🕛🖐🚴🦉🦎</h1>
<div class="rounded-2xl p-6 bg-primary-200">
    <div class="flex justify-between mb-12">
        <h2>
            <?php _e('Featured Projects'); ?>
        </h2>
        <a href="<?php echo get_post_type_archive_link('projekt'); ?>" class="btn"><?php _e('Alle Projekte'); ?></a>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 content-stretch gap-4 lg:gap-12 w-full mb-6">
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
</div>
<?php endif; ?>
