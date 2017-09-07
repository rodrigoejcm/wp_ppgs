<?php

?>

<?php if(have_posts()): while(have_posts()): the_post();?>
    <article role="article" id="post_<?php the_ID()?>">
        <header>
            <h3 class="ppgs-box-noticia-header"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
            <p class="text-muted" style="margin-bottom: -10px; font-size: 11px;">
                <i class="fa fa-clock-o"></i>&nbsp; <?php the_time('d-m-Y')?>&nbsp;
                <span class="ppgs-cats">
                    <?php  $idpost = get_the_ID();   echo ppgs_custom_taxonomies_terms_links( $idpost, 'categoria_noticia') ; ?>
                </span>
            </p>
            <hr>
        </header>

        <section>

            <?php if(has_post_thumbnail()):?>
                <div>
                    <div style="width: 100%; height: 200px; background-position: center; background-size: 100%;
                    background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-repeat: no-repeat;"></div>
                    <br>
               </div>
            <?php endif; ?>
            <div class="ppgs-box-noticia-descricao">
                <?php the_content( __( '&hellip; ' . __('Continuar Lendo', 'b4st' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>', 'b4st' ) ); ?>
            </div>

        </section>
    </article>
    <br>


<?php endwhile; ?>

<?php if ( function_exists('b4st_pagination') ) { b4st_pagination(); } else if ( is_paged() ) { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="fa fa-arrow-left"></i> ' . __('Anterior', 'b4st')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Próxima', 'b4st') . ' <i class="fa fa-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>

<?php else: wp_redirect(get_bloginfo('url').'/404', 404); exit; endif; ?>
