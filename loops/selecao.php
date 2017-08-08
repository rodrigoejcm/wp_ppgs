
<?php
$args_evento = array( 'post_type' => 'selecao', 'posts_per_page' => 10 );
$loop_evento = new WP_Query( $args_evento );
while ( $loop_evento->have_posts() ) : $loop_evento->the_post(); ?>

<div>

            <h3 class="ppgs-box-selecao-header">
              <span><?php  $idpost = get_the_ID();   echo ppgs_custom_taxonomies_terms_links( $idpost, 'periodo_selecao') ; ?></span>
              <a href="<?php the_permalink(); ?>"><?php the_title()?></a>
            </h3>
</div>
<br>


<?php endwhile; ?>

<?php if ( function_exists('b4st_pagination') ) { b4st_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Anterior', 'b4st')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Proximo', 'b4st') . ' <i class="fa fa-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>


