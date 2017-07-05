 <?php
    $args_revista = array( 'post_type' => 'revista', 'posts_per_page' => 1 );
    $loop_revista = new WP_Query( $args_revista );

     while ( $loop_revista->have_posts() ) : $loop_revista->the_post(); ?>

     <?php $imagem =  wp_get_attachment_url( get_field('imagem_capa'), "medium" );?>


    <div class="col-md-3">
     <div class="footer-revista-capa">
      <div class="footer-revista-capa-img" style="background-image: url(<?php echo $imagem;?>);">
      </div>
     </div>
    </div>

    <div class="col-md-3">
     <div class="footer-revista-info">
         <img class="ppgs-footer-logo-revista"  src="<?php echo get_bloginfo('template_url') ?>/theme/img/logo-revista-ensaios.png" alt="...">
        <ul>
            <li>Volume<?php the_field('volume_revista'); ?></li>
            <li><?php the_field('descricao_volume'); ?></li>
            <li><a href="<?php echo the_field('link'); ?>">Clique aqui para ler</a></li>
        </ul>
     </div>
    </div>

<?php endwhile; ?>
