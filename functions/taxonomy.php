<?php


function ppgs_custom_taxonomies_terms_links($id,$taxonomy_slug) {

    $out = array();

    $terms = get_the_terms( $id, $taxonomy_slug );


    if (  $terms && ! is_wp_error( $terms ) ) {

        foreach ( $terms as $term ) {
           $link = get_term_link( $term->slug, $taxonomy_slug );
           $out[] = "<a href=". $link.">".$term->name."</a>";
        }
    }

     $result = join( " , ", $out );

    return  $result;
}

?>

