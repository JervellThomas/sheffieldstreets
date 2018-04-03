<?php
/**
 * The header for SheffieldStreets
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */


?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
		<title>Sheffield Streets</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />




        <script type="text/javascript">

        function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

        </script>

</head>
<body <?php body_class(); ?>>
<header>
<!-- Navbar -->
<nav class="topnav-not-index" id="myTopnav">

	<?php the_custom_logo ();?>

  <!--<a class="nav-image-left" href="#">
  <img src="<?php echo get_template_directory_uri().'/assets/images/vectorlogoblack.png'?>" />
  </a>  -->
	<div class="search-container">
	<?php get_search_form ();?>
	</div>

	<?php
	wp_nav_menu(array(
	'theme_location'=>'primary',
	'container'=> 'div',
	'container_class' => 'custom-menu-class',
	'menu_class'      => 'header',

	));

	?>


	<!--<a href="stories.html">Stories</a>-->


</nav>

<!-- News -->
	<div class="news-header">
		<h2>Stories <img src="<?php echo get_template_directory_uri().'/assets/images/streetsicon.jpg'?>" /></h2>
	</div>
</header>
