<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
get_header();
?>

<section id="index">
</section>
<section id="quotation">
	    <?php
    $queryArray = array(
        'cat' => 6,
        'showposts' => 1
    );
    query_posts($queryArray);
    if (have_posts()) {
        while (have_posts()) : the_post();

            get_template_part('tp_cytaty');

        endwhile;
    }else {
        ?>
        <p>brak</p>
    <?php }
    ?>
</section>
<section>
    <?php echo do_shortcode('[ajax_load_more button_label="test"]'); ?>
</section>
<section id="trips" class="trips container">
    <h3>Wyjazdy</h3>
    <?php
    $today = date('Ym');

    $queryArray = array(
        'cat' => 2,
        'showposts' => 10,
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
    $count = 0;
    if (have_posts()) {
        while (have_posts()) : the_post();
            get_template_part('tp_wyjazdy');
            $count++;
                
        endwhile;
        if($count < 3){
            get_template_part('template part/tp_wyjazdy_missing');
        }
    } else {
        ?>
        <p>brak</p>
    <?php }
    ?>
</section>
<div class="wiecej wyjazdy">
	<a href="#">Zobacz wszystkie</a>
</div>
<section id="news" class="news container">
    <h3>Aktualnosci</h3>
    <?php
    $queryArray = array(
        'cat' => 3,
        'showposts' => 3
    );
    query_posts($queryArray);
    if (have_posts()) {
        while (have_posts()) : the_post();

            get_template_part('tp_aktualnosci');

        endwhile;
    }else {
        ?>
        <p>brak</p>
    <?php }
    ?>
</section>
<div class="wiecej aktualnosci">
	<a href="#">Zobacz wszystkie</a>
</div>
<?php
    wp_footer();
get_footer();
?>