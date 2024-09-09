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
?>
    <div class="mb-12">
        <h2 class="text-neutral-500 mb-2"><?php _e('latest project', BB_TEXT_DOMAIN); ?></h2>
        <?php
        if (has_post_thumbnail()) {
            echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'rounded-[32px] shadow-lg w-full h-auto border border-neutral-200'));
        }
        ?>
    </div>
<?php
    endwhile;
    wp_reset_postdata();
else :
    ?>
<?php
endif;
?>