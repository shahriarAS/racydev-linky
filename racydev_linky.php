<?php

/**
 * 
 * Plugin Name: RacyDev Linky - Monetize your link
 * Plugin URI: https://racydev.com/plugins/racydev-linky
 * Author: RacyDev
 * Author URI: https://racydev.com/
 * Description: The most effective link monetized wp plugin. Put ad as much as you want, set a timer before the link is revealed. Generate revenue more than anytime.
 * Version: 1.0.1
 * Tags: download, link, monetize, download manager, link generate, wp link, wp monetize link
 * License: GPL V2 
 * Text Domain: racydev_linky
 * 
 */

//  Protect from direct access
 defined('ABSPATH') || die("Sorry!");
 
//  Add setting option when plugin is activating.
 register_activation_hook(__FILE__, function (){
     add_option("racydev_linky_options", array("page_url" => "", "waiting_time" => "10", "page_btn_title" => "Download Now"));
 });

 //  Remove setting option when plugin is activating.
 register_deactivation_hook(__FILE__, function (){
    delete_option("racydev_linky_options");
});

// Include RacyDev Linky Post,Page,Setting & Enqueue
 include plugin_dir_path(__FILE__).'includes/racydev_linky-post.php';
 include plugin_dir_path(__FILE__).'includes/racydev_linky-page.php';
 include plugin_dir_path(__FILE__).'includes/racydev_linky-setting.php';
 include plugin_dir_path(__FILE__).'includes/racydev_linky-enqueue.php';