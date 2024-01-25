<?php
ob_start();
session_start();
date_default_timezone_set("Asia/Bangkok");


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);




include_once 'connection.php';
include_once 'functionss.php';
// include_once 'functionbell.php';

$year = $date = date("Y");
$month = $date = date("n");
$todate = date('Y-m-d');



$user_id = @$_GET['user_id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stamp</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
        html{
          height:80%; 
        }
        body{ 
          margin:0px;
          height:100%; 
        }
        #map {
          margin:20px;
          height: 80%;
        }
        .fakeimg {
          height: 200px;
          background: #aaa;
        }
      </style>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav mr-auto"> <!-- Use 'mr-auto' class to push items to the left -->
      <?var url = getScriptUrl();?>
      <li class="nav-item">
        <a class="nav-link active" href="index.php?user_id=<?php echo $user_id ?>">หน้าหลัก</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mystamp.php?user_id=<?php echo $user_id ?>">MyStam</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="marker.php?user_id=<?php echo $user_id ?>">Marker</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php?user_id=<?php echo $user_id ?>">Log Out</a>
      </li>
    </ul>
  </div>
</nav>
  <div>

   <div>
<center>

<br>
<div class="card-body" style="background:none;border:3px solid gray;border-radius: 10px;margin:10px;">
  <?php
  $user_id_to_check = @$_GET['user_id'];  // Replace this with the actual user_id you want to check
  checkImageMarker3($user_id_to_check, $dbcon);
  ?>
</div>
<br>

<div class="card-body" style="background:none;border:3px solid gray;border-radius: 10px;margin:10px;">
  <?php
  $user_id_to_check = @$_GET['user_id'];  // Replace this with the actual user_id you want to check
  checkImageMarker4($user_id_to_check, $dbcon);
  ?>
</div>

<br>

<div class="card-body" style="background:none;border:3px solid gray;border-radius: 10px;margin:10px;">
  <?php
  $user_id_to_check = @$_GET['user_id'];  // Replace this with the actual user_id you want to check
  checkImageMarker6($user_id_to_check, $dbcon);
  ?>
</div>

<br>

<div class="card-body" style="background:none;border:3px solid gray;border-radius: 10px;margin:10px;">
  <?php
  $user_id_to_check = @$_GET['user_id'];  // Replace this with the actual user_id you want to check
  checkImageMarker7($user_id_to_check, $dbcon);
  ?>
</div>

<br>

<div class="card-body" style="background:none;border:3px solid gray;border-radius: 10px;margin:10px;">
  <?php
  $user_id_to_check = @$_GET['user_id'];  // Replace this with the actual user_id you want to check
  checkImageMarker8($user_id_to_check, $dbcon);
  ?>
</div>

<br>

<!-- <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <img src="image/Clocktower.png"  class="card-img-top" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div> -->

</center>

   </div>



  </div>

  
</body>
</html>