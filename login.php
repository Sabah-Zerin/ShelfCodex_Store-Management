<?php
	session_start();
	
	// Check if user is already logged in
	if(isset($_SESSION['loggedIn'])){
		header('Location: index.php');
		exit();
	}
	
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	require_once('inc/header.html');
?>
  <body class="bg-light">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-5">
          <div class="card shadow-lg border-0 rounded-lg">
            <div class="card-header text-center bg-primary text-white">
              <h4>
                <?php
                  if(isset($_GET['action']) && $_GET['action'] == 'register') {
                    echo 'Register';
                  } elseif(isset($_GET['action']) && $_GET['action'] == 'resetPassword') {
                    echo 'Reset Password';
                  } else {
                    echo 'Login';
                  }
                ?>
              </h4>
            </div>
            <div class="card-body p-4">
              <form action="">
                <div id="message"></div>
                
                <?php
                  if(isset($_GET['action']) && $_GET['action'] == 'register') {
                ?>
                  <div class="form-group mb-3">
                    <label for="registerFullName">Full Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="registerFullName" name="registerFullName">
                  </div>
                  <div class="form-group mb-3">
                    <label for="registerUsername">Email<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="registerUsername" name="registerUsername" autocomplete="on">
                  </div>
                  <div class="form-group mb-3">
                    <label for="registerPassword1">Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="registerPassword1" name="registerPassword1">
                  </div>
                  <div class="form-group mb-3">
                    <label for="registerPassword2">Confirm Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="registerPassword2" name="registerPassword2">
                  </div>
                  <button type="button" id="register" class="btn btn-success w-100">Register</button>
                <?php
                  } elseif(isset($_GET['action']) && $_GET['action'] == 'resetPassword') {
                ?>
                  <div class="form-group mb-3">
                    <label for="resetPasswordUsername">Username</label>
                    <input type="text" class="form-control" id="resetPasswordUsername" name="resetPasswordUsername">
                  </div>
                  <div class="form-group mb-3">
                    <label for="resetPasswordPassword1">New Password</label>
                    <input type="password" class="form-control" id="resetPasswordPassword1" name="resetPasswordPassword1">
                  </div>
                  <div class="form-group mb-3">
                    <label for="resetPasswordPassword2">Confirm New Password</label>
                    <input type="password" class="form-control" id="resetPasswordPassword2" name="resetPasswordPassword2">
                  </div>
                  <button type="button" id="resetPasswordButton" class="btn btn-warning w-100">Reset Password</button>
                <?php
                  } else {
                ?>
                  <div class="form-group mb-3">
                    <label for="loginUsername">Username</label>
                    <input type="text" class="form-control" id="loginUsername" name="loginUsername">
                  </div>
                  <div class="form-group mb-3">
                    <label for="loginPassword">Password</label>
                    <input type="password" class="form-control" id="loginPassword" name="loginPassword">
                  </div>
                  <button type="button" id="login" class="btn btn-primary w-100">Login</button>
                <?php } ?>
              </form>
            </div>
            <div class="card-footer text-center">
              <?php if(!isset($_GET['action'])) { ?>
                <a href="login.php?action=register" class="btn btn-link">Create an account</a> |
                <a href="login.php?action=resetPassword" class="btn btn-link">Forgot Password?</a>
              <?php } else { ?>
                <a href="login.php" class="btn btn-link">Back to Login</a>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
	require 'inc/footer.php';
?>
  </body>
</html>
