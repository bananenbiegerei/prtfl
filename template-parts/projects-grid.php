<ul class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
    <template x-for="project in filteredAndSortedProjects" :key="project.id">
        <li class="relative">
            <article class="relative flex flex-col items-start gap-4 leading-none group text-primary">
                <template x-if="project.has_thumbnail">
                    <img :src="project.thumbnail_url" :alt="project.title"
                        class="transition-transform border rounded shadow-md md:rounded-lg group-hover:scale-105 w-full h-auto">
                </template>
                <h3 class="text-base md:text-lg">
                    <a class="transition-colors link group-hover:text-primary-700 before:absolute before:inset-0 before:z-10"
                       :href="project.permalink"
                       :aria-label="project.title"
                       x-text="project.title"></a>
                </h3>
            </article>
        </li>
    </template>
</ul>
