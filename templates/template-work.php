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
<section class="p-4">
<ul class="inline-flex flex-wrap text-xl leading-none">
<?php if ($projects_query->have_posts()) :
    while ($projects_query->have_posts()) : $projects_query->the_post(); ?>
        <?php include locate_template('template-parts/card-small.php'); ?>
    <?php endwhile;
    wp_reset_postdata();
else : ?>
<?php endif; ?>
</ul>
</section>
<?php get_footer(); ?>