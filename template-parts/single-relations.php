<?php $related_projects = get_field( 'related_projects' ); ?>
<?php if ( $related_projects ) : ?>
<?php foreach ( $related_projects as $post ) : ?>
<?php setup_postdata ( $post ); ?>
<div>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php
// Step 1: Retrieve the Client ID from the current post
$client_post = get_field('client');
$client_id = $client_post->ID; // Assuming 'client' returns a single post object
// Assuming $client_id is the ID of the client post
$client_title = get_the_title($client_id);

// Step 2: Query for Projects with the same related client
$args = array(
    'post_type' => 'projekt', // Custom post type 'projects'
    'posts_per_page' => -1, // Retrieve all matching projects
    'post__not_in' => array(get_the_ID()), // Exclude the current post
    'meta_query' => array(
        array(
            'key' => 'client', // The ACF field key that relates projects to clients
            'value' => $client_id, // The ID of the client, wrapped in quotes for exact match
            'compare' => '=' // Use LIKE to match the exact client ID within serialized data
        )
    )
);

$related_projects = new WP_Query($args);

if ($related_projects->have_posts()) : ?>
    <div class="related-projects">
        <h2><?php _e('Andere Projekte für: ', BB_TEXT_DOMAIN) ?> <?= $client_title ?></h2>
        <ul>
            <?php while ($related_projects->have_posts()) : $related_projects->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <?php wp_reset_postdata(); // Reset the global post object
endif;
?>