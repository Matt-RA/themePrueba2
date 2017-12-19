<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<!--Dentro de head hemos usado bloginfo( 'charset' );
para que seleccione la codificación predeterminada de nuestra instalación de WordPress. -->
	<meta charset=	<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?>wea</title>

	<!-- Definir viewport para dispositivos web móviles -->
	<meta name="viewport" content="width=device-width, minimum-scale=1">

	<!-- con get_stylesheet_directory_uri() se obtiene la direccion del directorio del tema  (theme) -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>

</head>
<body>
	<div class="wrapper">
		<header>
			<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
			<hr>
			<?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
		</header>
