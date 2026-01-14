<?php
$args = array(
    'post_type'      => 'project',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'meta_query'     => array(
        array(
            'key'     => 'featured_project',
            'value'   => '1',
            'compare' => '=='
        ),
    ),
);
$latest_project_query = new WP_Query($args);
if ($latest_project_query->have_posts()) : ?>
<div class="-mr-8 featured-projects-mobile">
    <h2 class="inline text-primary">featured projects:</h2>
    <div class="swiper featured-projects-swiper">
        <ul class="swiper-wrapper">
            <?php while ($latest_project_query->have_posts()) : $latest_project_query->the_post(); ?>
            <div class="swiper-slide">
                <?php include locate_template('template-parts/card.php'); ?>
            </div>
            <?php endwhile; ?>
        </ul>
    </div>
    <div>
        <a class="inline-flex items-center px-2 transition border rounded-full text-primary border-primary hover:bg-primary/10" href="<?php echo esc_url(get_permalink(1879)); ?>">all projects
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-1 w-[0.75em] h-auto border border-primary rounded-full" viewBox="0 0 32 32"><path fill="currentColor" d="m18 6l-1.43 1.393L24.15 15H4v2h20.15l-7.58 7.573L18 26l10-10z"/></svg>
        </a>
    </div>
</div>
<?php
    wp_reset_postdata();
else : ?>
    <!-- No featured projects found -->
<?php endif; ?>
