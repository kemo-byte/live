<?php
$heading = "لوحة التحكم";
require 'layout/header.php';

require 'layout/nav.php'; 

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(isset($_POST['codeid'])) {
  $codeid = $_POST['codeid'];
 
  $stmt = $conn->prepare("DELETE FROM codes Where id = :zid");

    $stmt->bindParam(":zid", $codeid);

    $stmt->execute();

    if ($stmt->rowCount()) {

        success("تم حذف رقم الإشتراك");
        header("refresh:3; index");
        exit();
    } else {

        error("رقم الإشتراك غير موجود");

        header("refresh:3; index");
        exit();
    }
}
}

$stmt = $conn->prepare("SELECT * FROM codes");

    $stmt->execute();

    $rows = $stmt->fetchAll();
    if (!empty($rows)) {
?>



  <div class="all-links container-fluid">
    <div class="col-12 all-links">
        <h1 class="card-title text-center" style="color:navy">لوحة التحكم</h1>
        <table id="links" class="mx-auto table table-striped table-bordered dt-responsive nowrap w-50" >
            <thead>
                <tr>
                    <th>رقم الإشتراك</th>
                    <th>-</th>
                </tr>
            </thead>
            <tbody>
              <?php
              foreach($rows as $row):
              ?>
                    <tr>
                    <form method="POST">

                        <td><span><?= $row['code']?></span></td>
                        <td><span>
                          <a class="btn btn-outline-info ml-2" href="editcode.php?codeid=<?=  $row['id']?>">تعديل</a>
                            <input type="hidden" name="codeid" value="<?= $row['id'] ?>" >
                            <input type="submit" class="confirm btn btn-outline-danger" value="حذف">
                        </span></td>
                        </form>

                    </tr> 
                    <?php endforeach; ?>                
            </tbody>
        </table>

    </div>
</div>

<?php }  else { ?>
  <div class="text-center">
  <a href="add.php" class="text-center btn btn-success">إضافة رقم إشتراك</a>

</div>

  <?php } ?>

  <script>
    function conf(el, value) {
        $(el).click(function() {

            return confirm(value);
        });
    }
    conf($('.confirm'), 'هل تريد حذف رقم الإشتراك ؟');
</script>
  
</body>
</html>