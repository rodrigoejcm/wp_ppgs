<?php get_header(); ?>

<div class="ppgs-titulo-pagina">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
    <br>
        <h1>Corpo Docente</h1>
          <h4><?php the_title(); ?></h4>
    </div>
   </div>
  </div>
</div>

<div class="container">
  <div class="row">

    <div class="<?php if(is_active_sidebar('sidebar-widget-area')): ?>col-sm-8<?php else: ?>col-sm-8<?php endif; ?>">
      <div id="content" role="main">
            <?php get_template_part('loops/corpo_docente', 'single'); ?>
      </div><!-- /#content -->
    </div>

    <div class="col-sm-4" id="sidebar" role="navigation">
       <?php get_sidebar(); ?>
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
