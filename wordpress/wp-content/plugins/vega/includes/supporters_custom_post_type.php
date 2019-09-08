<?php

// Init action hook
add_action('init', 'supporter_custom_post_event');

// Register a talk post type
function supporter_custom_post_event()
{


  $labels = array(
    'name'               => __('Apoiadores'),
    'singular_name'      => __('Apoiador'),
    'add_new'            => __('Adicionar novo Apoiador'),
    'add_new_item'       => __('Adicionar novo Apoiador'),
    'edit_item'          => __('Editar Apoiador'),
    'new_item'           => __('Novo Apoiador'),
    'all_items'          => __('Todos Apoiadores'),
    'view_item'          => __('Ver Apoiador'),
    'search_items'       => __('Procurar Apoiador'),
    'featured_image'     => 'Logo Apoiador',
    'set_featured_image' => 'Adicionar imagem'
  );

  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our Podcasts and movie specific data',
    'public'            => true,
    'menu_position'     => 4,
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'rewrite' => array('slug' => 'apoiadores'),
    'query_var'         => 'supporter',
    'capability_type' => 'post',
    'menu_icon'          => 'dashicons-groups',
    'show_in_rest' => true,
    'supports' => array('editor', 'title', 'thumbnail', 'excerpt', 'custom-fields')
  );

  register_post_type('supporter', $args);
}

