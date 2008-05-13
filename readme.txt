=== Plugin Name ===
Contributors: pile
Donate link: http://suraja.com/
Tags: gallery
Requires at least: 2.5
Tested up to: 2.5
Stable tag: 1.0

Here is a short description of the plugin.  This should be no more than 150 chars.  No markup here.

== Description ==

Gallery Navigation Plugin is a simple Wordpress 2.5 plugin that allows you to quickly add page navigation to your wordpress 2.5 gallery.

== Installation ==

1. Upload `galnav.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the ‘Plugins’ menu in WordPress
3. Place ‘<?php isgal($post->ID); ?>` before the contenty loop (the_content();)
in your post templates
Example:
<?php the_content(’<p class=”serif”>Read the rest of this entry »</p>’); ?>

4. Don’t forget to fill the Custom Fields
Key: isgallery
Value: true



== Screenshots ==

1. This screen shot description corresponds to screenshot-1.(png|jpg|jpeg|gif). Note that the screenshot is taken from
the directory of the stable readme.txt, so in this case, `/tags/4.3/screenshot-1.png` (or jpg, jpeg, gif)
2. This is the second screen shot



