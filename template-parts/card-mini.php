<?php
$thumb = ''; // Initialize $thumb to ensure it's defined even if there's no post thumbnail
if (has_post_thumbnail()) {
    // Correctly pass the post ID (or null for the current post) as the first parameter
    $thumb = get_the_post_thumbnail(null, 'medium', array('class' => 'w-full h-full object-cover'));
}
?>
<a class="relative block shadow-xl rounded-xl overflow-hidden" href="<?php the_permalink(); ?>">
    <?= $thumb; ?>
    <div class="absolute bottom-0 w-full h-full left-0 bg-gradient-to-t from-white to-transparent p-2 flex items-end">
        <h3 class="mb-0 text-base">
            <?php the_title(); ?>
        </h3>
    </div>
</a>