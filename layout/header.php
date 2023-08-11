<?php
session_start();
require 'admin/connect.php';
require 'admin/functions.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($heading) ? $heading :'Default' ?></title>
  <script src="js/jquery-3.2.1.min.js"></script>




  <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/responsive.bootstrap4.min.css">

    <script src="js/jquery.dataTables.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/dataTables.responsive.min.js"></script>





    <link rel="stylesheet" href="css/main.css">

    <script src="js/sweetalert2@11.js"></script>
    <script src="js/main.js"></script>

</head>
<body>