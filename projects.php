<?php
/**
 * Template Name: projects
 *
 * @package WordPress
 * @subpackage EfficientWeb
 */
?>


<?php get_header(); ?>

<div id="mainbody" class="projects">
	<div class="container top">
    	<h1 class="white center">EXAMPLE PROJECTS</h1>
    </div>
	<?php 
        /**
        *  GET THE LOOP
        */
        get_template_part( 'loop', 'index' ); 
    ?>
    <div class="center bottom80">
	    <a class="cta" href="contact/#contactdetails">CONTACT US</a>
	</div><!--.center-->
</div><!-- #mainbody-->

<?php get_footer(); ?>