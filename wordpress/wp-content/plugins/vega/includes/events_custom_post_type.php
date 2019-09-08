<?php

// Init action hook
add_action('init', 'sap_custom_post_event');

// Register a talk post type
function sap_custom_post_event()
{


  $labels = array(
    'name'               => __('Eventos'),
    'singular_name'      => __('Evento'),
    'add_new'            => __('Adicionar novo Evento'),
    'add_new_item'       => __('Adicionar novo Evento'),
    'edit_item'          => __('Editar Evento'),
    'new_item'           => __('Novo Evento'),
    'all_items'          => __('Todos Eventos'),
    'view_item'          => __('Ver Evento'),
    'search_items'       => __('Procurar Evento'),
    'featured_image'     => 'Capa Evento',
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
    'rewrite' => array('slug' => 'eventos'),
    'query_var'         => 'event',
    'capability_type' => 'post',
    'menu_icon'          => 'dashicons-tickets',
    'show_in_rest' => true,
    'supports' => array('editor', 'title', 'thumbnail', 'excerpt', 'custom-fields')
  );

  register_post_type('events', $args);
}

