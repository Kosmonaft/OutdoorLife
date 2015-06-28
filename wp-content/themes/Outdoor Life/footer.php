</div>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<footer>
    <?php if (is_category('2')) { ?>
        <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/tabs.js"></script>
    <?php } ?>

</footer>
    <?php wp_footer(); ?>
</body>
</html>