<?php
$args = array(
    'post_type'      => 'projekt',
    'posts_per_page' => 1,
    'orderby'        => 'date',
    'order'          => 'DESC'
);
$latest_project_query = new WP_Query($args);
if ($latest_project_query->have_posts()) :
    while ($latest_project_query->have_posts()) : $latest_project_query->the_post();
        $konstellation = get_post_meta(get_the_ID(), 'konstellation', true);
        // $link = get_field('link_to_website');
        // var_dump($link);
        ?>
    <div class="mt-[570px] h-[30vw]">
    <h2><?php the_title(); ?></h2>
        <p class="text-neutral-500"><?= $konstellation; ?></p>
    </div>
<?php
    endwhile;
    wp_reset_postdata();
else :
    ?>
<p><?php _e('No projects found.', 'text-domain'); ?></p>
<?php
endif;
?>