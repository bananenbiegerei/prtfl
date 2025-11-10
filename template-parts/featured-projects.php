<?php
$args = array(
    'post_type'      => 'projekt',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'meta_query'     => array(
        array(
            'key'     => 'featured_project',
            'value'   => '1', // True value for ACF true/false field
            'compare' => '=='
        ),
    ),
);
$latest_project_query = new WP_Query($args);
if ($latest_project_query->have_posts()) : ?>
<?php while ($latest_project_query->have_posts()) : $latest_project_query->the_post();
    $konstellation = get_post_meta(get_the_ID(), 'konstellation', true);
?>
<?php include locate_template('template-parts/card.php');?>
<?php
    endwhile; ?>
<?php wp_reset_postdata();
else :
    ?>
<?php
endif;
?>