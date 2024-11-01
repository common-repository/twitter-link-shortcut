<?php
/*
Plugin Name: Twitter Link Shortcut
Plugin URI: http://www.casadeblundell.com/jonathan/wordpress
Description: A plugin to make linking to Twitter users easier with shortcodes
Author: Jonathan Blundell @jdblundell
Version: 1.0.3
Author URI: http://casadeblundell.com/jonathan
*/

/*  Big props to @spamboy from some advice on building the plugin early on and to Scribu (http://scribu.net/wordpress/right-way-to-add-custom-quicktags.html) for his tutorial on adding quicktags the "right way" 
*/

/*  Copyright 2009 Jonathan Blundell  (email : jonathan@casadeblundell.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*
**************************************************************************

In keeping with the spirit of Wordpress, this plugin is free to use by anyone and everyone. 

You are welcome to use it however you want. However, I do appreciate donations for my time and effort, although they obviously aren't required for you to use this plugin.

Think of it as encouraging my edumacation, as I'm learning this as I go.

If you're feeling generous, you can just buy me a beer ( http://www.casadeblundell.com/jonathan/wordpress-plugin-twitter-link-shortcode ) or support our local Laundry Love People ( http://www.redoakllp.wordpress.com/donate ).

**************************************************************************
*/

function twittshort( $atts, $content = null ) {
   return '<span class="twitshort"><a href="http://www.twitter.com/' .$content. '" target="_blank">@' .$content. '</a></span>';
}

add_shortcode('twitter', 'twittshort');

add_action('admin_print_scripts', 'my_custom_quicktags');
function my_custom_quicktags() {
	wp_enqueue_script(
		'my_custom_quicktags',
		plugins_dir_url(__FILE__) . 'twitlink-quicktags.js',
		array('quicktags')
	);
}


// WP < 2.8
if ( !function_exists('plugins_dir_url') ) :
function plugins_dir_url($file)
{
	// WP < 2.6
	if ( !function_exists('plugins_url') )
		return trailingslashit(get_option('siteurl') . '/wp-content/plugins/' . plugin_basename($file));

	return trailingslashit(plugins_url(plugin_basename(dirname($file))));
}
endif;
?>