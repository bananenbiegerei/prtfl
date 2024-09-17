<div class="sm:flex gap-4" x-data="{ openres1: false, res1: false, res2: false, res3: false }">
    <div class="basis-2/3">
        <p class="text-lg sm:text-xl">
            <?php _e("We are a human <span class='hyphens-none inline-block'>network<sup x-on:click='res1 = !res1; res2 = false; res3 = false' :class=\"{ 'bg-white text-black': res1 }\">1</sup></span> of people realizing websites and all kinds of digital products. Reliable, scalable and specialized in their domain. After ten years in the business, we know what we are <span class='hyphens-none inline-block'>doing <sup x-on:click='res2 = !res2; res1 = false; res3 = false' :class=\"{ 'bg-white text-black': res2 }\">2</sup>,</span> and we know what we are not <span class='hyphens-none inline-block'>doing <sup x-on:click='res3 = !res3; res1 = false; res2 = false' :class=\"{ 'bg-white text-black': res3 }\">3</sup>.</span> That’s how we keep enjoying our work while earning our income. Don’t hesitate to contact us; we love working with people.", BB_TEXT_DOMAIN); ?>
        </p>
        <button class="btn btn-ghost btn-secondary" x-on:click="openres1 = !openres1">
            <svg x-show="openres1" x-transition xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                viewBox="0 0 32 32">
                <path fill="currentColor"
                    d="M17.414 16L26 7.414L24.586 6L16 14.586L7.414 6L6 7.414L14.586 16L6 24.586L7.414 26L16 17.414L24.586 26L26 24.586z" />
            </svg>
            <span
                x-text="openres1 ? '<?php _e('close 1/3', BB_TEXT_DOMAIN); ?>' : '<?php _e('open 1/3', BB_TEXT_DOMAIN); ?>'"></span>
        </button>
    </div>
    <div class="basis-1/3 space-y-4">
        <div x-show="res1" x-transition>
            <p class="text-sm">
                <span class="mr-8">1</span>
                <?php _e('We consider to be very lucky working together with close partners and friends. Way longer then most of us managed to stay into employmentship :-)') ?>
                <?php get_template_part( 'template-parts/network-graphic'); ?>
            </p>
        </div>
        <div x-show="res2" x-transition>
            <p class="text-sm pt-4">
                <span class="mr-8">2</span>
                <?php _e('What we do', BB_TEXT_DOMAIN); ?>
            </p>
            <h3 class="text-sm mb-3"><?php _e('take our work seriously', BB_TEXT_DOMAIN); ?></h3>
            <h3 class="text-sm"><?php _e('advice you', BB_TEXT_DOMAIN); ?></h3>
            <p class="text-sm">
                <?php _e('We offer experience and insights to save you time and resources', BB_TEXT_DOMAIN); ?></p>
            <h3 class="text-sm"><?php _e('Trust in Partnerships', BB_TEXT_DOMAIN); ?></h3>
            <p class="text-sm"><?php _e('Strong relationships lead to success. Cheesy but true.', BB_TEXT_DOMAIN); ?>
            </p>
            <h3 class="text-sm"><?php _e('Believe in Your Product', BB_TEXT_DOMAIN); ?></h3>
            <p class="text-sm">
                <?php _e('Invest in what you believe to create something successful for your users', BB_TEXT_DOMAIN); ?>
            </p>
        </div>
        <div x-show="res3" x-transition>
            <p class="text-sm pt-4">
                <span class="mr-8">3</span>
                <?php _e('What we do not do', BB_TEXT_DOMAIN); ?>
            </p>
            <h3 class="text-sm mb-3"><?php _e('take ourselfs too seriously', BB_TEXT_DOMAIN); ?></h3>
            <h3 class="text-sm mb-3"><?php _e('Work for Assholescause we are working with you.', BB_TEXT_DOMAIN); ?>
            </h3>
            <h3 class="text-sm"><?php _e('Work for free', BB_TEXT_DOMAIN); ?></h3>
            <p class="text-sm">
                <?php _e('Value deserves payment. Your investment drives results.', BB_TEXT_DOMAIN); ?>
            </p>
            <h3 class="text-sm"><?php _e('Marketing blablabla', BB_TEXT_DOMAIN); ?></h3>
            <p class="text-sm">
                <?php _e('We prioritize quality over buzzwords. Success follows great products.', BB_TEXT_DOMAIN); ?>
            </p>
        </div>
    </div>
</div>