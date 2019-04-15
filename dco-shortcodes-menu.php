<?php

/*
  Plugin Name: DCO Shortcodes Menu
  Description: Allows you to add shortcodes menu to the editor
  Version: 1.0.1
  Author: Denis Yanchevskiy
  Author URI: http://denisco.pro
  License: GPLv2 or later
  Text Domain: dco-shortcodes-menu
 */

if (!defined('ABSPATH'))
    exit;

define('DCO_SM__PLUGIN_URL', plugin_dir_url(__FILE__));
define('DCO_SM__PLUGIN_DIR', plugin_dir_path(__FILE__));
define('DCO_SM__PLUGIN_BASENAME', plugin_basename(__FILE__));

if (is_admin()) {    
    global $pagenow;
    require_once DCO_SM__PLUGIN_DIR . 'dco-sm-posttype.php';
    if ($pagenow == 'post.php' || $pagenow == 'post-new.php') {
        require_once DCO_SM__PLUGIN_DIR . 'dco-sm.php';
        require_once DCO_SM__PLUGIN_DIR . 'dco-sm-metaboxes.php';
    }
}