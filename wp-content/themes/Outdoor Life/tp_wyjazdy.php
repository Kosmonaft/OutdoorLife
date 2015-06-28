<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
    <div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="overlay"></div>
        <span class="region"><?php the_field('region'); ?></span>
        <h2><?php the_title(); ?></h2>
        <div class="data"><?php the_field('data_wyprawy'); ?></div>
        <div class="main image">
        <?php
        $image = get_field('zdjęcie_głowne');

        if (!empty($image)):
            ?>

		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			
        <?php endif; ?>
        </div>
    </div> <!-- closes the first div box -->
</a>