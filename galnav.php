<?php
/*
Plugin Name: Gallery Navigation Plugin
Plugin URI: http://suraja.com/website/website-development/gallery-navigation-plugin.html
Description: Gallery Navigation Plugin is a simple Wordpress plugin that allows you to quickly add image galleries to your posts and pages. 
Version: 1.0
Author: pile
Author URI: http://suraja.com/
*/



function isgal($id)
{
//show how many pic to display
$showpic = 6;


$isgal = get_post_meta($id, 'isgallery', $single);
if ($isgal="true")
{
$args = array(
'post_type' => 'attachment',
'numberposts' => null,
'post_status' => null,
'post_parent' => $id
);
$attachments = get_posts($args);
if ($attachments) {
$i=1;
$cnt = "";
$html = '';
foreach ($attachments as $attachment) {



$image = wp_get_attachment_image_src($attachment->ID, 'thumbnail', $icon);
if ( $image ) {
list($src, $width, $height) = $image;
$hwstring = image_hwstring($width, $height);
if ( is_array($size) )
$size = join('x', $size);

//html format
$html .= '<a href='.get_attachment_link($attachment->ID) .'><img src="'.attribute_escape($src).'" '.$hwstring.'class="attachment-'.attribute_escape($size).'" alt="" /></a>';
}



if ($i==$showpic)
{$html.="<!--nextpage-->";
$i=0;
}
$i++;
}
$post->post_content = $html;

global $id, $authordata, $day, $currentmonth, $page, $pages, $multipage, $more, $numpages;
$id = (int) $post->ID;

$authordata = get_userdata($post->post_author);

$day = mysql2date('d.m.y', $post->post_date);
$currentmonth = mysql2date('m', $post->post_date);
$numpages = 1;
$page = get_query_var('page');
if ( !$page )
$page = 1;
if ( is_single() || is_page() || is_feed() )
$more = 1;
$content = $post->post_content;
if ( preg_match('/<!--nextpage-->/', $content) ) {
if ( $page > 1 )
$more = 1;
$multipage = 1;
$content = str_replace("\n<!--nextpage-->\n", '<!--nextpage-->', $content);
$content = str_replace("\n<!--nextpage-->", '<!--nextpage-->', $content);
$content = str_replace("<!--nextpage-->\n", '<!--nextpage-->', $content);
$pages = explode('<!--nextpage-->', $content);
$numpages = count($pages);
} else {
$pages[0] = $post->post_content;
$multipage = 0;
}


}
}
}

?>