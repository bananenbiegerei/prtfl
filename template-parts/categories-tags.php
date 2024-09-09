<div class="p-4 flex flex-wrap gap-4 border-t border-b">
    <h2>
        <?php _e('Leistung, Services… etc.', BB_TEXT_DOMAIN); ?>
    </h2>
    <?php
    $categories = get_categories();
    foreach ($categories as $category) {
    	echo '<div class="border border-dashed px-4 py-1 border-black rounded-full">' . $category->name . '</div>';
    }
    ?>
</div>
<div class="p-4 flex flex-wrap gap-4 border-t border-b">
    <h2>
        <?php _e('Leistung, Services… etc.', BB_TEXT_DOMAIN); ?>
    </h2>
    <?php
    $categories = get_categories();
    foreach ($categories as $category) {
    	echo '<div class="border border-dashed px-4 py-1 border-black rounded-full">' . $category->name . '</div>';
    }

    $tags = get_tags();
    foreach ($tags as $tag) {
    	echo '<div class="border border-dashed px-4 py-1 border-black rounded-full">' . $tag->name . '</div>';
    }
    ?>

</div>