<?php
// Actions

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Make changes to the standard BP nav bars
add_action( 'bp_ready', 'ac_modify_bp_nav_bars' );