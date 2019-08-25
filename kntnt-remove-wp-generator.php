<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Remove WP Generator
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Stops Wordpress from announcing its version number to the world.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

remove_action( 'wp_head', 'wp_generator' );