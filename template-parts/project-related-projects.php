<?php
    // Get the current project's client (returns a post object)
    $current_client = get_field('client');

    if ($current_client) :
        // Get the client post ID
        $client_id = is_object($current_client) ? $current_client->ID : $current_client;

        // Query for other projects with the same client
        $args = array(
            'post_type' => 'project',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'post__not_in' => array(get_the_ID()), // Exclude current project
            'meta_query' => array(
                array(
                    'key' => 'client',
                    'value' => $client_id,
                    'compare' => '='
                )
            )
        );

        $related_query = new WP_Query($args);

        if ($related_query->have_posts()) : ?>
<h2 class="max-w-lg lg:text-base">More projects from: <?php echo esc_html(get_the_title($client_id)); ?>
</h2>
<ul class="grid grid-cols-2 gap-4 lg:gap-8 lg:grid-cols-4 text-primary">
    <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
        <?php get_template_part('template-parts/card'); ?>
    <?php endwhile; ?>
</ul>
<?php  wp_reset_postdata(); endif; endif; ?>