<?php
/*
Template Name: Work
*/

get_header(); ?>

<?php
$args = array(
    'post_type' => 'project',
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

<?php
$sectors_array = [];
if (!is_wp_error($sectors) && !empty($sectors)) {
    $sectors_array = array_values(array_map(function($sector) {
        return ['id' => $sector->term_id, 'name' => $sector->name];
    }, $sectors));
}
$sectors_json = wp_json_encode($sectors_array);
?>
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('dropdown', () => ({
        open: false,
        toggle() {
            if (this.open) return this.close()
            this.$refs.button.focus()
            this.open = true
        },
        close(focusAfter) {
            if (!this.open) return
            this.open = false
            focusAfter && focusAfter.focus()
        }
    }))

    const sectorsData = <?php echo $sectors_json; ?>;

    Alpine.data('projectsData', () => ({
        sortOrder: 'desc',
        selectedSector: '',
        showTitle: false,
        sectors: sectorsData,
        projects: <?php echo wp_json_encode($projects_data); ?>,
        init() {
            window.addEventListener('scroll', () => {
                this.showTitle = window.scrollY > 10;
            });
        },
        get selectedLabel() {
            if (!this.selectedSector) return 'All Sectors'
            const found = sectorsData.find(s => s.id == this.selectedSector)
            return found ? found.name : 'All Sectors'
        },
        get sortLabel() {
            return this.sortOrder === 'desc' ? 'Newest First' : 'Oldest First'
        },
        get filteredAndSortedProjects() {
            let filtered = this.projects;
            if (this.selectedSector && this.selectedSector !== '') {
                filtered = this.projects.filter(project =>
                    project.sectors.includes(parseInt(this.selectedSector))
                );
            }
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
    <div class="fixed top-0 z-50 items-center justify-between gap-4 py-1 pr-8 transition-all duration-300 lg:flex lg:bottom-auto left-8 w-footer bg-white/80 backdrop-blur">
        <div class="basis-1/3">
            <h1 class="mb-0 leading-none transition-all duration-300 text-primary"
                :class="showTitle ? 'text-base' : 'text-xl lg:text-2xl xl:text-3xl 2xl:text-4xl'"
            ><?php the_title(); ?></h1>
        </div>
        <div class="basis-3/5">
            <?php include(get_template_directory() . '/template-parts/projects-filter.php'); ?>
        </div>
    </div>
    <div class="mt-16 custom-grid">
        <div class="col-span-3 space-y-4 md:col-span-7 lg:col-span-12">
            <?php include(get_template_directory() . '/template-parts/projects-grid.php'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>