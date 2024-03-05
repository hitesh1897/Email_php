<?php
  include "config.php";
  if(isset($_POST['txtunm'])){
    $unm = $_POST['txtunm'];
    $pwd = $_POST['txtpwd'];
    $sql = "select * from `user_login` where `username`='$unm' and `password`='$pwd' ";
    $res = mysqli_query($con,$sql);
    $count = mysqli_num_rows($res);
    
    if($count>0){
      session_start();

      $_SESSION['username'] = $unm;
       header("location:home.php");
      // echo($count);
    }
    else{
       echo "Invalid";
    }

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MyMail</title>

  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition bg-dark login-page">
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="index.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="txtunm" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"name="txtpwd" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            
          </div>
          <div class="row">
          <a href="register.html" class="btn btn-warning w-100 mt-2" >Register a new membership</a>
          </div>
        </div>
      </form>

        

    </div>
  </div>
</div>
<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
