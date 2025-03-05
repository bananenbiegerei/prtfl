<?php
/*
Template Name: Work
*/

get_header(); ?>

<?php
$args = array(
    'post_type' => 'projekt',
    'posts_per_page' => -1,
);
$projects_query = new WP_Query($args); ?>
<div class="flex flex-col divide-y divide-dashed divide-gray-400/90 container-fluid py-6">
    <?php if ($projects_query->have_posts()) :
    while ($projects_query->have_posts()) : $projects_query->the_post(); ?>
    <?php include locate_template('template-parts/card-horizontal.php'); ?>
    <?php endwhile;
    wp_reset_postdata();
else : ?>
    <p><?php esc_html_e('No projects found.', 'text-domain'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>