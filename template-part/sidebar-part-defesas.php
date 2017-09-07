
<?php
$args_evento = array( 'post_type' => 'evento', 'categoria_evento' => 'Defesas',
   'meta_query' => array(
       array(
              'key'       => 'data_do_evento',
              'value'     =>  date("Y-m-d"),
              'compare'   => '>=',
              'date_format'    => '%Y-%m-%d/',
              'type' => 'DATE'
      ),
     )
  );


$loop_evento = new WP_Query( $args_evento ); ?>



<?php if( $loop_evento->have_posts() ): ?>
<div class="ppgs-sidebar-box">
<h4>Próximas Defesas </h4>
 <ul>
 <?php while( $loop_evento->have_posts() ) : $loop_evento->the_post(); ?>
  <li style="margin-bottom: 10px; border-left: 2px solid #468997;  padding-left: 4px;" >
   <a href="<?php the_permalink(); ?>" >
      <?php the_title(); ?>
      <br>
      <div style="font-size: 12px">
        <i class="fa fa-calendar-o"></i> <?php the_field('data_do_evento');  ?>      <i class="fa fa-clock-o"></i> <?php the_field('hora_do_evento'); ?>
      </div>
   </a>
  </li>
 <?php endwhile; ?>
 </ul>
 </div>
<?php endif; ?>
