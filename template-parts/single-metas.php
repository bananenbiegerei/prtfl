<?php if ( get_field('konstellation') ) : ?>
                <div class="text-base">
                <?php echo get_field('konstellation'); ?>
                </div>
            <?php endif; ?>
            <?php if ( get_field('link_to_website') ) : ?>
            <a href="<?php echo get_field('link_to_website'); ?>" target="_blank" class="btn btn-outline"><?php _e('Website', BB_TEXT_DOMAIN); ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 32 32"><path fill="currentColor" d="M10 6v2h12.59L6 24.59L7.41 26L24 9.41V22h2V6z"/></svg></a>
            <?php endif; ?>