<?php
$title = 'Dashboard';
include 'navbar.php';
?>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <!-- ***********side bar************ -->
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark position-fixed d-none d-lg-block">
            <div class=" d-flex flex-column align-items-center align-items-sm-start my-5 px-3 pt-2 text-white vh-100">
               
                    <span class="fs-4 d-none d-sm-inline my-3">Welcome<br></span>
                
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start pt-4" id="menu">
                    
                    <li >
                        <a href="dashboard.php" class="nav-link px-0 align-middle ">
                        <i class="fa-solid fa-gauge text-light"></i> <span class="ms-1 d-none d-sm-inline text-light ">Dashboard</span> </a>
                    </li>
                    <li class="nav-item">
                        <a href="statistics.php" class="nav-link align-middle px-0">
                        <i class="fa-solid fa-chart-pie text-light"></i> <span class="ms-1 d-none d-sm-inline text-light">Statistics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-user text-light"></i> <span class="ms-1 d-none d-sm-inline text-light">Profile</span> </a>
                    </li>
                    <li>
                        <a href="login.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-right-from-bracket text-light"></i> <span class="ms-1 d-none d-sm-inline text-light">Sign out</span> </a>
                    </li>
                </ul>
            </div>
        </div>
         <!-- NAVBAR  -->
         <nav class="navbar fixed-top d-lg-none " id="color">
  <div class="container-fluid" >
    <!-- <a class="navbar-brand text-light" href="#">Offcanvas navbar</a> -->
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
                                    <h2 class="title-1 mt-4 d-flex justify-content-center" id="statistiques">Statistiques</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25 d-flex justify-content-center">
                            <div class="col-sm-10 col-lg-3 bg-black rounded me-2 mb-2">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                           
                                            <div class="text-light">
                                                <h2>test</h2>
                                                <span>2</span>
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
                                                <h2>tset</h2>
                                                <span>7</span>
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
                                                <h2>test</h2>
                                                <span>6</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

<!-- ***********table of all games******************* -->
        
        <!-- ***********title and add button*************** -->
        <div class="test col py-1">
			     <div class="row">
             <h3 class=" col-7 my-5 ms-1">all Posts</h3>
          <div class=" col text-end">
		    <button class="  rounded text-light bg-black mx-2 my-5" href="#modal-task" data-bs-toggle="modal" type="button" >Add Post <i class="fa-solid fa-plus"></i></button>
         </div>
			</div>
            
      <!-- ***********table of all games******************* -->
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
	<!-- add game form -->
	<div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form">
					<div class="modal-header">
						<h5 class="modal-title">New Post</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" >
							<div class="mb-3">
								<label class="form-label">title</label>
								<input type="text" name="Name" class="form-control" required/>
							</div>

                            <div class="mb-3">
								<label class="form-label">image</label>
								<input type="Number" name="Price" class="form-control" step="any" required/>
							</div>
							
                            <div class="mb-3">
								<label class="form-label">Categorey</label>
								<select class="form-select" name="categorey" required>
									<option value="">Please select</option>
                                    
								</select>
							</div>

                            <div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control" name="Description" rows="7" required></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="task-cancel-btn">Cancel</a>
						<button type="submit" name="Add" class="btn btn-dark text-light task-action-btn" id="game-save-btn">Add Game</button>
					</div>
				</form>
			</div>
		</div>
	</div>


    <!-- <script src="js/app.js"></script> -->
</body>
</html>