<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<section class="closest trips container">
    <?php
    $today = date('Ym');

    $queryArray = array(
        'cat' => 2,
        'showposts' => 1,
        'post_type' => 'post',
        'meta_key' => 'data_wyprawy_datepicker', // name of custom field
        'orderby' => 'meta_value_num',
        'meta_query' => array(
            'key' => 'data_wyprawy_datepicker',
            'compare' => '>=',
            'value' => $today
        ),
        'order' => 'ASC'
    );
    query_posts($queryArray);
    if (have_posts()) {
        while (have_posts()) : the_post();
            ?>
            <section class="trip small image">
                <?php
                $image = get_field('zdjęcie_głowne');

                if (!empty($image)):
                    ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
            </section>
            <section class="details">
		<section class="post-details wyprawa location region">
                    <span><?php the_field('region'); ?></span>
                </section> 
                <header><?php the_title() ?></header>
                <section class="post-details closest date">
                    <span><?php the_field('data_wyprawy'); ?></span>
                </section>
            </section>
            <?php
        endwhile;
    } else {
        ?>
        <p>brak</p>
    <?php }
    ?>
</section>