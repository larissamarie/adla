<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Allura|Montserrat:400,800|Six+Caps" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	 <div id="headerContent">
	 <div class="headerSlider"><?php echo do_shortcode("[ultimate-slider]"); ?></div> <!-- /headerSlider -->

	 <div class="recentWrapper">

 <ul id="recentPost" class="postDiv">
 <li class="scrollMore sixcaps"><div class="arrowDown"><span class="arrowBar"></span><span class="arrowBottom"></span></div>Scroll<br />for more</li>
    <?php
    $recent_posts = wp_get_recent_posts(array(
        'numberposts' => 3, // Number of recent posts thumbnails to display
        'post_status' => 'publish', // Show only the published posts
        'orderby' => 'post_date',
			'order' => 'DESC'
    ));
    $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium_large' );
    foreach($recent_posts as $post) : ?>
        <li>
                <a href="<?php echo get_permalink($post['ID']) ?>" class="">
                <div class="postThumbnail"><?php echo get_the_post_thumbnail($post['ID'], 'medium_large'); ?>
            
                <div class="recentPostContent">
                <h3 class="recentPostHead"><?php echo $post['post_title'] ?></h3>
                <p class="recentPostDesc"><?php echo $post['post_excerpt'] ?> <span class="purple">&raquo;</span></p>
                </div></div>
            </a>
        </li>
    <?php endforeach; wp_reset_query(); ?>
    <li class="recentPostMore"><a href="/wptest/blog">&rang;</a></li>
</ul>
	 </div> <!-- /recentPosts -->

    <div class="logoContent" style="">
		<a href="/wptest/"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 420 160" style="enable-background:new 0 0 420 160;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#FFFFFF;}
