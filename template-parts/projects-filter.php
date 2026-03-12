<div class="items-baseline justify-end gap-8 md:flex">
    <div class="flex-shrink md:text-right">
        <span class="font-mono text-sm">Select:</span>
    </div>

    <!-- Sector Filter Dropdown -->
    <div class="flex-1 mb-2 md:mb-0">
        <div
            x-data="dropdown"
            x-on:keydown.escape.prevent.stop="close($refs.button)"
            x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
            x-id="['dropdown-sector']"
            class="relative"
        >
            <button
                x-ref="button"
                x-on:click="toggle()"
                :aria-expanded="open"
                :aria-controls="$id('dropdown-sector')"
                type="button"
                class="relative flex items-center justify-between w-full gap-2 px-2 py-1 font-mono text-sm bg-white border rounded-lg shadow-sm border-primary whitespace-nowrap hover:bg-neutral-50 hover:border-primary/90 text-primary"
            >
                <span x-text="selectedLabel">All Sectors</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 32 32"><path fill="currentColor" d="M16 22L6 12l1.4-1.4l8.6 8.6l8.6-8.6L26 12z"/></svg>
            </button>

            <div
                x-ref="panel"
                x-show="open"
                x-transition.origin.top.left
                x-on:click.outside="close($refs.button)"
                :id="$id('dropdown-sector')"
                x-cloak
                class="absolute left-0 w-full rounded-lg shadow-sm mt-2 z-10 origin-top-left bg-white p-1.5 outline-none border border-primary"
            >
                <button
                    type="button"
                    @click="selectedSector = ''; close($refs.button)"
                    class="flex items-center w-full px-2 py-1 text-left transition-colors rounded-md hover:bg-neutral-50 focus-visible:bg-neutral-50"
                    :class="{ 'bg-primary text-white': selectedSector === '' }"
                >
                    All Sectors
                </button>
                <?php foreach ($sectors as $sector) : ?>
                <button
                    type="button"
                    @click="selectedSector = '<?php echo esc_attr($sector->term_id); ?>'; close($refs.button)"
                    class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left  hover:bg-primary/90 hover:text-white focus-visible:bg-primary/90"
                    :class="{ 'bg-primary text-white': selectedSector === '<?php echo esc_attr($sector->term_id); ?>' }"
                >
                    <?php echo esc_html($sector->name); ?>
                </button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Sort Order Dropdown -->
    <div class="flex-1">
        <div
            x-data="dropdown"
            x-on:keydown.escape.prevent.stop="close($refs.button)"
            x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
            x-id="['dropdown-sort']"
            class="relative"
        >
            <button
                x-ref="button"
                x-on:click="toggle()"
                :aria-expanded="open"
                :aria-controls="$id('dropdown-sort')"
                type="button"
                class="relative flex items-center justify-between w-full gap-2 px-2 py-1 font-mono text-sm bg-white border rounded-lg shadow-sm border-primary whitespace-nowrap hover:bg-neutral-50 hover:border-primary/90 text-primary"
            >
                <span x-text="sortLabel">Newest First</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 32 32"><path fill="currentColor" d="M16 22L6 12l1.4-1.4l8.6 8.6l8.6-8.6L26 12z"/></svg>
            </button>

            <div
                x-ref="panel"
                x-show="open"
                x-transition.origin.top.left
                x-on:click.outside="close($refs.button)"
                :id="$id('dropdown-sort')"
                x-cloak
                class="absolute left-0 w-full rounded-lg shadow-sm mt-2 z-10 origin-top-left bg-white p-1.5 outline-none border border-primary"
            >
                <button
                    type="button"
                    @click="sortOrder = 'desc'; close($refs.button)"
                    class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left  hover:bg-primary/90 hover:text-white focus-visible:bg-primary/90"
                    :class="{ 'bg-primary text-white': sortOrder === 'desc' }"
                >
                    Newest First
                </button>
                <button
                    type="button"
                    @click="sortOrder = 'asc'; close($refs.button)"
                    class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left  hover:bg-primary/90 hover:text-white focus-visible:bg-primary/90"
                    :class="{ 'bg-primary text-white': sortOrder === 'asc' }"
                >
                    Oldest First
                </button>
            </div>
        </div>
    </div>
</div>
