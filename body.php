<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 350px;
  margin-right: 80px;

}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

<!-- start Banner Area -->
	<section class="home-banner-area relative">
		<div class="container-fluid">
			<div class="row  d-flex align-items-center justify-content-center">
				<div class="header-left col-lg-5 col-md-6 ">
					<h2>
						<b style="color: black;">EVERY PERSON HAS</b> <br>
						<b style="color: black;">EQUAL RIGHT</b>
					</h2>
					<p class="pt-20 pb-20">
						One who has been touched by grace will no longer look on those who stray as "those evil person" or "those poor people who need our help." Nor must we search for signs of "loveworthiness." Grace teaches us that God loves because of who God is, not because of who we are.
					</p>
				</div>
				<div class="col-lg-7 col-md-6 col-sm-8 header-right">
					<div class="owl-carousel owl-banner">
						<img class="img-fluid w-100" src="img/banner/home-banner-img.jpg" alt="">
						<img class="img-fluid w-100" src="img/banner/home-banner-img.jpg" alt="">
					</div>
					<div class="form-wrap">
						<p class="mb-20 text-white" style="padding-left: 180px;">Sending Request</p>
						<br><br>
						<button class="open-button" onclick="openForm()">Open Form</button>

						<div class="form-popup" id="myForm">
					    <form action="#" class="form-container">
					    <button type="submit" class="btn">Login</button>
					    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
					    </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End Banner Area -->

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>