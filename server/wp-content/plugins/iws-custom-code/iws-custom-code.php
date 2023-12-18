<?php
/*
 * @wordpress-plugin
 * Plugin Name:       Iws Custom Code
 * Description:       Add and remove custom code
 * Author:            Kanwal Arora  
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      5.6
 * Text Domain:       iws-custom-code
 */

remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

function iwsGetFeaturedImageSrc($object, $field_name, $request)
{
    if ($object['featured_media']) {
        $img = wp_get_attachment_image_src($object['featured_media'], 'full');
        return $img[0];
    }
    return false;
}

add_action('rest_api_init', function () {
    register_rest_field('post', 'featured_src', array(
        'get_callback' => 'iwsGetFeaturedImageSrc',
    ));
});
