<div class="items-baseline justify-end gap-8 md:flex">
    <div class="flex-shrink md:text-right">
        <span class="font-mono text-sm">Select:</span>
    </div>

    <!-- Sector Filter Dropdown -->
    <div class="flex-1 mb-4 md:mb-0">
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
                class="relative flex items-center justify-between w-full gap-2 px-2 py-1 text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm whitespace-nowrap hover:bg-gray-50 hover:border-gray-200"
            >
                <span x-text="selectedLabel">All Sectors</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
            </button>

            <div
                x-ref="panel"
                x-show="open"
                x-transition.origin.top.left
                x-on:click.outside="close($refs.button)"
                :id="$id('dropdown-sector')"
                x-cloak
                class="absolute left-0 w-full rounded-lg shadow-sm mt-2 z-10 origin-top-left bg-white p-1.5 outline-none border border-gray-200"
            >
                <button
                    type="button"
                    @click="selectedSector = ''; close($refs.button)"
                    class="flex items-center w-full px-2 py-1 text-left text-gray-800 transition-colors rounded-md hover:bg-gray-50 focus-visible:bg-gray-50"
                    :class="{ 'bg-gray-100': selectedSector === '' }"
                >
                    All Sectors
                </button>
                <?php foreach ($sectors as $sector) : ?>
                <button
                    type="button"
                    @click="selectedSector = '<?php echo esc_attr($sector->term_id); ?>'; close($refs.button)"
                    class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left text-gray-800 hover:bg-gray-50 focus-visible:bg-gray-50"
                    :class="{ 'bg-gray-100': selectedSector === '<?php echo esc_attr($sector->term_id); ?>' }"
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
                class="relative flex items-center justify-between w-full gap-2 px-4 py-2 text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm whitespace-nowrap hover:bg-gray-50 hover:border-gray-200"
            >
                <span x-text="sortLabel">Newest First</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
            </button>

            <div
                x-ref="panel"
                x-show="open"
                x-transition.origin.top.left
                x-on:click.outside="close($refs.button)"
                :id="$id('dropdown-sort')"
                x-cloak
                class="absolute left-0 w-full rounded-lg shadow-sm mt-2 z-10 origin-top-left bg-white p-1.5 outline-none border border-gray-200"
            >
                <button
                    type="button"
                    @click="sortOrder = 'desc'; close($refs.button)"
                    class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left text-gray-800 hover:bg-gray-50 focus-visible:bg-gray-50"
                    :class="{ 'bg-gray-100': sortOrder === 'desc' }"
                >
                    Newest First
                </button>
                <button
                    type="button"
                    @click="sortOrder = 'asc'; close($refs.button)"
                    class="px-2 lg:py-1.5 py-2 w-full flex items-center rounded-md transition-colors text-left text-gray-800 hover:bg-gray-50 focus-visible:bg-gray-50"
                    :class="{ 'bg-gray-100': sortOrder === 'asc' }"
                >
                    Oldest First
                </button>
            </div>
        </div>
    </div>
</div>
