<?php
/**
 * Plugin Name: Height Calculator
 * Plugin URI: https://sandychahal.com/
 * Description: Height Calculator is a simple yet powerful WordPress plugin that allows users to estimate the adult height of their children based on scientific methods and commonly accepted growth patterns. This plugin provides an interactive calculator that is perfect for parenting blogs, pediatric health websites, or any site catering to family and child wellness.
 * Author: Sandy Chahal
 * Author URI: https://sandychahal.com/
 * Version: 1.0
 * Text Domain: height-calculator
 * License: GPLv3
 * Copyright (C) 2025 SandyChahal
 */

if (!defined('ABSPATH')) exit;

// Register shortcode
function hc_register_shortcode() {
    ob_start();
    include plugin_dir_path(__FILE__) . 'templates/form-template.php';
    return ob_get_clean();
}
add_shortcode('height_calculator', 'hc_register_shortcode');

// Enqueue scripts and styles
function hc_enqueue_assets() {
    wp_enqueue_style('hc-style', plugins_url('css/style.css', __FILE__));
    wp_enqueue_script('hc-script', plugins_url('js/script.js', __FILE__), array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'hc_enqueue_assets');
