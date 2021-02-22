<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link href="<?php echo get_template_directory_uri() ?>/assets/css/bootstrap.min.css" rel="stylesheet" >
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
    <link href="<?php echo get_template_directory_uri() ?>/assets/css/styles.css" rel="stylesheet" >
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Open+Sans&display=swap" rel="stylesheet">  
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="mainWrapper">
  <div class="bannerImage">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/banner.jpg">
    <div class="bannerContent">
        <div class="container">
            <h1 class="headTittle">We’re <span class="orange">Fusion</span>, We Build<br> Things for Human</h1>
            <nav class="nav-menu  d-lg-block">
              <ul>
                <li ><a href="index.html">Design</a></li>
                <li><a href="#">Strategy </a></li>
                <li><a href="#">BrandinG</a></li>
              </ul>
            </nav><!-- .nav-menu -->
            <a href="#services" class="btn-scroll scrollto" title="Scroll Down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <header >
              <div class="logo float-left"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png"></a></div>
              <a href="#" class="getIn float-right">Get in touch <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </header>
        </div>
    </div>
  </div>
</div>