<?php

/*
Plugin Name: Fluidbox for WordPress
Plugin URI: http://eichefam.net/projects/fluidbox
Description: Fluidbox jQuery plugin for WordPress
Version: 1.0
Author: Paul Eiche
Author URI: http://eichefam.net/
License: GPLv2 or later
 
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
*/

function fluidbox_scripts(){
    wp_enqueue_style( 'jquery_fluidbox', plugins_url( 'css/fluidbox.css', __FILE__ ) );
    
    wp_enqueue_script( 'jquery_fluidbox', plugins_url( 'js/jquery.fluidbox.min.js', __FILE__ ), array( 'jquery' ), true );
    wp_enqueue_script( 'jquery_fluidboxcustom', plugins_url( 'js/fluidbox.custom.js', __FILE__ ), array( 'jquery_fluidbox' ), true );
}
add_action( 'wp_enqueue_scripts', 'fluidbox_scripts' );

?>
