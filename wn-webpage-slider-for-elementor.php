<?php

/**
 * @package WN WebPage Slider for Elementor
 */
/*
Plugin Name: WN WebPage Slider for Elementor
Plugin URI: https://wirenomads.com
Description: WN Webpage Slider for Elementor, is an addon for Elementor Page Builder Plugin, which allows you to select three images and show them within a desktop markup with a fancy scroll and slide to the right effect. From the back-end you will be able to set some parameters as width, height, horizontal separation, vertical separartion, delay after scroll, slide velocity among others. 
Author: Yaidier Perez
Version: 1.0
Author URI: 
License: GPLv2 or later
*/
/*
Copyright (C) 2020  Yaidier Perez

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/
if (!defined('ABSPATH')) {
    exit;
}

define('WN_WEBPAGE_SLIDER_ELEMENTOR_DIR', __DIR__);
define('WN_WEBPAGE_SLIDER_ELEMENTOR_URL', plugin_dir_url(__FILE__));
define('WN_WEBPAGE_SLIDER_ELEMENTOR_VERSION', '1.0');

function load_wn_webpage_slider_elementor()
{
    require_once WN_WEBPAGE_SLIDER_ELEMENTOR_DIR . '/assets/elementor-widget/my-widgets.php';
}

class WN_WebPage_Slider_Elementor
{
    public $my_plugin_name;
    function __construct()
    {
        $this->my_plugin_name = plugin_basename(__FILE__);
    }

    function register()
    {
        add_action('elementor/init', 'load_wn_webpage_slider_elementor');
    }

    function activate()
    {
    }

    function deactivate()
    {
    }

    function uninstall()
    {
        // delete_option('WN_Image_Hover');
    }
}

if (class_exists('WN_WebPage_Slider_Elementor')) {
    $wn_webpage_slider_elementor = new WN_WebPage_Slider_Elementor();
    $wn_webpage_slider_elementor->register();
}

//activation
register_activation_hook(__FILE__, array($wn_webpage_slider_elementor, 'activate'));
//deactivation
register_deactivation_hook(__FILE__, array($wn_webpage_slider_elementor, 'deactivate'));
//uninstall
// register_unisntall_hook( __FILE__, array($wn_webpage_slider_elementor, 'uninstall'));
