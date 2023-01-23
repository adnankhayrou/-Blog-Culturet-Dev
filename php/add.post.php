<?php
include_once '../scripts/crudAdmin.script.php';
include_once '../classes/admins.class.php';
include_once '../classes/scripts.class.php';
$title = 'Dashboard';
include 'navbar.php';

if(!isset($_SESSION['name']))  header('location:login.php');
?>

<!-- add post form -->
    
</head>
<div class="container mt-5" id="modal"&>
    <div class="app-content">
        <form action="" method="POST" id="form" data-parsley-validate>
            <div class="modal-header">
                <h5 class="modal-title mt-5 mb-3">Add Post</h5>
            </div>
            <div class="modal-body">
    
            <!-- <input type="hidden" name="id" > -->
							<div class="mb-3">
								<label class="form-label">title</label>
								<input type="text" name="title" class="form-control" required/>
							</div>

                            <div class="mb-3">
                                <label for="image" class="col-form-label" id="image">image</label>
                                <input type="file" class="form-control" id="images" name="image" >
                            </div>
							
                            <div class="mb-3">
								<label class="form-label">Categorey</label>
                                <input type="hidden" value="<?php echo count($cat->getCategory())?>" id="optionLength">
								<select class="form-select" name="category" >
									<option value="">Please select</option>
                                    <?php foreach($cat->getCategory() as $cat ):?>
                                        <option value="<?php echo $cat['id']; ?>"><?php echo $cat['nameCategory'];?> </option>
                                    <?php endforeach;?>
								</select>
							</div>

                            <div class="mb-2">
								<label class="form-label">Description</label>
								<textarea class="form-control" name="description" rows="4" placeholder="Article Body !!"></textarea>
							</div>
						
					</div>
					<div class="modal-footer mb-5">
						<a href="dashboard.php" class="btn btn-white border"  id="post-cancel-btn">Cancel</a>
						<button type="button" class="btn btn-warning text-light task-action-btn ms-2" id="btn-plus">Another Post</button>
                        <button type="submit" name="SavePost" class="btn btn-dark text-light task-action-btn ms-2" id="post-save-btn">Add Posts</button>

					</div>
        </form>
    </div>
</div>
<script src="../assets/js/app.js"></script></body>
</html>