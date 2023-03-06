<?php
/**
 * Template Name: start
 *
 * @package WordPress
 * @subpackage EfficientWeb
 */
?>


<?php get_header(); ?>

<div id="mainbody">
    <div id="banner">
        <div class="container">
            <div class="row">
                <div class="one-third column">&nbsp;</div>
                <div class="two-thirds column">
                    <h1>Efficient Web<br>
                        <span>Custom Wordpress<br>Design & Development</span>
                    </h1>
                    <p>
                        We are here to help you ideate, create, code and use web products that we make for specific, detailed needs of your teams and your clients.
                    </p>
                    <a href="/who-we-are/" class="cta">MORE ABOUT US</a>
                </div><!--two-thirds-->
            </div>
        </div>
    </div><!-- #banner -->
    <div id="illustration">
        <div class="container">
			<div id="slider" class="shadow">
                <div id="slide1" class="slide">
                    <img class="responsive" src="<?php bloginfo('template_directory'); ?>/images/slide1.png" alt=""/>
                </div>
                <div id="slide2" class="slide">
                    <img class="responsive" src="<?php bloginfo('template_directory'); ?>/images/slide2.png" alt=""/>
                </div>
                <div id="sliderbg">
                    <img class="responsive" src="<?php bloginfo('template_directory'); ?>/images/home-illustration.jpg" alt=""/>
                </div><!--sliderbg-->
			</div><!--#slider-->
        </div><!--container-->
    </div>
    <div id="navytop"></div>
    <div id="homeswitch">
        <div class="container">
            <h3>OUR SERVICES</h3>
            <div class="row">
                <div class="column switchitem">
                    <h2>WEB <br />DESIGN</h2>
                    <a href="/services/#webdesign" class="cta">MORE</a>
                </div><!-- .switchitem -->
                <div class="column switchitem">
                    <h2>WEB <br />DEVELOPMENT</h2>
                    <a href="/services/#webdevelopment" class="cta">MORE</a>
                </div><!-- .switchitem -->
                <div class="column switchitem">
                    <h2>CORPORATE<br />IDENTITY</h2>
                    <a href="/services/#corporateidentity" class="cta">MORE</a>
                </div><!-- .switchitem -->
                <!-- <div class="column switchitem">
                    <h2>VIDEO<br />PRODUCTION</h2>
                    <a href="/services/#videoproduction" class="cta">MORE</a>
                </div>.switchitem -->
            </div><!-- .row -->
        </div><!--.container -->
    </div><!-- #homeswitch -->
    <div id="homeswitchbottom"></div>
    <div id="benefits" class="container">
        <div class="row">
            <div class="two-thirds column whiteshader">
                <h2 class="navy">CORE VALUES</h2>
                <ul>
    <li>Creative, modern and user - oriented designs delivered by senior artist & ux designers;</li>
    <li>Easily manageable, and scalable web solutions based on open source content management system;</li>
    <li>Our team’s technical support, web solution maintenance and improvement, your team’s training every inch of the way we take together.</li>
                </ul>
                <div class="ctawrap"><a href="/projects/" class="cta">SEE OUR PROJECTS</a></div>
            </div><!-- .two-thirds -->
            <div class="one-third column top80">
                <img class="responsive" src="<?php bloginfo('template_directory'); ?>/images/bottomblob.png" alt=""/>
            </div><!-- one-third -->
        </div>
    </div><!-- #benefits -->
</div><!-- #mainbody -->

<script>

$(document).ready(function() {
	var sliderheight = $(".slide").height();
	var negativeheight = - sliderheight;
	$(".slide").css({"display": "block", "top": negativeheight, "opacity": "0"});
	
	function moveSlide1() {
	//	var anim = "{top: +=" + sliderheight + "px}";
			sliderheight = $(".slide").height();
			negativeheight = - sliderheight;
		$("#slide1").css("opacity", "1");			
		$("#slide1").animate({top: 0}, 500, "swing").delay(7000).animate({top: (sliderheight)}, 500, "swing").animate({opacity: 0}, 500);
		}
	function moveSlide2() {
	//	var anim = "{top: +=" + sliderheight + "px}";
			sliderheight = $(".slide").height();
			negativeheight = - sliderheight;
		$("#slide2").css("opacity", "1");	
		$("#slide2").animate({top: 0}, 500, "swing").delay(7000).animate({top: (sliderheight)}, 500, "swing").animate({opacity: 0}, 500);
		}
	function goBack() {
		$(".slide").css({"display": "block", "top": negativeheight});	
		}
	function moveSlider() {
			moveSlide1();
			setTimeout(moveSlide2, 8100);
			setTimeout(goBack, 16200)

		}	
	moveSlider();
	setInterval(moveSlider, 16300);
	});
</script>
<?php get_footer(); ?>
