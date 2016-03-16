<?php
/**
 * The Header for the theme: displays all of the <head> section and everything up till <div class="page-content">.
*/
?>

<!DOCTYPE html <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>
        <?php
            global $page, $paged;
            wp_title( '|', true, 'right' );
            bloginfo( 'name' );
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) )
                echo " | $site_description";
            if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf( __( 'Page %s', 'blanktheme' ), max( $paged, $page ) );
        ?>
    </title>
    
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	
	<meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>Hyde Park Paddington" />
    <meta name="type" property="og:type" content="Website" />
	<meta property="og:url" content="http://hydeparkpaddington.org" />
    <meta name="image" property="og:image" content="<?php bloginfo('template_url'); ?>/img/fbog.jpg" /> 
    <meta name="site_name" property="og:site_name" content="Hyde Park Paddington" />
	<meta name="description" property="og:description" content="" />
    
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-57x57-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-72x72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-114x114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-144x144-precomposed.png" />
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!--[if gte IE 9]>
		  <style type="text/css">
				.gradient {
				  	filter: none;
				}
		  </style>
	<![endif]-->
    
    <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
    
	<?php wp_head(); ?>
    
</head>

<body <?php body_class('no-js'); ?>>
	
    <!--[if lt IE 7]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p><![endif]--> 

	<nav id="navigation" class="">
		<ul>
			<li class="link-home"><a href="<?php echo home_url(); ?>" title="Home">Home</a></li>
			<li class="link-vision"><a href="<?php echo get_permalink(5); ?>" title="Vision">Vision</a></li>
			<li class="link-map"><a href="<?php echo get_permalink(7); ?>" title="Map">Map</a></li>
			<li class="link-joinus"><a href="<?php echo get_permalink(10); ?>" title="Join Us">Join Us</a></li>
			<li class="link-latest"><a href="<?php echo get_post_type_archive_link('news'); ?>" title="Latest">Latest</a></li>
			<li class="link-contact"><a href="<?php echo get_permalink(14); ?>" title="Contact">Contact</a></li>
			<li class="link-downloads"><a href="<?php echo get_permalink(16); ?>" title="Downloads">Downloads</a></li>
		</ul>
	</nav>
	
	<header id="header">
		
		<div class="col-xs-6 logo text-left">
			<a href="<?php echo home_url(); ?>" title="Hyde Park and Paddington Neighbourhood Forum">
				<img src="<?php bloginfo('template_url'); ?>/img/logo-hydeparkpaddington.png" alt="Hyde Park and Paddington Neighbourhood Forum" />
			</a>
		</div>
		
		<div class="col-xs-6 menu-button text-right">
			<a href="" class="hamburger-button">
				<span class="hidden-xxs">Menu</span>
				<!--<img src="<?php bloginfo('template_url'); ?>/img/hamburger-open.png" alt="Open Menu">-->
				<div id="nav-icon">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</a>
		</div>
	</header>
	
	<div id="page-wrapper">
		
		<!-- Header -->
		<header id="header-colour"></header>
		<div id="header-gap"></div>