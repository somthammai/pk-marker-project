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



$act = isset($_GET['act']) ? $_GET['act'] : 'index';
?>

<!DOCTYPE html>
<html>
<head>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<title>Hello, world!</title>
</head>
<body>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <base target="_top">
    <style>
        /*page1*/
        .page1_class1-off {
            display: none;
        }

        /*page2*/
        .page2_class1 {
            display: none;
        }

        .page2_id1-off {
            display: none;
        }

        /*page3*/
        .page3_class1 {
            display: none;
        }

        .page3_id1-off {
            display: none;
        }

        /*page4*/
        .page4_class1 {
            display: none;
        }

        .page4_id1-off {
            display: none;
        }

        input[type=text]:hover {
            border-bottom: 2px solid black;
        }

        input[type=number]:hover {
            border-bottom: 2px solid black;
        }

        input[type=password]:hover {
            border-bottom: 2px solid black;
        }

        .user {
            display: inline-block;
            width: 75px;
            height: 75px;
            border: 8px solid black;
            border-radius: 50%;
            position: relative;
            overflow: hidden;
            box-sizing: border-box;
        }

        /*the head/*/
        .user::before {
            content: '';
            display: inline-block;
            width: 24px;
            height: 24px;
            background: black;
            border-radius: 50%;
            position: absolute;
            left: calc(50% - 11px);
            top: 10px;
        }

        /*the body*/
        .user::after {
            content: '';
            display: inline-block;
            width: 50px;
            height: 40px;
            background: black;
            border-radius: 50%;
            position: absolute;
            left: calc(50% - 24px);
            top: 39px;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<br><br>

<!--page1-->
<?php

 if ($act == 'index'):

 ?>
<center>
    <div class="page1_class1" id="page1_id1"
         style="background:none;border:2px solid gray;border-radius: 20px;width: 250px;padding-top: 10px;padding-bottom: 20px;padding-left: 20px;padding-right: 20px;">
        <h1>Login Form</h1>
        <br>
    <form method="post" action="">
        <br>
        <input type="text" name="username" id="username" placeholder="Username" style="border-top: none; ..." required/>
        <br>
        <input type="password" name="password" id="password" placeholder="Password" style="border-top: none; ..." required/>
        <span id="errorMessage" style="color: red"><?php if(isset($errorMessage)) echo $errorMessage; ?></span>
        <br><br>
        <!-- <input type="submit" value="Login" style="float: right; ..."/> -->
        <button type="submit" value="Login" style="float: right; ...">Login</button>
    </form>
        <br>
        <b>If you don't have an account,</b>
        <br>
        <!-- <input type="button" onClick="function1()" value="Create New" style="margin-top: 5px;font-weight:bold;" /> -->
        <a href="login.php?act=add" class="btn btn-secondary"> 
            <i class="fa fa-arrow-left pr-2"></i>create accout</a>

        <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $dbcon->prepare("SELECT * FROM user WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);

    // Execute the query
    $stmt->execute();

    $user_id = $stmt->fetchColumn();

    // Check if a row is returned
    if ($stmt->rowCount() > 0) {
        // If the credentials are correct, redirect to page2
        header("Location: login.php?act=page2&user_id=$user_id");
        exit();
    } else {
        // If the credentials are incorrect, set an error message
        $errorMessage = "Login failed. Please try again.";
        // Add JavaScript to show the alert
        echo "<script>alert('$errorMessage');</script>";
    }
}
?>

        <!-- <script>
            function login() {
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;

                google.script.run.withSuccessHandler(loginCallback).handleLogin(username, password);
            }

            function loginCallback(result) {
                if (result === "success") {
                    google.script.host.close(); // Close the login page
                    google.script.host.openUrl("?page=authenticated_home"); // Open authenticated page
                    console.log("Login success");
                } else {
                    alert("Login failed. Please try again.");
                }
            }
        </script> -->


    </center>
    </div>

    <?php
      endif;

      if ($act == 'add'):
        //include_once 'inc/alert.php';
        // $mem_id = @$_GET['id'];
        // $stmt = getFilterArrival($mem_id);
        // $row = $stmt->fetch();
        ?>


      </div>

    <!--page2-->
    <h1>halooo</h1>
    <center>
    <div style="background:none;border:2px solid gray;border-radius: 20px;width: 250px;padding-top: 10px;padding-bottom: 20px;padding-left: 20px;padding-right: 20px;">
    <h1>Create Account</h1>
    <form method="post" action="?act=insert">
        
        <input type="text" name="username" id="username" placeholder="Name" style="border-top: none; ..." required/>
        <br><br>
        <input type="usernameeusernamee" name="password" id="password" placeholder="Create password" style="border-top: none; ..." required/>
        <br><br>
        <input type="text" name="email" id="email" placeholder="Email" style="border-top: none; ..." required/>
        <br><br>
        <input type="number" name="phone" id="phone" placeholder="Phone no." style="border-top: none; ..." required/>
        <br><br>
        <b style="color:red;">Password must contain letters and numbers. It will not work without letters and numbers.</b>
        <br><br>
        <!-- <input type="submit" value="Create" style="float: center; ..."/> -->
        <div class="form-group row justify-content-center">
        <div class="col-sm-6 pb-2">
              <button class="btn btn-success btn-sm btn-block" name="btnInsert">
                <i class="fa fa-check pr-2"></i>Confrim
            </button>
         </div>
         <br>
         <div class="col-sm-6 pb-2">
                  <a class="btn btn-danger btn-sm btn-block"
                    href="?login.php?act=index">
                  <i class="fa fa-arrow-left pr-2"></i>Back
                </a>
         </div>
    </div>

    </form>
    </center>
</div>


    <?php
      endif;


    // Insert Item
    


    if ($act == 'insert'):

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST["phone"];
    
        $data_pl = [$username, $password, $email, $phone];
    
        $sql = "INSERT INTO user (username, password, email, phone) VALUES (?, ?, ?, ?)";
        $stmt = $dbcon->prepare($sql);
        $result = $stmt->execute($data_pl);
    
        if ($result) {
            header("Location: login.php?act=index");
            exit();
        } else {
            alertMsg('danger', 'ระบบมีปัญหา, กรุณาลองใหม่อีกครั้งครับ', '?act=add');
            // If the credentials are incorrect, set an error message
            $errorMessage = "Login failed. Please try again.";
            // Add JavaScript to show the alert
            echo "<script>alert('$errorMessage');</script>";
        }
    
        $stmt = null;
    
    endif;

    ?>

<?php

if ($act == 'page2'):
    $user_id = @$_GET['user_id'];

?>
<div><center>
    <!--page4-->
    <div style="background:none;border:2px solid gray;border-radius: 20px;width: 250px;padding-top: 10px;padding-bottom: 20px;padding-left: 20px;padding-right: 20px;">
        <center>
            <br>
            <h2>Hi <b style="color:red;"><?php echo getHdName($user_id) ?></b> !!!</h2>
            <div class="user"></div>
            <h3>ยินดีต้อนรับ</h3>
            <h3><?php echo getHdName($user_id) ?></h3>
            <h2>**************</h2>
            <a href='index.php?user_id=<?php echo $user_id ?>'> <input type='button' name='button' value='กดเพื่อเข้าสู่หน้าเว็บไซต์'></a>
            <br>
        </center>
    </div></center>
</div>
<?php
endif;
?>


</body>
</html>

