<?php


add_action( 'add_meta_boxes', 'add_events_metaboxes' );

/**
 * Adds a metabox to the right side of the screen under the â€œPublishâ€ box
 */
function add_events_metaboxes() {

	add_meta_box(
		'vega_events_location',
		'Local do evento',
		'vega_events_location',
		'events',
		'normal',
		'high'
	);

  add_meta_box(
	'vega_events_address',
	'Endereço do evento',
	'vega_events_address',
	'events',
	'normal',
	'high'
);

add_meta_box(
	'vega_events_iframe',
	'iFrame do OpenStreetMaps',
	'vega_events_iframe',
	'events',
	'normal',
	'high'
);

add_meta_box(
	'vega_events_map_link',
	'Link para o mapa',
	'vega_events_map_link',
	'events',
	'normal',
	'high'
);

	add_meta_box(
		'vega_events_date',
		'Data do Evento',
		'vega_events_date',
		'events',
		'side',
		'high'
  );

  add_meta_box(
		'vega_events_submit_link',
		'Link de submissão de palestras',
		'vega_events_submit_link',
		'events',
		'side',
		'high'
  );

  add_meta_box(
		'vega_events_subscribe_link',
		'Link de inscrição',
		'vega_events_subscribe_link',
		'events',
		'side',
		'high'
  );
}

///
/// Output the HTML for the metaboxes
///

// Generate Html for vega_events_location
function vega_events_location() {
  global $post;
  
	// Nonce field to validate form request came from current site
  wp_nonce_field( basename( __FILE__ ), 'event_fields' );
  
	// Get the location data if it's already been entered
  $location = get_post_meta( $post->ID, 'vega_events_location', true );
  
	// Output the field
	echo '<input type="text" name="vega_events_location" value="' . esc_textarea( $location )  . '" class="widefat">';
}

// Generate Html for vega_events_address
function vega_events_address() {
	global $post;
	
	  // Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );
	
	  // Get the location data if it's already been entered
	$location = get_post_meta( $post->ID, 'vega_events_address', true );
	
	  // Output the field
	  echo '<input type="text" name="vega_events_address" value="' . esc_textarea( $location )  . '" class="widefat">';
  }

// Generate Html for vega_events_map_link
function vega_events_map_link() {
	global $post;
	
	  // Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );
	
	  // Get the location data if it's already been entered
	$location = get_post_meta( $post->ID, 'vega_events_map_link', true );
	
	  // Output the field
	  echo '<input type="text" name="vega_events_map_link" value="' . esc_textarea( $location )  . '" class="widefat">';
  }

// Generate Html for vega_events_iframe
function vega_events_iframe() {
	global $post;
	
	  // Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );
	
	  // Get the location data if it's already been entered
	$location = get_post_meta( $post->ID, 'vega_events_iframe', true );
	
	  // Output the field
	  echo '<textarea name="vega_events_iframe" class="widefat">' . $location . '</textarea>';
  }


// Generate Html for vega_events_date
function vega_events_date() {
  global $post;
  
  wp_nonce_field( basename( __FILE__ ), 'event_fields' );
  
  $location = get_post_meta( $post->ID, 'vega_events_date', true );
  
	echo '<input type="date" name="vega_events_date" value="' . esc_textarea( $location )  . '" class="widefat">';
}

// Generate Html for vega_events_submit_link
function vega_events_submit_link() {
  global $post;
  
  wp_nonce_field( basename( __FILE__ ), 'event_fields' );
  
  $location = get_post_meta( $post->ID, 'vega_events_submit_link', true );
  
	echo '<input type="text" name="vega_events_submit_link" value="' . esc_textarea( $location )  . '" class="widefat">';
}

// Generate Html for vega_events_subscribe_link
function vega_events_subscribe_link() {
  global $post;
  
  wp_nonce_field( basename( __FILE__ ), 'event_fields' );
  
  $location = get_post_meta( $post->ID, 'vega_events_subscribe_link', true );
  
	echo '<input type="text" name="vega_events_subscribe_link" value="' . esc_textarea( $location )  . '" class="widefat">';
}

///
/// Save the metaboxes data
///

function vega_save_events_meta( $post_id, $post ) {

	// Return if the user doesn't have edit permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
  }
  
	// Verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times.
  
  // vega_events_location
	if ( ! isset( $_POST['vega_events_location'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
  }
  
  // vega_events_address
	if ( ! isset( $_POST['vega_events_address'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
  }

  // vega_events_iframe
	if ( ! isset( $_POST['vega_events_iframe'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
  }

  // vega_events_map_link
	if ( ! isset( $_POST['vega_events_map_link'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
  }

  // vega_events_date
  if ( ! isset( $_POST['vega_events_date'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
  }

  // vega_events_submit_link
  if ( ! isset( $_POST['vega_events_submit_link'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
  }

  // vega_events_subscribe_link
  if ( ! isset( $_POST['vega_events_subscribe_link'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
  }

  // Now that we're authenticated, time to save the data.
  
  // This sanitizes the data from the field and saves it into an array $vega_events_location.
  
  //vega_events_location
  $vega_event_data['vega_events_location'] = esc_textarea( $_POST['vega_events_location'] );
  $vega_event_data['vega_events_address'] = esc_textarea( $_POST['vega_events_address'] );
  $vega_event_data['vega_events_iframe'] = $_POST['vega_events_iframe'];
  $vega_event_data['vega_events_map_link'] = esc_textarea( $_POST['vega_events_map_link'] );
  $vega_event_data['vega_events_date'] = esc_textarea( $_POST['vega_events_date'] );
  $vega_event_data['vega_events_submit_link'] = esc_textarea( $_POST['vega_events_submit_link'] );
  $vega_event_data['vega_events_subscribe_link'] = esc_textarea( $_POST['vega_events_subscribe_link'] );
  
	// Cycle through the  array.
	foreach ($vega_event_data as $key => $value) {

		// Don't store custom data twice
		if ('revision' === $post->post_type ) {

			return;
		}
		if (get_post_meta( $post_id, $key, false ) ) {

			// If the custom field already has a value, update it.
      		update_post_meta( $post_id, $key, $value );
      
		} else {

			// If the custom field doesn't have a value, add it.
      		add_post_meta( $post_id, $key, $value);
      
		}
		if (!$value) {

			// Delete the meta key if there's no value
			delete_post_meta( $post_id, $key );
		}
  };
}
add_action( 'save_post', 'vega_save_events_meta', 1, 2 );