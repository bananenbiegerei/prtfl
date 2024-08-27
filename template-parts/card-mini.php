<?php
$thumb = ''; // Initialize $thumb to ensure it's defined even if there's no post thumbnail
if (has_post_thumbnail()) {
    // Correctly pass the post ID (or null for the current post) as the first parameter
    $thumb = get_the_post_thumbnail(null, 'large', array('class' => 'w-full h-full object-cover'));
}
?>
<a class="relative block shadow-bb-custom rounded-xl overflow-hidden group" href="<?php the_permalink(); ?>">
    <?= $thumb; ?>
    <div class="absolute bottom-0 w-full h-full left-0 bg-gradient-to-t from-black/100 to-transparent p-4 flex items-end rounded-xl group-hover:to-primary">
        <h3 class="mb-0 text-lg text-white">
            <?php the_title(); ?>
        </h3>
    </div>
</a>