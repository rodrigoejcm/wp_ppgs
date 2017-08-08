
<div id="slider-index" class="carousel slide ppgs-slider" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#slider-index" data-slide-to="0" class="active"></li>
    <li data-target="#slider-index" data-slide-to="1"></li>
    <li data-target="#slider-index" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">

<?php
$args = array(
  'post_type' => array('evento', 'post', 'producao', 'selecao'),
  'category_name' => 'destaque'
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {

    $i = 0;
    while ( $query->have_posts() ) {

        $query->the_post();
        ?>

      <div class="carousel-item <?php if($i == 0){echo "active";}  ?>">

          <?php if (has_post_thumbnail()){ ?>

            <img class="d-block center"  src="<?php echo the_post_thumbnail_url(); ?>">

          <?php } else { ?>

            <img class="d-block center"  src="<?php echo get_bloginfo('template_url') ."/theme/img/default-destaque.png";  ?>">

          <?php } ?>

        <div class="carousel-caption d-none d-md-block">
          <h3><?php the_title(); ?></h3>
          <br><br>
          <?php

            $conteudo =wp_strip_all_tags( get_the_content() );
            $conteudo2 = explode('.', $conteudo ) ;
            $resultado = $conteudo2[0];

            if (strlen($conteudo2[0]) > 140){
              $resultado =   mb_strimwidth($conteudo,0,140,'...');
            }

            if ($resultado != ""){
          ?>
          '''<p><?php echo $resultado?></p>
          <?php
            }
          ?>
          <br><br>
          <a href="<?php echo the_permalink(); ?>">Clique aqui para ler mais</a>
        </div>
      </div>



        <?php
        $i ++;

    }

}

 ?>

  </div>
  <a class="carousel-control-prev" href="#slider-index" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#slider-index" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
<br><br>
