<?php
require '../db1.php';
require "../session.php";
    $sql = "SELECT * from child_details";

$query = $dbh ->prepare($sql);
$query->execute();
$l1 = (double)$_SESSION['user']['lat'];
$l2 = (double)$_SESSION['user']['lng'];

$sql = "SELECT id,childName,childAge,parents,education,image,lat,lng, ( 6371 * acos( cos( radians($l1) )   * cos( radians( lat ) ) * cos( radians( lng ) - radians($l2) ) + sin( radians($l1) ) * sin( radians( lat ) ) ) ) AS distance FROM child_details WHERE child_details.`status` = 0 HAVING distance < 25 ORDER BY distance LIMIT 0 , 20;";
    $query = $dbh ->prepare($sql);
	$query->execute();
    $children = $query -> fetchALL(PDO::FETCH_OBJ);

$sql2= "SELECT * from records, child_details where child_details.`id` = records.`child_id` AND ngo_id=?";
$query2 = $dbh->prepare($sql2);
$query2->execute([$_SESSION['user']['id']]);
    $accepted = $query2 -> fetchALL(PDO::FETCH_OBJ);
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>requests_page</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
<body>
        
    <!--================ Start Header Menu Area =================-->
    <?php include 'header.php'; ?>
    <!--================ End Header Menu Area =================-->
        
    <!--================ Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Requests</h2>
                    <p> “The best way to not feel hopeless is to get up and do something. Don’t wait for good things to happen to you. If you go out and make some good things happen, you will fill the world with hope, you will fill yourself with hope.” </p>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

	<!--================ Start Recent Event Area =================-->
	<section class="event_area section_gap_top">
        <div class="container">
            <div class="main_title">
                <h2>Requests</h2>
                
            </div>
        
            <div class="row">
                <?php
                    foreach ($children as $child) {
                        ?>
                        <div class="col-lg-6">
                    <div class="single_event">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <figure>
                                    <img class="img-fluid w-100" src="<?php echo "../".$child->image ?>" alt="">
                                    <div class="img-overlay"></div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="content_wrapper">
                                    <h3 class="title">
                                        <a href="#"><?php echo $child->childName; ?></a>
                                    </h3>
                                    
                                     <b>Age:</b> <?php echo $child->childAge; ?> <br>
                                     <b>Parents:</b> <?php echo " ".$child->parents; ?> <br>
                                     <b>Education:</b> <?php echo " ".$child->education; ?> <br> <br>

                                     <a class="primary_btn" target="_blank" href="<?php echo 'https://www.google.com/maps/search/?api=1&query='.$child->lat.','.$child->lng ?>" style="margin-bottom: 10px; background-color:blue;" >View Location</a>
                                    <a href="accept.php?status=1&child_id=<?php echo $child->id?>&ngo_id=<?php echo $_SESSION['user']['id']?>" class="primary_btn">Accept</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <?php
                    }
                ?>
                
            </div>          
        </div>
    </section>
    <!--================ End Recent Event Area =================-->
        
    <!--================ Start footer Area  =================-->	
    <?php include 'footer.php'; ?>
    <!--================ End footer Area  =================-->  
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>