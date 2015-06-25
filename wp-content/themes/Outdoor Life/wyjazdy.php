<?php
/* Template Name: Wyjazdy */

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

get_header();
?>
<section id="trips">
    <h3>Wyjazdy</h3>
    <?php
    $today = date('Ym');

    $queryArray = array(
        'cat' => 2,
        'posts_per_page' => 10,
        'paged' => $paged,
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
            get_template_part('template part/tp_wyjazdy_post');
        endwhile;
        ?>
        <div class="nav-previous alignleft"><?php next_posts_link('Older posts'); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link('Newer posts'); ?></div>

        <?php
    } else {
        ?>
        <p>brak</p>
    <?php }
    ?>

    <?php get_footer(); ?>