<?php
// Functions

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Removes the messages, settings, friends items from BP's primary nav.
 *
 * Hooked to wp/10.
 *
 * @since Activity Centre (1.0)
 */
function ac_modify_bp_nav_bars() {
	global $bp;

	if ( bp_is_active( 'messages' ) )
		bp_core_remove_nav_item( buddypress()->messages->id );

	if ( bp_is_active( 'friends' ) )
		bp_core_remove_nav_item( buddypress()->friends->id );

	if ( bp_is_active( 'settings' ) )
		bp_core_remove_nav_item( buddypress()->settings->id );
}

/**
 * Add another location to the template stack so we can override theme compat. templates.
 *
 * @param array $folders
 * @return array
 * @since Activity Centre (1.0)
 */
function ac_add_template_stack_locations( $folders ) {
	return apply_filters( 'ac_add_template_stack_locations', array_merge( array( plugin_dir_path( __FILE__ ) . '../templates/' ), $folders ) );
}