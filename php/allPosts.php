<?php
include_once '../scripts/crudAdmin.script.php';
include_once '../classes/admins.class.php';
include_once '../classes/scripts.class.php';
$title = 'All Posts';
include 'navbar.php';

if(!isset($_SESSION['name']))  header('location:login.php');
?>

<!-- NAVBAR  -->
<nav class="navbar fixed-top d-lg-none " id="color">
  <div class="container-fluid" >
    <a href="landingpage.php" class="text-light text-decoration-none"></a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon text-dark"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header bg-black" id="color">
        <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel"><i class="fa fa-user text-white fs-3 me-2"></i><?php echo $_SESSION['name'] ?></h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-black" id="color">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="dashboard.php"><- Back</a>
            </li>
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="../scripts/crudAdmin.script.php?logout"><i class="fa fa-sign-out text-white me-2"></i>Log out</a>
          </li>
      </div>
    </div>
  </div>
</nav>
        <!-- END OF NAVBAR -->

        
<!-- ***********title and add button*************** -->
            <div class="test col pb-1 pt-5">
			     <div class="row">
                 <div class=" col-10 ">
		    <button class="  rounded text-light bg-black ms-2 mt-5 d-none d-lg-block d-md-block" type="button" ><a class="text-decoration-none text-light" href="dashboard.php"><- Back</a></button>
         </div>
          <div class=" col text-center">
          <h2 class="  mt-5 m-1">all Posts</h2>
         </div>
           </div>
      <!-- ***********table of all posts******************* -->
     <div class=" text-center " id="divTable">
           <!-- <table class="table"> -->
           <table id="table" class=" table table-striped table-responsive" style="width:100%">
              <thead class="bg-dark text-light">
               <tr>
                 <th class="text-center">#<?php echo count($post->getPosts())?></th>
                 <th class="text-center">title</th>
                 <th class="text-center">image</th>
                 <th class="text-center">Categorey</th>
                 <th class="text-center">Description</th>
                 <th class="text-center">Admin Name</th>
              </tr> 
                </thead>
                <tbody>
                <?php 
                    $count = 1;
                    foreach($post->getAllPosts() as $post ):?>
                    <tr>
                        <td class="text-right"><?php echo $count?></td>
                        <td class="text-right"><?php echo $post['title'];?></td>
                        <td class="text-right"><img class="rounded" src="../assets/images/<?= $post['image'];?>" width="100" height="60"></td>
                        <td class="text-right"><?php echo $post['nameCategory'];?></td>
                        <td class="text-right"><?php echo $post['description'];?></td>
                        <td class="text-right"><?php echo $post['name'];?></td>
                    </tr>
                    <?php $count++; endforeach;?>
               </tbody>
            </table>
          </div>
        </div>
      </div>

      </div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<script src="../assets/js/app.js"></script>
<script src="../assets/js/dataTable.js"></script>
</body>
</html>