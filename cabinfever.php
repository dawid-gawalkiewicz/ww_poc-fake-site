<?php
/**
 * Template Name: cabinfever
 *
 * @package WordPress
 * @subpackage EfficientWeb
 */
?>


<?php get_header(); ?>

<div id="mainbody" class="cabinfever">
    <div class="container">
        <div class="row">
            <div id="content">
                <?php 
                    /**
                    *  GET THE LOOP
                    */
                    get_template_part( 'loop', 'index' ); 
                ?>
            </div><!-- #content -->
        </div>
    </div><!--.container -->
</div><!-- #mainbody-->

<?php get_footer(); ?>