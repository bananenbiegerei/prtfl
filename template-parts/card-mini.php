<?php
$thumb = ''; // Initialize $thumb to ensure it's defined even if there's no post thumbnail
if (has_post_thumbnail()) {
    // Correctly pass the post ID (or null for the current post) as the first parameter
    $thumb = get_the_post_thumbnail(null, 'large', array('class' => 'rounded-lg'));
}
?>
<div class="relative">
<?= $thumb; ?>
<h3 class="mb-0 text-base text-accent">
    <a class="before:absolute before:content-[''] before:inset-0 z-10" href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
    </a>
</h3>
</div>
    <!-- <div class="absolute bottom-0 w-full h-full left-0 bg-gradient-to-t from-black/100 to-transparent p-2 flex items-end rounded-xl group-hover:to-black/30 transition">

    </div> -->
