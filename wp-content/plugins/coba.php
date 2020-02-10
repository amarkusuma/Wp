<?php
/*
 * Plugin Name: Plugin Saya
 * Plugin URI: http://www.advernesia.com
 * Description: Ini adalah contoh plugin.
 * Author: Advernesia Developer
 * Version: 1.0.0
 * Author URI: http://www.facebook.com/advernesia
 * License: GPLv2 or later
 */

add_action('admin_menu', 'okeh_menu');
function okeh_menu()
{
    add_options_page('Plugin okeh menu', 'Okeh Plugin', 1, 'plugin_okeh_menu', 'okeh_options');
}
function okeh_options()
{
    if (!current_user_can(1)) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    echo '
<div class="wrap">';
    echo 'HAHAHA! plugin saya sukses';
    echo '</div>
';
}
