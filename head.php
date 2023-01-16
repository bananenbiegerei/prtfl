<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>

	<?php
 $site_title = get_bloginfo('name');
 $site_url = network_site_url('/');
 $site_description = get_bloginfo('description');

//echo 'The Network Home URL is: ' . $site_url;
//echo 'The Network Home Name is: ' . $site_title;
//echo 'The Network Home Tagline is: ' . $site_description;
?>

</head>
