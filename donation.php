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
	<title>Donation</title>

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
					<h2>Donation</h2>
					<p class="pt-10 pb-20">
                    “There is no exercise better for the heart than reaching down and lifting people up.”
					</p>
				</div>
				<div class="col-lg-7 col-md-6 col-sm-8 header-right">
					<div class="">
						<img class="img-fluid w-100" src="img/banner-img3.jpg" alt="">
					</div>
					<div class="form-wrap about-content">
						<p class="text-white m-0">
							<span class="box" >
								<a href="index.php">Home </a>
								<span class="lnr lnr-arrow-right"></span>
								<a href="donation.php">Donation</a>
							</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!-- Start Donation Area -->
	<section class="donation-area relative section-gap-top">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-5">
					<div class="text-center text-wrap">
						<h1 class="mb-25">Donate to help Children Around the World</h1>
						<p>“The best way to not feel hopeless is to get up and do something. Don’t wait for good things to happen to you. If you go out and make some good things happen, you will fill the world with hope, you will fill yourself with hope.”</p>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- End Donation Area -->
    










	<!-- Start Donation Form Area -->
	<section class="donation-form-area section-gap-bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-10 col-sm-12">
					<div class="donation-box">


                    <form method="post" action="Redirect.php">
					<div class="donation-input">
<input type="hidden" id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "TRANS" . rand(10000,99999999)?>">
<input type="hidden" id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001">
<input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
<input type="hidden" id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					
								<div class="form-group">
									<input type="text" placeholder="Name" class="form-control" id="name" name="name" value="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'">
								</div><br>

								<div class="form-group">
									<input type="email" placeholder="email" class="form-control" id="email" name="email" value="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'">
								</div><br>

								<div class="form-group">
									<input type="text" placeholder="phone number" class="form-control" id="phone_number" name="phone_number" value="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'phone number'">
								</div><br>

								<div class="form-group">
									<textarea placeholder="comment" class="form-control" id="comment" name="comment" value="" onfocus="this.placeholder = ''" onblur="this.placeholder = 'comment'"></textarea>
								</div><br>
					
								<div class="form-group">
									<input title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT" placeholder="₹20.00" onfocus="this.placeholder = ''" onblur="this.placeholder = '₹20.00'" class="form-control">
									<span class="fs-14">INR</span>
								</div>
					</div>
								<input name="submit" value="Donate Now" type="submit" class="primary-btn w-100">
					</form>

                    
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- end Donation Form Area -->
    









	<!-- Start Donation Logo Area -->
	<section class="brand-area section-gap-bottom">
		<div class="container">
			<div class="owl-brand owl-carousel">
				<div class="item">
					<img src="#" alt="">
				</div>
				<div class="item">
					<img src="#" alt="">
				</div>
				<div class="item">
					<img src="#" alt="">
				</div>
				<div class="item">
					<img src="#" alt="">
				</div>
				<div class="item">
					<img src="#" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- End Donation Logo Area -->

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