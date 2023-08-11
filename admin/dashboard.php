<?php

session_start();


if(!isset($_SESSION['admincode'])){
  echo "<script> window.location = 'index.php';</script>";
//		header('location: index.php');
    exit();
}


$heading = "لوحة التحكم";



require 'layout/header.php';
?>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">
      <img src="../imgs/logo.png" alt="logo" class="img-responsive rounded w-100">
    </h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <!-- <a class="p-2 text-dark" href="pricing.htm#">Features</a>
      <a class="p-2 text-dark" href="pricing.htm#">Enterprise</a>
      <a class="p-2 text-dark" href="pricing.htm#">Support</a>
      <a class="p-2 text-dark" href="pricing.htm#">Pricing</a> -->
    </nav>
    <form action="logout.php" method="post">
      <button class="btn btn-outline-danger">تسجيل خروج</button>
    </form>
  </div>



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
                    <tr>
                        <td><span>234234234</span></td>
                        <td><span>
                          <a class="btn btn-outline-info ml-2" href="">تعديل</a>
                          <a class="btn btn-outline-danger" href="">حذف</a>
                        </span></td>
                      
                    </tr> 
                    
                    <tr>
                        <td><span>234234234</span></td>
                        <td><span>
                          <a class="btn btn-outline-info ml-2" href="">تعديل</a>
                          <a class="btn btn-outline-danger" href="">حذف</a>
                        </span></td>
                      
                    </tr>
                    
                    <tr>
                        <td><span>234234234</span></td>
                        <td><span>
                          <a class="btn btn-outline-info ml-2" href="">تعديل</a>
                          <a class="btn btn-outline-danger" href="">حذف</a>
                        </span></td>
                      
                    </tr>

                    <tr>
                      <td><span>234234234</span></td>
                      <td><span>
                        <a class="btn btn-outline-info ml-2" href="">تعديل</a>
                        <a class="btn btn-outline-danger" href="">حذف</a>
                      </span></td>
                    
                  </tr>

                  <tr>
                    <td><span>234234234</span></td>
                    <td><span>
                      <a class="btn btn-outline-info ml-2" href="">تعديل</a>
                      <a class="btn btn-outline-danger" href="">حذف</a>
                    </span></td>
                  
                </tr>

                
            </tbody>
        </table>
<div class="text-center">
  <a href="add.html" class="text-center btn btn-success">إضافة رقم إشتراك</a>

</div>
    </div>
</div>



</body>
</html>