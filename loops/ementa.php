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
<p class="corpo-docente-single-p"> Ano/Período: <?php echo get_field('anoperiodo'); ?></p>
<p class="corpo-docente-single-p"> Local: <?php echo get_field('sala')." - ".get_field('dias_e_horarios') ; ?></p>
<p class="corpo-docente-single-p"> Responsável: <?php echo get_field('responsável'); ?></p>
<p class="corpo-docente-single-p"> Código Disciplina: <?php echo get_field('codigo'); ?></p>
<br>
<hr>
<br>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else: ?>
<?php wp_redirect(get_bloginfo('url').'/404', 404); exit; ?>
<?php endif; ?>
