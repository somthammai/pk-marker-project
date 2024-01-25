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
  <title>Map marker</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
        html{
          height:80%; 
        }
        #map {
          margin:20px;
          height: 80%;
        }
        .fakeimg {
          height: 200px;
          background: #aaa;
        }

        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .flip-card {
          background-color: transparent;
          width: 300px;
          height: 300px;
          perspective: 1000px;
        }

        .flip-card-inner {
          position: relative;
          width: 100%;
          height: 100%;
          text-align: center;
          transition: transform 0.6s;
          transform-style: preserve-3d;
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        .flip-card:hover .flip-card-inner {
          transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
          position: absolute;
          width: 100%;
          height: 100%;
          -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
        }

        .flip-card-front {
          background-color: #bbb;
          color: black;
        }

        .flip-card-back {
          background-color: #2980b9;
          color: white;
          transform: rotateY(180deg);
        }
        #more1, #more2 ,#more3,#more7 {display: none;}


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
  <script>
    function myFunction(cardId, dotsId, moreId, btnId) {
      var dots = document.getElementById(dotsId);
      var moreText = document.getElementById(moreId);
      var btnText = document.getElementById(btnId);

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
      }
    }
      ///////////////////////////getLocation////////////////////////////////////////////
    function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(redirectToPosition);
                } else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }

            function redirectToPosition(position) {
                // Use history.pushState to set the new URL without page refresh
                var newUrl = 'marker.php?user_id=<?php echo $user_id ?>&lat=' + position.coords.latitude + '&long=' + position.coords.longitude;
                history.pushState({ path: newUrl }, '', newUrl);
            }

            // Call getLocation() when the window has finished loading
            window.onload = function () {
                getLocation();
            };
  </script>

  

<div>
    <div>


        <?php
        // You can still use $lat and $long as needed
        // echo $lat = (isset($_GET['lat'])) ? $_GET['lat'] : '';
        // echo $long = (isset($_GET['long'])) ? $_GET['long'] : '';
        // do whatever you want
        ?>
    </div>
