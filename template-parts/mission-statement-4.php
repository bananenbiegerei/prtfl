<div class="flex gap-4" x-show="open3" x-transition>
    <div class="basis-2/3">
        <p class="text-xl">
            <?php _e('Yes, we do a lot of website projects with WordPress. That doesn’t mean we are restricted to that technology! It just means we know it very well, and quite frankly, that is the most frequent reason developers diss other technologies. Also, we want to give the buzzword "network" real meaning. We work as a network because we want to work as freely as possible. No agency lifestyle, no overhead, no being forced to work crazy hours for some kind of boss. Yes, we live with the disadvantage of clients thinking we can’t deliver the work they need because of the stories agencies have told them over the years. We believe our work speaks for itself.', BB_TEXT_DOMAIN); ?>
        </p>
                <button class="btn btn-ghost btn-secondary" x-on:click="open1 = false; open2 = false; open3 = false; $nextTick(() => { document.getElementById('mission-statement').scrollIntoView({ behavior: 'smooth' }); })">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 32 32">
                <path fill="currentColor"
                    d="M17.414 16L26 7.414L24.586 6L16 14.586L7.414 6L6 7.414L14.586 16L6 24.586L7.414 26L16 17.414L24.586 26L26 24.586z" />
            </svg>
            <?php _e('close all', BB_TEXT_DOMAIN); ?>
        </button>
    </div>
</div>