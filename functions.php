<?php
/*
Theme Name: Funky Freddy
Theme URI: http://github.com/bankie606
Author: F. Crescioni
Author URI: http://frcrescioni.net/
Description: A theme for one of the funkiest places in Seattle.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: white, pink, transparent, textshadow, cool,
Text Domain: funkyfreddy

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/



/**
 * For advanced users:
 *
 * Place any custom WordPress hooks or theme functions into this file.
 *
 * This file is optional and can be omitted from your custom theme.
 */

//Register Menu Locations
register_nav_menus(array('main-menu' => 'Main Menu' ));




//Register Widgets
register_sidebar(array(
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' 
	)); 


//Add thumbnails to posts
add_theme_support('post-thumbnails');


?>