<?php
include_once '../scripts/crudAdmin.script.php';
include_once '../classes/scripts.class.php';
include_once '../classes/posts.class.php';
$title = 'Edit page';
include 'navbar.php';

if(!isset($_SESSION['name']))  header('location:login.php');

$connect = new Database;
$connect->connect();
if(isset($_POST['editPost'])){
    $post= new post($_POST['title'] , $_POST['image'] , $_POST['category'] , $_POST['description']);
    $post->updatepost($_POST['id']);
}

if(isset($_GET['edit'])){
    $posts= new post();
    $result = $posts->getPost($_GET['edit']);

    if($result){
        $id = $result['id_post'];
        $title = $result['title'];
        $image = $result['image'];
        $category = $result['nameCategory'];
        $description = $result['description'];
        $idCat = $result['category_id'];
    }
}

?>

<!-- edit post form -->
    
</head>
<div class="container mt-5" id="modal"&>
    <div class="app-content">
        <form action="" method="POST" id="form" data-parsley-validate>
            <div class="modal-header">
                <h5 class="modal-title mt-5 mb-3">Edit Post</h5>
            </div>
            <div class="modal-body">
    
                    <input type="hidden" name="id" value="<?php echo $id; ?>">

							<div class="mb-2">
								<label class="form-label">title</label>
								<input id="title" type="text" name="title" class="form-control" value="<?php echo $title; ?>" data-parsley-minlength="3" data-parsley-required/>
                                <small class="fw-bold"></small>
                            </div>

                            <div class="mb-3">
                                <img class="rounded" src="../assets/images/<?= $image;?>" width="100" height="60">
                                <label for="image" class="col-form-label" id="image"></label>
                                <input type="file" class="form-control" id="images" name="image" data-parsley-required/>
                                <small class="fw-bold"></small>
                            </div>
							
                            <div class="mb-3">
								<label class="form-label">Categorey</label>
								<select id="select" class="form-select" name="category" data-parsley-required>
									<option value="">Please select</option>
                                    <?php foreach($cat->getCategory() as $cat ):?>
                                        <option <?= ($cat['id'] == $idCat) ? "selected" : "" ?> value="<?php echo $cat['id']; ?>"><?php echo $cat['nameCategory'];?> </option>
                                    <?php endforeach;?>
								</select>
                                <small class="fw-bold"></small>
							</div>

                            <div class="mb-3">
								<label class="form-label">Description</label>
								<textarea class="form-control mb-3" name="description" rows="4" data-parsley-trigger="onkeyup" data-parsley-minlength="5" data-parsley-maxlength="100" 
                                 data-parsley-minlength-message="You need to enter at least a 5 character comment.." 
                                 data-parsley-validation-threshold="10" data-parsley-required> <?php echo $description; ?></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="dashboard.php" class="btn btn-white border "  id="post-cancel-btn">Cancel</a>
						<button type="submit" name="editPost" class="btn btn-dark text-light task-action-btn ms-2" id="post-save-btn">Save</button>
					</div>
        </form>
    </div>
</div>

<script src="../assets/js/app.js"></script>
</body>
</html>