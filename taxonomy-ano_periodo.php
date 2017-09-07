<?php get_header(); ?>

<?php include(locate_template('template-part/title-taxonomy-ano-periodo.php')); ?>

<div class="container">
  <div class="row">

    <div class="<?php if(is_active_sidebar('sidebar-widget-area')): ?>col-sm-8<?php else: ?>col-sm-8<?php endif; ?>">
      <div id="content" role="main">

      <?php
         $pt =  get_post_type();
         $pto = get_post_type_object($pt);
       ?>
       <br><br>
       <?php get_template_part('loops/'.$pt); ?>

      </div><!-- /#content -->
    </div>

    <div class="col-sm-4" id="sidebar" role="navigation">
        <?php get_template_part('template-part/sidebar-part-ano-periodo-cats'); ?>
       <br>
       <?php get_template_part('template-part/sidebar-part-noticia'); ?>
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>


     <h1><?php  echo $pto -> label ?></h1>
     <h4>Período: <?php single_cat_title(); ?></h4>
