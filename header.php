<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="header" role="banner">
				<h1 class="logo"><a href="<?php echo home_url(); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<div class="tagline"><?php the_field( "tagline", 2 ); ?></div>
				<a href="#visit" class="btn btn-large">Visit the lab</a>
		</header>
		<main role="main" class="container">