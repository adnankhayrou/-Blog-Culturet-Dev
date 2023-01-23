<?php
$title = 'Login';
include 'navbar.php';

?>

<!-- edit game form -->
<div class="col-12 col-lg-4 col-md-6 mx-auto mt-5 p-2">
    <form action="../scripts/signup.script.php" method="POST" id="form-task" class="mt-5" data-parsley-validate>
    <div class="modal-header row">
						<h5 class="modal-title mt-5 fs-3 text-center">REGISTER</h5>
					</div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" id="name" name="Name" class="form-control " >
            <small class="fw-bold"></small>
            </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" id="email" name="Email" class="form-control" >
            <small class="fw-bold"></small>
            </div>
            <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="Password" id="password" class="form-control" />
          <small class="fw-bold"></small>
       </div>
       <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Comnfirm Password</label>
          <input type="password" class="form-control" value="" id="passwordd"/>
          <small class="fw-bold"></small>
       </div>
        <div  class="text-center">
            <button type="submit" name="signup" class="btn btn-dark d-grid gap-2 col-6 mx-auto" id="login">sign Up</button>
        </div>
        <div  class="text-center">
            <p class=" my-2 ">already have an acount! <a href="login.php" class="register-text text-danger text-decoration-none"> login</a></p>
        </div>
    </form>
</div>
<script src="../assets/js/validation.js"></script>
</body>
</html>