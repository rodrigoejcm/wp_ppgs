
<?php
$args_evento = array( 'post_type' => 'evento', 'posts_per_page' => 3 );
$loop_evento = new WP_Query( $args_evento );

?>

<h4>Próximos Eventos</h4>
<ul>
<?php

while ( $loop_evento->have_posts() ) : $loop_evento->the_post(); ?>

<li><a href=" <?php echo the_permalink(); ?> "><?php the_title(); ?></a></li>



<?php endwhile; ?>
</ul>