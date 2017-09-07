<div class="ppgs-titulo-pagina">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
     <br>

<?php
   $pt =  get_post_type();
   $pto = get_post_type_object($pt);
 ?>

     <h1><?php  echo $pto -> label ?></h1>
     <h4>Período: <?php single_cat_title(); ?></h4>
    </div>
   </div>
  </div>
</div>
