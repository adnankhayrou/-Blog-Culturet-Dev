<?php
include_once '../scripts/crudAdmin.script.php';
include_once '../classes/admins.class.php';
include_once '../classes/scripts.class.php';
$title = 'Dashboard';
include 'navbar.php';

if(!isset($_SESSION['name']))  header('location:login.php');
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
        <h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel"><i class="fa fa-user text-white fs-3 me-2"></i><?php echo $_SESSION['name'] ?></h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-black" id="color">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="../scripts/crudAdmin.script.php?logout"><i class="fa fa-sign-out text-white me-2"></i>Log out</a>
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
                            <div class="col-sm-10 col-lg-2 bg-black rounded me-2 mb-2">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text-light">
                                                <i class="fa fa-users fs-2 mt-3 text-white me-2"></i>
                                                <span class="fs-1 "><?php echo count($admins->Admins())?></span>
                                                <h3>Admins</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 col-lg-2 bg-black rounded me-2 mb-2">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text-light">
                                                <i class="fa-solid fa-chart-pie fs-2 mt-3 text-white me-2"></i>
                                                <span class="fs-1"><?php echo count($cat->getCategory())?></span>
                                                <a href="category.php" class="text-decoration-none text-light"><h3>Categorys</h3></a>
                                                <!-- href="category.php" -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 col-lg-2 bg-black rounded me-2 mb-2">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text-light ">
                                                <i class="fa-brands fa-microblog fs-1 mt-3 text-white me-2"></i>
                                                <span class="fs-1 "><?php echo count($post->getPosts())?></span>
                                                <h3><?php echo $_SESSION['name'] ?> Posts</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-10 col-lg-2 bg-black rounded me-2 mb-2">
                                <div class="overview-item overview-item--c1" id="color">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="text-light ">
                                                <i class="fa-brands fa-microblog fs-1 mt-3 text-white me-2"></i>
                                                <span class="fs-1 "><?php echo count($post->statistiques())?></span>
                                                <a href="allPosts.php" class="text-decoration-none text-light"><h3>All Posts</h3></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
        <!-- ***********title and add button*************** -->
        <div class="test col py-1">
			     <div class="row">
             <h3 class=" col-7 mt-5 ms-1">Your Posts</h3>
          <div class=" col text-end">
		    <a class="rounded text-light bg-black mx-2 mt-5 text-decoration-none p-1" href="add.post.php"  type="button" >Add Post <i class="fa-solid fa-plus"></i></a>
         </div>
			</div>
            <!-- href="#modal-task" data-bs-toggle="modal" -->
      <!-- ***********table of all posts******************* -->
     <div class=" text-center table-responsive" id="divTable">
           <!-- <table class="table"> -->
           <table id="table" class="table table-striped" style="width:100%">
              <thead class="bg-dark text-light">
               <tr>
                 <th class="text-center">#<?php echo count($post->getPosts())?></th>
                 <th class="text-center">title</th>
                 <th class="text-center">image</th>
                 <th class="text-center">Categorey</th>
                 <th class="text-center">Description</th>
                 <th class="text-center">Edit</th>
                 <th class="text-center">Delete</th>
              </tr> 
                </thead>
                <tbody>
                <?php 
                    $count = 1;
                    foreach($post->getPosts() as $post ):?>
                    <tr>
                        <td class="text-right"><?php echo $count?></td>
                        <td class="text-right"><?php echo $post['title'];?></td>
                        <td class="text-right"><img class="rounded" src="../assets/images/<?= $post['image'];?>" width="100" height="60"></td>
                        <td class="text-right"><?php echo $post['nameCategory'];?></td>
                        <td class="text-right"><?php echo $post['description'];?></td>
                        <td><a href="../php/edit.post.php?edit=<?php echo $post['id_post']; ?>"><i class="fa fa-edit me-2"></i></a></td>
                        <td><a href="../scripts/crudAdmin.script.php?deletePost=<?php echo $post['id_post']; ?>"><i class="fa fa-trash text-danger me-2"></i></a></td>
                    </tr>
                    <?php $count++; endforeach;?>
               </tbody>
            </table>
          </div>
        </div>
      </div>

      </div>
	<!-- add post form -->
	<!-- <div class="modal fade" id="modal-task">
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
                                <label for="image" class="col-form-label" id="image">image</label>
                                <input type="file" class="form-control" id="images" name="image" >
                            </div>
							
                           

                            <div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control" name="description" rows="7"></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="dashboard.php" class="btn btn-white border"  id="post-cancel-btn">Cancel</a>
						<button type="submit" name="SavePost" class="btn btn-dark text-light task-action-btn" id="post-save-btn">Add Post</button>
					</div>
				</form>
			</div>
		</div>
	</div> -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<script src="../assets/js/app.js"></script>
<script src="../assets/js/dataTable.js"></script>
</body>
</html>
