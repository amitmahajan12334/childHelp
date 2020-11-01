<!DOCTYPE html>
<html lang="en">
<head>
	<title>ngo_login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/utilForm.css">
	<link rel="stylesheet" type="text/css" href="css/mainForm.css">
<!--===============================================================================================-->


<style>
	.txt1 {
  font-family: OpenSans-Regular;
  text-decoration: none;
  font-weight: lighter;;
  font-size: 15px;
  line-height: 1.4;
  color: #999999;
  padding: 0 10px;
}

.txt2 {
  font-family: OpenSans-Regular;
  text-decoration: none;
  font-size: 15px;
  line-height: 1.4;
  color:hotpink;
}

.hov1:hover {
  text-decoration: underline;
  color: hotpink;
}

</style>
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

	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form action="login.php" method="post" class="login100-form validate-form p-b-33 p-t-5">

			
					<input class="input100" type="hidden" name="lats" id="lats">
					<input class="input100" type="hidden" name="longs" id="longs">


					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						<a href="recover_email.php" class="txt2 hov1">
							Username / Password?
						</a>
					</div>

					<div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

						<a href="signup_form.php" class="txt2 hov1">
							Sign up
						</a>
					</div>





				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="js/mainForm.js"></script>

</body>
</html>