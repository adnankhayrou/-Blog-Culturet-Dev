<?php
include_once '../scripts/crudAdmin.script.php';
include_once '../classes/admins.class.php';
$title = 'Dashboard';
include 'navbar.php';
?>

<div class="container-fluid">
    <div class="row flex-nowrap">
         <!-- NAVBAR  -->
         <nav class="navbar fixed-top d-lg-none " id="color">
  <div class="container-fluid" >
    <a href="landingpage.php" class="text-light text-decoration-none"></a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon text-dark"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header bg-black" id="color">
        <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel"><i class="fa fa-user text-white fs-3 me-2"></i>test</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-black" id="color">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="login.php"><i class="fa fa-sign-out text-white me-2"></i>Log out</a>
          </li>
      </div>
    </div>
  </div>
</nav>
        <!-- END OF NAVBAR -->

        <!-- Statistiques-->
<div class="container ">
<div class="main-content pt-5 ">
                <div class="section__content section__content ">
                    <div class="container-fluid " >
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1 mt-5 d-flex justify-content-center" id="statistiques">Statistiques</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25 mt-2 d-flex justify-content-center">
                            <div class="col-sm-10 col-lg-3 bg-black rounded me-2 mb-2">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text-light">
                                                <i class="fa fa-users fs-2 mt-3 text-white me-2"></i>
                                                <span class="fs-1 ">2</span>
                                                <h3>Admins</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 col-lg-3 bg-black rounded me-2 mb-2">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text-light">
                                                <i class="fa-solid fa-chart-pie fs-2 mt-3 text-white me-2"></i>
                                                <span class="fs-1">7</span>
                                                <a href="category.php" class="text-decoration-none text-light"><h3>Categorys</h3></a href="category.php">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 col-lg-3 bg-black rounded me-2 mb-2">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text-light ">
                                                <i class="fa-brands fa-microblog fs-1 mt-3 text-white me-2"></i>
                                                <span class="fs-1 ">6</span>
                                                <h3>Posts</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
        <!-- ***********title and add button*************** -->
        <div class="test col py-1">
			     <div class="row">
             <h3 class=" col-7 mt-5 ms-1">all Posts</h3>
          <div class=" col text-end">
		    <button class="  rounded text-light bg-black mx-2 mt-5" href="#modal-task" data-bs-toggle="modal" type="button" >Add Post <i class="fa-solid fa-plus"></i></button>
         </div>
			</div>
            
      <!-- ***********table of all posts******************* -->
     <div class=" text-center table-responsive" id="divTable">
           <table class="table">
              <thead class="bg-dark text-light">
               <tr>
                 <th scope="col">#</th>
                 <th scope="col">title</th>
                 <th scope="col">image</th>
                 <th scope="col">Categorey</th>
                 <th scope="col">Description</th>
                 <th scope="col">Edit</th>
              </tr> 
                </thead>
                <tbody>
                
               </tbody>
            </table>
          </div>
        </div>
      </div>

      </div>
	<!-- add post form -->
	<div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../scripts/crudAdmin.script.php" method="POST" id="form">
					<div class="modal-header">
						<h5 class="modal-title">New Post</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" >
							<div class="mb-3">
								<label class="form-label">title</label>
								<input type="text" name="title" class="form-control" required/>
							</div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" name="image" type="file" id="formFile">
                            </div>
							
                            <div class="mb-3">
								<label class="form-label">Categorey</label>
								<select class="form-select" name="category" >
									<option value="">Please select</option>
								</select>
							</div>

                            <div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control" name="description" rows="7" required></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="dashboard.php" class="btn btn-white border"  id="post-cancel-btn">Cancel</a>
						<button type="submit" name="SavePost" class="btn btn-dark text-light task-action-btn" id="post-save-btn">Add Post</button>
					</div>
				</form>
			</div>
		</div>
	</div>


    <!-- <script src="js/app.js"></script> -->
</body>
</html>