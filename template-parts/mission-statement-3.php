<div class="flex" x-show="open2" x-transition>
    <div class="basis-2/3">
    <p class="text-xl">
        <?php _e('Use us as a partner to help you figure out what you need and how to achieve that. It’s 2024; there are plenty of tools out there that can help you make a website. But that doesn’t mean the website will make sense or help you! These factors are outside the scope of technologies and visual appearance. That’s where we are really effective, with the time and skills to build those concepts.', BB_TEXT_DOMAIN); ?>
    </p>
    <button class="btn btn-ghost btn-secondary" x-on:click="open3 = !open3">
        <svg x-show="open3" x-transition xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
            viewBox="0 0 32 32">
            <path fill="currentColor"
                d="M17.414 16L26 7.414L24.586 6L16 14.586L7.414 6L6 7.414L14.586 16L6 24.586L7.414 26L16 17.414L24.586 26L26 24.586z" />
        </svg>
        <span
            x-text="open3 ? '<?php _e('close 3/3', BB_TEXT_DOMAIN); ?>' : '<?php _e('open 3/3', BB_TEXT_DOMAIN); ?>'"></span>
    </button>
    </div>
</div>