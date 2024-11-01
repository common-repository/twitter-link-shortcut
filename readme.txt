=== Twitter Link Shortcut ===
Contributors: jdblundell 
Donate link: http://casadeblundell.com/jonathan/wordpress
Tags: twitter, shortcode, links, @username, username, quicktags, toolbar, edit, post, pages
Requires at least: 2.7
Tested up to: 2.8
Stable tag: trunk

A plugin to make linking to Twitter users easier with shortcodes.

== Description ==

This plugin hopes to make linking to Twitter profiles easier in Wordpress posts and pages.

It's the result of typing Twitter usernames far too often in my blog posts and having to go back and link to them later, typing out http://www.twitter.com/username.

The plugin uses a basic shortcode:

[twitter]

to wrap around Twitter user names. 

The plugin will then output the username with a link to their profile, displaying the standard @username format.

In addition, the links can be styled via your sites CSS, using the .twitshort selector.



== Installation ==

1. Upload 'twitlinkshortcode' directory to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Usage ==

1. Once it's installed a quicktag/button labled "twitter" will display in your post/page edit toolbar. Clicking the link will insert the [twitter] and [/twitter] shortcode into your post/page. Simply insert the Twitter user's name between the two short codes and the plugin will take care of the rest.
2. You can also insert the shortcode manually around the Twitter username you wish to link to. 

Example: [twitter]jdblundell[/twitter]

== Frequently Asked Questions ==

= Why the heck do I need this? =

You may not. But it was a handy shortcut for me, and hopefully you'll find it handy as well.

= So I have to type out the shortcode everytime I use it? =

No, in version 1.0.0 that was required, but with version 1.0.1 that's no longer necessary. A link should appear in your quicktag toolbar labled as "twitter" that will insert the shortcodes for you.

== Screenshots ==

1. The shortcode used within a post.
2. An example of how the output is displayed (with CSS customization)
3. Showing the twitter link within the edit post/page toolbar.

== Changelog ==

= 1.0.3 =
Removed whitespace within PHP file to repair RSS validation errors.

= 1.0.2 =
Error in the code kept the Wordpress Post Preview function from working properly. Corrected code to ensure full compatibility.

= 1.0.1 =
Added a quicktag link within the post/page toolbar. The link inserts the twitter shortcode into the post, without the need to manually type the code.

= 1.0.0 =
This is the initial release.