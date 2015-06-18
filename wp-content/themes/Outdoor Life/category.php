<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h2>Jestem</h2>
get_header(); ?>
 
<div id="main-content" class="main-content">
 
<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
 
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				
			<h1>Hello There</h1>
			
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->
 
<?php
get_sidebar();
get_footer();
