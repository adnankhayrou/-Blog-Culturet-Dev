<?php
$title = 'Login';
include 'navbar.php';

?>

<!-- edit game form -->
<div class="col-12 col-lg-4 col-md-6 mx-auto mt-5 p-2">
    <form action="../scripts/signup.script.php" method="POST" id="form-task" class="mt-5" >
    <div class="modal-header row">
						<h5 class="modal-title mt-5 fs-3 text-center">REGISTER</h5>
					</div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input type="text" name="Name" class="form-control " required>
            </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="Email" class="form-control" required>
            </div>
            <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="Password" id="password1" class="form-control" required/>
       </div>
       <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Comnfirm Password</label>
          <input type="password" class="form-control" required/>
       </div>
        <div  class="text-center">
            <button type="submit" name="signup" class="btn btn-dark d-grid gap-2 col-6 mx-auto">sign Up</button>
        </div>
        <div  class="text-center">
            <p class=" my-2 ">already have an acount! <a href="login.php" class="register-text text-danger"> login</a></p>
        </div>
    </form>
</div>

</body>
</html>