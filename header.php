<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('PPGS - Programa de Pós-Graduação em Sociologia', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="ppgs-logo-header">
  <a href="<?php echo get_home_url(); ?>">
    <img src="<?php echo get_bloginfo('template_url') ?>/theme/img/logo_ppgs.png"/>
  </a>

</div>

<nav class="navbar navbar-toggleable-md navbar-light ppgs-cor-bg-cinza">

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		<?php
                         wp_nav_menu( array(
                            'theme_location'    => 'navbar',
                            'container'             => false,
                            'menu_class'		   => '',
                            'fallback_cb'		   => '__return_false',
                            'items_wrap'		   => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
                            'depth'			   => 2,
                  	    'walker'                  => new b4st_walker_nav_menu()
                        ) );
    ?>

  </div>
</nav>
