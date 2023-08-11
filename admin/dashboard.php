<?php
$heading = "لوحة التحكم";
require 'layout/header.php';

require 'layout/nav.php'; 
$stmt = $conn->prepare("SELECT code FROM codes");

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
                        <td><span><?= $row['code']?></span></td>
                        <td><span>
                          <a class="btn btn-outline-info ml-2" href="">تعديل</a>
                          <a class="btn btn-outline-danger" href="">حذف</a>
                        </span></td>
                      
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


  
</body>
</html>