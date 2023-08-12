<?php
$heading = 'رابط البث';
require 'layout/header.php';

try {
  $stmt = $conn->prepare("SELECT link FROM links");

    $stmt->execute();

    $row = $stmt->fetch();

} catch (\Throwable $th) {
  //throw $th;
  // echo $th->getMessage();
exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


$link = filter_var(trim($_POST['link']), FILTER_SANITIZE_URL);

  ifEmpty($link,'ادخل رابط البث','link.php');
  
try {

  if($stmt->rowCount() > 0){
    $stmt = $conn->prepare("update links set link = ? where id = 1");
    $stmt->execute([$link]);

} else {

    $stmt = $conn->prepare("insert into links values (1,?)");
    $stmt->execute([$link]);

}

  if ($stmt->rowCount() > 0) {
      success('تم تسجيل رابط البث بنجاح' ,'link.php');
  } else {
    error('حدث خطأ ! حاول مرة أخرى','link.php');
  }
} catch (\Exception $th) {
  //throw $th;
  // echo $th->getMessage();
  // exit();
}

}



?>
<body>
<?php require 'layout/nav.php';  ?>


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
          رابط البث
      </h1>


      <!--start form SignUp-->
      <form class="signup" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
      
          <div class="form-container mb-2">
              <input type="url" class="form-control" name="link" placeholder="أدخل رابط البث" value="<?= isset($row['link'])? $row['link']:'' ?>" />
          </div>
          <input type="submit" name="signup" class="btn btn-info btn-block" value="تعديل">
      </form>
      <!--end from SignUp-->
  </div>
  <div class="the-errors text-center">

  </div>
</div>



</body>
</html>