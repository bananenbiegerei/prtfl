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
<div class="bg-primary rounded-lg m-1 p-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">
    <div class="col-span-4">
    <h2>
        Featured projects
    </h2>
    </div>
    <?php while ($latest_project_query->have_posts()) : $latest_project_query->the_post();
    $konstellation = get_post_meta(get_the_ID(), 'konstellation', true);
?>
    <?php include locate_template('template-parts/card.php');?>
    <?php
    endwhile; ?>
    <a href="<?php echo esc_url(get_permalink(1879)); ?>"
        class="bg-accent text-primary flex items-center justify-center rounded-lg transform-gpu transition duration-500 flex gap-4 hover:gap-8">
        <?php _e('View All Projects', BB_TEXT_DOMAIN); ?> <svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
            height="1.5em" viewBox="0 0 32 32">
            <path fill="currentColor" d="m18 6l-1.43 1.393L24.15 15H4v2h20.15l-7.58 7.573L18 26l10-10z" />
        </svg>
    </a>
</div>
<?php wp_reset_postdata();
else :
    ?>
<?php
endif;
?>