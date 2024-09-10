<header
    class="fixed top-0 left-0 w-screen z-50 transition ease-in-out duration-300 h-auto p-4 pr-6 bg-primary rounded-b-abcd shadow-bb-custom"
    x-data="{ isScrolled: false }" x-init="(() => {
        const targetElement = document.querySelector('.scroller');
        const updateScrollState = () => {
            isScrolled = window.scrollY > 10 || (targetElement && targetElement.scrollTop > 10);
        };
        window.addEventListener('scroll', updateScrollState);
        if (targetElement) {
            targetElement.addEventListener('scroll', updateScrollState);
        }
    })()" :class="{ 'md:pb-4': isScrolled }">
    <div class="flex-col flex">
        <div class="flex justify-between items-center">
            <?php get_template_part( 'template-parts/logo'); ?>
            <button @click="isScrolled = !isScrolled" class="btn btn-ghost btn-sm -mr-2">
                <span class="hidden md:block">menu</span>
                <span class="text-base">
                    <svg class="hidden w-6 h-6 transition-all duration-300" :class="{ '!block': isScrolled }"
                        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 3H14V4H2V3ZM2 12H14V13H2V12ZM2 6H14V7H2V6ZM2 9H14V10H2V9Z" fill="black" />
                    </svg>
                    <svg class="block w-6 h-6 transition-all duration-300" :class="{ 'hidden': isScrolled }"
                        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.707 8L12 4.707L11.293 4L8 7.293L4.707 4L4 4.707L7.293 8L4 11.293L4.707 12L8 8.707L11.293 12L12 11.293L8.707 8Z"
                            fill="black" />
                    </svg>
                </span>
            </button>
        </div>
        <div class="flex flex-wrap justify-end">
            <div class="block transition-all duration-300" :class="{ 'hidden': isScrolled }">
                <?php get_template_part( 'template-parts/cta'); ?>
            </div>
        </div>

        <div class="flex items-end transition-all duration-300" :class="{ 'hidden': isScrolled }">
            <?php if (!is_front_page()) : ?>
            <h1>
                <?php the_title(); ?>
            </h1>
            <?php else : ?>
            <h1>hello.</h1>
            <?php endif; ?>
            <nav class="mt-4 block flex-1">
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