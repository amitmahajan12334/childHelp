<?php

require 'db.php';
require 'db1.php';
require 'PHPMailerAutoload.php';
require 'credential.php';

if(isset($_POST['subm'])){ 

	$l1 = $_POST['lats'];
    $l2 = $_POST['longs'];

	$child_name=$_POST['childName'];
	$child_age=$_POST['age'];
	$child_parents=$_POST['parents'];
	$edu=$_POST['education'];
	$child_image=$_FILES['file'];

	$filename = $child_image['name'];

	$fileerror = $child_image['error'];
	$filetmp = $child_image['tmp_name'];

	$fileext = explode('.',$filename);
	$filecheck = strtolower(end($fileext));

	$fileextstored = array('png', 'jpg', 'jpeg');


	if(in_array($filecheck,$fileextstored)){
		$destinationfile = 'uploaded/'.$filename;
		move_uploaded_file($filetmp,$destinationfile);


		$sql="INSERT INTO child_details(childName,childAge,parents,education,image, lat, lng)VALUES('$child_name','$child_age','$child_parents','$edu','$destinationfile','$l1','$l2')";

		mysqli_query($con, $sql);

		header("location: sending_request_form.php");
	}


	
	$sql = "SELECT id,name,email, (3959 * acos( cos( radians($l1)) * cos( radians( lat )) * cos( radians( lng ) - radians($l2))
	+ sin( radians($l1)) * sin( radians( lat )))) AS distance FROM markers HAVING distance < 20  ORDER BY distance
	LIMIT 0, 20";

	$query = $dbh ->prepare($sql);
	$query->execute();
	$results = $query -> fetchALL(PDO::FETCH_OBJ);


if($query->rowCount()> 0){
    
    foreach($results as $result) {


		$mail = new PHPMailer;

		// $mail->SMTPDebug = 4;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = EMAIL;                 // SMTP username
		$mail->Password = PASS;                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom(EMAIL, 'Helping Hand');
		$mail->addAddress($result->email             );     // Add a recipient

		$mail->addReplyTo(EMAIL);
		
		$mail->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);

		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Help needy people';
		$mail->Body    = '<b>Child Name:</b>'.$child_name.'<br><b>Child Age:</b>'.$child_age.'<br><b>Child Parents:</b>'.$child_parents.'<br><b>Child Edication:</b>'.$edu.'<br><b>Location:</b>https://www.google.com/maps/search/?api=1&query='.$l1.','.$l2;
		

		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			  header("location: sending_request_form.php");
		}
	}
}



	
	
	
}

?>


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

<body onload="getLocation()">


<script type="text/javascript">
    function getLocation(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition);

        }
    }

    function showPosition(position){
        document.getElementById("lats").value=+position.coords.latitude;
        document.getElementById("longs").value=+position.coords.longitude;
    }

</script>


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
						<h1 class="mb-25">Help Needy People Around the World</h1>
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
						<form method="POST" enctype="multipart/form-data">
							<div class="donation-input">
								<div class="form-group">
									<input type="text" class="form-control" name="lats" id="lats">
							    	<input type="text" class="form-control" name="longs" id="longs">
								</div>

								<div class="form-group">
									<label for="name">Child Name</label>
									<input type="text" class="form-control" id="name" name="childName" required>
								</div>

								<div class="form-group">
									<label for="age">Age</label>
									<input type="number" class="form-control" id="age" name="age" required>
								</div>

								<div class="form-group" style="padding-top:20px;">
									<label for="parents">Parents/gardians</label>
									<div>
										<input type="radio" name="parents" id="pyes" value="yes"> <label for="yes">Yes</label> <br>
										<input type="radio" name="parents" id="pno" value="no"> <label for="no">No</label> <br>
										<input type="radio" name="parents" id="pdno" value="dont"> <label for="dont">Don't Know</label>
									</div>
								</div>

								<div class="form-group" style="padding-top:20px;">
									<label for="education">Education</label> 
									<div>
										<input type="radio" name="education" value="primary"> <label>Yes/ Primary Educaion</label> <br>
										<input type="radio" name="education" value="notEducated"> <label>No</label> <br>
									</div>
								</div>

								<div class="form-group">
									<label for="file">Select a picture</label> <br>
									<input type="file" name="file" id="file">
								</div>

							</div>
							<button class="primary-btn w-100" type="submit" name="subm" id="subm">Submit</button>
							<!-- <input type="Submit" name="subm" id="subm" class="primary-btn w-100" value="Submit"/> -->
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