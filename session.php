<?php

session_start();
if(!isset($_SESSION['user'])){
    header("location:../login_form.php?lat=$l1&long=$l2");
}

?>