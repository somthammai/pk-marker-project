
<?php
ob_start();
session_start();
date_default_timezone_set("Asia/Bangkok");


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);




include_once 'connection.php';
include_once 'functionss.php';
// include_once 'check_user.php';
// include_once 'functionbell.php';

$year = $date = date("Y");
$month = $date = date("n");
$todate = date('Y-m-d');




$user_id = @$_GET['user_id'];


// Assuming $dbcon is your database connection, make sure it's available in this file

// Call the PHP function
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Map</title>
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
<!--///////////////////////////////////////////Map///////////////////////////////////////////////////////////////-->
<script>
        function init() {
          var map = new longdo.Map({
            placeholder: document.getElementById('map')
          })};   
      </script>
<!--///////////////////////////////////////////Topheader///////////////////////////////////////////////////////////////-->
<body onload="init();">
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
  <div id="map"></div>

  <script type="text/javascript" src="https://api.longdo.com/map/?key=b6ccb1853ef613c5bfcd3bf5f2b36b15"></script>

  <script>
     function init() {
      var map = new longdo.Map({
        placeholder: document.getElementById('map'),
        key: 'b6ccb1853ef613c5bfcd3bf5f2b36b15'
      });
      
      map.location({ lon: 98.35739314556122, lat: 7.931777661760577 }, true); // go to 100, 16 when created map
      map.zoomRange({ min: 5, max: 20 });

      var marker1 = new longdo.Marker(
        { lon: 98.388609, lat: 7.915121},
        {
          title: 'Faculty of Science and Technology',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker1);
      /////////////อุทยานแห่งชาติสิรินาถ/////////////8.095275282696274, 98.2992441576111//////////////////////////////////////////////
      var marker5 = new longdo.Marker(
        { lon: 98.2992441576111, lat: 8.095275282696274},
        {
          title: 'อุทยานแห่งชาติสิรินาถ',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker5);
      /////////////แหลมพรหมเทพ/////////////7.762048938018673, 98.30530456364032//////////////////////////////////////////////
      var marker6 = new longdo.Marker(
        { lon: 98.30530456364032, lat: 7.762048938018673},
        {
          title: 'แหลมพรหมเทพ',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker6);
      /////////////สะพานสารสิน/////////////8.20210250642793, 98.29812561028135//////////////////////////////////////////////
      var marker7 = new longdo.Marker(
        { lon: 98.29812561028135, lat: 8.20210250642793},
        {
          title: 'สะพานสารสิน',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker7);
      /////////////วงเวียนหอนาฬิกา/////////////7.880415387698603, 98.3921838470932//////////////////////////////////////////////
      var marker4 = new longdo.Marker(
        { lon: 98.3921838470932, lat: 7.880415387698603},
        {
          title: 'วงเวียนหอนาฬิกา',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker4);
      /////////////Octagon/////////////7.910391040397151, 98.38672555545233//////////////////////////////////////////////
      var marker8 = new longdo.Marker(
        { lon: 98.38672555545233, lat: 7.910391040397151},
        {
          title: 'Octagon-8เหลี่ยม',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker8);
      /////////////PKRU/////////////7.909713303808365, 98.38696003818148//////////////////////////////////////////////
      var marker9 = new longdo.Marker(
        { lon: 98.38696003818148, lat: 7.909713303808365},
        {
          title: 'มหาวิทยาลัยราชภัฏภูเก็ต',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker9);
      /////////////เมืองเก่า/////////////7.886541686346822, 98.38760420451668//////////////////////////////////////////////
      var marker10 = new longdo.Marker(
        { lon:  98.38760420451668, lat: 7.88654168634682},
        {
          title: 'ย่านเมืองเก่า',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker10);
      /////////////จุดชมวิวแบล็กร็อก/////////////7.783110060668948, 98.29762608734438//////////////////////////////////////////////
      var marker11 = new longdo.Marker(
        { lon:  98.29762608734438, lat: 7.783110060668948},
        {
          title: 'จุดชมวิวแบล็กร็อก',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker11);
      /////////////หาดในหาน/////////////7.776227271519352, 98.3058060904662//////////////////////////////////////////////
      var marker12 = new longdo.Marker(
        { lon:  98.3058060904662, lat: 7.776227271519352},
        {
          title: 'หาดในหาน',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker12);
      /////////////หาดกะตะน้อย/////////////7.806348018278365, 98.29898051901304//////////////////////////////////////////////
      var marker13 = new longdo.Marker(
        { lon:  98.29898051901304, lat: 7.806348018278365},
        {
          title: 'หาดกะตะน้อย',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker13)
      /////////////หาดกะตะ/////////////7.820647135020753, 98.29799464771997//////////////////////////////////////////////
      var marker14 = new longdo.Marker(
        { lon:  98.29799464771997, lat: 7.820647135020753},
        {
          title: 'หาดกะตะ',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker14)
      /////////////หาดกะรน/////////////7.845718820216578, 98.2934256484786//////////////////////////////////////////////
      var marker15 = new longdo.Marker(
        { lon:  98.2934256484786, lat: 7.845718820216578},
        {
          title: 'หาดกะรน',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker15)
      /////////////หาดป่าตอง/////////////7.894064182537942, 98.29489501066007//////////////////////////////////////////////
      var marker16 = new longdo.Marker(
        { lon:  98.29489501066007, lat: 7.894064182537942},
        {
          title: 'หาดป่าตอง',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker16)
      /////////////หาดกมลา/////////////7.956467764635269, 98.28302699721156//////////////////////////////////////////////
      var marker17 = new longdo.Marker(
        { lon:  98.28302699721156, lat: 7.956467764635269},
        {
          title: 'หาดกมลา',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker17)
      /////////////สวนอนุสรณ์สึนามิ/////////////7.951782372147899, 98.28225433558227//////////////////////////////////////////////
      var marker18 = new longdo.Marker(
        { lon:  98.28225433558227, lat: 7.951782372147899},
        {
          title: 'สวนอนุสรณ์สึนามิ',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker18)
      /////////////หาดบางเทา/////////////8.003395921274661, 98.29280844611608//////////////////////////////////////////////
      var marker19 = new longdo.Marker(
        { lon:  98.29280844611608, lat: 8.003395921274661},
        {
          title: 'หาดบางเทา',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker19)
      /////////////หาดไม้ขาว/////////////8.126519238268306, 98.30067329121692//////////////////////////////////////////////
      var marker20 = new longdo.Marker(
        { lon:  98.30067329121692, lat: 8.126519238268306},
        {
          title: 'หาดไม้ขาว',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker20)
      /////////////สะพานหิน/////////////7.864831447154068, 98.40037742651427//////////////////////////////////////////////
      var marker21 = new longdo.Marker(
        { lon:  98.40037742651427, lat: 7.864831447154068},
        {
          title: 'สะพานหิน',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker21)
      /////////////เส้นทางชมป่าโกงกางที่สวนสะพานหิน/////////////7.867543784737288, 98.39858782059238//////////////////////////////////////////////
      var marker22 = new longdo.Marker(
        { lon:  98.39858782059238, lat: 7.867543784737288},
        {
          title: 'เส้นทางชมป่าโกงกางที่สวนสะพานหิน',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker22)
      /////////////อนุสาวรีย์ท้าวเทพกระษัตรี ท้าวศรีสุนทร/////////////7.980998973756842, 98.36393385777855//////////////////////////////////////////////
      var marker23 = new longdo.Marker(
        { lon:  98.36393385777855, lat: 7.980998973756842},
        {
          title: 'อนุสาวรีย์ท้าวเทพกระษัตรี ท้าวศรีสุนทร',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker23)
      /////////////พิพิธภัณฑ์ภูเก็ตไทยหัว/////////////7.884874 | 98.387492//////////////////////////////////////////////
      var marker24 = new longdo.Marker(
        { lon:  98.387492, lat: 7.884874},
        {
          title: 'พิพิธภัณฑ์ภูเก็ตไทยหัว',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1333',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker24)
      /////////////พิพิธภัณฑ์เหมืองแร่กะทู้ภูเก็ต/////////////7.933762742932326, 98.34942601752871//////////////////////////////////////////////
      var marker25 = new longdo.Marker(
        { lon:  98.34942601752871, lat: 7.933762742932326},
        {
          title: 'พิพิธภัณฑ์เหมืองแร่กะทู้ภูเก็ต',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1333',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker25)
      /////////////พิพิธภัณฑ์ตราไปรณียากรภูเก็ต/////////////7.884091866376772, 98.39250490886289//////////////////////////////////////////////
      var marker26 = new longdo.Marker(
        { lon:  98.39250490886289, lat: 7.884091866376772},
        {
          title: 'พิพิธภัณฑ์ตราไปรณียากรภูเก็ต',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1333',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker26)
      /////////////อนุสรณ์สถานถลางชนะศึก/////////////8.02805942411476, 98.32085137959815//////////////////////////////////////////////
      var marker27 = new longdo.Marker(
        { lon:  98.32085137959815, lat: 8.02805942411476},
        {
          title: 'อนุสรณ์สถานถลางชนะศึก',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'Drag me1333',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker27)

      //////////////TestMarker//////13.765834, 100.564722//////////7.801501, 98.297998////////////7.801496, 98.298009///////////
      var marker3 = new longdo.Marker(
        { lon: 98.298009, lat: 7.801496 },
        {
          title: 'TestMarker',
          icon: {
            url: 'https://map.longdo.com/mmmap/images/pin_mark.png',
            offset: { x: 12, y: 45 }
          },
          detail: 'ddd',
          visibleRange: { min: 5, max: 20 },
          draggable: true,
          weight: longdo.OverlayWeight.Top,
        }
      );
      map.Overlays.add(marker3);
      //////333333////////////////////////////////////
      //////333333////////////////////////////////////


      // Retrieve user's location using HTML Geolocation
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
          var userLat = position.coords.latitude;
          var userLng = position.coords.longitude;

          var usermarker = new longdo.Marker({ lon: userLng, lat: userLat });
          map.Overlays.add(usermarker);

          var calculateDistanceButton = document.createElement('button');
          calculateDistanceButton.textContent = 'Calculate Distance';
          ////////////////////////////css///botton///////////////////
          calculateDistanceButton.style.backgroundColor = '#007bff'; // Blue background color
          calculateDistanceButton.style.color = '#ffffff'; // White text color
          calculateDistanceButton.style.padding = '10px 20px'; // Padding around the button
          calculateDistanceButton.style.margin = '20px';
          calculateDistanceButton.style.border = 'none'; // Remove border
          calculateDistanceButton.style.borderRadius = '5px'; // Rounded corners
          calculateDistanceButton.style.cursor = 'pointer';
          //////////////////////////////////////////////////////////
          calculateDistanceButton.addEventListener('click', function () {
            // Calculate distance between marker1 and user's location using the haversine formula
            var distance1 = getDistance(marker1.location().lat, marker1.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance4 = getDistance(marker4.location().lat, marker4.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance5 = getDistance(marker5.location().lat, marker5.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance6 = getDistance(marker6.location().lat, marker6.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance7 = getDistance(marker7.location().lat, marker7.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance8 = getDistance(marker8.location().lat, marker8.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance9 = getDistance(marker9.location().lat, marker9.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance10 = getDistance(marker10.location().lat, marker10.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance11 = getDistance(marker11.location().lat, marker11.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance12 = getDistance(marker12.location().lat, marker12.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance13 = getDistance(marker13.location().lat, marker13.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance14 = getDistance(marker14.location().lat, marker14.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance15 = getDistance(marker15.location().lat, marker15.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance16 = getDistance(marker16.location().lat, marker16.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance17 = getDistance(marker17.location().lat, marker17.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance18 = getDistance(marker18.location().lat, marker18.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance19 = getDistance(marker19.location().lat, marker19.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance20 = getDistance(marker20.location().lat, marker20.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance21 = getDistance(marker21.location().lat, marker21.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance22 = getDistance(marker22.location().lat, marker22.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance23 = getDistance(marker23.location().lat, marker23.location().lon, usermarker.location().lat, usermarker.location().lon);
            var distance3 = getDistance(marker3.location().lat, marker3.location().lon, usermarker.location().lat, usermarker.location().lon);
            //displaydisss
            displayDistance(distance1);
            displayDistance4(distance4);
            displayDistance5(distance5);
            displayDistance6(distance6);
            displayDistance7(distance7);
            displayDistance8(distance8);
            displayDistance9(distance9);
            displayDistance10(distance10);
            displayDistance11(distance11);
            displayDistance12(distance12);
            displayDistance13(distance13);
            displayDistance14(distance14);
            displayDistance15(distance15);
            displayDistance16(distance16);
            displayDistance17(distance17);
            displayDistance18(distance18);
            displayDistance19(distance19);
            displayDistance20(distance20);
            displayDistance21(distance21);
            displayDistance22(distance22);
            displayDistance23(distance23);
            displayDistance3(distance3);
           //// Check if distance is within 100 meters//////////
            var user_id = "<?php echo @$_GET['user_id']; ?>";
         ///////////////////////////////////////////////////////
            if (distance1 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check ตึก20");

            } else if (distance4 <= 100) {
              // var displayedUsername = document.getElementById('capturedUsername').value;
              // google.script.run.addUsernameToMarker1(displayedUsername);
              // alert("Check วงเวียนหอนาฬิกา");
              var xhr = new XMLHttpRequest();   
              xhr.onreadystatechange = function() {
                  if (xhr.readyState == 4 && xhr.status == 200) {
                      // The PHP function has been executed, and you can handle the response here
                      var response = xhr.responseText;
                      alert(response);
                  }
              };
              // Assuming check_user.php is in the same directory
              xhr.open("GET", "check_mark3.php?user_id=" + user_id, true);
              xhr.send();


            }else if (distance5 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check อุทยานแห่งชาติสิรินาถ");

            }else if (distance6 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check แหลมพรหมเทพ");

            }else if (distance7 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check สะพานสารสิน");

            }else if (distance8 <= 50) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check Octagon-8เหลี่ยม");

            }else if (distance9 <= 50) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check PKRU");

            }else if (distance10 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check ย่านเมืองเก่า");

            }else if (distance11 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check จุดชมวิวแบล็กร็อก");

            }else if (distance12 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check หาดในหาน");

            }else if (distance13 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check หาดกะตะน้อย");

            }else if (distance14 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check หาดกะตะ");

            }else if (distance15 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check หาดกะรน");

            }else if (distance16 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check หาดป่าตอง");

            }else if (distance17 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check หาดกมลา");

            }else if (distance18 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check สวนอนุสรณ์สึนามิ");

            }else if (distance19 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check หาดบางเทา");

            }else if (distance20 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check หาดไม้ขาว");

            }else if (distance21 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check สะพานหิน");

            }else if (distance22 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check เส้นทางชมป่าโกงกางที่สวนสะพานหิน");

            }else if (distance23 <= 100) {
              var displayedUsername = document.getElementById('capturedUsername').value;
              google.script.run.addUsernameToMarker1(displayedUsername);
              alert("Check อนุสาวรีย์ท้าวเทพกระษัตรี-ท้าวศรีสุนทร");

            } else if (distance3 <= 65) {
              
              var xhr = new XMLHttpRequest();   
              xhr.onreadystatechange = function() {
                  if (xhr.readyState == 4 && xhr.status == 200) {
                      // The PHP function has been executed, and you can handle the response here
                      var response = xhr.responseText;
                      alert(response);
                  }
              };
              // Assuming check_user.php is in the same directory
              xhr.open("GET", "check_mark3.php?user_id=" + user_id, true);
              xhr.send();


            } else {
              alert("No Marker To Check here");
            }
          });

          document.body.appendChild(calculateDistanceButton);
        });
      }
    }

//     function displayDistance(distance) {
//     if (isNaN(distance)) {
//       console.log("Invalid distance");
//     } else {
//       console.log("Distance between marker1 and marker2: " + distance.toFixed(2) + " meters");
//     }
//   }
//   function displayDistance3(distance) {
//     if (isNaN(distance)) {
//       console.log("Invalid distance");
//     } else {
//       console.log("Distance between marker3 and marker2: " + distance.toFixed(2) + " meters");
//     }
//   }

/////////////////////////////////////Distance between marker1/////////////////////////////////////////////////////////////////
function displayDistance(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker1 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker4/////////////////////////////////////////////////////////////////
    function displayDistance4(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker4;วงเวียนหอนาฬิกา and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker5/////////////////////////////////////////////////////////////////
    function displayDistance5(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker5;อุทยานแห่งชาติสิรินาถ and usermarker: " + distance.toFixed(2) + " meters");
    }
  }    
/////////////////////////////////////Distance between marker6/////////////////////////////////////////////////////////////////
    function displayDistance6(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker6แหลมพรหมเทพ and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker7/////////////////////////////////////////////////////////////////
    function displayDistance7(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker7;สะพานสารสิน and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker8/////////////////////////////////////////////////////////////////
    function displayDistance8(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker8;Octagon-8เหลี่ยม and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker9/////////////////////////////////////////////////////////////////
    function displayDistance9(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker9;PKRU and usermarker: " + distance.toFixed(2) + " meters");
    }
  }  
/////////////////////////////////////Distance between marker10/////////////////////////////////////////////////////////////////
    function displayDistance10(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker10 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker11/////////////////////////////////////////////////////////////////
    function displayDistance11(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker11 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker12/////////////////////////////////////////////////////////////////
    function displayDistance12(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker12 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker13/////////////////////////////////////////////////////////////////
    function displayDistance13(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker13 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker14/////////////////////////////////////////////////////////////////
    function displayDistance14(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker14 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker15/////////////////////////////////////////////////////////////////
    function displayDistance15(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker15 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker16/////////////////////////////////////////////////////////////////
    function displayDistance16(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker16 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker17/////////////////////////////////////////////////////////////////
    function displayDistance17(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker17 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker18/////////////////////////////////////////////////////////////////
    function displayDistance18(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker18 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker19/////////////////////////////////////////////////////////////////
    function displayDistance19(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker19 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker20/////////////////////////////////////////////////////////////////
    function displayDistance20(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker20 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker21/////////////////////////////////////////////////////////////////
    function displayDistance21(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker21 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker22/////////////////////////////////////////////////////////////////
    function displayDistance22(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker22 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker23/////////////////////////////////////////////////////////////////
    function displayDistance23(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker23 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////Distance between marker3/////////////////////////////////////////////////////////////////
  function displayDistance3(distance) {
    if (isNaN(distance)) {
      console.log("Invalid distance");
    } else {
      console.log("Distance between marker3 and usermarker: " + distance.toFixed(2) + " meters");
    }
  }
/////////////////////////////////////------------------/////////////////////////////////////////////////////////////////


/////////////////////////////////////geoooo//////////////////
    function getDistance(lat1, lon1, lat2, lon2) {
      var R = 6371; // Radius of the Earth in kilometers
      var dLat = deg2rad(lat2) - deg2rad(lat1);
      var dLon = deg2rad(lon2) - deg2rad(lon1);
      var a =
        Math.sin(dLat / 2) * Math.sin(dLat / 2) +
        Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
        Math.sin(dLon / 2) * Math.sin(dLon / 2);
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
      var distance = R * c; // Distance in kilometers
      var distanceInMeters = distance * 1000; // Convert distance to meters
    return distanceInMeters;
  }

  function deg2rad(deg) {
    return deg * (Math.PI / 180);
  }

///////////////////////
  </script>
  
</body>
</html>