<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

	<div id="wptime-plugin-preloader"></div>
	<?php do_action( 'foundationpress_after_body' ); ?>
	<?php do_action( 'foundationpress_layout_start' ); ?>


<div id="header" class="fixed transition">
	<header class="row no-max pad main">
		<nav id="mainnav" class="mainnav" role="navigation">
			<div class="home" ><a href="<?php bloginfo('url'); ?>"><img src="http://localhost:88/Skintherapy/wp-content/uploads/2017/02/logo.png" width="300" alt="<?php bloginfo('name'); ?>" id="logo"/></a></div>
			<div id="hamburger">
				<div id="nav-icon3">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<div class="hide animated" id="menu">
				<?php
					$defaults = array(
						'container' => false,
						'theme_location' => 'primary-menu',
						'menu_class' => 'no-bullet menu sticky cap'
					);
					wp_nav_menu($defaults)
				 ?>
			</div>
		</nav>
	</header>
</div>
