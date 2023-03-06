<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage EfficientWeb
 */
?>
<!DOCTYPE html>
<html lang="pl-pl" xml:lang="pl-pl">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;


	if(is_front_page() || is_home()){
        echo get_bloginfo('name');
	}else{
		wp_title( '|', true, 'right' );
	}

	// Add the blog name.
	// bloginfo( 'name' );

	// Add the blog description for the home/front page.
	// $site_description = get_bloginfo( 'description', 'display' );
	// if ( $site_description && ( is_home() || is_front_page() ) )
	// 	echo " | $site_description";

	// Add a page number if necessary:

	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<!-- <link rel="shortcut icon" href="<?php //bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon"/>
<link rel="icon" href="<?php //bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon"/> -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M9ZMDCN');</script>
<!-- End Google Tag Manager -->
<!-- FONT
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,800&subset=latin-ext" rel="stylesheet">

<!-- CSS
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/skeleton.css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php
	/* Call jquery for the slider if the page is the home page */
	// if ( $_SERVER["REQUEST_URI"] == '/' ) { 
	// 	echo '<script src="http://code.jquery.com/jquery-latest.js"></script>';
	// } else {
	// 	echo '<script src="http://code.jquery.com/jquery-latest.js"></script>';
	// }
?>


<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>  

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M9ZMDCN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="topbar"></div>
<div id="header" class="container">
	<div class="row">
        <div id="logo" class="quarter column">
            <a href="<?php echo home_url( '/' ); ?>">
                <img alt="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png"/>
            </a>
        </div><!--logo -->
        <nav id="nawigacja" class="threequarters column">
        	<a class="menu-burger"></a>
            <?php /* Our navigation menu. */ ?>
            <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
        </nav><!-- #nawigacja -->
    </div><!-- .row -->
</div><!-- #header -->




