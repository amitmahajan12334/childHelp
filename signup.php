<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'capstone');

$ngo_name = $_POST['ngoname'];
$ngo_email = $_POST['ngoemail'];
$name = $_POST['username'];
$pass = $_POST['password'];

$q = "select * from signup where username = '$name' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "username already taken";
}else{
    $qy = "insert into signup(NGO_name, NGO_email, username, password) values('$ngo_name','$ngo_email', '$name', '$pass')";
    mysqli_query($con,$qy);
    header('location:login_form.php');
}

?>