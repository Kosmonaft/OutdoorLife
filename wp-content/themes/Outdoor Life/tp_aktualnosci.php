<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
    <div class="post">
		<div class="main image">
			<?php
			$image = get_field('zdjecie_aktualnosci');
			if (!empty($image)):
			?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />	
			<?php endif; ?>
        </div>
		<div class="typ"><span ><?php the_field('typ'); ?></span></div>
		<div class="tytul"><?php the_title(); ?></div>
		<div class="data"><?php the_time('F jS, Y'); ?></div>
		<div class="short description"><?php the_field('krotki_tekst'); ?></div>
    </div> <!-- closes the first div box -->
</a>