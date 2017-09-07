<div class="ppgs-sidebar-box">
<h4>Períodos</h4>
<ul>
<?php




$tipo = get_post_type();
$categories = ppgs_get_terms_by_post_type( 'ano_periodo' , $tipo );





$ids = array();

foreach ($categories as $cat)
{
    array_push($ids, $cat -> term_id );
}

$cat_args = array(
        'taxonomy'               => 'ano_periodo',
        'orderby'                => 'name',
        'order'                  => 'ASC',
        'include'                => $ids,
        'exclude'                => array(),
        'exclude_tree'           => array(),
        'number'                 => '',
        'offset'                 => '',
        'fields'                 => 'all',
        'count'                  => false,
        'name'                   => '',
        'slug'                   => '',
        'term_taxonomy_id'       => '',
        'hierarchical'           => true,
        'search'                 => '',
        'name__like'             => '',
        'description__like'      => '',
        'pad_counts'             => false,
        'get'                    => '',
        'child_of'               => 0,
        'parent'                 => '',
        'childless'              => false,
        'cache_domain'           => 'core',
        'update_term_meta_cache' => true,
        'meta_query'             => '',
        'meta_key'               => '',
        'meta_value'             => '',
        'meta_type'              => '',
        'meta_compare'           => '',
    );

$categories2 = get_terms( $cat_args );

foreach ($categories2 as $cat)
{
     $nome=$cat -> slug;
?>

<li><a href="<?php echo get_term_link($cat)  ?>" alt="">  <?php echo  ($cat -> name);   ?> </a></li>

<?php
}
 ?>
</ul>
</div>






