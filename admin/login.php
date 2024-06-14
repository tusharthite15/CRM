<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
 <?php require_once('inc/header.php') ?>
<body class="hold-transition login-page  dark-mode">
  <script>
    start_loader()
  </script>
  <style>
    body{
      /* background-image: url("<?php echo validate_image($_settings->info('cover')) ?>"); */
      background-size:cover;
      background-repeat:no-repeat;
    }
    .login-title{
      text-shadow: 2px 2px black
    }
  </style>
  <h1 class="text-center py-5 login-title"><b><?php echo $_settings->info('name') ?></b></h1>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="./" class="h1"><b>Login</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg" style="color:white">Sign in to start your session</p>

      <form id="login-frm" action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" autofocus name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-lg btn-block">Sign In</button>
          </div>
          <!-- <div class="register text-center">Don't have an account? <a href="../admin/user/register.php">Register here</a></div> -->
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->
      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<style>
  body {
  font-family: 'Arial', sans-serif;
  background-image: url("sign-in-box@3x.png");
  display: flex;
  align-items: center;
  justify-content: flex-end;
  height: 100vh;
  margin: 0;
}
.register{
  padding-top: 20px;
}

.login-box {
  width: 400px;
  height: 800px;
  margin: auto;
}

.card {
  border: none;
  height: 400px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.card-header {
  background-color: #0078d4;
  color: #fff;
}

.card-body {
  padding: 20px;
}

.login-box-msg {
  margin-bottom: 20px;
  font-size: 18px;
  color: #333;
}

.form-control {
  border: 1px solid #ced4da;
  border-radius: 5px;
}

.input-group-text {
  background-color: #0078d4;
  border: 1px solid #0078d4;
  color: #fff;
  border-radius: 5px;
}

.btn-success {
  /* background-color: #0FA958; */
  border-radius: 5px;
  color: #fff;
}

</style>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script>
  $(document).ready(function(){
    end_loader();
  })
</script>
</body>
</html>