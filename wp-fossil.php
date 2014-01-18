<?php

/*
Plugin Name: WP Fossil
Plugin URI: http://zslabs.com
Description: Provides support for media queries and emulating CSS3 pseudo-classes and attribute selectors in Internet Explorer 6-8.
Version: 1.0
Author: Zach Schnackel
Author URI: http://zslabs.com
*/

/**
 * Copyright (c) 2013 Zach Schnackel. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

/**
 * Load scripts
 * Need to do this inline until wp_add_script_data() is supported (as twentytwelve does)
 * @return void
 *
 * @since  0.1
 */
function wpf_load_scripts() { ?>
	<!--[if lt IE 9]>
		<script src="<?php echo plugin_dir_url(__FILE__); ?>assets/js/build/ie.min.js" type="text/javascript"></script>
	<![endif]-->
<?php }
add_action( 'wp_head', 'wpf_load_scripts', 8 );