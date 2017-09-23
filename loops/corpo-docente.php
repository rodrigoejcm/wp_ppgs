
<?php


$cat_args = array( 'taxonomy' => 'categoria_docencia', 'orderby' => 'slug');
$categories = get_terms($cat_args);

foreach ($categories as $cat) {

$args_cd = array( 'post_type' => 'corpo_docente', 'categoria_docencia' => ($cat -> slug) , 'posts_per_page' => 15,  'orderby' => 'title',  'order' => 'ASC' );
$loop_cd = new WP_Query( $args_cd );

?>

<h3><?php echo $cat -> name; ?></h3>
<br>
<?php
while ( $loop_cd->have_posts() ) : $loop_cd->the_post(); ?>

<?php if($cat -> slug == '01-coordenacao'  ||  $cat -> slug == '02-vicecoordenacao' ){ ?>

<div class="row">
    <div class="col-md-8">
            <h3 class="ppgs-box-cp-header">
              <a href="<?php the_permalink(); ?>"><?php the_title()?></a>
            </h3>
    </div>
</div>

<?php }else{ ?>
<div class="row">
    <div class="col-md-2">
        <?php $imagem =  wp_get_attachment_url( get_field('foto'), "small" );?>
        <?php  if (!get_field('foto'))
          { $imagem = get_bloginfo('template_url') ."/theme/img/user.png"; }
          ?>
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
             </p>
            <a href="<?php echo the_permalink() ?>">Mais informações</a>
    </div>
</div>
<?php } ?>
<hr>
<?php endwhile;
?>



<?php
}

?>

<?php if ( function_exists('b4st_pagination') ) { b4st_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Anterior', 'b4st')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Proximo', 'b4st') . ' <i class="fa fa-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>


