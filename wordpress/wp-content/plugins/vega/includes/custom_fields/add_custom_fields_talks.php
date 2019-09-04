<?php


add_action( 'add_meta_boxes', 'add_talks_metaboxes' );

/**
 * Adds a metabox to the right side of the screen under the â€œPublishâ€ box
 */
function add_talks_metaboxes() {

	add_meta_box(
		'vega_talks_time',
		'Horário da palestra',
		'vega_talks_time',
		'talks',
		'side',
		'high'
	);

	add_meta_box(
		'vega_talks_period',
		'Turno da palestra',
		'vega_talks_period',
		'talks',
		'side',
		'high'
	);

	add_meta_box(
		'vega_talks_room',
		'Sala da Palestra',
		'vega_talks_room',
		'talks',
		'side',
		'high'
	);
}

///
/// Output the HTML for the metaboxes
///

// Generate Html for vega_talks_time
function vega_talks_time() {
	global $post;

	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'talk_fields' );

	// Get the location data if it's already been entered
	$location = get_post_meta( $post->ID, 'vega_talks_time', true );

	// Output the field
	echo '<input type="time" name="vega_talks_time" value="' . esc_textarea( $location ) . '" class="widefat">';
}

// Generate Html for vega_talks_period
function vega_talks_period() {
	global $post;

	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'talk_fields' );

	// Get the location data if it's already been entered
	$location = get_post_meta( $post->ID, 'vega_talks_period', true );

	// Output the field
	echo '<select name="vega_talks_period" class="widefat"><option value="morning" ';
	if ( $location === 'morning' ) {
		echo 'selected';
	};
	echo '>Manhã</option><option value="afternoon"  ';
	if ( $location === 'afternoon' ) {
		echo 'selected';
	};
	echo '>Tarde</option></select> ';
}

// Generate Html for vega_talks_room
function vega_talks_room() {
	global $post;

	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'talk_fields' );

	// Get the location data if it's already been entered
	$location = get_post_meta( $post->ID, 'vega_talks_room', true );

	// Output the field
	echo '<input type="text" name="vega_talks_room" value="' . esc_textarea( $location ) . '" class="widefat">';
}

///
/// Save the metaboxes data
///

function vega_save_talks_meta( $post_id, $post ) {

	// Return if the user doesn't have edit permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}

	// Verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times.

	// vega_talks_time
	if ( ! isset( $_POST['vega_talks_time'] ) || ! wp_verify_nonce( $_POST['talk_fields'], basename( __FILE__ ) ) ) {
		return $post_id;
	}

	// vega_talks_period
	if ( ! isset( $_POST['vega_talks_period'] ) || ! wp_verify_nonce( $_POST['talk_fields'], basename( __FILE__ ) ) ) {
		return $post_id;
	}
	// vega_talks_room
	if ( ! isset( $_POST['vega_talks_room'] ) || ! wp_verify_nonce( $_POST['talk_fields'], basename( __FILE__ ) ) ) {
		return $post_id;
	}

	// Now that we're authenticated, time to save the data.

	// This sanitizes the data from the field and saves it into an array $vega_talks_time.

	//vega_talks_time
	$vega_event_data['vega_talks_time']   = $_POST['vega_talks_time'];
	$vega_event_data['vega_talks_period'] = esc_textarea( $_POST['vega_talks_period'] );
	$vega_event_data['vega_talks_room']   = esc_textarea( $_POST['vega_talks_room'] );

	// Cycle through the  array.
	foreach ( $vega_event_data as $key => $value ) {

		// Don't store custom data twice
		if ( 'revision' === $post->post_type ) {

			return;
		}
		if ( get_post_meta( $post_id, $key, false ) ) {

			// If the custom field already has a value, update it.
			update_post_meta( $post_id, $key, $value );

		} else {

			// If the custom field doesn't have a value, add it.
			add_post_meta( $post_id, $key, $value );

		}
		if ( ! $value ) {

			// Delete the meta key if there's no value
			delete_post_meta( $post_id, $key );
		}
	};
}

add_action( 'save_post', 'vega_save_talks_meta', 10, 3 );