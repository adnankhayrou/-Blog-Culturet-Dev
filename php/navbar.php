<?php
include_once '../classes/admins.class.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- JavaScript -->
    <script src="https://cdn.tiny.cloud/1/pwpx476ishkvo2br9a50p1v88j46q425bc452jxv7vkd8auv/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title><?php echo $title ?></title>
</head>
<body>

<nav class="navbar navbar-dark bg-black fixed-top">
    <div class="container-fluid">
      <span class="navbar-brand mx-2 fs-4" >Blog Culturet-Dev</span>
      <div class="d-none d-lg-block">
      <h5 class="offcanvas-title text-light" <?php if(!isset($_SESSION['name'])) echo 'hidden'?>  id="h5"><i class="fa fa-user text-white fs-5 me-2"></i><?php echo $_SESSION['name'] ?></h5>
      <a href="../scripts/crudAdmin.script.php?logout" <?php if(!isset($_SESSION['name'])) echo 'hidden'?>  class="nav-link px-0 align-middle"><i class="fa-solid fa-right-from-bracket text-light"></i> <span class="ms-1 d-none d-sm-inline text-light">log out</span> </a>
      </div>
     </div>
</nav>
  