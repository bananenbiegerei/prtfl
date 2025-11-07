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
<div class="gap-4 px-4 sm:flex">
    <div>
        <?php if (has_post_thumbnail()) { ?>
        <?php
                echo get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'rounded-lg shadow-abcd group-hover/card:shadow-xl transition w-full h-full object-cover realtive z-10'));
            ?>
        <?php } ?>
    </div>
    <div class="">
        <h2 class="text-4xl text-accent"><?php _e('featured project', BB_TEXT_DOMAIN); ?></h2>
        <a class="before:absolute before:content-[''] before:inset-0 z-10" href="<?php the_permalink();?>">
            <h2 class="text-base sm:text-4xl"><?php the_title(); ?></h2>
        </a>

        <p class="mb-0 text-base text-accent"><?= wp_strip_all_tags($konstellation); ?></p>
        <div class="text-base">
            <?php echo get_the_date('F Y'); ?>
        </div>
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