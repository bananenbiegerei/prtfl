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
<section  x-data="{ open: false }">
<div class="border rounded-xl border-dotted p-4 pb-20 group">
    <h2 class="text-sm"><?php _e('Andere Projekte für: ', BB_TEXT_DOMAIN) ?> <?= $client_title ?></h2>
    <ul id="pile-container" class="relative z-30 group-hover:cursor-pointer transform scale-100 group-hover:opacity-50 group-hover:scale-90 transition-opacity duration-300 ease-in-out transition-transform duration-300 ease-in-out" x-on:click="open = true">
        <?php while ($related_projects->have_posts()) : $related_projects->the_post(); ?>
        <li class="pile-card absolute bottom-0 left-0 origin-bottom-left"
            style="transform: rotate(<?php echo $rotation; ?>deg); z-index: <?= $item_count * -1; ?>;">
            <?php get_template_part('template-parts/card-mini-without-link'); ?>
        </li>
        <?php
        $rotation += 5;
        $item_count++;
        ?>
        <?php endwhile; ?>
    </ul>
</div>

<?php include(locate_template('template-parts/single-related-modal.php')); ?>
<?php wp_reset_postdata(); // Reset the global post object
endif;
?>
</section>