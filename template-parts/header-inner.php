<header class="fixed bg-primary-100 top-0 left-0 w-screen z-50 transition ease-in-out duration-300"
    :class="{ '-translate-y-full': isScrolled, 'translate-y-0': !isScrolled }">
    <div class="lg:flex gap-6 lg:gap-12 p-3 pb-0">
        <div class="flex-none">
            <h1 class="text-base md:text-xl lg:text-2xl font-logotype mb-0">
                <a class="transform hover:animate-wiggle" href="<?php echo home_url(); ?>">
                    <?php echo get_bloginfo('name'); ?>
                </a>
            </h1>
            <p class="mb-0">
                <i><?php echo get_bloginfo('description'); ?></i>
            </p>
        </div>
        <div class="flex-1">
            <div class="text-base border-b py-4 flex gap-4 items-center lg:justify-end">
                <a class="flex gap-2 group/submenu" href="https://codingcircle.net/" rel="me">
                    <div class="h-6 w-6 border border-black border-2 rounded-full group-hover/submenu:bg-black">
                    </div>
                    member of coding circle
                </a>
                <a href="mailto:hallo@bananenbiegerei.de">
                    <svg class="h-6 w-6 hover:bg-white hover:scale-0.5" xmlns="http://www.w3.org/2000/svg" width="32"
                        height="32" viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="M28 6H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2Zm-2.2 2L16 14.78L6.2 8ZM4 24V8.91l11.43 7.91a1 1 0 0 0 1.14 0L28 8.91V24Z" />
                    </svg>
                </a>
                <a href="">
                    <svg class="h-6 w-6 hover:bg-white hover:scale-0.5" xmlns="http://www.w3.org/2000/svg" width="32"
                        height="32" viewBox="0 0 32 32">
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
            <nav class="py-4">
                <ul class="menu horizontal lg:justify-end">
                    <li><a href="" class="btn w-full">Work</a></li>
                    <li><a href="" class="btn w-full">About</a></li>
                    <li><a href="" class="btn w-full">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div
        class="absolute -bottom-8 md:-bottom-10 bg-primary-100 w-full bg-primary-100 rounded-b-xl shadow-xl flex justify-center items-center border-t">
        <button class="h-8 md:h-10 px-1 z-40 transition ease-in-out duration-300" @click="isScrolled = !isScrolled">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                <circle cx="8" cy="16" r="2" fill="currentColor" />
                <circle cx="16" cy="16" r="2" fill="currentColor" />
                <circle cx="24" cy="16" r="2" fill="currentColor" />
            </svg> -->
            <svg class="w-6 md:w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path fill="currentColor" d="M4 6h24v2H4zm0 18h24v2H4zm0-12h24v2H4zm0 6h24v2H4z" />
            </svg>
        </button>
    </div>
</header>