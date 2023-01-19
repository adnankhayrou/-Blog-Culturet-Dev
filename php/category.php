<?php
// include '../classes/category.class.php';
include '../classes/scripts.class.php';
include '../scripts/crudAdmin.script.php';
$title = 'Categorys';
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


        <!-- *********** Add category *************** -->
        <div class="test col pb-1 pt-5">
			     <div class="row">
                 <div class=" col-10 ">
		    <button class="  rounded text-light bg-black ms-2 mt-5 d-none d-lg-block d-md-block" type="button" ><a class="text-decoration-none text-light" href="dashboard.php"><- Back</a></button>
         </div>
          <div class=" col text-end">
            <form action="../scripts/crudAdmin.script.php" method="POST" id="">
            <div class=" d-flex">
            <input type="text" name="category" class="col ms-2 form-control mb-2 mt-5"/>
            <button type="submit" name="AddCategory" class="col-3 ms-2 rounded text-light bg-black me-2 mt-5 mb-2 " id="category-add-btn">Add</button>
            </div>
            </form>
         </div>
           </div>
           
           
<!-- ***********table of all categorys******************* -->
<div class=" text-center table-responsive px-2" id="divTable">
           <table class="table">
              <thead class="bg-dark text-light">
               <tr>
                 <th scope="col">#<?php echo count($cat->getCategory())?></th>
                 <th scope="col">Categoreys</th>
                 <th scope="col">Delete</th>
              </tr> 
                </thead>
                <tbody>
                  
                    <?php 
                    $count = 1;
                    foreach($cat->getCategory() as $cat ):?>
                    <tr>
                        <td class="text-right"><?php echo $count?></td>
                        <td class="text-right"><?php echo $cat['nameCategory'];?></td>
                        <td><a href="../scripts/crudAdmin.script.php?deletecategory=<?php echo $cat['id']; ?>"><i class="fa fa-trash text-danger me-2"></i></a></td>
                    </tr>
                    
                    <?php $count++; endforeach;  ?>
                </tbody>
            </table>
          </div>
        </div>
      </div>

      </div>

    

