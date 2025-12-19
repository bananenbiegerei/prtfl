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
<ul class="grid grid-cols-1 gap-8 my-4 mr-4 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6">
<?php if ($projects_query->have_posts()) :
    while ($projects_query->have_posts()) : $projects_query->the_post(); ?>
        <?php include locate_template('template-parts/card.php'); ?>
    <?php endwhile;
    wp_reset_postdata();
else : ?>
<?php endif; ?>
</ul>
<?php get_footer(); ?>