<?php
/**
 * Główny plik szablonu.
 *
 * @package WordPress
 * @subpackage EfficientWeb
 */
?>


<?php get_header(); ?>

<div id="mainbody">
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