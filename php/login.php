<?php
$title = 'Sign Up';
include 'navbar.php';

?>


<div class="col-12 col-lg-4 col-md-6 mx-auto mt-5 p-2" id="loginn">
<form action="../scripts/login.script.php" method="POST" id="form" class="formLogin " data-parsley-validate>
<div class="modal-header row">
						<h5 class="modal-title mt-5 fs-3 text-center">LOGIN</h5>
					</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="Email" id="email" class="form-control" />
    <small class="fw-bold"></small>
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="Password" class="password form-control" id="password"/>
    <small class="fw-bold"></small>
  </div>
  <div  class="text-center">
    <button type="submit" name="login" class="btn btn-dark d-grid gap-2 col-6 mx-auto" id="login">Login</button>
  </div>
</form>

</div>
<div  class="text-center">
    <p class=" my-2 ">don't have an acount! <a href="signup.php" class="register-text text-danger text-decoration-none"> Register Now</a></p>
  </div>

<script src="../assets/js/validation.js"></script>
</body>	
</html>