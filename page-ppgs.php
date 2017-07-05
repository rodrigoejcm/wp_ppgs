<?php get_header(); ?>

<?php get_template_part('template-part/slider-index'); ?>

<div class="container">

  <div class="row">
    <div class="col-sm-12 col-md-7">
      <h3>Últimas Notícias</h3>
      <br>
       <div id="content-noticia" role="main">
        <?php get_template_part('loops/noticia-index'); ?>
      </div>
      <a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="ppgs-link-todas-noticias">Ver todas as notícias</a>
      <br><br>
    </div>

    <div class="col-sm-12 col-md-5">
      <h3>Últimos Eventos</h3>
      <br>
       <div id="content-evento" role="main">
          <?php get_template_part('loops/evento-index'); ?>
      </div>
      <a href="<?php echo get_post_type_archive_link( 'evento' ); ?>" class="ppgs-link-todos-ventos">Ver todos os eventos</a>
      <br><br>
    </div>


  </div><!-- /.row -->
</div><!-- /.container -->
</div>

<?php get_footer(); ?>
