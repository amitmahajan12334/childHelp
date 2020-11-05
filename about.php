

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
	<title>About</title>

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
					<h2>About Us</h2>
					<p class="pt-10 pb-20">
						The best way to not feel hopeless is to get up and do something. Don’t wait for good things to happen to you. If you go out and make some good things happen, you will fill the world with hope, you will fill yourself with hope.
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
								<a href="about.php">About</a>
							</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!-- Start Condition Area -->
	<section class="condition-area section-gap">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 col-md-8 col-sm-10">
					<div class="condition-left owl-carousel owl-condition">
						<img class="img-fluid" src="img/condition/c1.jpg" alt="">
						<img class="img-fluid" src="img/condition/c1.jpg" alt="">
					</div>
				</div>
				<div class="offset-lg-1 col-lg-5">
					<div class="condition-right">
						<h2>
							New way <br>
							to give back
						</h2>
						<p>
							I don't want to live in the kind of world where we don't look out for each other. Not just the people that are close to us, but anybody who needs a helping hand. I cant change the way anybody else thinks, or what they choose to do, but I can do my bit.
						</p>
						<ul>
							<li>No one has ever become poor by helping.</li>
							<li>No one is useless in this world who lightens the burdens of another.</li>
							<li>When we give cheerfully and accept gratefully, everyone is blessed.</li>
							<li>A kind gesture can reach a wound that only compassion can heal.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Condition Area -->


	<!-- Start Collection Area -->
	<section class="collection-area section-gap">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-4 col-md-8">
					<div class="text">
						<h2>Experience <br>
							How your Help
							Reach Over Years</h2>
						<p>
							If you’re in the luckiest one per cent of humanity, you owe it to the rest of humanity to think about the other 99 per cent.
						</p>
					</div>
				</div>

				<?php

					require 'db.php';

					$q = "select * from child_details";

					$result = mysqli_query($con, $q);

					$num = mysqli_num_rows($result);

					?>


				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<div class="collection-box">
						<h3 class="color3"><span class="counter"></span> child</h3>
						<i class="lnr lnr-arrow-up"></i>
						<p>2018</p>
					</div>
				</div>
				
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<div class="collection-box">
						<h3><span class="counter"></span> child</h3>
						<i class="lnr lnr-arrow-up"></i>
						<p>2019</p>
					</div>
				</div>

				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<div class="collection-box">
						<h3 class="color1">
						<?php echo $num; ?> child</h3>
						<i class="lnr lnr-arrow-up"></i>
						<p>2020</p>
					</div>
				</div>

				
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<div class="collection-box">
						<h3 class="color4"><span class="counter"></span> child</h3>
						<i class="lnr lnr-arrow-up"></i>
						<p>2021</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Collection Area -->

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