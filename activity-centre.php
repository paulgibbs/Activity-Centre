<?php
/*
Plugin Name: Activity Centre
Plugin URI: http://example.com/
Description: Experimenting with BuddyPress' activity stream.
Version: 0.1
Author: Paul Gibbs
Author URI: http://byotos.com/ 
*/

/**
 * Copyright (c) 2013 Paul Gibbs. All rights reserved.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * long with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Loads Activity Centre if the BuddyPress Activity Stream is active.
 *
 * @since Activity Centre (1.0)
 */
function ac_init() {
	if ( ! bp_is_active( 'activity' ) )
		return;

	require 'includes/actions.php';
	require 'includes/filters.php';
	require 'includes/functions.php';
}
add_action( 'bp_init', 'ac_init' );
