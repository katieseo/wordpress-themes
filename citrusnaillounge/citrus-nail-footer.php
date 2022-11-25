		</div><!--/.container-->
	</div><!--/#content-->
	<!---------- /CONTENT ---------->
	
	<!---------- FOOTER ---------->

	<div id="footer">
		<div class="container">
			<div class="footer-info">
				<div>
					<h2>Citrus Nail Lounge</h2>
					<p>206 Newport Drive, <br />
					Port Moody, B.C. V3H 5B9</p>

					Phone: 778.355.4141<br />
					Email: <a href="mailto:info@citrusnaillounge.com">info@citrusnaillounge.com</a>
				</div>
				<div>
					<h2>Hours of Operation</h2>
					Mon-Sun &nbsp;&nbsp;&nbsp;    10:00AM - 7:00PM
				</div>
				<div class="last">
					<h2>Information</h2>
					<div class="footer-menu">
						&gt; <a href="about-us.php">About Us</a><br />
						&gt; <a href="citrus-services.php">Services</a><br />
						&gt; <a href="citrus-parties.php">Parties</a><br />
						&gt; <a href="gift-certificates.php">Gift Certificates</a>
					</div>
					<div class="footer-menu">
						&gt; <a href="citrus-specials.php">Citrus Specials</a><br />
						&gt; <a href="citrus-gallery.php">Gallery</a><br />
						&gt; <a href="contact-us.php">Contact Us</a>
					</div>
				</div>
			</div>
			<div class="copyright">Copyright &copy; 2012 Citrus Nail Lounge Ltd. All Rights Reserved.</div>
		</div><!--/.container-->
	</div><!--/#footer-->

</div><!--/#frame-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="js/jquery.lightbox-0.5.min.js"></script>
<script src="js/jquery.cycle.lite.js"></script>
<script type="text/javascript">
$(function() {
	$('.gallery a').lightBox();
	$('.specials a').lightBox();
	
	$('.slideshow').cycle({
		fx: 'fade',
		speed: 2000,
		timeout: 4000
	}); 
});
</script>
</body>
</html>