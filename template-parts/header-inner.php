<header
    class="fixed top-0 w-full z-50 transition-all duration-300 overflow-hidden flex bg-transparent h-mobile-header sm:h-desktop-header text-accent"
    :class="{ '!h-mobile-header-collapsed sm:!h-desktop-header-collapsed': isScrolled }">
    <?php // get_template_part( 'template-parts/wing'); ?>
    <div class="flex-1 flex flex-wrap py-2 px-4 sm:p-3 pr-6 bg-primary rounded-b-lg mx-1">
        <div class="basis-full">
            <div class="flex justify-between items-center">
                <?php get_template_part( 'template-parts/logo'); ?>
                <button @click="isScrolled = !isScrolled" class="btn btn-ghost btn-sm -mr-2">
                    <span class="hidden sm:block">menu</span>
                    <span class="text-base">
                        <svg class="hidden w-6 h-6 transition-all duration-300" :class="{ '!block': isScrolled }"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 3H14V4H2V3ZM2 12H14V13H2V12ZM2 6H14V7H2V6ZM2 9H14V10H2V9Z" fill="currentColor" />
                        </svg>
                        <svg class="block w-6 h-6 transition-all duration-300" :class="{ 'hidden': isScrolled }"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.707 8L12 4.707L11.293 4L8 7.293L4.707 4L4 4.707L7.293 8L4 11.293L4.707 12L8 8.707L11.293 12L12 11.293L8.707 8Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                </button>
            </div>
            <div class="sm:flex flex-wrap justify-end items-center transition-all duration-300 opacity-100 transition-all duration-300" :class="{ '!opacity-0': isScrolled }">
                <?php get_template_part( 'template-parts/cta'); ?>
            </div>
        </div>
        <div class="basis-full sm:flex items-end opacity-100 transition-all duration-300" :class="{ '!opacity-0': isScrolled }">
            <?php get_template_part( 'template-parts/nav'); ?>
        </div>
    </div>
    <div class="transform scale-x-[-1]">
        <?php // get_template_part( 'template-parts/wing'); ?>
    </div>
</header>