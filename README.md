Fluidbox
===

Fluidbox is simply a WordPress plugin wrapper for Terry Munn’s Fluidbox jQuery plugin. I just wanted an easy way to implement it for any theme.

##Implementation##

Step one: Download. There’s only one version. Yes, that one.

Step two: Install. Log into your WordPress admin. Go to the Plugins section, and click Add New. Click Upload, then click Choose File. Locate the downloaded Fluidbox zip file, and click Install Now.

Step three: Activate. Click Activate Plugin. You’re all set!

##Options##

There are no options yet.

##The nitty gritty##

The plugin includes four files: fluidbox.css, jquery.fluidbox.min.js, fluidbox.custom.js, and fluidbox-wp.php.

The first two aren’t mine; they’re version 1.3.3 of Terry Munn’s jQuery plugin, unmodified in any way. (If it ain’t broke, don’t fix it.)

The custom js file calls fluidbox() for every link, and lets the plugin do the rest.

As for the php file, it’s just using wp_enqueue_style() and wp_enqueue_script() to load up Fluidbox’s styles and scripts. That’s it.

##License##

This plugin is licensed under Creative Commons Attribution-ShareAlike. Share it, modify it, improve upon it. If it can be done better, let me know.

**Credits:**  
Fluidbox http://terrymun.github.io/Fluidbox/