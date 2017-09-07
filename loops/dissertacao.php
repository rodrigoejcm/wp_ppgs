
<?php
$args_query = array( 'post_type' => 'dissertacao' ,'posts_per_page' => 5 );

$vari = single_cat_title('',false);

if (!empty($vari)){
  $args_query['ano_periodo'] = $vari ;
}

$wp_query = new WP_Query( $args_query );
while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

<div class="row">
     <div class="col-md-12">
            <?php //the_category(', ') ?>
            <h2 class="ppgs-box-dissertacao-header"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
             <div style="padding-left: 5px;">
               <p class="text-muted ppgs-box-producao-autor-e-data">
                <?php the_field('autor') ?> &nbsp;
                <br>
                <?php if( get_field('data') ): ?>
                  Defesa: &nbsp;<?php the_field('data'); ?>
                <?php endif; ?>
              </p>
              <p class="ppgs-box-producao-descricao"><?php $content = wp_strip_all_tags( get_the_content() );  echo mb_strimwidth($content, 0, 160, '...');?></p>
              <a href="<?php echo the_permalink() ?>">Mais informações</a>
            </div>
    </div>
</div>
<br>
<hr>

<?php endwhile; ?>

<?php if ( function_exists('b4st_pagination') ) { b4st_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Anterior', 'b4st')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Proximo', 'b4st') . ' <i class="fa fa-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>


