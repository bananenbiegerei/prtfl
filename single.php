<?php get_header(); ?>
<div class="container-fluid">
    <h1><?php the_title(); ?></h1>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
            $images = get_field('desktop_gallery');
            if ($images):
            	foreach ($images as $image): ?>
            <div class="swiper-slide">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <?php endforeach;
            endif;
            ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
<?php get_footer(); ?>
