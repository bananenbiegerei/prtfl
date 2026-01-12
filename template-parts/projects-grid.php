<ul class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6">
    <template x-for="project in filteredAndSortedProjects" :key="project.id">
        <li>
            <article class="relative flex flex-col items-start gap-4 leading-none group text-primary">
                <template x-if="project.has_thumbnail">
                    <img :src="project.thumbnail_url" :alt="project.title"
                        class="transition-transform border rounded shadow-md md:rounded-lg group-hover:scale-105">
                </template>
                <a class="before:absolute before:inset-0 before:z-10" :href="project.permalink"
                    :aria-label="project.title">
                    <h3 class="inline text-base transition-colors leading-thight group-hover:text-primary-700 link"
                        x-text="project.title"></h3>
                </a>
            </article>
        </li>
    </template>
</ul>
