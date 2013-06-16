<?php
// Filters

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Add another location BP's theme compat. template stack
add_filter( 'bp_get_template_stack', 'ac_add_template_stack_locations', 100 );