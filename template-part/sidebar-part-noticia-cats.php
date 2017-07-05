<h4>Notícias</h4>
<ul>
<?php


$cat_args = array( 'taxonomy' => 'categoria_noticia');
$categories = get_terms($cat_args);


foreach ($categories as $cat)

{
    $nome=$cat -> slug;
?>

<li><a href="<?php echo get_term_link( $cat)  ?>" alt="">  <?php echo  ($cat -> name) . " (" .  ($cat -> count)  . ")";   ?> </a></li>

<?php
}
 ?>
</ul>
