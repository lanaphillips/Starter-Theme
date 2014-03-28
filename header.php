<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?> ><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 

<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<!-- Meta -->
	<title>
	   <?php
	   		// If is tag/archive
			if ( function_exists('is_tag') && is_tag() ) {
				single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; 
			} elseif ( is_archive() ) {
				wp_title(''); echo ' Archive - '; 
			} elseif ( is_search() ) {
				echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; 
			} elseif ( !( is_404() ) && ( is_single() ) || ( is_page() ) ) {
				wp_title(''); echo ' - '; 
			} elseif ( is_404() ) {
				echo 'Not Found - '; 
			} 

			// If is Page
			if ( is_home() ) {
				bloginfo( 'name' ); echo ' - '; bloginfo('description'); 
			} else {
				bloginfo( 'name' ); 
			} 

			// If is Paged
			if ( $paged > 1 ) {
				echo ' - page '. $paged; 
			}
	   ?>
	</title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/theme.js" type="text/javascript"></script>
	
	<!-- CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />

	<!-- Comments -->
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<!-- WordPress Inserted Stuff Goes Here -->
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
<header id="header" role="banner">
<div class="wrapper">
	
		<div class="logo"><a href="/"><span><?php bloginfo( 'name' ); ?></span></a></div>

		<nav class="navigation" role="navigation">
			<a id="toggle-menu" href="#"><span class=""></span></a>
			<?php wp_nav_menu(array('menu' => 'Main Navigation Menu')); ?>
		</nav>

</div>
</header>

<main id="content" role="main">
<div class="wrapper">
