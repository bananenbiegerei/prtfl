<header
    class="block lg:hidden fixed bg-primary-100 top-0 left-0 w-screen z-50 transition ease-in-out duration-300 bg-red-500 p-2 py-4 max-h-screen"
    x-data="{ open: false }">
    <div class="flex justify-between">
        <div>
            <a class="block" href="<?= esc_url(home_url('/')) ?>">
                <img class="h-6 w-auto"
                    src="<?= esc_url(get_stylesheet_directory_uri() . '/img/bananenbiegerei-logo.svg') ?>"
                    alt="Logo der Bananenbiegerei">
            </a>
            <p class="mb-0 sr-only">
                <i><?php echo get_bloginfo('description'); ?></i>
            </p>
        </div>
        <div>
            <button class="btn btn-ghost" @click="open = !open">
                Menu
            </button>
        </div>
    </div>

    <div class="bg-yellow-200" x-show="open" x-transition>
        <div class="flex items-center gap-4">
            <nav>
                <?php wp_nav_menu([
                	'theme_location' => 'top',
                	'container' => false,
                	'items_wrap' => '<ul class="menu horizontal lg:justify-end">%3$s</ul>',
                	'link_before' => '<span class="btn btn-ghost btn-sm">',
                	'link_after' => '</span>',
                ]); ?>
            </nav>
            <div class="text-base flex items-center lg:justify-end">
                <a class="btn btn-ghost btn-sm" href="mailto:hallo@bananenbiegerei.de">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="M16 2A11.013 11.013 0 0 0 5 13a10.889 10.889 0 0 0 2.216 6.6s.3.395.349.452L16 30l8.439-9.953c.044-.053.345-.447.345-.447l.001-.003A10.885 10.885 0 0 0 27 13A11.013 11.013 0 0 0 16 2m0 15a4 4 0 1 1 4-4a4.005 4.005 0 0 1-4 4" />
                        <circle cx="16" cy="13" r="4" fill="none" />
                    </svg>
                </a>
                <a class="btn btn-ghost btn-sm" href="mailto:hallo@bananenbiegerei.de">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="M28 6H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2Zm-2.2 2L16 14.78L6.2 8ZM4 24V8.91l11.43 7.91a1 1 0 0 0 1.14 0L28 8.91V24Z" />
                    </svg>
                </a>
                <a class="btn btn-ghost btn-sm" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="m20.33 21.48l2.24-2.24a2.19 2.19 0 0 1 2.34-.48l2.73 1.09a2.18 2.18 0 0 1 1.36 2v5A2.17 2.17 0 0 1 26.72 29C7.59 27.81 3.73 11.61 3 5.41A2.17 2.17 0 0 1 5.17 3H10a2.16 2.16 0 0 1 2 1.36l1.09 2.73a2.16 2.16 0 0 1-.47 2.34l-2.24 2.24s1.29 8.73 9.95 9.81Z" />
                    </svg>
                </a>
            </div>
        </div>
        <div>
            <a class="flex gap-2 group/submenu" href="https://codingcircle.net/" rel="me">
                <div class="h-6 w-6 border border-black border-2 rounded-full group-hover/submenu:bg-black">
                </div>
                member of coding circle
            </a>
        </div>
    </div>
</header>