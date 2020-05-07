<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset='<?php bloginfo('charset'); ?>'/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('title'); ?></title>
	<meta name='description' content='<?php bloginfo('description'); ?>'/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

	<?php wp_head(); ?>

</head>
<body>

	<header>

		<div id="logo">
			<?php if ( function_exists( 'the_custom_logo' ) ) {
 			the_custom_logo();
 			} ?>
		</div>

		<div class="btn"></div>

		<nav>

			<?php if ( has_nav_menu('header-menu') ) : ?>
			<?php
			wp_nav_menu( array( 
			'theme_location' => 'header-menu',
			'menu_class' => 'ul',
			) ); ?>
			<?php endif; ?>
			
		</nav>


	</header>