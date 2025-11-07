<div class="bg-white rounded-lg p-24" x-data="{ open1: false, open2: false, open3: false, res1: false }">
    <div class="flex gap-4">
        <div class="basis-2/3">
            <div>
                <p class="mb-0">
                    <?php _e('We are a <sup x-on:click="res1 = !res1">1</sup>human network of people realizing websites and all kinds of digital products. Solid, reliable, scalable, flexible. After ten years in the business, we know what we are doing, and on top of that, we know what we are not doing. That’s how we keep enjoying our work while earning our income. Don’t hesitate to contact us; we love working with people.', BB_TEXT_DOMAIN); ?>
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
            <div x-show="open1" x-transition>
                <p class="mb-0">
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
            <div x-show="open2" x-transition>
                <p class="mb-0">
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
            <div x-show="open3" x-transition>
                <p class="mb-0">
                    <?php _e('Yes, we do a lot of website projects with WordPress. That doesn’t mean we are restricted to that technology! It just means we know it very well, and quite frankly, that is the most frequent reason developers diss other technologies. Also, we want to give the buzzword "network" real meaning. We work as a network because we want to work as freely as possible. No agency lifestyle, no overhead, no being forced to work crazy hours for some kind of boss. Yes, we live with the disadvantage of clients thinking we can’t deliver the work they need because of the stories agencies have told them over the years. We believe our work speaks for itself.', BB_TEXT_DOMAIN); ?>
                </p>
                <button class="btn btn-ghost btn-secondary" x-on:click="open1 = false; open2 = false; open3 = false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="M17.414 16L26 7.414L24.586 6L16 14.586L7.414 6L6 7.414L14.586 16L6 24.586L7.414 26L16 17.414L24.586 26L26 24.586z" />
                    </svg>
                    <?php _e('close all', BB_TEXT_DOMAIN); ?>
                </button>
            </div>
        </div>
        <div class="basis-1/3">
            <p class="text-xs"  x-show="res1" x-transition>
                <span class="mr-8">1</span>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cupiditate quibusdam harum nemo hic, ut provident aliquam laudantium possimus molestiae? Ut reprehenderit dolorum enim impedit amet laboriosam quasi itaque neque!
                Ducimus minus aspernatur ipsum est quas, commodi nobis adipisci quos cupiditate consequuntur nostrum sint praesentium quae ea a! A reiciendis itaque et assumenda molestias sit enim labore ullam, animi ex?
                Sapiente, architecto alias! Sunt eum iusto fugit reprehenderit veniam adipisci vero voluptates provident iste doloribus libero quibusdam cum quidem autem suscipit voluptate, maxime nulla fugiat aliquam? Atque impedit error quo?
            </p>
        </div>
    </div>
</div>