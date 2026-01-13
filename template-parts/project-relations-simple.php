<?php /* $related_projects = get_field( 'related_projects' ); ?>
<?php if ( $related_projects ) : ?>
<?php foreach ( $related_projects as $post ) : ?>
<?php setup_postdata ( $post ); ?>
<div>
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</div>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php endif; */ ?>

<?php
// Step 1: Retrieve the Client ID from the current post
$client_post = get_field('client');

// Check if client field exists and is valid
if (!$client_post || !is_object($client_post)) {
    return; // Exit early if no client is assigned
}

$client_id = $client_post->ID; // Assuming 'client' returns a single post object
$client_title = get_the_title($client_id);
$client_thumb = get_the_post_thumbnail($client_id, 'medium', array('class' => 'client-thumbnail'));

// Step 2: Query for Projects with the same related client
$args = array(
    'post_type' => 'project', // Custom post type 'projects'
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
$item_count = 0;
$rotation = 0;
if ($related_projects->have_posts()) : ?>
<section class="bg-red-500 group">
        <h2 class="mb-1 text-sm"><?php _e('Andere Projekte für: ', BB_TEXT_DOMAIN) ?> <?= $client_title ?></h2>
        <ul class="grid grid-cols-3 gap-1 list-inside">
            <?php while ($related_projects->have_posts()) : $related_projects->the_post(); ?>
            <li class="flex gap-1 p-2 bg-gray-100 rounded-sm">
                <?php if (has_post_thumbnail()) {
                echo get_the_post_thumbnail(get_the_ID(), 'two-columns', array('class' => 'rounded-sm max-w-[70px]'));
                } ?>
                <h3 class="mb-0 text-sm">
                    <?php the_title(); ?>
                </h3>
            </li>
            <?php endwhile; ?>
        </ul>
    <?php wp_reset_postdata(); // Reset the global post object
endif;
?>
</section>