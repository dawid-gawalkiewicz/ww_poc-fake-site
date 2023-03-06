<?php
/**
 * Template Name: with-sidebar
 *
 * @package WordPress
 * @subpackage EfficientWeb
 */
?>


<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div id="content" class="twothirds column">
            <?php 
                /**
                *  GET THE LOOP
                */
                get_template_part( 'loop', 'index' ); 
            ?>
        </div><!-- #content -->
        <div id="sidebar" class="third column">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div><!--.container -->

<?php get_footer(); ?>