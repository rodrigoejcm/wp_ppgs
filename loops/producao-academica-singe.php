<?php
/*
Loop de Evento (single)

*/
?>

<?php if(have_posts()): while(have_posts()): the_post();?>
    <article role="article" id="post_<?php the_ID()?>">
        <header>
            <h5>
                Produção
              <em>
                <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('d-m-Y') ?></time>
              </em>
            </h5>
        </header>
        <section>
            <?php the_post_thumbnail(); ?>
            <?php the_content( __( '&hellip; ' . __('Continue reading', 'b4st' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>', 'b4st' ) ); ?>
        </section>
        <footer>
            <p class="text-muted" style="margin-bottom: 20px;">
                <i class="fa fa-folder-open-o"></i>&nbsp; <?php _e('Categoria', 'b4st'); ?>: <?php the_category(', ') ?><br/>

            </p>
        </footer>
    </article>
<?php endwhile; ?>

<?php if ( function_exists('b4st_pagination') ) { b4st_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Previous', 'b4st')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Next', 'b4st') . ' <i class="fa fa-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>

<?php else: wp_redirect(get_bloginfo('url').'/404', 404); exit; endif; ?>
