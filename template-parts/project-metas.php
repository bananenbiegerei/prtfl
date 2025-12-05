<div class="text-base text-primary">
    <?php if ($arbeitskonstellation) : ?>
    <div class="mb-4">
        <strong class="block"><?php _e('Collaboration:', BB_TEXT_DOMAIN) ?></strong>
        <?php echo ($arbeitskonstellation); ?>
    </div>
    <?php endif; ?>

    <?php if ($client) : ?>
    <div class="mb-4">
        <strong class="block">Client:</strong>
        <?php
        $post = $client;
        setup_postdata($post);
        the_title();
        wp_reset_postdata();
        ?>
    </div>
    <?php endif; ?>

    <?php if ($services) : ?>
    <div class="mb-4">
        <strong class="block">Services:</strong>
        <?php echo esc_html($services); ?>
    </div>
    <?php endif; ?>

    <?php if ($technologies) : ?>
    <div class="mb-4">
        <strong class="block">Technologies:</strong>
        <?php echo esc_html($technologies); ?>
    </div>
    <?php endif; ?>

    <?php if ($link_to_website) : ?>
    <div class="mb-4">
        <a href="<?php echo esc_url($link_to_website); ?>" target="_blank"
            class="inline-flex items-center gap-1 text-primary hover:text-primary-700">
            <strong>Visit Website</strong>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 32 32">
                <path fill="currentColor" d="M10 6v2h12.59L6 24.59L7.41 26L24 9.41V22h2V6z" />
            </svg>
        </a>
    </div>
    <?php endif; ?>
</div>