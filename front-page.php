<?php get_header('front'); ?>
<div class="p-4 text-5xl leading-none lowercase">
    <h1 class="inline" data-opacity-trigger data-opacity-highlight><?php the_title(); ?> of: <span class="">abcd<span class="font-logotype">.works</span></h1> – <span class="ticker" data-opacity-trigger data-opacity-highlight>studio
        for digital products. accessible, beautiful, custom, digital<span class="font-logotype">.work</span></span>
    <span class="px-2 italic border border-black rounded-full">featured projects</span>
    <span><?php get_template_part('template-parts/featured-projects'); ?></span>
    <span class="inline">
        <a class="inline-flex items-center gap-2 link" href="">
            <span>see all projects</span>
            <span class="flex items-center justify-center w-16 h-16 border rounded-full">
                <iconify-icon icon="carbon:arrow-right"></iconify-icon>
            </span>
        </a>
    </span>
    <span class="">contact: <a class="link" href="">+49 (0) 151 41 92 42 65</a>, <a class="link"
            href="mailto:mail@abcd.works">m@abcd.works</a></span>
    <a href="" class="">Richardstraße 79, 12043 Berlin</a>
    <span class="">
        <h3 class="inline">services: </h3>
    </span>
</div>
<?php get_footer(); ?>