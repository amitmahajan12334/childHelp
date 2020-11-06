    <?php require "../session.php"; ?>  


<?php
require '../db1.php';
$msg = "";

if(isset($_POST['submit'])){
	$ngo_email = $_POST['email'];
    $ngo_address = $_POST['address'];
    $ngo_lat = $_POST['lat'];
    $ngo_lng = $_POST['lng'];
    $ngo_phone = $_POST['phone'];


    $sql3 = "UPDATE markers set `address`='$ngo_address', `lat`=$ngo_lat, `lng`=$ngo_lng, `phone_number`=$ngo_phone WHERE `email`='$ngo_email'";
    $query3 = $dbh ->prepare($sql3);
    $query3->execute();
}


?>





    <!--================ Start Header Menu Area =================-->
    <?php include 'header.php'; ?>
    <!--================ End Header Menu Area =================-->
        
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Update Your Account</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    
    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <form class="row contact_form" method="post" id="contactForm">
                        <div class="col-md-6" pa>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="address" id="address" placeholder="Address"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="lat" name="lat" placeholder="Enter Latitude">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="lng" name="lng" placeholder="Enter Longitude">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
                            </div>
                        </div>


                        <div class="col-md-12 text-right">
                            <button type="submit" name="submit" value="submit" class="btn primary_btn">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
        
    <!--================ Start footer Area  =================-->	
    <?php include 'footer.php'; ?>
    <!--================ End footer Area  =================-->