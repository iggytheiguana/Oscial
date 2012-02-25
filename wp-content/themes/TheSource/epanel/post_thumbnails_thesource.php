<?php 

/* sets predefined Post Thumbnail dimensions */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
		
	//featured image size
	add_image_size( 'featured-thumb', 1400, 300, true );
	
	//recent category image size
	add_image_size( 'recentcat-thumb', 239, 133, true );
	
	//small image size
	add_image_size( 'small-thumb', 74, 74, true );
	
	//index,category image size
	add_image_size( 'entry', get_option($shortname.'_thumbnail_width_usual'), get_option($shortname.'_thumbnail_height_usual'), true );
	
	//page image size
	add_image_size( 'pageimage', get_option($shortname.'_thumbnail_width_pages'), get_option($shortname.'_thumbnail_height_pages'), true );
	
	//single post image size
	add_image_size( 'postimage', get_option($shortname.'_thumbnail_width_posts'), get_option($shortname.'_thumbnail_height_posts'), true );
	
};
/* --------------------------------------------- */

?>