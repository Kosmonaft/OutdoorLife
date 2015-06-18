<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
get_header();
?> 

<section id="news aktualnosci template">
    <article>
        <header>
            <h2><?php the_title(); ?></h2>
            <p>Dodano <time>  <?php the_time('d-m-Y') ?></time>
        </header>
        <section class="post-details news image">
            <?php
            $image = get_field('zdjecie_aktualnosci');

            if (!empty($image)):
                ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
        </section>        
        <section class="post-details news type typ">
            <?php the_field('typ'); ?>
        </section>
        <section class="post-body news tresc">

            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                    //
                    // Post Content here
                //
	} // end while
            } // end if
            ?>

        </section>
    </article>

</section>

<?php get_footer(); ?>