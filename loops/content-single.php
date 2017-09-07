<?php
/*
The Single Posts Loop
EM POST
=====================
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h5>
                <em>
                    Publicado em: <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('d-m Y') ?></time>
                </em>
            </h5>
            <p class="text-muted" style="margin-bottom: 30px;">

            </p>
        </header>
        <section>
            <?php if(has_post_thumbnail()):?>
                <div>
                    <div style="width: 100%; height: 200px; background-position: center; background-size: 100%;
                    background-image: url('<?php echo get_the_post_thumbnail_url(); ?>'); background-repeat: no-repeat;"></div>
                    <br>
               </div>
            <?php endif; ?>
            <?php the_content()?>
            <?php wp_link_pages(); ?>
        </section>
    </article>
<?php endwhile; ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('url').'/404', 404); exit; ?>
<?php endif; ?>
