<?php get_header(); ?>

<div class="ppgs-titulo-pagina">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
    <br>
        <h1>Notícias</h1>
          <h4><?php the_title(); ?></h4>
    </div>
   </div>
  </div>
</div>


<div class="container">
  <div class="row">

    <div class="<?php if(is_active_sidebar('sidebar-widget-area')): ?>col-sm-8<?php else: ?>col-sm-8<?php endif; ?>">
      <div id="content" role="main">
        <?php get_template_part('loops/content', 'single'); ?>
      </div><!-- /#content -->
    </div>

    <div class="col-sm-4" id="sidebar" role="navigation">
        <?php get_template_part('template-part/sidebar-part-noticia-cats'); ?>
        <br>
       <?php get_template_part('template-part/sidebar-part-noticia'); ?>
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
