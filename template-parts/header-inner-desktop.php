<header
    class="hidden lg:block fixed top-0 left-0 w-screen z-50 transition ease-in-out duration-300 h-auto py-2 px-4 bg-primary rounded-b-abcd shadow-bb-custom"
    x-data="{ isScrolled: false }" x-init="window.addEventListener('scroll', () => {
            isScrolled = window.scrollY > 10;
        })" :class="{ 'bg-red-500': isScrolled }">
    <div class="flex">
        <div class="flex-1">
            <?php if (!is_front_page()) : ?>
            <?php get_template_part( 'template-parts/logo'); ?>
            <h1 class="mt-10" :class="{ 'hidden': isScrolled }">
                <?php the_title(); ?>
            </h1>
            <?php endif; ?>
        </div>
        <div class="flex items-end flex-col">
            <div class="flex gap-2">
                <?php get_template_part( 'template-parts/cta'); ?>
                <div>
                    <button @click="isScrolled = !isScrolled" class="btn btn-ghost btn-sm -mr-2">
                        menu
                        <span class="text-base">
                            <svg class="hidden" :class="{ '!block': isScrolled }" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 3H14V4H2V3ZM2 12H14V13H2V12ZM2 6H14V7H2V6ZM2 9H14V10H2V9Z" fill="black" />
                            </svg>
                            <svg class="block" :class="{ 'hidden': isScrolled }" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.707 8L12 4.707L11.293 4L8 7.293L4.707 4L4 4.707L7.293 8L4 11.293L4.707 12L8 8.707L11.293 12L12 11.293L8.707 8Z"
                                    fill="black" />
                            </svg>
                        </span>
                    </button>

                </div>
            </div>
            <nav class="mt-4 block" :class="{ 'hidden': isScrolled }">
                <?php wp_nav_menu([
                        'theme_location' => 'top',
                        'container' => false,
                        'items_wrap' => '<ul class="menu right">%3$s</ul>',
                        'link_before' => '<span class="text-lg">',
                        'link_after' => '</span>',
                    ]); ?>
            </nav>
        </div>
    </div>
</header>