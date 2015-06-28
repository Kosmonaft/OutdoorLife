<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<section id="trips" class="trips container wyjazdy">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
    <div class="post">
        <div class="main image">
        <?php
        $image = get_field('zdjęcie_głowne');

        if (!empty($image)):
            ?>

		<img class="img wyjazdy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			
        <?php endif; ?>
        </div>
    </div> <!-- closes the first div box -->
</a>
<div class="wyjazdy details">
	<div class="overlay"></div>
        <span class="region"><?php the_field('region'); ?></span>
        <h2><?php the_title(); ?></h2>
	<div class="typ"><?php the_field('typ_wyprawy'); ?></div>
        <div class="data"><?php the_field('data_wyprawy'); ?></div>
        <div class="krotki_opis"><?php the_field('krotki_opis'); ?></div>
        <div class="cena">Cena: <span><?php the_field('koszt'); ?> PLN</span></div>
	<a class="wyjazdy szczegoly" href="#">Szczegóły</a>
</div>
</section>