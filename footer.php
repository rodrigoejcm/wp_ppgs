
<br><br>
<footer>
 <div class="ppgs-footer-topo ppgs-cor-bg-cinza">
  <div class="container">
   <div class="row">

    <div class="col-md-4 col-sm-12">
      <div class="ppgs-footer-maps">
       <?php echo do_shortcode('[wpgmza id="1"]') ?>
      </div>

    </div>

   <div class="col-md-2 col-sm-12">
    <div class="ppgs-footer-contato">
     <ul>
     <li>Tel.: (21) 2629-2936</li>
     <li>ppgs.uff.nit@gmail.com</li>
     <li>Av. Prof. Marcos Waldemar de Freitas Reis<br>
            Bloco O - 3º andar – sala 313
            Campus do Gragoatá <br>
            São Domingos – Niterói<br>
            24210-201 – RJ</li>
    </ul>
    </div>
   </div>

   <?php get_template_part('template-part/revista-footer'); ?>

   </div>

  </div>


 </div>
 <div class="container ppgs-footer-fundo">
  <div class="container">
   <div class="row">
    <div class="col-md-4">
     <img class="ppgs-footer-logo-outros"  src="<?php echo get_bloginfo('template_url') ?>/theme/img/logo-proppi.png" alt="...">
    </div>
    <div class="col-md-4">
    <img class="ppgs-footer-logo-outros"  src="<?php echo get_bloginfo('template_url') ?>/theme/img/logo-uff.png" alt="...">
    </div>
    <div class="col-md-4">
    <img class="ppgs-footer-logo-outros"  src="<?php echo get_bloginfo('template_url') ?>/theme/img/logo-ichf.png" alt="...">
    </div>
   </div>
  </div>
 </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
