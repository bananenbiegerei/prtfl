<?php
get_header();

$args = [
	'post_type' => 'projekt',
	'posts_per_page' => -1,
];

$query = new WP_Query($args);

if ($query->have_posts()): ?>
<div class="px-3">
    <div class="btn-group mb-6">
        <?php
        $exclude_slugs = ['allgemein', 'featured'];
        $exclude_ids = array_map(function ($slug) {
        	$category = get_category_by_slug($slug);
        	return $category ? $category->term_id : null;
        }, $exclude_slugs);

        $categories = get_categories(['exclude' => $exclude_ids]);

        foreach ($categories as $category): ?>
        <a class="btn btn-xs" href="<?php echo get_term_link($category); ?>">
            <?php echo $category->name; ?>
        </a>
        <?php endforeach;
        ?>
    </div>
    <div class="btn-group">
        <?php
        $services = get_terms([
        	'taxonomy' => 'service',
        	'hide_empty' => true,
        ]);

        foreach ($services as $service): ?>
        <a class="btn btn-xs" href="<?php echo get_term_link($service); ?>">
            <?php echo $service->name; ?>
        </a>
        <?php endforeach;
        ?>
    </div>
    <hr class="mb-6">
    <div class="grid grid-cols-6 gap-12">
        <?php while ($query->have_posts()):
        	$query->the_post();
        	get_template_part('template-parts/card');
        endwhile; ?>
    </div>
</div>
<?php endif;

wp_reset_postdata();

get_footer();
?>