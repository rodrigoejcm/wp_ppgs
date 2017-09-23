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

function ppgs_custom_taxonomies_terms_list($id,$taxonomy_slug) {

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

function ppgs_custom_taxonomies_terms_links_space($id,$taxonomy_slug) {

    $out = array();

    $terms = get_the_terms( $id, $taxonomy_slug );


    if (  $terms && ! is_wp_error( $terms ) ) {

        foreach ( $terms as $term ) {
           $link = get_term_link( $term->slug, $taxonomy_slug );
           $out[] = "<span>".$term->name."</span>";
        }
    }

     $result = join( "  ", $out );

    return  $result;
}


function ppgs_get_terms_by_post_type( $taxonomies, $post_types ) {

    global $wpdb;

    $query = $wpdb->prepare(
        "SELECT t.*, COUNT(*) from $wpdb->terms AS t
        INNER JOIN $wpdb->term_taxonomy AS tt ON t.term_id = tt.term_id
        INNER JOIN $wpdb->term_relationships AS r ON r.term_taxonomy_id = tt.term_taxonomy_id
        INNER JOIN $wpdb->posts AS p ON p.ID = r.object_id
        WHERE p.post_type IN('%s') AND tt.taxonomy IN('%s')
        GROUP BY t.term_id",
        $post_types,
        $taxonomies
    );

    $results = $wpdb->get_results( $query );

    return $results;


}

