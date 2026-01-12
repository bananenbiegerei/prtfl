<div class="items-baseline justify-end gap-8 md:flex">
    <div class="flex-shrink md:text-right">
        <span class="font-mono text-sm">Select:</span>
    </div>
    <div class="flex-1 mb-4 md:mb-0">
        <label for="sector-filter" class="sr-only">Filter by sector:</label>
        <select id="sector-filter" x-model="selectedSector" class="">
            <option value="">All Sectors</option>
            <?php foreach ($sectors as $sector) : ?>
            <option value="<?php echo esc_attr($sector->term_id); ?>">
                <?php echo esc_html($sector->name); ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="flex-1">
        <label class="sr-only" for="sort-order">Sort by date:</label>
        <select id="sort-order" x-model="sortOrder" class="">
            <option value="desc">Newest First</option>
            <option value="asc">Oldest First</option>
        </select>
    </div>
</div>
