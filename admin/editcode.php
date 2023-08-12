<?php
$heading = 'تعديل رقم الإشتراك';
require 'layout/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$codeid = $_POST['codeid'];


$code = filter_var(trim($_POST['code']), FILTER_SANITIZE_NUMBER_INT);

  ifEmpty($link,'ادخل رقم الإشتراك','editcode.php');

try {
  $stmt = $conn->prepare("update codes set code = ? where id = ?");
  $stmt->execute([$code,$codeid]);

  if ($stmt->rowCount() > 0) {
      success('تم التعديل -'.$code.' - بنجاح' ,'index.php');
  } else {
    error('حدث خطأ ! حاول مرة أخرى','index.php');
  }
} catch (\Exception $th) {
  //throw $th;
  echo $th->getMessage();
}

}


try {
  $stmt = $conn->prepare("SELECT code FROM codes where id =?");

    $stmt->execute([$_GET['codeid']]);

    $row = $stmt->fetch();
} catch (\Throwable $th) {
  //throw $th;
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
          تعديل رقم إشتراك
      </h1>


      <!--start form -->
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      
          <div class="form-container mb-2">
              <input type="hidden" value="<?= $_GET['codeid'] ?>" name="codeid">
              <input type="number" class="form-control" name="code" placeholder="أدخل رقم الإشتراك" value="<?= isset($row['code'])? $row['code']:'' ?>" />
          </div>
          <input type="submit" class="btn btn-info btn-block" value="تعديل">
      </form>
      <!--end from -->
  </div>
  <div class="the-errors text-center">

  </div>
</div>



</body>
</html>