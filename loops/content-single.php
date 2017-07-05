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
            <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid">
            <br><br>
            <?php the_content()?>
            <?php wp_link_pages(); ?>
        </section>
    </article>
<?php endwhile; ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('url').'/404', 404); exit; ?>
<?php endif; ?>
