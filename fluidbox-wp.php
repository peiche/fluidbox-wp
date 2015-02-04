<?php

/*
Plugin Name: Fluidbox for WordPress
Plugin URI: http://eichefam.net/projects/fluidbox
Description: Fluidbox jQuery plugin for WordPress
Version: 1.0
Author: Paul Eiche
Author URI: http://eichefam.net/
License: Creative Commons Attribution-ShareAlike
 
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
*/

function fluidbox_scripts(){
wp_enqueue_style( 'jquery.fluidbox', plugins_url( 'css/fluidbox.css', __FILE__ ), false, '1.3.3' );
wp_enqueue_script( 'jquery.fluidbox', plugins_url( 'js/jquery.fluidbox.min.js', __FILE__ ), array( 'jquery' ), '1.3.3', true );
wp_enqueue_script( 'jquery.fluidboxcustom', plugins_url( 'js/fluidbox.custom.js', __FILE__ ), array( 'jquery', 'jquery.fluidbox' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'fluidbox_scripts' );

?>
