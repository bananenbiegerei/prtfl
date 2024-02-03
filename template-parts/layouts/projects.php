<?php if (get_row_layout() == 'projects'): ?>
<div class="mb-12">
    <h2>
        <?php _e('Featured Projects'); ?>
    </h2>
    <div>
        <a href="<?php echo get_post_type_archive_link('projekt'); ?>"
            class="btn btn-ghost"><?php _e('Alle Projekte'); ?>
            <span class="font-icon text-3xl">➟</span>
        </a>
    </div>
</div>

<div class="flex flex-col space-y-16">
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
