
<?php


$cat_args = array( 'taxonomy' => 'tipo_de_docencia');
$categories = get_terms($cat_args);

foreach ($categories as $cat) {

$args_cd = array( 'post_type' => 'corpo_docente', 'tipo_de_docencia' => ($cat -> slug) , 'posts_per_page' => 15 );
$loop_cd = new WP_Query( $args_cd );

?>

<h3><?php echo $cat -> name; ?></h3>

<?php
while ( $loop_cd->have_posts() ) : $loop_cd->the_post(); ?>

<div class="row">
    <div class="col-md-2">
        <?php $imagem =  wp_get_attachment_url( get_field('foto'), "small" );?>
        <div class="ppgs-box-cp-img" style="background-image: url(<?php echo $imagem;?>);">
        </div>
    </div>
    <div class="col-md-6">
            <?php //the_category(', ') ?>
            <h3 class="ppgs-box-cp-header">
              <a href="<?php the_permalink(); ?>"><?php the_title()?></a>
            </h3>
             <p class="text-muted ppgs-box-cp-info">
             <?php the_field('e-mail'); ?>
             <br>
             <?php the_field('link_cappes'); ?>
            </p>
            <a href="<?php echo the_permalink() ?>">Mais informações</a>
    </div>
</div>
<hr>
<?php endwhile;
?>

<br>

<?php
}

?>

<?php if ( function_exists('b4st_pagination') ) { b4st_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Anterior', 'b4st')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Proximo', 'b4st') . ' <i class="fa fa-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>


