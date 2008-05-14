=== Plugin Name ===
Contributors: pile
Donate link: http://suraja.com/
Tags: gallery
Requires at least: 2.5
Tested up to: 2.5
Stable tag: 1.0

GalleryNavigation is a simple plugin that allows you to add page navigation to your gallery.

== Description ==

Gallery Navigation Plugin is a simple Wordpress 2.5 plugin that allows you to quickly add page navigation to your wordpress 2.5 gallery.

== Installation ==

1. Upload `galnav.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `<?php isgal($post->ID); ?>` before the contenty loop `the_content();`
in your post templates
Example:
`<?php isgal($post->ID); ?>`
`<?php the_content(); ?>`

4. Don't forget to fill the Custom Fields
Key: isgallery
Value: true



== Screenshots ==





