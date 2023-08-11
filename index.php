<?php
$heading = 'صفحة الدخول';
require 'layout/header.php';

if(isset($_SESSION['usercode'])){
  echo "<script> window.location = 'show.php';</script>";
//		header('location: index.php');
    exit();
}



if($_SERVER['REQUEST_METHOD'] == 'POST'):
  $stmt = $conn->prepare("SELECT code FROM codes");

  $stmt->execute();

  $rows = $stmt->fetchAll();

  $code = filter_var(trim($_POST['code']), FILTER_SANITIZE_NUMBER_INT);
  
  ifEmpty($code,'ادخل رقم الإشتراك','index.php');

  foreach ($rows as $row) {

    if($row['code'] === $code)
    {
      $_SESSION['usercode'] = $code;
      success('تم تسجيل الدخول بنجاح', 'show.php');
    } 
  }
  error('رقم الأشتراك غير صحيح','index.php');
endif;
?>
<body  style="background:navy">
  
    <div class="container text-center w-100 h-100" style="margin-top: 30vh;">
      <div class="row w-50 mx-auto">
        <div class="col-12">
          <img src="imgs/logo1.png" class="mb-3" alt="">
          <form action="" method="post">
            <input type="number" autofocus class="form-control text-center"  name="code" id="code" placeholder="أدخل رقم الإشتراك" required>
            <button class="btn btn-success mt-3 pr-5 pl-5" type="submit">دخول</button>
          </form>
          
        </div>
      </div>
    </div>

</body>
</html>