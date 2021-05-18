<footer>
	<div class="container">
		<div class="footerLogo">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-urca.png" alt="Urca Logo">
		</div>
		<div class="addressFooter">
			<address>
				<a href="https://www.google.com/maps/place/3506+St+Valentine+Way+%239,+Orlando,+FL+32811/@28.5052484,-81.4337354,17z/data=!3m1!4b1!4m5!3m4!1s0x88e779571a4a7267:0x7b0982eab04fcb70!8m2!3d28.5052484!4d-81.4315467">3506 St. Valentine Way, Unit 9 <br>
				Orlando, FL 32811</a>
			</address>
			<div class="socialFooter">
				<a href="https://www.instagram.com/urcafamily/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a href="https://www.facebook.com/urcafamily/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</div>
		</div>
		<div class="footerForm">
			<p>Join our newsletter</p>
			<?php echo do_shortcode('[formidable id=2]'); ?>
		</div>
		<div class="footerLogo">
			<a href="https://www.gtexbrasil.com.br/" target="_blank">	
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Logo-GtexBrasil_white.png" alt="Gtex Logo">
			</a>
		</div>
		<?php require_once('logo-dppa-footer.php'); ?>
	</div>
</footer>
<script src="https://use.fontawesome.com/37d8e8fa0a.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/scripts.js"></script>
<?php wp_footer(); ?> 
</body>
</html>