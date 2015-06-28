<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.1.1.12.min.js"></script>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
        <![endif]-->
        <script>(function () {
                document.documentElement.className = 'js'
            })();</script>


        <title><?php wp_title('|', true, 'right'); ?></title>
        <?php
        if (is_home()) {
            ?>
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
            <script src="<?php echo get_template_directory_uri() ?>/js/map_scripts.js"></script>
            <?php
        } else {
            
        }
        ?>
        <!-- first -->
<?php wp_head(); ?>
        <!-- last -->
    </head>

<?php if (is_page()) {
    $page_slug = 'page-' . $post->post_name;
} ?>

    <body <?php body_class($page_slug); ?>>
        <div id="main">
            <header>
                <section class="header">
                    <section class="logo">
                        <a href="/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo.png" alt=""/></a>
                    </section>
                    <nav>
<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                    </nav>
                </section>
            </header>