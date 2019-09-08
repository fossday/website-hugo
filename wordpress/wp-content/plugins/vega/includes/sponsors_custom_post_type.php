<?php

// Init action hook
add_action('init', 'sponsor_custom_post_event');

// Register a talk post type
function sponsor_custom_post_event()
{


  $labels = array(
    'name'               => __('Patrocinadores'),
    'singular_name'      => __('Patrocinador'),
    'add_new'            => __('Adicionar novo Patrocinador'),
    'add_new_item'       => __('Adicionar novo Patrocinador'),
    'edit_item'          => __('Editar Patrocinador'),
    'new_item'           => __('Novo Patrocinador'),
    'all_items'          => __('Todos Patrocinadores'),
    'view_item'          => __('Ver Patrocinador'),
    'search_items'       => __('Procurar Patrocinador'),
    'featured_image'     => 'Logo Patrocinador',
    'set_featured_image' => 'Adicionar logo'
  );

  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our Podcasts and movie specific data',
    'public'            => true,
    'menu_position'     => 6,
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'rewrite' => array('slug' => 'patrocinadores'),
    'query_var'         => 'sponsor',
    'capability_type' => 'post',
    'menu_icon'          => 'dashicons-sos',
    'show_in_rest' => true,
    'supports' => array('editor', 'title', 'thumbnail', 'excerpt', 'custom-fields')
  );

  register_post_type('sponsors', $args);
}

