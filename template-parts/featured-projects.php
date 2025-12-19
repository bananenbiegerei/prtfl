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
<h2 class="inline italic text-primary">featured projects:</h2>
<ul class="inline-flex flex-wrap gap-1">
    <?php while ($latest_project_query->have_posts()) : $latest_project_query->the_post();
    $konstellation = get_post_meta(get_the_ID(), 'konstellation', true);
?>
    <li class="mr-8"><?php include locate_template('template-parts/card-horizontal.php');?></li>
    <?php
    endwhile; ?>
    <li class="text-primary">
        <a class="flex items-center mr-2" href="">all projects
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-[0.75em] h-auto border border-primary rounded-full" viewBox="0 0 32 32"><path fill="currentColor" d="m18 6l-1.43 1.393L24.15 15H4v2h20.15l-7.58 7.573L18 26l10-10z"/></svg>
        </a>
    </li>
</ul>
<?php
    wp_reset_postdata();
else : ?>
    <!-- No featured projects found -->
<?php endif; ?>