</div>

    
    <center>
      <br>

      <div class="card" style="width: 27rem;">
        <img src="image/20120607_uazjivkk.jpg" alt="Avatar" style="width:auto;height:auto;">
        <div class="card-body">
          <p>Marker 4</p>
          <h2>วงเวียนหอนาฬิกา</h2>
          <p> วงเวียนหอนาฬิกา หรือ วงเวียนสุรินทร์ เป็นวงเวียนที่มีอายุยาวนาน ได้รับการบูรณะซ่อมแซม และออกแบบใหม่ตามสถาปัตยกรรมแบบชิโนโปรตุกีส<span id="dots2">...
          </span><span id="more2"> เพื่อให้กลมกลืนและเป็นหนึ่งเดียวกับเมืองโบราณซึ่งเป็นสถาปัตยกรรมแบบชิโนโปรตุกีสเช่นเดียวกัน หลังการบูรณะซ่อมแซมยามค่ำคืน จะเปิดไฟสีส้มส่องขึ้นไปยังตัวหอหอนาฬิกาเพื่อขับเน้นถึงความสวยงาม และอวดโฉมผู้ที่สัญจรไปมา รอบ ๆ บริเวณจะมีม้าหนัง และจัดสวยหย่อมสำหรับพักผ่อนหย่อนใจ ถ่ายรูป ซึ่งก็มีทั้งนักท่องเที่ยวชาวไทย ชาวต่างประเทศ และชาวภูเก็ตให้ความสนใจ วงเวียนแห่งนี้ตั้งอยู่บนถนนภูเก็ต และเป็นจุดเชื่อมต่อไปยังสถานที่ต่างๆ เช่น ห้างโอเชี่ยน โรบินสัน ตลาดเกษตร สะพานหิน.</span></p>
          <button onclick="myFunction('cardBtn1', 'dots2', 'more2', 'cardBtn1')" id="cardBtn1">Read more</button>
          <p>
          <?php
            // Function to calculate distance between two points
            function getDistance4($lat1, $lon1, $lat2, $lon2) {
                $R = 6371; // Radius of the Earth in kilometers
                $dLat = deg2rad($lat2 - $lat1);
                $dLon = deg2rad($lon2 - $lon1);
                $a = sin($dLat / 2) * sin($dLat / 2) +
                    cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
                    sin($dLon / 2) * sin($dLon / 2);
                $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
                $distance = $R * $c; // Distance in kilometers
                $distanceInMeters = $distance * 1000; // Convert distance to meters
                return $distanceInMeters;
            }
            $lat=(isset($_GET['lat']))?$_GET['lat']:'';
            $long=(isset($_GET['long']))?$_GET['long']:'';

            // Coordinates of marker4
            $marker4Lat = 7.880415387698603;
            $marker4Lon = 98.3921838470932;

            // Coordinates of the user marker (assuming you have these values)
            $userLat = $lat;
            $userLon = $long;

            // Calculate the distance
            $distance4 = getDistance4($marker4Lat, $marker4Lon, $userLat, $userLon);

            // Display the distance in HTML
            echo '<p>ระยะห่างจาก Marker 4 = ' . number_format($distance4, 2) . ' เมตร</p>';
            ?>

          </p>
        </div>
      </div>

      <br>
      <br>

      <div class="card" style="width: 27rem;">
        <img src="image/lamphomthep.jpg" alt="Avatar" style="width:auto;height:auto;">
        <div class="card-body">
          <p>Marker 6</p>
          <h2>แหลมพรหมเทพ</h2>
          <p> แหลมพรหมเทพ แลนด์มาร์กของจังหวัดภูเก็ตที่ใครไม่มานั้นถือว่ามาไม่ถึงภูเก็ต <span id="dots3">...
          </span><span id="more3"> เพราะเป็นจุดชมพระอาทิตย์ตกที่เขาว่ากันว่าสวยที่สุดในประเทศไทยเลยทีเดียว แหลมพรหมเทพมีลักษณะเป็นแหลมโค้งทอดตัวลงสู่ทะเล สามารถเดินลงไปที่ปลายแหลมได้  เมื่อไปถึงตรงปลายแหลมจะสามารถมองเห็นวิวด้านซ้ายเป็นหาดในยะ ส่วนด้านขวาก็จะเป็นชายหาดในหานสวยงามมากทีเดียว นอกจากตัวแหลมแล้ว ยังสามารถไปดูประภาคารกาญจนาภิเษก 
            ซึ่งภายในจะมีนิทรรศการเกี่ยวกับการสร้างประภาคารอยู่ด้วย ที่อยู่ : ราไวย์ อำเภอเมือง จังหวัดภูเก็ต.</span></p>
          <button onclick="myFunction('cardBtn3', 'dots3', 'more3', 'cardBtn3')" id="cardBtn3">Read more</button>
          <p>
          <?php
            // Function to calculate distance between two points
            function getDistance6($lat1, $lon1, $lat2, $lon2) {
                $R = 6371; // Radius of the Earth in kilometers
                $dLat = deg2rad($lat2 - $lat1);
                $dLon = deg2rad($lon2 - $lon1);
                $a = sin($dLat / 2) * sin($dLat / 2) +
                    cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
                    sin($dLon / 2) * sin($dLon / 2);
                $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
                $distance = $R * $c; // Distance in kilometers
                $distanceInMeters = $distance * 1000; // Convert distance to meters
                return $distanceInMeters;
            }
            $lat=(isset($_GET['lat']))?$_GET['lat']:'';
            $long=(isset($_GET['long']))?$_GET['long']:'';

            // Coordinates of marker4
            $marker6Lat = 7.762048938018673;
            $marker6Lon = 98.30530456364032;

            // Coordinates of the user marker (assuming you have these values)
            $userLat = $lat;
            $userLon = $long;

            // Calculate the distance
            $distance6 = getDistance6($marker6Lat, $marker6Lon, $userLat, $userLon);

            // Display the distance in HTML
            echo '<p>ระยะห่างจาก Marker 6 = ' . number_format($distance6, 2) . ' เมตร</p>';
            ?>
          </p>
        </div>
      </div>

      <br>
      <br>

      <div class="card" style="width: 27rem;">
        <img src="image/sarasin.jpg" alt="Avatar" style="width:auto;height:auto;">
        <div class="card-body">
          <p>Marker 7</p>
          <h2>สะพานสารสิน</h2>
          <p>สะพานสารสิน เป็นสะพานแรกที่มีการสร้างเพื่อข้ามจากจังหวัดพังงาไปภูเก็ต<span id="dots7">...
          </span><span id="more7"> เชื่อมต่อระหว่างบ้านท่าฉัตรไชย หมู่ที่ 5 ตำบลไม้ขาว อำเภอถลาง จังหวัดภูเก็ต และบ้านท่านุ่นของจังหวัดพังงา ตามทางหลวงแผ่นดินหมายเลข 402 มีความยาวทั้งหมด 660 เมตร โดยเปิดใช้เมื่อวันที่ 7 กรกฎาคม พ.ศ.2510 
          ปัจจุบันได้ถูกปรับปรุงเป็นสะพานคนเดินและศาลาพักผ่อนชมทิวทัศน์ โดยออกแบบให้สอดคล้องกับงานสถาปัตยกรรมสไตล์ชิโนโปรตุกีส ผสมผสานกับรูปแบบอาคารหลังคาทรงปั้นหยาแบบภาคใต้.</span></p>
          <button onclick="myFunction('cardBtn7', 'dots7', 'more7', 'cardBtn7')" id="cardBtn7">Read more</button>
          <p>
          <?php
            // Function to calculate distance between two points
            function getDistance7($lat1, $lon1, $lat2, $lon2) {
                $R = 6371; // Radius of the Earth in kilometers
                $dLat = deg2rad($lat2 - $lat1);
                $dLon = deg2rad($lon2 - $lon1);
                $a = sin($dLat / 2) * sin($dLat / 2) +
                    cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
                    sin($dLon / 2) * sin($dLon / 2);
                $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
                $distance = $R * $c; // Distance in kilometers
                $distanceInMeters = $distance * 1000; // Convert distance to meters
                return $distanceInMeters;
            }
            $lat=(isset($_GET['lat']))?$_GET['lat']:'';
            $long=(isset($_GET['long']))?$_GET['long']:'';

            // Coordinates of marker4
            $marker7Lat = 8.20210250642793;
            $marker7Lon = 98.29812561028135;

            // Coordinates of the user marker (assuming you have these values)
            $userLat = $lat;
            $userLon = $long;

            // Calculate the distance
            $distance7 = getDistance7($marker7Lat, $marker7Lon, $userLat, $userLon);

            // Display the distance in HTML
            echo '<p>ระยะห่างจาก Marker 7 = ' . number_format($distance7, 2) . ' เมตร</p>';
            ?>
          </p>
        </div>
      </div>

    </center>
  </div>
</div>


  
</body>
</html>