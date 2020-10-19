<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'capstone');

$ngo_name = $_POST['ngoname'];
$ngo_email = $_POST['ngoemail'];
$name = $_POST['username'];
$pass = $_POST['password'];

$q = "select * from signup where username = '$name' && password = '$pass'";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;

    header('location:ngo/index.php');
}else{
    header('location:login_form.php');
}

?>