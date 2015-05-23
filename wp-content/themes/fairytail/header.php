<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage blankSlate
 * @since blankSlate 3.5
 */
?><!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/images/fav_icon.ico">
</head>

<body <?php body_class(); ?>>
<!-- FFXIV Tooltips from Lodestone Fankit -->
<script src="http://img.finalfantasyxiv.com/lds/pc/global/js/eorzeadb/loader.js?v1"></script>

<div class="sticky-wrapper">    
<div id="page" class="top-wrapper">
	<header id="masthead" class="site-header margin-auto relative" role="banner">
		<div class="banner hide-768">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="btn-class text-indent"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a></h1>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php /*wp_nav_menu( array( 'theme_location' => 'Main Menu', 'menu_class' => 'main-menu' ) );*/ ?>
            <a href="javascript:void(0);" class="mobile-navicon border-radius">Menu</a>
            <ul class="main-menu">
            	<li><a href="<?php echo esc_url( home_url( '/category/news' ) ); ?>" class="btn-class text-indent btn-news">News</a></li>
                <li><a href="<?php echo esc_url( home_url( '/roster' ) ); ?>" class="btn-class text-indent btn-roster">Roster</a></li>
                <li><a href="<?php echo esc_url( home_url( '/forums' ) ); ?>" class="btn-class text-indent btn-forums">Forums</a></li>
                <li><a href="https://www.facebook.com/groups/592380790772218" target="_blank" class="btn-class text-indent btn-facebook">Facebook</a></li> 
                <li><a href="http://fairytail.guildwork.com/" target="_blank" class="btn-class text-indent btn-guildwork">Guildwork</a></li> 
            </ul>
		</nav><!-- #site-navigation -->
		<!--<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" 
        class="logo absolute"><img src="<?php echo get_template_directory_uri();?>/images/banners/logo.png" alt="Fairy Tail, Grand Company of Excalibur"/></a>-->
	</header><!-- #masthead -->
    <div class="character-wrapper relative">
	<div class="left-banner absolute hide-1024"></div>
    <div class="right-banner absolute hide-1024"></div>
	<div id="main" class="wrapper overflow relative margin-auto box-sizing">
    <!--<div class="social-media">
    	<ul>
        	<li><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://fairytail-freecompany.com" data-text="Check out this awesome Free Company on the Excalibur server - Fairy Tail!">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
<li>
<div class="g-plusone" data-size="small" data-href="http://fairytail-freecompany.com/"></div>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script></li>
        </ul>
    </div>-->
    	<div class="middle-content overflow margin-auto border-radius box-sizing"><!--closes in footer-->
        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="banner-rotate overflow border-radius text-indent btn-class box-sizing">Fairy Tail Free Company on Excalibur</a>
