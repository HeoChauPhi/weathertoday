<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * To generate specific templates for your pages you can use:
 * /mytheme/template/pages/page-mypage.twig
 * (which will still route through this PHP file)
 * OR
 * /mytheme/page-mypage.php
 * (in which case you'll want to duplicate this file and save to the above path)
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */

$context = Timber::get_context();
$context['title_option'] = framework_page('title');
$context['main_option'] = framework_page('no_padding');
$context['page_layout'] = framework_page('layout_page');
//$context['sidebar_left'] = framework_page('sidebar_left');
$context['sidebar_right'] = framework_page('sidebar_right');

$post = new TimberPost();
$context['post'] = $post;

$sidebar_menu = framework_page('sidebar_menu');
$menu_obj = wp_get_nav_menu_object($sidebar_menu);
$context['sidebar_menu'] = $sidebar_menu;
//$context['menu_select'] = new TimberMenu($menu_obj->term_id);


Timber::render( array( 'page-' . $post->post_name . '.twig', 'page.twig'), $context );

$localtion_json = file_get_contents("http://ipinfo.io/");
$parsed_localtion = json_decode($localtion_json);
$localtion = str_replace(" ", "-", $parsed_localtion->region);

$json_string = file_get_contents("http://api.openweathermap.org/data/2.5/forecast/city?q=".$localtion."&APPID=87ad1525fd11092f6073bc28b6397d7c");
$parsed_json = json_decode($json_string);
print_r($parsed_json);
