<?php if (get_row_layout() == 'template_part'): ?>
<?php
$template_part = get_sub_field('template_part_name');
if ($template_part) {
	$prefix = 'template-parts/';
	$full_template_part = $prefix . $template_part;
	get_template_part($full_template_part);
}
?>
<?php
$template_part_path = 'path/to/template-parts/' . $full_template_part;
get_template_part($template_part_path);
?>
<?php endif; ?>
