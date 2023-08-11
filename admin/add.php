<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashbaord</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.2.1.min.js"></script>




  <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap4.min.css">

    <script src="js/jquery.dataTables.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/dataTables.responsive.min.js"></script>





    <link rel="stylesheet" href="css/main.css">

    <script src="js/main.js"></script>

</head>
<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">
      <img src="imgs/logo.png" alt="logo" class="img-responsive rounded w-100">
    </h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <!-- <a class="p-2 text-dark" href="pricing.htm#">Features</a>
      <a class="p-2 text-dark" href="pricing.htm#">Enterprise</a>
      <a class="p-2 text-dark" href="pricing.htm#">Support</a>
      <a class="p-2 text-dark" href="pricing.htm#">Pricing</a> -->
    </nav>
    <form action="" method="post">
      <button class="btn btn-outline-danger" href="">تسجيل خروج</button>
    </form>
  </div>






<style>
  .addform {
      width: 50%;
      margin: auto;
  }

  @media (max-width: 767px) {
      .addform {
          width: 100%;
      }
  }
</style>

<div class="addform">
  <div class="container mt-5" style="margin-bottom:190px" dir="rtl">
      <div id="m"></div>
      <h1 class="text-center">
          إضافة رقم إشتراك جديد
      </h1>


      <!--start form SignUp-->
      <form class="signup" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
         
          <div class="form-container mb-2">
              <input type="number" class="form-control" name="number" placeholder="أدخل رقم الإشتراك" required />
          </div>
          <input type="submit" name="signup" class="btn btn-success btn-block" value="إضافة">
      </form>
      <!--end from SignUp-->
  </div>
  <div class="the-errors text-center">

  </div>
</div>



</body>
</html>
