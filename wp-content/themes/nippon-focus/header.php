<?php
/**
 *
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nippon
 */

?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<head>
    <title>株式会社NIPPON FOCUS </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Nippon-focus" />

    <!-- gallery -->

    <!-- //gallery -->

    <!-- //Default-JavaScript-File -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">
    <?php wp_head()?>

    <!-- style-css-file -->

</head>
<!-- Head -->

<!-- Scrolling Nav JavaScript -->

<!-- //fixed-scroll-nav-js -->

<body id="page-top" <?php body_class()?> data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- banner -->
    <div id="home" class="w3ls-banner">
        <!-- header -->
        <div class="header-w3layouts">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                            <span class="sr-only">株式会社NIPPON FOCUS</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand logo" href="<?php home_url('/')?>"> <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
                                <span>
                                    株式会社NIPPON <br> <span class="focus">FOCUS</span> </span></a></h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="all-nav">


	            <?php
	            	                    wp_nav_menu( array(
	            		                    'theme_location' => 'menu-1',
	            		                   

	            		                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
	            		                    'container'       => 'div',
	            		                    'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
	            		                    'container_id'    => 'bs-example-navbar-collapse-1',
	            		                    'menu_class'      => 'nav navbar-nav bs-js-navbar-scrollspy navbar-right cl-effect-15',
	            		                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	            		                    'walker'          => new WP_Bootstrap_Navwalker(),
	            	                    ) );
	            	                    ?>
	            <?php
	            	                    wp_nav_menu( array(
	            		                    'theme_location' => 'menu-2',

	            		                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
	            		                    'container'       => 'div',
	            		                    'container_class' => '',
	            		                    'container_id'    => '',
	            		                    'menu_class'      => 'nav navbar-nav',
	            		                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	            		                    'walker'          => new WP_Bootstrap_Navwalker(),
	            	                    ) );
	            	                    ?>
                </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        </div>
        <!-- //header -->