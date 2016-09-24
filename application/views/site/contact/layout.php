<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('site/head'); ?>
	<?php $this->load->view('site/contact/head'); ?>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<?php $this->load->view('site/header/menu'); ?>
	
	<div class="body">
		<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Contact Us</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h1>Contact Us</h1>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map"></div>

				<div class="container">

					<div class="row">
						<div class="col-md-6">

							<div class="alert alert-success hidden" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
							</div>

							<h2 class="mb-sm mt-sm"><strong>Contact</strong> Us</h2>
							<form id="contactForm" action="php/contact-form.php" method="POST">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Your name *</label>
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
										</div>
										<div class="col-md-6">
											<label>Your email address *</label>
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Subject</label>
											<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Message *</label>
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-6">

							<h4 class="heading-primary mt-lg">Get in <strong>Touch</strong></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

							<hr>

							<h4 class="heading-primary">The <strong>Office</strong></h4>
							<ul class="list list-icons list-icons-style-3 mt-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
								<li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
								<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
							</ul>

							<hr>

							<h4 class="heading-primary">Business <strong>Hours</strong></h4>
							<ul class="list list-icons list-dark mt-xlg">
								<li><i class="fa fa-clock-o"></i> Monday - Friday 9am to 5pm</li>
								<li><i class="fa fa-clock-o"></i> Saturday - 9am to 2pm</li>
								<li><i class="fa fa-clock-o"></i> Sunday - Closed</li>
							</ul>

						</div>

					</div>

				</div>

			</div>

			

			
		</div>

		<!-- vendor -->
		<script src="<?php echo public_url('contact') ?>/vendor/jquery/jquery.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery.appear/jquery.appear.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery.easing/jquery.easing.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery-cookie/jquery-cookie.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/common/common.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery.validation/jquery.validation.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery.stellar/jquery.stellar.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery.gmap/jquery.gmap.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/jquery.lazyload/jquery.lazyload.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/isotope/jquery.isotope.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/owl.carousel/owl.carousel.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="<?php echo public_url('contact') ?>/vendor/vide/vide.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo public_url('contact') ?>/js/theme.js"></script>

		<!-- Current Page vendor and Views -->
		<script src="<?php echo public_url('contact') ?>/js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo public_url('contact') ?>/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo public_url('contact') ?>/js/theme.init.js"></script>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyCFCp07o8oBNzkWUjrqMq7olcI00B_d1j0&callback=initMap"
  type="text/javascript""></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "169 Đinh Tiên Hoàng, phường Đa Kao, quận 1, thành phố Hồ Chí Minh",
				html: "<span><strong>Liên kết toàn cầu Office</strong><br>Hồ Chí Minh City<span>",
				icon: {
					image: "img/pin.png",
					iconsize: [76, 96],
					iconanchor: [12, 46]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = 40.75198;
			var initLongitude = -73.96978;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $("#googlemaps").gMap(mapSettings);

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#googlemaps").gMap("centerAt", options);
			}

		</script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->
	<footer id="lienhe" class="footer"  role="contentinfo">
 		<?php $this->load->view('site/footer'); ?>
 	</footer>
	
</body>
</html>