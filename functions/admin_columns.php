<?php

/*-------------------------------------------------------------------------------
  Custom Columns
-------------------------------------------------------------------------------*/

function revista_columns($columns)
{

    $columns['imagem_capa' ] = 'Capa';
    $columns['title']   = 'Volume';
    unset($columns['date']);
    $columns['descricao_volume']  = 'Descrição';



  return $columns;
}

function revista_custom_columns($column)
{

  global $post;

    /* ?><pre class="erro-rodrigo" ><?php var_dump( $column ); ?></pre><?php */

  if($column == 'imagem_capa')
  {
    echo wp_get_attachment_image( get_field('imagem_capa'), array(50,50) );

  }
  elseif($column == 'title')
  {
    echo  "Volume " . get_field('volume_revista');
  }
  elseif($column == 'descricao_volume')
  {
    echo get_field('descricao_volume');
  }
}

add_action("manage_revista_posts_custom_column", "revista_custom_columns");
add_filter("manage_edit-revista_columns", "revista_columns");



function revcon_change_cat_object() {
    global $wp_taxonomies;
    $labels = &$wp_taxonomies['category']->labels;
    $labels->name = 'Destaque';
    $labels->singular_name = 'Destaque';
    $labels->add_new = 'Adicionar Destaque';
    $labels->add_new_item = 'Adicionar Destaque';
    $labels->edit_item = 'Editar Destaque';
    $labels->new_item = 'Destaque';
    $labels->view_item = 'Visualizar  Destaque';
    $labels->search_items = 'Buscar Destaque';
    $labels->not_found = 'Destaque não encontrado';
    $labels->not_found_in_trash = 'Nenhum Destaque encontrado';
    $labels->all_items = 'Todos os Destaque';
    $labels->menu_name = 'Destaque';
    $labels->name_admin_bar = 'Destaque';
}
add_action( 'init', 'revcon_change_cat_object' );

