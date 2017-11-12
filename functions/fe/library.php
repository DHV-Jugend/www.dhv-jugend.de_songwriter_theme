<?php 
/**
 * Library of Theme options functions.
 * @package SongWriter
 * @since SongWriter 1.0.0
*/

// Display Breadcrumb navigation
function songwriter_get_breadcrumb() { 
global $songwriter_options_db;
		if ($songwriter_options_db['songwriter_display_breadcrumb'] != 'Hide') { ?>
<?php if(function_exists( 'bcn_display' ) && !is_front_page()){ _e('<p class="breadcrumb-navigation">', 'songwriter'); ?><?php bcn_display(); ?><?php _e('</p>', 'songwriter');} ?>
<?php } 
} 

// Display featured images on single posts
function songwriter_get_display_image_post() { 
global $songwriter_options_db;
		if ($songwriter_options_db['songwriter_display_image_post'] == '' || $songwriter_options_db['songwriter_display_image_post'] == 'Display') { ?>
<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail(); ?>
<?php endif; ?>
<?php } 
}

// Display featured images on pages
function songwriter_get_display_image_page() { 
global $songwriter_options_db;
		if ($songwriter_options_db['songwriter_display_image_page'] == '' || $songwriter_options_db['songwriter_display_image_page'] == 'Display') { ?>
<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail(); ?>
<?php endif; ?>
<?php } 
} ?>