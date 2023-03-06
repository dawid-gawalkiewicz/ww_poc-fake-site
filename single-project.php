<?php
/**
 * Template Name: single-project
 * Template Post Type: post, page, product
 *
 * @package WordPress
 * @subpackage EfficientWeb
 */
?>


<?php get_header(); ?>

<div id="mainbody">
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <div id="webdesignbottom"></div>
    <div class="container">
        <div class="row">
            <div id="content">

                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    <div class="entry-content">
                        <?php 
                        $content = apply_filters('the_content', $post->post_content); 
                        echo $content;  
                        ?>
                        <div class="ctawrap"><a href="/projects/" class="cta">SEE OUR OTHER PROJECTS</a></div>
                    </div>
                </div>

            </div><!-- #content -->
        </div>
    </div><!--.container -->
</div><!-- #mainbody-->

<?php get_footer(); ?>