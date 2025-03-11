<?php
/*
Template Name: Work
*/

get_header(); ?>

<?php
$args = array(
    'post_type' => 'projekt',
    'posts_per_page' => -1,
);
$projects_query = new WP_Query($args); ?>

<div class="container mx-auto py-6">
    <!-- Filter Buttons for Categories -->
    <div class="flex justify-center mb-6">
        <button class="filter-button bg-gray-200 px-4 py-2 m-2" data-filter="*">All</button>
        <?php
        $categories = get_categories(array(
            'taxonomy' => 'category',
            'orderby' => 'name',
            'order' => 'ASC',
            'exclude' => array(1,3),
        ));
        foreach ($categories as $category) {
            echo '<button class="filter-button bg-gray-200 px-4 py-2 m-2" data-filter=".category-' . $category->slug . '">' . $category->name . '</button>';
        }
        ?>
    </div>

    <!-- Filter Buttons for Services -->
    <div class="flex justify-center mb-6">
        <button class="service-filter-button bg-gray-200 px-4 py-2 m-2" data-filter="*">All Services</button>
        <?php
        $services = get_terms(array(
            'taxonomy' => 'service',
            'orderby' => 'name',
            'order' => 'ASC',
        ));
        foreach ($services as $service) {
            echo '<button class="service-filter-button bg-gray-200 px-4 py-2 m-2" data-filter=".service-' . $service->slug . '">' . $service->name . '</button>';
        }
        ?>
    </div>

    <!-- Isotope Grid -->
    <div class="flex flex-col divide-y divide-dashed divide-gray-200 isotope-grid">
        <?php if ($projects_query->have_posts()) :
            while ($projects_query->have_posts()) : $projects_query->the_post();
                $categories = get_the_terms(get_the_ID(), 'category');
                $services = get_the_terms(get_the_ID(), 'service');
                $category_classes = '';
                $service_classes = '';
                if ($categories) {
                    foreach ($categories as $category) {
                        $category_classes .= ' category-' . $category->slug;
                    }
                }
                if ($services) {
                    foreach ($services as $service) {
                        $service_classes .= ' service-' . $service->slug;
                    }
                }
            ?>
            <div class="isotope-item <?= $category_classes . $service_classes; ?>">
                <?php include locate_template('template-parts/card-horizontal.php'); ?>
            </div>
        <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p><?php esc_html_e('No projects found.', 'text-domain'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>

<!-- Include Isotope JS -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Initialize Isotope
    var iso = new Isotope('.isotope-grid', {
        itemSelector: '.isotope-item',
        layoutMode: 'vertical',
        transitionDuration: '0.6s'
    });

    // Store filter for each group
    var filters = {
        category: '*',
        service: '*'
    };

    // Filter items on button click
    var filterButtons = document.querySelectorAll('.filter-button');
    filterButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            filters.category = this.getAttribute('data-filter');
            applyFilters();
        });
    });

    var serviceFilterButtons = document.querySelectorAll('.service-filter-button');
    serviceFilterButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            filters.service = this.getAttribute('data-filter');
            applyFilters();
        });
    });

    function applyFilters() {
        var filterValue = concatValues(filters);
        iso.arrange({ filter: filterValue });
    }

    function concatValues(obj) {
        var value = '';
        for (var prop in obj) {
            value += obj[prop];
        }
        return value;
    }
});
</script>