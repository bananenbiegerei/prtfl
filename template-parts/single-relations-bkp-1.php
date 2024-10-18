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
$client_title = get_the_title($client_id);
$client_thumb = get_the_post_thumbnail($client_id, 'medium', array('class' => 'client-thumbnail'));

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
$item_count = 0;
$rotation = 0;
if ($related_projects->have_posts()) : ?>
<div class="related-projects" x-data="{ showFolded: true }">
    <h2><?php _e('Andere Projekte für: ', BB_TEXT_DOMAIN) ?> <?= $client_title ?></h2>
    <button class="unfold" @click="showFolded = !showFolded">Toggle</button>
    <ul id="pile-container" class="mt-8 mb-16" :class="showFolded ? 'relative' : 'grid grid-cols-2 gap-2'">
        <?php while ($related_projects->have_posts()) : $related_projects->the_post(); ?>
        <li class="pile-card"
            :class="showFolded ? 'absolute bottom-0 left-0 origin-bottom-left' : 'relative rotate-0 left-auto bottom-auto'"
            :style="showFolded ? 'transform: rotate(' + (<?php
                if ($item_count % 2 == 0) {
                    echo $rotation;
                } else {
                    echo $rotation;
                }
            ?>) + 'deg); z-index: <?= $item_count*-1; ?>;' : 'transform: rotate(0deg); z-index: 0;'">
            <?php get_template_part('template-parts/card-mini'); ?>
        </li>
        <?php
        $rotation += 5;
        $item_count++;
        ?>
        <?php endwhile; ?>
    </ul>
</div>
<?php wp_reset_postdata(); // Reset the global post object
endif;
?>