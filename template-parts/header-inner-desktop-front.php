<header class="hidden lg:block fixed top-0 left-0 w-screen z-50 transition ease-in-out duration-300 h-auto py-2 px-4"
    :class="{ '-translate-y-full': isScrolled, 'translate-y-0': !isScrolled }">
    <div class="flex">
    <div class="flex-1">
    <h1 class="text-lg">
        abcd<span class="font-logotype">.works</span>
    </h1>
    </div>
    <div class="flex items-end flex-col">
        <div class="flex gap-2">
        <div class="text-base flex">
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
                <!-- <div class="flex bg-black text-primary-100 rounded-xl px-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <path fill="currentColor"
                                d="M25 12h-5v2h5a1 1 0 0 1 1 1v2h-4a3.003 3.003 0 0 0-3 3v1a3.003 3.003 0 0 0 3 3h6v-9a3.003 3.003 0 0 0-3-3zm-3 10a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h4v3zm-6 2h2L12 7h-2L4 24h2l1.694-5h6.613zm-7.629-7l2.497-7.371h.266L13.63 17z" />
                        </svg>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <path fill="currentColor" d="M17 15V8h-2v7H8v2h7v7h2v-7h7v-2z" />
                            </svg>
                        </button>
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 12h14" />
                            </svg>
                        </button>
                    </div> -->
            </div>
            <div class="flex items-baseline gap-1">
                <span>
                member of
                </span>
            <a class="underline" href="https://codingcircle.net/" rel="me">
                 coding circle
            </a>
            </div>
        </div>
            <nav>
                <?php wp_nav_menu([
                	'theme_location' => 'top',
                	'container' => false,
                	'items_wrap' => '<ul class="menu horizontal">%3$s</ul>',
                	'link_before' => '<span class="text-lg">',
                	'link_after' => '</span>',
                ]); ?>
            </nav>

    </div>
    </div>
</header>