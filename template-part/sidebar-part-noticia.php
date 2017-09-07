

<?php
$args_noticia = array( 'post_type' => 'post', 'posts_per_page' => 3 );
$loop_noticia = new WP_Query( $args_noticia );

?>
<div class="ppgs-sidebar-box">
<h4>Ultimas Notícias</h4>
<ul>
<?php

while ( $loop_noticia->have_posts() ) : $loop_noticia->the_post(); ?>

<li class="ppgs-sidebar-noticias"><a href=" <?php echo the_permalink(); ?> "><?php the_title(); ?></a></li>



<?php endwhile; ?>
</ul>
</div>