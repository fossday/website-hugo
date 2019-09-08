<?php

//Add list image Meta-Boxes
function vega_slides_main()
{
  new vega_slides();
}

if (is_admin()) {
  add_action('load-post.php',     'vega_slides_main');
  add_action('load-post-new.php', 'vega_slides_main');
}

/**
 * The Class.
 */
class vega_slides
{

  /**
   * Hook into the appropriate actions when the class is constructed.
   */
  public function __construct()
  {
    add_action('add_meta_boxes', array($this, 'add_meta_box'));
    add_action('save_post',      array($this, 'save'));
  }

  /**
   * Adds the meta box container.
   */
  public function add_meta_box()
  {

    add_meta_box(
      '_vega_slides_main',
      __('Slides da palestra', 'textdomain'),
      array($this, 'render_meta_box_content'),
      array('talks'),
      'side',
      'high'
    );
  }

  /**
   * Save the meta when the post is saved.
   *
   * @param int $post_id The ID of the post being saved.
   */
  public function save($post_id)
  {

    /*
         * We need to verify this came from the our screen and with proper authorization,
         * because save_post can be triggered at other times.
         */

    // Check if our nonce is set.
    if (!isset($_POST['myplugin_inner_custom_box_nonce'])) {
      return $post_id;
    }

    $nonce = $_POST['myplugin_inner_custom_box_nonce'];

    // Verify that the nonce is valid.
    if (!wp_verify_nonce($nonce, 'myplugin_inner_custom_box')) {
      return $post_id;
    }

    /*
         * If this is an autosave, our form has not been submitted,
         * so we don't want to do anything.
         */
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return $post_id;
    }

    // Check the user's permissions.
    if ('page' == $_POST['post_type']) {
      if (!current_user_can('edit_page', $post_id)) {
        return $post_id;
      }
    } else {
      if (!current_user_can('edit_post', $post_id)) {
        return $post_id;
      }
    }

    /* OK, it's safe for us to save the data now. */

    // Sanitize the user input.
    $mydata = sanitize_text_field($_POST['myplugin_new_field']);

    // Update the meta field.
    update_post_meta($post_id, '_vega_slides_main', $mydata);
  }


  /**
   * Render Meta Box content.
   *
   * @param WP_Post $post The post object.
   */
  public function render_meta_box_content($post)
  {

    // Add an nonce field so we can check for it later.
    wp_nonce_field('myplugin_inner_custom_box', 'myplugin_inner_custom_box_nonce');

    // Use get_post_meta to retrieve an existing value from the database.
    $value = get_post_meta($post->ID, '_vega_slides_main', true);

    // Display the form, using the current value.
    ?>

<fieldset>

  <div style="display:flex; flex-direction:column">
    <?php
        /**
         * The label for the media field
         */
        ?>
    <br>

    <?php
        /**
         * The actual field that will hold the URL for our file
         */
        ?>
    <input type="url" id="myplugin_new_field" name="myplugin_new_field" value="<?php echo esc_attr($value); ?>"><br>

    <?php
        /**
         * The button that opens our media uploader
         * The `data-media-uploader-target` value should match the ID/unique selector of your field.
         * We'll use this value to dynamically inject the file URL of our uploaded media asset into your field once successful (in the myplugin-media.js file)
         */
        ?>
    <button type="button" class="button" id="events_video_upload_btn" data-media-uploader-target="#myplugin_new_field" data-media-uploader-image="#vega_slides-src"><?php _e('Selecionar Slides', 'myplugin') ?></button>
  </div>

</fieldset>

<?php
  }
}

// Resources
function add_slides_scripts()
{

  wp_enqueue_media();
  // Registers and enqueues the required javascript.
  wp_register_script('meta-box-image', plugins_url('vega/assets/main.js'), array('jquery'));
  wp_localize_script(
    'meta-box-image',
    'meta_image',
    array(
      'title' => __('Carregar apresentação:', 'events'),
      'button' => __('Usar arquivo', 'events'),
    )
  );
  wp_enqueue_script('meta-box-image');
}
add_action('admin_enqueue_scripts', 'add_slides_scripts', 10, 1);