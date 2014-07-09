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

wp_enqueue_style( 'jquery.fluidbox', WP_PLUGIN_URL . '/fluidbox/css/fluidbox.css', false, '1.3.3' );

wp_enqueue_script( 'jquery.fluidbox', WP_PLUGIN_URL . '/fluidbox/js/jquery.fluidbox.min.js', array( 'jquery' ), '1.3.3', true );
wp_enqueue_script( 'jquery.fluidboxcustom', WP_PLUGIN_URL . '/fluidbox/js/fluidbox.custom.js', array( 'jquery', 'jquery.fluidbox' ), '1.0', true );

?>