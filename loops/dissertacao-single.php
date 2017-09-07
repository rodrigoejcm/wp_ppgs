<?php if(have_posts()): while(have_posts()): the_post();?>
    <article role="article" id="post_<?php the_ID()?>">
        <header>
            <h5>
            <?php $id =  get_the_ID();?>
                <i class="fa fa-folder-open-o"></i>&nbsp; <?php echo ppgs_custom_taxonomies_terms_links( $id, 'ano_periodo') ;  ?><br/>
            </h5>
        </header>
        <section>
            <?php
                if (has_post_thumbnail()){
                    ?>
                    <img style="width:100%;" src="<?php echo the_post_thumbnail_url(); ?>">
                    <br><br>
                    <?php
                }
            ?>
           <p>Autor:  <?php  the_field('autor');?></p>
            <?php if( get_field('data') ): ?>
               <p>Defesa:  <?php the_field('data'); ?> </p>
            <?php endif; ?>

           <?php the_content( __( '&hellip; ' . __('Continue reading', 'b4st' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>', 'b4st' ) ); ?>
        </section>
        <footer>
            <?php if( get_field('link') ): ?>
                <i class="fa fa-globe" aria-hidden="true"></i><a  class="ppgs-producao-dissertacao-link" href="<?php  get_field('link');?>"> Link para a versão online</a>
            <?php endif; ?>
        </footer>
    </article>
<?php endwhile; ?>


<?php else: wp_redirect(get_bloginfo('url').'/404', 404); exit; endif; ?>
