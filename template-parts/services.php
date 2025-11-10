<?php
$services = get_terms('service');
if (!empty($services) && !is_wp_error($services)) {
    foreach ($services as $service) {
        echo '<span class="">' . $service->name . ', </span>';
    }
}
?>