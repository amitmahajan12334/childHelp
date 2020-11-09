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

.float{
	position:fixed;
	width:70px;
	height:70px;
	bottom:40px;
	left:40px;
	background-color:#ccc;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	box-shadow: 2px 2px 3px #999;
}
</style>

<!-- start Banner Area -->
<section class="home-banner-area relative">
		<div class="container-fluid">
			<div class="row  d-flex align-items-center justify-content-center">
				<div class="header-left col-lg-5 col-md-6 ">
					<h2>
						<b style="color: black;">EVERY PEOPLE DESERVE TO BE SERVED EQUALLY.</b> <br>
					</h2>
					<p class="pt-20 pb-20">
						One who has been touched by grace will no longer look on those who stray as "those evil person" or "those poor people who need our help." Nor must we search for signs of "loveworthiness." Grace teaches us that God loves because of who God is, not because of who we are.
					</p>
				</div>
				<div class="col-lg-7 col-md-6 col-sm-8 header-right">
					<div class="owl-carousel owl-banner">
						<img class="img-fluid w-100" src="img/banner/home-banner-img4.jpg" alt="">
						<img class="img-fluid w-100" src="img/banner/home-banner-img6.jpg" alt="">
						<img class="img-fluid w-100" src="img/banner/home-banner-img1.jpg" alt="">
						<img class="img-fluid w-100" src="img/banner/home-banner-img3.jpg" alt="">
						<img class="img-fluid w-100" src="img/banner/home-banner-img2.jpg" alt="">
						
					</div>
					<div class="form-wrap">
						<p class="mb-20 text-red" style="padding-left: 10px; font-size:20px; color:red;">For Sending child details a open this form...</p>
						<br><br>
            			<a href="sending_request_form.php" style="font-size: 16px;">
			              <button class="open-button">Open Form</button>
			            </a>
						<!-- <button class="open-button" onclick="openForm()">Open Form</button> -->
					</div>
				</div>
			</div>
		</div>
		<a id="button_bot" href="#" class="float">
    <img title="Chatbot" src="chatbot_bot.png" style="height: 85%; width: 85%;" onclick="open_bot()">
    </a>
	</section>

	<script>
	function open_bot(){
  		let height = (window.innerHeight*101)/100
  		window.open("bot.html", "myWindow", "scrollbars=0,resizable=0, width=420,height="+height+", top=0, left=0, menubar=no");
  }
	</script>
<!-- End Banner Area -->