<?php if ( get_row_layout() == 'image' ) : ?>
<?php 
$image = get_sub_field('image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $image ) {
	echo wp_get_attachment_image( $image, $size, "", ["class" => "w-full h-auto"] );
} ?>
<?php endif; ?>