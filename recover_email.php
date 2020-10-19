<?php

include 'db.php';

if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($con, $_POST['ngoemail']);

    $emailquery = "select * from signup where NGO_email = '$email'";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount){

        $userdata = mysqli_fetch_array($query);

        $username = $userdata['username'];
        $token = $userdata['token'];

        $subject = "Password Reset";
        $body = "Hi, $username. click here too reset your password
        http://localhost/capstone/reset_password.php?token=$token ";

        $sender_email = "From: amitmahajan264889@gmail.com";

        if(mail($email, $subject, $body, $sender_email)){
            $_SESSION['msg'] = "check you mail to reset your password $email";
            header('location:login_form.php');
        }else{
            echo "email sending failed....";
        }
    }else{
        echo "no email found";
    }
}

?>









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
		<div class="container-login100" style="background-image: url('#');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-30">
					Recover Your account
				</span>
				<form action="signup.php" method="post" class="login100-form validate-form p-b-33 p-t-5">
                    
                    <div class="wrap-input100 validate-input" data-validate = "Enter ngoemail">
						<input class="input100" type="email" name="ngoemail" placeholder="Email address">
						<span class="focus-input100" data-placeholder="&#xe81d;"></span>
                    </div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							send mail
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