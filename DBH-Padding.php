<?php
/*
Plugin Name: Digital Business Hub Padding
Description: Removes padding on home page on Themify Themes for Digital Business Hub Clients
Version:     1.1
Author:      Digital Business Hub
Author URI:  http://digitalbusinesshub.com.au
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'No dice! Please email josh@mayvintraining.com.au for assistance.' );

add_action('admin_head', 'DBH_Padding');

function DBH_Padding() {
  echo '<style> .home #content { padding: 0 !important; } </style>';
}
