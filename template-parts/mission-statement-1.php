<div class="flex gap-4">
    <div class="basis-2/3 space-y-4">
        <p class="text-xl">
        <?php _e("We are a human <sup x-on:click='res1 = !res1' :class=\"{ 'bg-white text-black': res1 }\">1</sup>network of people realizing websites and all kinds of digital products. Solid, reliable, scalable, flexible. After <sup x-on:click='res2 = !res2' :class=\"{ 'bg-white text-black': res2 }\">2</sup>ten years in the business, we know what we are doing, and on top of that, we know what we are not doing. That’s how we keep enjoying our work while earning our income. Don’t hesitate to contact us; we love working with people.", BB_TEXT_DOMAIN); ?>
        </p>
        <button class="btn btn-ghost btn-secondary" x-on:click="open1 = !open1">
            <svg x-show="open1" x-transition xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                viewBox="0 0 32 32">
                <path fill="currentColor"
                    d="M17.414 16L26 7.414L24.586 6L16 14.586L7.414 6L6 7.414L14.586 16L6 24.586L7.414 26L16 17.414L24.586 26L26 24.586z" />
            </svg>
            <span
                x-text="open1 ? '<?php _e('close 1/3', BB_TEXT_DOMAIN); ?>' : '<?php _e('open 1/3', BB_TEXT_DOMAIN); ?>'"></span>
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
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cupiditate quibusdam harum nemo hic, ut
            provident aliquam laudantium possimus molestiae? Ut reprehenderit dolorum enim impedit amet laboriosam
            quasi itaque neque!
            Ducimus minus aspernatur ipsum est quas, commodi nobis adipisci quos cupiditate consequuntur nostrum
            sint praesentium quae ea a! A reiciendis itaque et assumenda molestias sit enim labore ullam, animi ex?
            Sapiente, architecto alias! Sunt eum iusto fugit reprehenderit veniam adipisci vero voluptates provident
            iste doloribus libero quibusdam cum quidem autem suscipit voluptate, maxime nulla fugiat aliquam? Atque
            impedit error quo?
        </p>
        </div>

    </div>
</div>