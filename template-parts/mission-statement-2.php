<div class="flex gap-4" x-show="open1" x-transition>
    <div class="basis-2/3">
    <p class="text-lg sm:text-xl">
        <?php _e('Please be aware that we produce — figuratively speaking — tailor-made suits. No wobbly H&M stuff. As our name suggests, we consider Accessibility, Beauty, Customization, and the Digital nature of our products. Since the start of our professional work, we have collected data on how long it takes to build a website. It is still surprising to us that it is so labor-intensive. But at least we are realistic.', BB_TEXT_DOMAIN); ?>
    </p>
    <button class="btn btn-ghost btn-secondary" x-on:click="open2 = !open2">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 32 32">
            <path fill="currentColor"
                d="M17.414 16L26 7.414L24.586 6L16 14.586L7.414 6L6 7.414L14.586 16L6 24.586L7.414 26L16 17.414L24.586 26L26 24.586z" />
        </svg>
        <span
            x-text="open2 ? '<?php _e('close 2/3', BB_TEXT_DOMAIN); ?>' : '<?php _e('open 2/3', BB_TEXT_DOMAIN); ?>'"></span>
    </button>
    </div>
</div>