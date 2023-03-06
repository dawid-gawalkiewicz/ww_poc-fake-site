<?php
/**
 * Template Name: contact
 *
 * @package WordPress
 * @subpackage EfficientWeb
 */
?>


<?php get_header(); ?>

<div id="mainbody">
	<div id="contactbanner">
    <h1 class="navy center">CONTACT</h1>
    
    </div>
    <div id="contactdetails" class="container">
    	<h2 class="navy nomargin" style="text-align: center;">EFFICIENT WEB</h2>
        <h3 class="navy" style="text-align: center;">Creative conversion - Converting creation</h3>
        <div class="center bottom80">
        	<a class="cta2" href="mailto:info@efficientweb.pl">Email: info@efficientweb.pl</a>
        </div>
        <div class="row">
			<!-- <div class="half column mobibottom80">
				<h4 class="navy center bold">Office in Doha, Qatar</h4>
                <p style="text-align: center;">Zone 25, Street 878<br>
					Building 16, Apartment 25<br>
					Doha, Qatar<br>
					<!-- PO Box: 27774 -->
				<!-- </p>
                <p style="text-align: center;"><a class="cta" href="tel:+97470971177">Mobile: +974 709 711 77</a></p>
            </div> -->
			<div class="one-half column">
            	<h4 class="navy center bold">Office in Rzeszów, Poland</h4>
				<p style="text-align: center;">WydajnyWeb Sp. z o.o.<br>
					Stefana Batorego 26<br>
					35-005 Rzeszów<br>
					Poland<br>
					<!-- &nbsp; -->
					</p>
				<p style="text-align: center;"><a class="cta" href="tel:+48662925268">Mobile: +48 662 925 268</a></p>
				<p style="text-align: center;"><a class="cta" href="tel:+48502423886">Mobile: +48 502 423 886</a></p>
            </div>
			<div class="one-half column">
            	<h4 class="navy center bold">Billing information</h4>
				<p style="text-align: center;">WydajnyWeb Sp. z o.o.<br>
					Krakowska 18D / 60<br>
					35-111 Rzeszów<br>
					Poland<br>
					<!-- &nbsp; -->
				</p>
				<p style="text-align: center;">NIP: 5170409392<br>
					REGON: 386941226<br>
					KRS: 0000857597<br>
					<!-- &nbsp; -->
				</p>
            </div>
        </div>
    </div><!--.container -->
    <div id="contact-form-top"></div>
	<div id="inquiryform">
        <div class="container">
        	<div class="row">
            	<div class="one-half column centered">
                	<h2 class="white center">CONTACT FORM</h2>
		        	<?php echo do_shortcode('[contact-form-7 id="151" title="Contact form 1"]'); ?>                	
                </div><!-- .one-half -->
            </div>
        </div>
    </div>
</div><!-- #mainbody-->

<?php get_footer(); ?>