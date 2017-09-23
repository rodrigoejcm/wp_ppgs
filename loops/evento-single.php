<?php
/*
Loop de Evento (single)

*/
?>

<?php if(have_posts()): while(have_posts()): the_post();?>
    <article role="article" id="post_<?php the_ID()?>">
        <header>
            <h5>
              <em>
                <i class="fa fa-calendar-o"></i> <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('d-m-Y') ?></time>
              </em>
              &nbsp;
              &nbsp;
               <?php if (get_field('hora_do_evento')){ ?>
                <i class="fa fa-clock-o"></i>&nbsp;<?php the_field('hora_do_evento') ?> &nbsp;
               <?php } ?>
             &nbsp;
             <?php if (get_field('local_do_evento')){ ?>
                <i class="fa fa-map-marker"></i>&nbsp;<?php the_field('local_do_evento') ?> &nbsp;
               <?php } ?>
            </h5>
        </header>
        <section>

          <?php if(has_post_thumbnail()):?>
                <div>
                    <div style="width: 100%; height: 200px; background-position: center; background-size: 100%;
                    background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-repeat: no-repeat;"></div>
                    <br>
               </div>
            <?php endif; ?>

            <br>
            <?php the_content( __( '&hellip; ' . __('Continue reading', 'b4st' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>', 'b4st' ) ); ?>
        </section>
        <footer>
            <p class="text-muted" style="margin-bottom: 20px;">
                <i class="fa fa-folder-open-o"></i>&nbsp; <?php _e('Categoria', 'b4st'); ?>:   <?php  $idpost = get_the_ID();   echo ppgs_custom_taxonomies_terms_links( $idpost, 'categoria_evento') ; ?><br/>

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
