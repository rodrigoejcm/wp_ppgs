<?php
$args_noticia = array( 'post_type' => 'post', 'posts_per_page' => 5 );
$loop_noticia = new WP_Query( $args_noticia );

while ( $loop_noticia->have_posts() ) : $loop_noticia->the_post(); ?>

<div class="row ppgs-box-noticia">
    <div class="col-md-12">
      <h2 class="ppgs-box-noticia-header"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
      <p class="ppgs-box-noticia-data"><?php the_date(); ?></p>
      <p class="ppgs-box-noticia-descricao"><?php $content = wp_strip_all_tags( get_the_content() ); echo mb_strimwidth($content, 0, 300, '...');?></p>
    </div>
</div>

<?php endwhile; ?>











