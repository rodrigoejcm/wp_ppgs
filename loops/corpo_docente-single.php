<?php
/*
The Single Posts Loop
EM POST
=====================
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<br>
<br>
<?php

    $email =  the_field('website');
    $website = the_field('website');

    if (!get_field('email')){
        $email = "Não Informado";
    }

    if (!get_field('website')){
      $website = "Não Informado";
    }


    ?>


<div class="row">
    <div class="col-md-3">
        <?php $imagem = wp_get_attachment_url( get_field('foto'), "small" );?>
        <?php  if (!get_field('foto'))
          { $imagem = get_bloginfo('template_url') ."/theme/img/user.png"; }
          ?>
        <div class="ppgs-box-cp-img-single" style="background-image: url(<?php echo $imagem;?>);">
        </div>
    </div>
    <div class="col-md-7">
        <p class="corpo-docente-single-p">
        <?php
        $docencia = get_the_terms( $post->ID, 'categoria_docencia' );
        foreach ($docencia as $doc) {
            echo $doc->name." ";
        } ?>
        </p>
        <p class="corpo-docente-single-p">E-mail: <span><?php echo $email ?> </span></p>
        <p class="corpo-docente-single-p">Website: <span><?php echo $website ?></span></p>
         <a class="corpo-docente-single-p" href="<?php echo get_field('link_cappes'); ?>">Lattes</a>
    </div>
</div>
<br>
<hr>
<div class="row">
    <div class="col-md-12">
            <h4 class="ppgs-box-cp-header"> Formação: </h4>
            <br>
            <?php the_field('formacao'); ?>
            <hr>
            <h4 class="ppgs-box-cp-header">
             Áreas de Interesse:
            </h4>
            <br>
             <?php the_field('area_de_interesse'); ?>
             <br>
    </div>
</div>

<?php endwhile; ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('url').'/404', 404); exit; ?>
<?php endif; ?>
