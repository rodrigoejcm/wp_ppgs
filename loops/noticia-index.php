<?php
$args_noticia = array( 'post_type' => 'post', 'posts_per_page' => 5 );
$loop_noticia = new WP_Query( $args_noticia );

while ( $loop_noticia->have_posts() ) : $loop_noticia->the_post(); ?>

<div class="row ppgs-box-noticia">
    <div class="col-md-12">
      <h2 class="ppgs-box-noticia-header"><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
      <p class="ppgs-box-noticia-data"><?php the_time('d/m/Y')?></p>
      <span><?php  $idpost = get_the_ID();   echo ppgs_custom_taxonomies_terms_links_space( $idpost, 'categoria_noticia') ; ?></span>
    </div>
</div>


<?php endwhile; ?>











