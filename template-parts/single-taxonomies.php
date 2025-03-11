<?php /*
            $categories = get_the_category();
            if (!empty($categories)) {
                echo '<div class="post-categories">';
                foreach ($categories as $category) {
                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" class="category-link">' . esc_html($category->name) . '</a>';
                }
                echo '</div>';
            }
            // Get and display the tags
            $tags = get_the_tags();
            if (!empty($tags)) {
                echo '<div class="post-tags">';
                foreach ($tags as $tag) {
                    echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="tag-link">' . esc_html($tag->name) . '</a>';
                }
                echo '</div>';
            }
            */ ?>

<?php $services_terms = get_the_terms(get_the_ID(), 'service');if (!empty($services_terms) && !is_wp_error($services_terms)) : ?>
<div class="flex flex-wrap gap-4">
    <?php foreach ($services_terms as $term) : ?>
    <?php /* <a class="bg-primary text-accent px-4 py-1 rounded-full hover:shadow-lg transition text-sm"
        href="<?php echo esc_url(get_term_link($term)); ?>"
        class="service-link"><?php echo esc_html($term->name); ?></a> */ ?>
        <span class="bg-primary text-accent px-4 py-1 rounded-full text-sm">
        <?php echo esc_html($term->name); ?>
    </span>
    <?php endforeach; ?>

</div>
<?php endif; ?>