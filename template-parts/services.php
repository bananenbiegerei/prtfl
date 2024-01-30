<div class="">
    <h2>
        <?php _e('Services', BB_TEXT_DOMAIN); ?>
    </h2>
    <div class="flex gap-4">
        <?php
        $services = get_terms('service');
        if (!empty($services) && !is_wp_error($services)) {
        	foreach ($services as $service) {
        		echo '<div class="border p-2 px-4 border-black rounded-full">' . $service->name . '</div>';
        	}
        }
        ?>
    </div>
</div>