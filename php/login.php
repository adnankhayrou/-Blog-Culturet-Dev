<?php
// include 'script.php';
$title = 'Sign Up';
include 'navbar.php';

?>


<div class="col-12 col-lg-4 col-md-6 mx-auto mt-5 p-2">
<form action="" method="POST" id="form" class="formLogin " >
<div class="modal-header row">
						<h5 class="modal-title mt-5 fs-3 text-center">LOGIN</h5>
					</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="Email" class="form-control" required>
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="Password" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div  class="text-center">
    <button type="submit" name="login" class="btn btn-dark d-grid gap-2 col-6 mx-auto">Login</button>
  </div>
  <div  class="text-center">
    <p class=" my-2 ">don't have an acount! <a href="signup.php" class="register-text text-danger"> Register Now</a></p>
  </div>
</form>
</div>

</body>	
</html>