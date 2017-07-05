
<?php
$args_evento = array( 'post_type' => 'evento', 'posts_per_page' => 5 );
$loop_evento = new WP_Query( $args_evento );

while ( $loop_evento->have_posts() ) : $loop_evento->the_post();?>

<div class="row ppgs-box-evento">
  <div class="col-md-4 col-sm-2">
    <div class="ppgs-box-evento-img" style="background-image: url(' <?php echo get_the_post_thumbnail_url() ?> ')"></div>
  </div>
  <div class="col-md-8 col-sm-10">
    <h3 class="ppgs-box-evento-header">
      <a href="<?php the_permalink(); ?>">
        <?php the_title()?>
      </a>
    </h3>
    <p class="ppgs-box-evento-data">
      <?php the_field('data_do_evento'); ?>
    </p>
    <p class="ppgs-box-evento-local">
      <i class="fa fa-map-marker"></i> <?php the_field('local_do_evento'); ?>
    </p>
  </div>
</div>

<?php endwhile;?>