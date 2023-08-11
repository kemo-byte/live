<?php
$heading = 'إضافة رقم إشتراك';
require 'layout/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


$number = filter_var(trim($_POST['number']), FILTER_SANITIZE_NUMBER_INT);

  ifEmpty($number,'ادخل رقم الإشتراك','add.php');

  $stmt = $conn->prepare("insert into codes(`code`) values ?");
            $stmt->execute([$number]);

            if ($stmt->rowCount() > 0) {
                success('تم تسجيل رقم الإشتراك بنجاح' , 'dashbaord.php');
            }

}
?>
<body>
<?php require 'layout/nav.php'; ?>







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
              <input type="number" class="form-control" name="number" placeholder="أدخل رقم الإشتراك"  />
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