<?php

/////////////////////////PLANNN/////////////////////////////////
function getHdName($id)
{
  global $dbcon;
  $data = [$id];
  $sql = "SELECT username FROM user WHERE user_id = ?";
  $stmt = $dbcon->prepare($sql);
  $stmt->execute($data);
  $row = $stmt->fetch();
  $get = $row['username'];
  return $get;
}

//////////////Markerimage////////////////////////
//////////////Markertest////////////////////////
function checkImageMarker3($user_id, $dbcon) {
  // Check if user_id is present in marker3
  $stmt = $dbcon->prepare("SELECT * FROM marker3 WHERE uid3 = :user_id");
  $stmt->bindParam(':user_id', $user_id);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
      // User_id found in marker3, display the card
      echo '<div class="card mb-3" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="image/DTPKTUSTAM.png"  class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">PKRU</h5>
                    <p class="card-text">ได้รับเมื่อ 12:01:2024</p>
                    <p class="card-text">Check by: ' . getHdName($user_id). '</p>
                  </div>
                </div>
              </div>
            </div>';
  } else {
      // User_id not found in marker3
      // You can handle this case or provide an alternative content
      echo '<p>User_id not found in marker3</p>';
  }
}

////////////////////////////////////////////////////
//////////////Marker4 วงเวียนหอนาฬิกา////////////////////////
function checkImageMarker4($user_id, $dbcon) {
  // Check if user_id is present in marker3
  $stmt = $dbcon->prepare("SELECT * FROM marker4 WHERE uid4 = :user_id");
  $stmt->bindParam(':user_id', $user_id);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
      // User_id found in marker3, display the card
      echo '<div class="card mb-3" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="image/Clocktower.png"  class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">วงเวียนหอนาฬิกา</h5>
                    <p class="card-text">ได้รับเมื่อ 12:01:2024</p>
                    <p class="card-text">Check by: ' . getHdName($user_id). '</p>
                  </div>
                </div>
              </div>
            </div>';
  } else {
      // User_id not found in marker3
      // You can handle this case or provide an alternative content
      echo '<p>User_id not found in marker3</p>';
  }
}

////////////////////////////////////////////////////
//////////////Marker6 แหลมพรหมเทพ////////////////////////
function checkImageMarker6($user_id, $dbcon) {
  // Check if user_id is present in marker3
  $stmt = $dbcon->prepare("SELECT * FROM marker6 WHERE uid6 = :user_id");
  $stmt->bindParam(':user_id', $user_id);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
      // User_id found in marker3, display the card
      echo '<div class="card mb-3" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="image/Lampromtep-removebg-preview.png"  class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">แหลมพรหมเทพ</h5>
                    <p class="card-text">ได้รับเมื่อ 12:01:2024</p>
                    <p class="card-text">Check by: ' . getHdName($user_id). '</p>
                  </div>
                </div>
              </div>
            </div>';
  } else {
      // User_id not found in marker3
      // You can handle this case or provide an alternative content
      echo '<p>User_id not Check in marker6</p>';
  }
}

////////////////////////////////////////////////////
//////////////Marker7 สะพานสารสิน////////////////////////
function checkImageMarker7($user_id, $dbcon) {
  // Check if user_id is present in marker3
  $stmt = $dbcon->prepare("SELECT * FROM marker7 WHERE uid7 = :user_id");
  $stmt->bindParam(':user_id', $user_id);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
      // User_id found in marker3, display the card
      echo '<div class="card mb-3" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="image/Sarasin-removebg-preview.png"  class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">สะพานสารสิน</h5>
                    <p class="card-text">ได้รับเมื่อ 12:01:2024</p>
                    <p class="card-text">Check by: ' . getHdName($user_id). '</p>
                  </div>
                </div>
              </div>
            </div>';
  } else {
      // User_id not found in marker3
      // You can handle this case or provide an alternative content
      echo '<p>User_id not Check in marker7</p>';
  }
}

////////////////////////////////////////////////////
//////////////Marker8 Octagon-8เหลี่ยม////////////////////////
function checkImageMarker8($user_id, $dbcon) {
  // Check if user_id is present in marker3
  $stmt = $dbcon->prepare("SELECT * FROM marker8 WHERE uid8 = :user_id");
  $stmt->bindParam(':user_id', $user_id);
  $stmt->execute();

  if ($stmt->rowCount() > 0) {
      // User_id found in marker3, display the card
      echo '<div class="card mb-3" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="image/Sarasin-removebg-preview.png"  class="card-img-top" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Octagon-8เหลี่ยม</h5>
                    <p class="card-text">ได้รับเมื่อ 12:01:2024</p>
                    <p class="card-text">Check by: ' . getHdName($user_id). '</p>
                  </div>
                </div>
              </div>
            </div>';
  } else {
      // User_id not found in marker3
      // You can handle this case or provide an alternative content
      echo '<h2>User not Check in marker7</h2>';
  }
}

////////////////////////////////////////////////////

?>