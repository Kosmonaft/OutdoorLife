<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="post">

    <!-- Display the Title as a link to the Post's permalink. -->
    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

    <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
    <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>

    <div class="entry">

        <?php the_content(); ?>
    </div>

    <p class="postmetadata"><?php _e('Posted in'); ?> <?php the_category(', '); ?></p>
</div> <!-- closes the first div box -->

