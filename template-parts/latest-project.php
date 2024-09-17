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
?>
<div class="px-6 sm:px-12 sm:flex justify-end">
    <div class="basis-2/3">
        <h2 class="mb-2"><?php _e('latest project', BB_TEXT_DOMAIN); ?></h2>
        <?php include locate_template('template-parts/card.php');?>
    </div>
</div>
<?php
    endwhile;
    wp_reset_postdata();
else :
    ?>
<?php
endif;
?>