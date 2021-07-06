<?php

/**
 * Plugin Name:     Frill SSO Unofficial
 * Plugin URI:      https://github.com/Full-Stack-Press/Frill-SSO-Unofficial
 * Description:     Frill.co SSO Unofficial plugin, enable SSO (Single-sign-on) login from WordPress to Frill.co
 * Author:          Full Stack Press
 * Author URI:      https://github.com/Full-Stack-Press
 * Text Domain:     frill-sso
 * Version:         1.0.1
 *
 */
if (\is_readable(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
}
require 'includes/Settings.php';
require 'includes/RedirectHandler.php';
$settings = new Settings();
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'frill_sso_page_settings_link');
function frill_sso_page_settings_link($links)
{
    $links[] = '<a href="' . admin_url('options-general.php?page=frill-sso') . '">' . __('Settings') . '</a>';
    return $links;
}
add_filter('plugin_row_meta', 'frill_sso_row_meta', 10, 2);
function frill_sso_row_meta($links, $file)
{
    if (strpos($file, 'frill-sso-plugin.php') !== \false) {
        $new_links = array(
            '<a href="https://www.facebook.com/groups/180279940621320" target="_blank">' . __('Frill.co Official Community Group', 'frill-sso') . '</a>',
             '<a href="https://frill.co/" target="_blank">' . __('Frill.co', 'frill-sso') . '</a>'
        );
        $links = \array_merge($links, $new_links);
    }
    return $links;
}
add_action('plugins_loaded', function () {
    new RedirectHandler();
});
