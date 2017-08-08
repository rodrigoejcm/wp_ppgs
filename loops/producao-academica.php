
<?php
$args_evento = array( 'post_type' => 'producao',  'categoria_producao' => 'prod-acedemica' ,'posts_per_page' => 5 );
$loop_evento = new WP_Query( $args_evento );
while ( $loop_evento->have_posts() ) : $loop_evento->the_post(); ?>

<div class="row">
    <div class="col-md-4">

        <?php if (has_post_thumbnail()){   ?>
          <div class="ppgs-producao-img" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?> )"></div>
        <?php } else{ ?>
          <div class="ppgs-producao-img" style="background-image: url(' <?php echo get_bloginfo('template_url') ?>/theme/img/ichf.jpg"/>)"></div>
        <?php } ?>

    </div>
    <div class="col-md-6">
            <?php //the_category(', ') ?>
            <h3 class="ppgs-box-producao-header"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h3>
             <p class="text-muted ppgs-box-producao-autor-e-data">
              <?php the_field('autor') ?> &nbsp;
              <br>
              <?php if( get_field('data') ): ?>
                Publicação: &nbsp;<?php the_field('data'); ?>
              <?php endif; ?>
            </p>
            <p class="ppgs-box-producao-descricao"><?php $content = wp_strip_all_tags( get_the_content() );  echo mb_strimwidth($content, 0, 160, '...');?></p>
            <a href="<?php echo the_permalink() ?>">Mais informações</a>
    </div>
</div>
<br><br>

<?php endwhile; ?>

<?php if ( function_exists('b4st_pagination') ) { b4st_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Anterior', 'b4st')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Proximo', 'b4st') . ' <i class="fa fa-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>


