<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/logo.png">
	<!-- Author Meta -->
	<meta name="author" content="">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Request Sending Form</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Roboto:300,400,500,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<?php include 'header.php'; ?>
	<!-- Start Header Area -->

	<!-- start Banner Area -->
	<section class="home-banner-area relative banner-area">
		<div class="container-fluid">
			<div class="row  d-flex align-items-center justify-content-center">
				<div class="header-left col-lg-5 col-md-6 ">
					<h2>SENDING REQUEST</h2>
					<p class="pt-10 pb-20">
						every people deserve to be served equally.
					</p>
				</div>
				<div class="col-lg-7 col-md-6 col-sm-8 header-right">
					<div class="">
						<img class="img-fluid w-100" src="img/banner-img.jpg" alt="">
					</div>
					<div class="form-wrap about-content">
						<p class="text-white m-0">
							<span class="box">
								<a href="index.php">Home </a>
								<span class="lnr lnr-arrow-right"></span>
								<a href="sending_request_form.php">Request Sending Form</a>
							</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!-- Start Requesting Area -->
	<section class="donation-area relative section-gap-top">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-5">
					<div class="text-center text-wrap">
						<h1 class="mb-25">Help Poor People Around the World</h1>
						<p>Good works is giving to the poor and the helpless, but divine works is showing them their worth to the One who matters.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Requesting Area -->


	<!-- Start Requesting Form Area -->
	<section class="donation-form-area section-gap-bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-10 col-sm-12">
					<div class="donation-box">
						<form action="a.php" method="GET">
							<div class="donation-input">
								<div class="form-group">
									<label for="name">Child Name</label>
									<input type="text" class="form-control" id="name" name="name" value="">
								</div>

								<div class="form-group">
									<label for="age">Age</label>
									<input type="number" class="form-control" id="age" name="age" value="">
								</div>

								<div class="form-group">
									<label for="parents">Parents/gardians</label> <br>
									<input type="radio"> <label>Yes</label> <br>
									<input type="radio"> <label>No</label> <br>
									<input type="radio"> <label>Don't Know</label>
								</div>

								<div class="form-group">
									<label for="education">Education</label> <br>
									<input type="radio"> <label>Yes/ Primary Educaion</label> <br>
									<input type="text" name="primaryEducation"> <br>
									<input type="radio"> <label>No</label> <br>
								</div>

								<div class="form-group">
									<label for="uploading image">Select a picture</label> <br>
									<input type="file" accept="image/" capture>
								</div>
							</div>

							<input type="Submit" name="sendingRequest" class="primary-btn w-100" value="Submit"/>
						</form>						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end Requesting Form Area -->


	<!-- start footer Area -->
	<?php include 'footer.php'; ?>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
</body>

</html>