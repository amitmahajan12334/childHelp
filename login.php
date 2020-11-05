<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'capstone');


$name = $_POST['username'];
$pass = $_POST['password'];
// $v1 = $_POST['lats'];
// $v2 = $_POST['longs'];

$q = "select * from markers where username = '$name' && password = '$pass'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

$userData = mysqli_fetch_assoc($result);


// include 'db1.php';

// $v1 = doubleval($_GET['lat']);
// $v2 = doubleval($_GET['long']);

// $sql = "SELECT id,name, (3959 * acos( cos( radians($v1)) * cos( radians( lat )) * cos( radians( lng ) - radians($v2))
//         + sin( radians($v1)) * sin( radians( lat )))) AS distance FROM markers HAVING distance < 20  ORDER BY distance
//         LIMIT 0, 20";

// $query = mysqli_query($con, $sql);

// $res = mysqli_fetch_array($query);

if($num == 1){
    $_SESSION['user'] = $userData;
    // $_SESSION['id'] = $res['id']; 
    // $_SESSION['name'] = $res['name'];


    // echo $_SESSION['user']."<br>";
    // echo $_SESSION['id'];
    // echo $_SESSION['name'];

    header('location:ngo/index.php');
}else{
    header('location:login_form.php');
}

?>