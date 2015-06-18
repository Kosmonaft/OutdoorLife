<section class="trips container">
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
    if (have_posts()) {
        while (have_posts()) : the_post();
            get_template_part('tp_wyjazdy');

        endwhile;
    } else {
        ?>
        <p>brak</p>
<?php }
?>
</section>