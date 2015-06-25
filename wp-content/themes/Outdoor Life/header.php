<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
         
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.1.1.12.min.js"></script>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>

        
        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php
        if (is_home()) {
            ?>
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
            <script src="<?php bloginfo('template_url'); ?>/js/map_scripts.js"></script>
        <?php
            
        }else{
  
        }
        ?>
        <!-- first -->
       <?php wp_head(); ?>
        <!-- last -->
    </head>
    <body>
	<div id="main">