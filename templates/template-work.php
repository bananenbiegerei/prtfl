<?php
/*
Template Name: Work
*/

get_header(); ?>

<?php
$args = array(
    'post_type' => 'projekt',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
);
$projects_query = new WP_Query($args);

// Get all sectors for the filter
$sectors = get_terms(array(
    'taxonomy' => 'sector',
    'hide_empty' => true,
));

// Prepare projects data for Alpine.js
$projects_data = array();
if ($projects_query->have_posts()) :
    while ($projects_query->have_posts()) : $projects_query->the_post();
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_url = $thumbnail_id ? wp_get_attachment_image_src($thumbnail_id, 'four-columns')[0] : '';

        // Get sectors for this project
        $project_sectors = wp_get_post_terms(get_the_ID(), 'sector', array('fields' => 'ids'));

        $projects_data[] = array(
            'id' => get_the_ID(),
            'title' => get_the_title(),
            'permalink' => get_permalink(),
            'thumbnail_url' => $thumbnail_url,
            'has_thumbnail' => has_post_thumbnail(),
            'date' => get_the_date('Y-m-d'),
            'timestamp' => get_post_timestamp(),
            'sectors' => $project_sectors,
        );
    endwhile;
    wp_reset_postdata();
endif;
?>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('projectsData', () => ({
        sortOrder: 'desc',
        selectedSector: '',
        showTitle: false,
        projects: <?php echo wp_json_encode($projects_data); ?>,
        init() {
            window.addEventListener('scroll', () => {
                this.showTitle = window.scrollY > 10;
            });
        },
        get filteredAndSortedProjects() {
            // Filter by sector first
            let filtered = this.projects;
            if (this.selectedSector && this.selectedSector !== '') {
                filtered = this.projects.filter(project =>
                    project.sectors.includes(parseInt(this.selectedSector))
                );
            }

            // Then sort
            return [...filtered].sort((a, b) => {
                if (this.sortOrder === 'desc') {
                    return b.timestamp - a.timestamp;
                }
                return a.timestamp - b.timestamp;
            });
        }
    }))
});
</script>
<div x-data="projectsData" class="">
    <div class="fixed top-0 z-50 flex items-center justify-between h-12 gap-4 transition-all duration-300 left-8 w-footer"
        :class="showTitle ? 'bg-white/80 backdrop-blur' : ''">
        <div class="basis-1/3">
            <p class="text-base leading-none transition-opacity duration-300 text-primary" aria-hidden="true"
                x-show="showTitle" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"><?php the_title(); ?>
            </p>
        </div>
        <div class="basis-2/3">
            <?php include(get_template_directory() . '/template-parts/projects-filter.php'); ?>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-2 mr-2 mt-14 md:gap-4 lg:gap-8 md:grid-cols-8 lg:grid-cols-12">
        <div class="col-span-4 space-y-4 md:col-span-8 lg:col-span-12">
            <?php include(get_template_directory() . '/template-parts/projects-grid.php'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>