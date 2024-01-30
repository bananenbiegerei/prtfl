<?php get_header('clean'); ?>
<div x-data="{ isScrolled: false }">
    <header class="fixed top-0 left-0 bg-black text-primary-100 w-full z-50"
        :class="{ 'bg-gray-800': isScrolled, 'bg-red-200': !isScrolled }">
        header
    </header>
    <div x-init="() => {
    const scrollableDiv = document.getElementById('scrollableDiv');
    scrollableDiv.addEventListener('scroll', () => {
      isScrolled = scrollableDiv.scrollTop > 0;
    });
  }" class="transition-colors duration-300 ease-in-out py-4 h-screen bg-red-500 overflow-auto" id="scrollableDiv">
        <div class="container mx-auto bg-green-500">
            <h1 class="text-7xl font-bold text-primary-100">Scroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggle classScroll to
                toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggle classScroll to
                toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggle classScroll to
                toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggle classScroll to
                toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggle classScroll to
                toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to
                toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggleScroll to toggle class Lorem ipsum
                dolor sit amet consectetur adipisicing elit. Cum est dicta voluptatum nisi ipsa repudiandae deleniti
                impedit porro autem, ullam alias nam quidem libero quod ut nihil voluptates maxime placeat.
                Soluta tenetur, saepe rerum libero nostrum modi, illo voluptatum excepturi inventore explicabo ducimus
                nesciunt iure deserunt pariatur non perferendis, consectetur est facilis amet harum. Eius atque pariatur
                consequuntur ea nemo.
                Nam magni distinctio cupiditate fuga, consequuntur maxime cum eveniet earum velit quis similique facilis
                a pariatur eos, ab nobis. Excepturi et provident distinctio quo quisquam commodi quasi natus eius
                facere.
                Quisquam dolorum eveniet, tenetur doloribus harum necessitatibus ipsa quaerat id explicabo consectetur
                repellat rem assumenda inventore nesciunt, asperiores illum quod laboriosam aperiam, nulla beatae ad
                saepe. Quia consequuntur nisi ut?
                Itaque, asperiores aspernatur nam possimus soluta sunt, vel laudantium earum aliquid quos est fugit
                voluptate quidem facere, sint aut quae deserunt. Eum magnam ex delectus illum fugit quas minus atque.
                Quis quod eum maiores qui molestiae rerum iusto, ex alias at architecto maxime dicta sapiente obcaecati
                placeat, est aspernatur voluptate reiciendis voluptatem consectetur sed. Blanditiis minima ducimus
                itaque similique consequatur?
                Tempore sunt culpa porro? Molestiae, maxime! Asperiores, non voluptatibus iusto a fuga sapiente in quas
                iste. Facere, mollitia quisquam. Culpa illo repellat obcaecati distinctio veniam ducimus perspiciatis
                accusamus porro atque?
                Consectetur vel a sunt nostrum incidunt. Odit expedita corporis tenetur incidunt, cupiditate eveniet
                delectus praesentium tempore, veniam accusantium sunt laboriosam cum consequuntur accusamus fugiat sint
                laudantium, commodi at quibusdam similique?
                Laborum excepturi facilis, sit nisi quas ipsa tenetur repellat quisquam beatae quam consequatur quaerat
                quia deserunt aliquid ad maxime, labore ipsum nobis asperiores esse dolorum odit expedita provident?
                Libero, sint?
                Suscipit quo voluptatibus, dolorem consequuntur mollitia at nulla facere iste tempora sint tempore
                accusantium sunt. Minus ipsam quia voluptate recusandae, asperiores nulla deleniti qui, rem repellendus
                voluptatem nemo, laborum explicabo?</h1>
        </div>
    </div>
</div>
<?php get_footer(); ?>
