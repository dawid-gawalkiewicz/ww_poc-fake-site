<?php
/**
 * stopka

 *
 * @package WordPress
 * @subpackage EfficientWeb
 */
?>

<footer id="footer">
    <div id="contactdetails" style="color: white">
        <div class="row">
			<div class="one-half column">
            	<h4 class="center bold">Office in Rzeszów, Poland</h4>
				<p style="text-align: center;">WydajnyWeb Sp. z o.o.<br>
					Stefana Batorego 26<br>
					35-005 Rzeszów<br>
					Poland<br>
					<!-- &nbsp; -->
					</p>
				<p style="text-align: center;">
					<a href="tel:+48662925268">Mobile: +48 662 925 268</a><br>
					<a href="tel:+48502423886">Mobile: +48 502 423 886</a>
				</p>
            </div>
			<div class="one-half column">
            	<h4 class="center bold">Billing information</h4>
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

    <!-- <div id="sidebar-footer" class="row">
        <?php
        get_sidebar( 'footer' );
        ?>
    </div> -->

	<?php
        /* Always have wp_footer() just before the closing </body>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to reference JavaScript files.
         */
    
        wp_footer();
    ?>
</footer>

<?php require_once('skrypty.php');?>

</body>
</html>
