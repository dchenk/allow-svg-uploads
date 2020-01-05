<?php
/*
Plugin Name: Allow SVG Upload
Plugin URI: https://widerwebs.com
Description: Allow editors and administrators to upload SVG files.
Version: 1.0
Author: widerwebs.com
Author URI: https://widerwebs.com
License: GPL-2.0+
*/

function ww_allow_svg_upload($mimes = []) {
	if (current_user_can('edit_others_posts') {
		$mimes['svg'] = 'image/svg+xml';
	}
	return $mimes;
}

add_filter('upload_mimes', 'ww_allow_svg_upload');
