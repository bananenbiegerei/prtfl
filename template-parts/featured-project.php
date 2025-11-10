<?php
$args = array(
    'post_type'      => 'projekt',
    'posts_per_page' => 1,
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
if ($latest_project_query->have_posts()) :
    while ($latest_project_query->have_posts()) : $latest_project_query->the_post();
    $konstellation = get_post_meta(get_the_ID(), 'konstellation', true);
?>
    <?php if (has_post_thumbnail()) { ?>
        <?php
        echo get_the_post_thumbnail(get_the_ID(), 'two-columns', array('class' => 'rounded-lg shadow-abcd inline h-16 w-auto'));
        ?>
    <?php } ?>
    <a class="link" href="<?php the_permalink();?>"><h3 class="inline"><?php the_title(); ?></h3></a>
        <?php if($konstellation): ?>
        <p class="inline"> / <?= wp_strip_all_tags($konstellation); ?>, </p>
        <?php endif; ?>
        <span><?php echo get_the_date('F Y'); ?>
        </span>
<?php
    endwhile;
    wp_reset_postdata();
else :
    ?>
<?php
endif;
?>