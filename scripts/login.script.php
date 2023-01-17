<?php
include_once "../classes/scripts.class.php";

if (isset($_POST['login'])) signIn();


function signIn(){

    $admins = new admin();

    $admins->setEmail($_POST['Email']);

    if( $admins->isExistAdmin($admins->getEmail())){

        $admins->setEmail($_POST['Email']);
        $admins->setPassword($_POST['Password']);

        $admins->loginAdmin();
    }

}  
?>