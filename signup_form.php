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
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/pexels-archie-binamira-754769.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Signup
				</span>
				<form action="signup.php" method="post" class="login100-form validate-form p-b-33 p-t-5">

                    <div class="wrap-input100 validate-input" data-validate = "Enter ngoname">
						<input class="input100" type="text" name="ngoname" placeholder="NGO name">
						<span class="focus-input100" data-placeholder="&#xe80e;"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Enter ngoemail">
						<input class="input100" type="email" name="ngoemail" placeholder="NGO email">
						<span class="focus-input100" data-placeholder="&#xe81d;"></span>
                    </div>
                    


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
							Signup
						</button>
                    </div>
                    
                    <div class="text-center" style="padding-top: 10px;">
                        <a href="login_form.php" class="txt2 hov1">I am already member</a>
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