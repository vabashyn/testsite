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

function custom_ajax_form_send()
{
    if (!wp_verify_nonce($_POST['nonce'], 'forCustomAjax')) {
        header("HTTP/1.0 404 Not Found");
        exit;
    }

    parse_str($_POST['post'], $post_data);

    $content = '';
    if (isset($post_data['name'])) {
        $name = trim(strip_tags($post_data['name']));
        $content .= "<p>Имя: {$name}</p>";
    }
    if (isset($post_data['email'])) {
        $email = trim(strip_tags($post_data['email']));
        $content .= "<p>E-mail: {$email}</p>";
    }
    if (isset($post_data['tel'])) {
        $phone = trim(strip_tags($post_data['tel']));
        $content .= "<p>Телефон: +{$phone}</p>";
    }
    if (isset($post_data['sends'])) {
        $text = trim(strip_tags($post_data['sends']));
        $content .= "<p>Сообщение:</p>" . wpautop($text);
    }

    exit();
}










/*$post_id = 43;

 'id' => 43,
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'tel' => $_POST['tel'],
    'text' => $_POST['sends'],
$meta_key = [

    0 => 'name',
    1 => 'email',
    2 => 'tel',
    3 => 'text'
];

$meta_value = [

    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'tel' => $_POST['tel'],
    'text' => $_POST['text'],
];

$addname = update_post_meta($post_id, $meta_key[0], $meta_value['name'], $unique);
$addemail = update_post_meta($post_id, $meta_key[1], $meta_value['email'], $unique);
$addtel = update_post_meta($post_id, $meta_key[2], $meta_value['tel'], $unique);
$addtext = update_post_meta($post_id, $meta_key[3], $meta_value['text'], $unique);
*/