</style>
<g id="Layer_2">
</g>
<g id="Layer_1">
	<g>
		<path class="st0" d="M43.2,39.4C29.8,40.8,19.3,52.2,19.3,66L10,66v83.9h72.3V66L73,66c0-13.8-10.4-25.2-23.9-26.7l0,0V24.7h6.7
			v-6h-6.7v-8.6h-6v8.6h-6.7v6h6.7V39.4L43.2,39.4z M75.6,143.2H16.7V72.7H26V66c0-11.1,9-20.1,20.1-20.1s20.1,9,20.1,20.1v0v6.7
			h9.3V143.2z M26,66 M33.7,72.6c-6.1,12.4,1.6,24.6,8.7,34.3c1.7,2.9,2.9,6.6,1.8,10.2c-1.6,4-6.3,4.7-8.4,8.1
			c-0.3,0.5-0.7,1-0.9,1.8c0,0-0.4,1.3-0.6,2.9c-0.2,1.3-0.2,3.6-0.2,3.6c-3.7-2.7-5.6-6.8-5.2-11.1c0-0.5,0.2-1.4,0.7-2.1
			c0.3-0.5,0.8-1,1.4-1.3c-1.9-1.9-3.9-4.2-3.8-7.1c0.2-1.7,0.8-3.2,2.3-4.4c-1.8-2.7-4.4-6.1-2.1-9.4l0.5-0.5l0.5-0.3
			c-3.3-6-3.2-15.3,1.1-20.9C30.7,74.7,31.6,73.6,33.7,72.6L33.7,72.6z M47.7,122.9l1.2,14.9l-2.7,2.4l-2.7-2.5l1.3-14.8
			C45.3,121.5,47,121.5,47.7,122.9L47.7,122.9z M42.5,126c-1.7,4,0.3,8.2-4.1,10.2c-3.2-3.1,1.8-7.4,2.5-10.7
			c0.2-1.2,1.9-1.2,1.8,0.1L42.5,126z M49.9,125.6c-0.1-1.4,1.6-1.3,1.8-0.1c0.7,3.3,5.7,7.6,2.5,10.7c-4.4-1.9-2.4-6.1-4.1-10.2
			L49.9,125.6z M58.7,72.6c2,1,3,2.1,4.2,3.7c4.3,5.6,4.4,14.9,1.1,20.9l0.5,0.3l0.5,0.5c2.3,3.3-0.3,6.7-2.1,9.4
			c1.5,1.1,2.1,2.7,2.3,4.4c0.1,2.9-1.9,5.2-3.8,7.1c0.6,0.4,1.1,0.8,1.4,1.3c0.5,0.7,0.7,1.6,0.7,2.1c0.4,4.4-1.5,8.4-5.2,11.1
			c0,0-0.1-2.3-0.2-3.6c-0.2-1.6-0.6-2.9-0.6-2.9c-0.2-0.8-0.6-1.3-0.9-1.8c-2.1-3.4-6.8-4.1-8.4-8.1c-1-3.6,0.1-7.3,1.8-10.2
			C57.1,97.2,64.7,85.1,58.7,72.6L58.7,72.6z M48.7,63.8c0,1.4-1.1,2.5-2.5,2.5c-1.4,0-2.5-1.1-2.5-2.5c0-1.4,1.1-2.5,2.5-2.5
			C47.5,61.3,48.7,62.4,48.7,63.8z M46.2,73.2c0,0-0.3,0.5-0.8,0.8c-0.4,0.3-1,0.5-1.9,0.5c-1,0-2.3-0.9-2.6-2.1
			c-0.3-1.5,0.4-2.4,1-3c0.5-0.6,1.7-1.5,1.7-1.5c0.8,0.5,1.7,0.8,2.7,0.8v0c1,0,1.9-0.3,2.7-0.8c0,0,1.1,0.9,1.7,1.5
			c0.5,0.6,1.3,1.5,1,3c-0.3,1.3-1.5,2.1-2.6,2.1c-0.9,0-1.5-0.2-1.9-0.5C46.4,73.8,46.2,73.2,46.2,73.2L46.2,73.2z M46.2,54.3
			c0,0,0.3-0.5,0.8-0.8c0.4-0.3,1-0.5,1.9-0.5c1,0,2.3,0.9,2.6,2.1c0.3,1.5-0.4,2.4-1,3c-0.5,0.6-1.7,1.5-1.7,1.5
			c-0.8-0.5-1.7-0.8-2.7-0.8v0c-1,0-1.9,0.3-2.7,0.8c0,0-1.1-0.9-1.7-1.5c-0.5-0.6-1.3-1.5-1-3c0.3-1.3,1.5-2.1,2.6-2.1
			c0.9,0,1.5,0.2,1.9,0.5C45.9,53.8,46.2,54.3,46.2,54.3L46.2,54.3z M55.6,63.8c0,0,0.5,0.3,0.8,0.8c0.3,0.4,0.5,1,0.5,1.9
			c0,1-0.9,2.3-2.1,2.6c-1.5,0.3-2.4-0.4-3-1c-0.6-0.5-1.5-1.7-1.5-1.7c0.5-0.8,0.8-1.7,0.8-2.7h0c0-1-0.3-1.9-0.8-2.7
			c0,0,0.9-1.1,1.5-1.7c0.6-0.5,1.5-1.3,3-1c1.3,0.3,2.1,1.5,2.1,2.6c0,0.9-0.2,1.5-0.5,1.9C56.1,63.5,55.6,63.8,55.6,63.8
			L55.6,63.8z M36.7,63.8c0,0-0.5-0.3-0.8-0.8c-0.3-0.4-0.5-1-0.5-1.9c0-1,0.9-2.3,2.1-2.6c1.5-0.3,2.4,0.4,3,1
			c0.6,0.5,1.5,1.7,1.5,1.7c-0.5,0.8-0.8,1.7-0.8,2.7l0,0c0,1,0.3,1.9,0.8,2.7c0,0-0.9,1.1-1.5,1.7c-0.6,0.5-1.5,1.3-3,1
			c-1.3-0.3-2.1-1.5-2.1-2.6c0-0.9,0.2-1.5,0.5-1.9C36.2,64.1,36.7,63.8,36.7,63.8L36.7,63.8z"/>
		<path class="st0" d="M138,77.3c-1.1-1.5-2.6-2.7-4.4-3.4c-1.8-0.7-3.6-1.1-5.3-1.1c-2.2,0-4.2,0.4-6.1,1.2
			c-1.8,0.8-3.4,1.9-4.7,3.3c-1.3,1.4-2.3,3.1-3,5c-0.7,1.9-1.1,4-1.1,6.2c0,2.3,0.3,4.5,1,6.4c0.7,1.9,1.7,3.6,2.9,5
			c1.3,1.4,2.8,2.5,4.6,3.2c1.8,0.8,3.8,1.2,6,1.2c2.3,0,4.3-0.5,6.1-1.4c1.8-0.9,3.2-2.1,4.3-3.6l6.1,4.3c-1.9,2.4-4.2,4.2-7,5.6
			s-6,2-9.7,2c-3.4,0-6.4-0.6-9.3-1.7c-2.8-1.1-5.2-2.7-7.3-4.7c-2-2-3.6-4.4-4.7-7.2c-1.1-2.8-1.7-5.8-1.7-9.2
			c0-3.4,0.6-6.5,1.8-9.3c1.2-2.8,2.8-5.1,4.9-7.1c2.1-1.9,4.5-3.4,7.4-4.5c2.8-1.1,5.9-1.6,9.2-1.6c1.4,0,2.8,0.1,4.3,0.4
			c1.5,0.3,2.9,0.7,4.3,1.2c1.4,0.5,2.7,1.2,3.9,2c1.2,0.8,2.2,1.8,3.1,2.9L138,77.3z M167.6,106.5h-0.2c-0.7,1.3-1.9,2.4-3.5,3.2
			c-1.6,0.8-3.5,1.2-5.5,1.2c-1.2,0-2.4-0.2-3.7-0.5c-1.3-0.3-2.4-0.8-3.5-1.5c-1.1-0.7-2-1.6-2.7-2.8c-0.7-1.2-1.1-2.6-1.1-4.3
			c0-2.2,0.6-3.9,1.9-5.2c1.2-1.3,2.8-2.3,4.8-3c1.9-0.7,4.1-1.1,6.5-1.4c2.4-0.2,4.7-0.3,7-0.3v-0.7c0-1.8-0.7-3.2-2-4
			c-1.3-0.9-2.9-1.3-4.7-1.3c-1.5,0-3,0.3-4.4,1c-1.4,0.6-2.6,1.4-3.5,2.4l-3.8-4.4c1.7-1.5,3.6-2.7,5.7-3.5
			c2.2-0.8,4.4-1.2,6.6-1.2c2.6,0,4.7,0.4,6.4,1.1c1.7,0.7,3,1.7,4,2.9s1.6,2.5,2,3.9c0.4,1.5,0.6,2.9,0.6,4.4v17.7h-6.8V106.5z
			 M167.5,96.9h-1.6c-1.2,0-2.4,0.1-3.7,0.2c-1.3,0.1-2.5,0.3-3.6,0.7c-1.1,0.3-2,0.8-2.7,1.5c-0.7,0.6-1.1,1.5-1.1,2.6
			c0,0.7,0.2,1.3,0.5,1.7c0.3,0.5,0.7,0.8,1.2,1.1c0.5,0.3,1,0.5,1.6,0.6c0.6,0.1,1.2,0.2,1.8,0.2c2.5,0,4.4-0.7,5.7-2
			c1.3-1.3,1.9-3.2,1.9-5.5V96.9z M178,86.9v-5.8h5.1v-8.4h7.2v8.4h7.3v5.8h-7.3v13.5c0,1.3,0.2,2.4,0.7,3.2
			c0.5,0.8,1.5,1.3,3.1,1.3c0.5,0,1-0.1,1.6-0.2c0.6-0.1,1.1-0.3,1.5-0.5l0.2,5.7c-0.6,0.2-1.4,0.4-2.3,0.6
			c-0.9,0.1-1.7,0.2-2.6,0.2c-1.9,0-3.5-0.3-4.7-0.8c-1.2-0.5-2.2-1.3-2.9-2.2c-0.7-1-1.2-2-1.5-3.3c-0.3-1.2-0.4-2.6-0.4-4V86.9
			H178z M218.7,80.2c1.9,0,3.5,0.3,4.9,1c1.4,0.7,2.5,1.5,3.3,2.6c0.9,1.1,1.5,2.3,1.9,3.8c0.4,1.4,0.6,2.9,0.6,4.4v18.2h-7.3v-16
			c0-0.9-0.1-1.7-0.2-2.6c-0.1-0.9-0.4-1.7-0.8-2.5c-0.4-0.7-0.9-1.4-1.6-1.9s-1.6-0.7-2.8-0.7c-1.2,0-2.2,0.2-3,0.7
			c-0.9,0.4-1.6,1-2.1,1.8s-1,1.6-1.3,2.5c-0.3,0.9-0.4,1.9-0.4,2.9v15.9h-7.3V64.3h7.3v20.8h0.1c0.3-0.6,0.7-1.2,1.2-1.8
			c0.5-0.6,1.2-1.1,1.9-1.6c0.7-0.5,1.6-0.8,2.5-1.1C216.6,80.4,217.6,80.2,218.7,80.2z M235.4,95.5c0-2.3,0.4-4.4,1.2-6.3
			s2-3.5,3.4-4.8c1.4-1.3,3.1-2.4,5-3.1c1.9-0.7,4-1.1,6.2-1.1c2.2,0,4.2,0.4,6.2,1.1c1.9,0.7,3.6,1.8,5,3.1
			c1.4,1.3,2.5,2.9,3.4,4.8s1.2,4,1.2,6.3s-0.4,4.4-1.2,6.3c-0.8,1.9-2,3.5-3.4,4.9c-1.4,1.4-3.1,2.4-5,3.2s-4,1.2-6.2,1.2
			c-2.2,0-4.2-0.4-6.2-1.2c-1.9-0.8-3.6-1.8-5-3.2c-1.4-1.4-2.5-3-3.4-4.9C235.8,99.9,235.4,97.8,235.4,95.5z M242.8,95.5
			c0,1.1,0.2,2.3,0.5,3.4c0.3,1.1,0.9,2.1,1.5,3c0.7,0.9,1.6,1.6,2.6,2.2c1.1,0.6,2.3,0.9,3.8,0.9c1.5,0,2.7-0.3,3.8-0.9
			c1.1-0.6,1.9-1.3,2.6-2.2c0.7-0.9,1.2-1.9,1.5-3c0.3-1.1,0.5-2.3,0.5-3.4c0-1.1-0.2-2.3-0.5-3.4c-0.3-1.1-0.9-2.1-1.5-3
			c-0.7-0.9-1.6-1.6-2.6-2.2c-1.1-0.5-2.3-0.8-3.8-0.8c-1.5,0-2.7,0.3-3.8,0.8c-1.1,0.5-1.9,1.3-2.6,2.2c-0.7,0.9-1.2,1.9-1.5,3
			C243,93.3,242.8,94.4,242.8,95.5z M273.4,64.3h7.3v45.9h-7.3V64.3z M287.7,71.2c0-1.2,0.4-2.2,1.3-3.1c0.9-0.9,2-1.3,3.3-1.3
			c1.3,0,2.5,0.4,3.4,1.2c0.9,0.8,1.4,1.9,1.4,3.1s-0.5,2.3-1.4,3.1c-0.9,0.8-2,1.2-3.4,1.2c-1.3,0-2.4-0.4-3.3-1.3
			S287.7,72.4,287.7,71.2z M288.7,81.1h7.3v29.1h-7.3V81.1z M323.8,89.1c-0.6-0.8-1.4-1.5-2.5-2c-1.1-0.5-2.3-0.8-3.5-0.8
			c-1.3,0-2.5,0.3-3.5,0.8c-1,0.5-1.9,1.3-2.5,2.2c-0.7,0.9-1.2,1.9-1.5,3c-0.3,1.1-0.5,2.2-0.5,3.4c0,1.1,0.2,2.3,0.5,3.4
			c0.3,1.1,0.9,2.1,1.5,3c0.7,0.9,1.5,1.6,2.6,2.2c1,0.5,2.2,0.8,3.6,0.8c1.1,0,2.3-0.2,3.4-0.7c1.1-0.4,2-1.1,2.7-1.9l4.6,4.6
			c-1.2,1.3-2.8,2.3-4.6,3c-1.9,0.7-3.9,1.1-6.1,1.1c-2.1,0-4.2-0.3-6.1-1c-1.9-0.7-3.6-1.7-5-3s-2.6-3-3.4-4.9s-1.2-4.1-1.2-6.5
			c0-2.3,0.4-4.5,1.2-6.4c0.8-1.9,2-3.5,3.4-4.9c1.4-1.3,3.1-2.4,4.9-3.1c1.9-0.7,3.9-1.1,6-1.1c2.1,0,4.2,0.4,6.2,1.2
			c2,0.8,3.6,1.9,4.8,3.3L323.8,89.1z M336.9,110.2l7.6-43h10.1l-6.1,34.2h16.9l-1.6,8.8H336.9z M399.4,110.2l-1.5-8.6h-16.6
			l-5.2,8.6h-11.5l27.4-43h9.8l8.1,43H399.4z M394.6,78.3l-9,15.2h11.2L394.6,78.3z"/>
	</g>
</g>
</svg></a>
	</div> <!-- /row1 -->

    <div class="navContent desktopNav">
		<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
			<?php
	wp_nav_menu(
		array(
			'theme_location' => 'top',
			'menu_id'        => 'top-menu',
		)
	);
	?>

	<?php echo twentyseventeen_get_svg( array( 'icon' => 'search' ) ); ?><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentyseventeen' ); ?></span>
		</nav>

	</div> <!-- /row2 -->
    </div> <!-- /headerContent -->



	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
