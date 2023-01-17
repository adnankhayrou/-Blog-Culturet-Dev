<?php 
include_once "../classes/scripts.class.php";

if (isset($_POST['signup'])) signUp();


function signUp(){

    $admins = new admin();

    $admins-> setEmail($_POST['Email']);
    if ( $admins->isExistAdmin($admins->getEmail()) > 0) {
        echo"<script>alert('This Email already exist');document.location='../php/signup.php'</script>";
    }
    else {

       
        $admins->setName($_POST['Name']);
        $admins->setPassword($_POST['Password']);
        $admins->addAdmin();

        header('location:../php/login.php');

    }

}


?>