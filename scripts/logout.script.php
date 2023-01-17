<?php
include_once "../classes/scripts.class.php";

if(isset($_GET['action']) && $_GET['action'] === 'logOut') logOut();

function logOut(){
    $admins = new admin();
    $admins->logOut();
    header('location:../php/login.php');
}

?> 