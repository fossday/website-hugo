<?php

// Init action hook
add_action('init', 'sap_custom_post_talk');

// Register a talk post type
function sap_custom_post_talk()
{


  $labels = array(
    'name'               => __('Palestras'),
    'singular_name'      => __('Palestra'),
    'add_new'            => __('Add Nova Palestra'),
    'add_new_item'       => __('Add Nova Palestra'),
    'edit_item'          => __('Editar Palestra'),
    'new_item'           => __('Nova Palestra'),
    'all_items'          => __('Todas Palestras'),
    'view_item'          => __('Ver Palestra'),
    'search_items'       => __('Procurar Palestra'),
    'featured_image'     => 'Foto Palestrante',
    'set_featured_image' => 'Add Foto'
  );

  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our Podcasts and movie specific data',
    'public'            => true,
    'menu_position'     => 5,
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'rewrite' => array('slug' => 'palestras'),
    'query_var'         => 'talk',
    'capability_type' => array('talk', 'talks'),
    'map_meta_cap'        => true,
    'taxonomies' => array('category','city_events'),
    'menu_icon'          => 'dashicons-format-status',
    'show_in_rest' => true,
    'supports' => array('editor','title','excerpt','comments','custom-fields','author')
  );

  register_post_type('talks', $args);
}

//Register custom Taxonomy
add_action('init', 'custom_taxonomy_events', 0);

function custom_taxonomy_events() {
 
  $labels = array(
    'name' => _x( 'Eventos', 'Nome e ano do evento' ),
    'singular_name' => _x( 'Evento', 'taxonomy singular name' ),
    'search_items' =>  __( 'Procurar Eventos' ),
    'all_items' => __( 'Todos Eventos' ),
    'parent_item' => __( 'Evento Pai' ),
    'parent_item_colon' => __( 'Evento Pai:' ),
    'edit_item' => __( 'Editar Evento' ), 
    'update_item' => __( 'Atualizar Evento' ),
    'add_new_item' => __( 'Add Novo Evento' ),
    'new_item_name' => __( 'Novo nome de Evento' ),
    'menu_name' => __( 'Eventos'),
  ); 

  register_taxonomy('city_events',array('deals'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'show_in_rest' => true,
    'rewrite' => array( 'slug' => 'eventos_cidade', 'with_front' => false)
  ));
 
  
}
