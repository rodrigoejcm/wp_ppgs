
<?php
$args_evento = array(   'post_type' => 'evento',
                                        'posts_per_page' => 4,
                                        'meta_key'     => 'data_do_evento',
                                         'tax_query' => array(
                                            array(
                                               'taxonomy' => 'categoria_evento', // My Custom Taxonomy
                                                'terms' => 'defesas', // My Taxonomy Term that I wanted to exclude
                                                'field' => 'slug', // Whether I am passing term Slug or term ID
                                                'operator' => 'NOT IN' // Selection operator - use IN to include, NOT IN to exclude
                                            ),
                                        ),
                                        'orderby'     => 'meta_value',
                                        'order'       => 'DESC' );
$loop_evento = new WP_Query( $args_evento );

while ( $loop_evento->have_posts() ) : $loop_evento->the_post();?>

<div class="row ppgs-box-evento">
      <div class="col-md-4 col-sm-2">
        <?php if (has_post_thumbnail()){   ?>
          <div class="ppgs-box-evento-img" style="background-image: url(' <?php  echo the_post_thumbnail_url("thumbnail")  ?> ' ) "></div>
        <?php } else{ ?>
          <div class="ppgs-box-evento-img" style="background-image: url(' <?php echo get_bloginfo('template_url')?>/theme/img/ichf.jpg' )"></div>
        <?php } ?>
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
