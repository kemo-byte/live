<?php
	session_start();
  require 'connect.php';  
  if(isset($_SESSION['admincode'])){
    echo "<script> window.location = 'dashboard.php';</script>";
//		header('location: dashboard.php');
      exit();
}



// check if the user comming from Http Request

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $username = $_POST['email'];
  $password = $_POST['pass'];

  // check if the user exists in the database

  $stmt = $conn ->prepare("SELECT name,email,password from admins where email=?");
  $stmt->execute([$username]);
  $row = 	$stmt ->fetch();
  $count = $stmt ->rowCount();

  // if count > 0    username found
  if($count > 0){

    if(password_verify($password,$row['password'])){
    $_SESSION['admincode'] = $row['name'];
			header('location:dashboard.php');
    // echo "<script> window.location = 'dashboard';</script>";
    exit();
  }
}
  else{
    echo "<div class='container text-center' style='position: relative;'>
    <div style='display:inline-block;' class='alert alert-danger'>البريد الإلكتروني أو كلمة المرور غير صحيحة</div></div>";
  }
}

	?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign in </title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body style="background:navy">
<div class="container">

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

        <div class="d-flex justify-content-center py-4">
          <a href="index.html" class="logo d-flex align-items-center w-auto">
            <img src="../imgs/logo.png" alt="">
            <span class="d-none d-lg-block">
            </span>
          </a>
        </div><!-- End Logo -->

        <div class="card mb-3" >

          <div class="card-body">

            <div class="pt-4 pb-2">
              <h3 class="card-title text-center pb-0 fs-4">تسجيل الدخول</h3>
            </div>

            <form method="POST" class="row g-3 text-right">

              <div class="col-12">
                <div class="input-group">
                  <input type="email" dir="rtl" placeholder=" البريد الإلكتروني" name="email"  class="form-control mb-3" id="email" required>
                </div>
              </div>
              <div class="col-12">
                <input type="password" dir="rtl" placeholder="كلمة المرور" name="pass" class="form-control mb-3" id="yourPassword" required>
              </div>

              <!-- <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                  <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
              </div> -->
              <div class="col-12">
                <button class="btn btn-primary w-100" type="submit">دخول</button>
              </div>
              <!-- <div class="col-12">
                <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p>
              </div> -->
            </form>

          </div>
        </div>

        
      </div>
    </div>
  </div>

</section>
</body>
</html>