<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Carolina García</title>

    <?php wp_head() ?>
  </head>
    <body>

   <?php
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?>
    <div class="container-fluid">
  <div class="row">
  <div class="col-4">

  	<div class="foto"><img class="responsive" src="<?php echo $logo[0]; ?>"></div>

 

    <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 
		'theme_location' 	=> 'header-menu',
		'container'		=> 'div',
		'container_class' 	=> 'base',
		 'items_wrap' => '<ul>%3$s</ul>'
		)
	); ?>
   <?php } ?>

  </div>