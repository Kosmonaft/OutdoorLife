<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
get_header();
?>
<header>
    <section class="header">
        <section class="logo">
            <a href="/"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""/></a>
        </section>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
        </nav>
    </section>
</header>
<section id="wyjazdy template">
    <article>
        <!--p>Dodano <time>  <?php the_time('d-m-Y') ?></time-->
        <div id="top-container">
            <section class="post-details wyprawa image">
                <?php
                $image = get_field('zdjęcie_głowne');

                if (!empty($image)):
                    ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>

                <?php
                the_field('post_images');

                ?>
                    
            </section>


            <section class="post-details wyprawa details">
                <section class="post-details wyprawa location region">
                    <span><?php the_field('region'); ?></span>
                </section>            
                <h2><?php the_title() ?></h2>
                <section class="post-details wyprawa type typ">
                    <span><?php the_field('typ_wyprawy'); ?></span>
                </section>
                <section class="post-details wyprawa date">
                    <span><?php the_field('data_wyprawy'); ?></span>
                </section>
                <section class="post-details wyprawa koszt">
                    <div>Cena: <span><?php the_field('koszt'); ?> PLN</span></div>
                    <a href="#" class="rezerwuj">Rezerwuj</a>
                </section>
                <div class="krotki opis"><?php the_field('krotki_opis'); ?></div>
                <a href="#" class="more">Więcej szczegółów</a>
            </section>
        </div>
        <div id="left-column">
			<section class="tabs">

					<a href="#" data-tab="1" class="tab active">Opis wyprawy, region</a>
					<a href="#" data-tab="2" class="tab">Szczegółowy program</a>
					<a href="#" data-tab="3" class="tab">Dodatkowe informacje</a>

				<section data-content="1" class="content active">
					<section class="post-details wyprawa description">
						<h4>Opis wyprawy, region</h4>
						<?php the_field('opis_wyprawy'); ?>
					</section>
				</section>
				<section data-content="2" class="content">
					<section class="post-details wyprawa program">
						<h4>Program</h4>
						<?php the_field('program'); ?>
					</section>
				</section>
				<section data-content="3" class="content">
					<section class="post-details wyprawa additional info">
						<h4>Dodatkowe informacje</h4>
						<?php the_field('dodatkowe_informacje'); ?>
						<hr class="linia"/>
						<h4>Do pobrania</h4>
<a class="regulamin" href="#"><img class="regulamin" src="../wp-content/uploads/2015/06/dwld-icon-16px.png" />Regulamin kursu (PDF)</a>
<a class="regulamin" href="#"><img class="regulamin" src="../wp-content/uploads/2015/06/dwld-icon-16px.png" />Warunki ubezpieczenia (PDF)</a>
						
					</section>
				</section>   
			</section>
        </div>
        <div id="right-column">
			<section>
				<h4>Najbliższy wyjazd</h4>
				<?php get_template_part('html partial/wyjazdy', 'closest'); ?>
			</section>
			<section class="pogoda">
				<h4>Aktualna pogoda</h4>
<a href="<?php the_field('pogoda'); ?>" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1435236400433" class="aw-widget-current"  data-locationkey="216591" data-unit="c" data-language="pl" data-useip="false" data-uid="awcc1435236400433"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
			</section>
        </div>
    </article>
    
    
</section>

<?php get_footer(); ?>