<?php
defined('ABSPATH') or exit('No direct script access allowed');

if (wp_doing_ajax()) {
    require_once(get_template_directory() . '/../../mu-plugins/plugins.php');
    sap_get_theme_option();
}

include_once(get_template_directory() . '/inc/other.php');
include_once(get_template_directory() . '/inc/menu-field.php');
include_once(get_template_directory() . '/inc/advanced-options.php');
include_once(get_template_directory() . '/inc/elements.php');
include_once(get_template_directory() . '/inc/shortcodes.php');
include_once(get_template_directory() . '/inc/acf.php');

/**
 * Enqueue scripts and styles.
 *
 * wp_register_style('style', $themes_uri . '/assets/css/style.css', false, $ver);
 * wp_enqueue_style('style');
 *
 * wp_register_script('jquery', $themes_uri . '/assets/js/production.js', false, $ver, true);
 * wp_enqueue_script('jquery');
 * wp_enqueue_script('gmaps', '//maps.googleapis.com/maps/api/js?sensor=false', false, '', true);
 *
 */
function wordpress_scripts()
{
    $ver = 1;
    $themes_uri = get_template_directory_uri();

    wp_register_style('style', $themes_uri . '/assets/css/style.css', false, $ver);
    wp_enqueue_style('style');
    wp_register_style('boot', $themes_uri . '/assets/css/bootstrap.min.css', false, $ver);
    wp_enqueue_style('boot');

    wp_register_script('namejs', home_url() . '/wp-content/themes/newtheme/assets/js/form.js', array('jquery'));
    wp_enqueue_script('namejs');

}

add_action('wp_enqueue_scripts', 'wordpress_scripts');

function shapeSpace_include_custom_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

add_action('init', 'custom_posts');
function custom_posts()
{

}


function custom_ajax_form_send() {

$updated_post_arr = array(
    'ID'		=> 14668,
    'post_title'    => 'Новый вааFss ',
);

    wp_insert_post( $updated_post_arr );

    if ( isset($_POST['name']) ) {
        $name = trim(strip_tags($_POST['name']));
        $post_id =  wp_insert_post( $updated_post_arr );
        update_post_meta($post_id,'name',$_POST['name']);
    }
    if (isset($_POST['email'])) {
        $name = trim(strip_tags($_POST['email']));
        $post_id =  wp_insert_post( $updated_post_arr );
        update_post_meta($post_id,'email',$_POST['email']);
    }
    if (isset($_POST['tel'])) {
        $name = trim(strip_tags($_POST['tel']));
        $post_id =  wp_insert_post( $updated_post_arr );
        update_post_meta($post_id,'tel',$_POST['tel']);
    }
    if (isset($_POST['sends'])) {
        $name = trim(strip_tags($_POST['sends']));
        $post_id =  wp_insert_post( $updated_post_arr );
        update_post_meta($post_id,'text',$_POST['sends']);
    }

    exit();
}
