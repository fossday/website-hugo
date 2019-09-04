<?php

function add_roles_on_plugin_activation()
{
  remove_role( 'speaker' );
  add_role(
    'speaker',
    __('Palestrante'),
    array(
	      'level_1' => true,
	      'read'         => true,
	      'read_talks'  => true,
	      'edit_talk'   => true,
	      'edit_talks'   => true,
	      'edit_published_talks' => true,
	      'edit_posts' => false,
	      'publish_posts' => false,
	      'delete_posts' => false,
	      'upload_files'  => true
    )
  );

  // Role for update
  $roles = array('editor','administrator');

  // Loop through each role and assign capabilities
  foreach ($roles as $the_role) {

    $role = get_role($the_role);
    
    $role->add_cap('read');
    $role->add_cap('read_talk');
    $role->add_cap('read_private_talks');
    $role->add_cap('edit_talk');
    $role->add_cap('edit_talks');
    $role->add_cap('edit_others_talks');
    $role->add_cap('edit_published_talks');
    $role->add_cap('publish_talks');
    $role->add_cap('delete_others_talks');
    $role->add_cap('delete_private_talks');
    $role->add_cap('delete_published_talks');
  }
}