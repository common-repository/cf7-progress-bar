<?php
/*
Plugin Name: Progress Bar for Contact Form 7
Description: A progress bar for contact form 7 forms.
Text Domain: wpcf7apb
Version: 1.0.0
Author: Fortuner
Author URI: https://amanjeetkaur.com/
License: GPLv2 or later
*/

if ( ! defined( 'ABSPATH' ) ) {	exit; }
define( 'CF7PB_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
require_once( CF7PB_PLUGIN_DIR . 'class.cf7pb.php' );
add_action( 'init', array( 'cF7ProgressBar', 'init' ) );
?>