<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/CSS/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Advertisements Manager</title>
    <script src="./Assets/js/index.js"></script>
</head>

<body>
    <!-- TOP NAVIGATION BAR SECTION -->
    <header>
        <figure class="brand"><img src="./Assets/Images/logo.png" alt="" class="header-logo"></figure>
        <nav class="menu">
            <input type="checkbox" id="menuToggle">
            <label for="menuToggle" class="menu-icon"><i class="fa fa-bars"></i></label>
            <ul>
                <a href="./index.html">
                    <li>Home</li>
                </a>
                <a href="./ad_information.php">
                    <li>View Advertisements</li>
                </a>
                <a href="./new_advertisement.php">
                    <li>Add Advertisements</li>
                </a>
                <a href="./access_login.php">
                    <li>Login</li>
                </a>
                <a href="./register.php">
                    <li>Register</li>
                </a>
            </ul>
        </nav>
    </header>
    <!-- TOP NAVIGATION BAR SECTION -->
<?php
    require_once 'connection.php';
    session_start();
  
    
        
    $email=isset($_REQUEST['Email'])?$_REQUEST['Email']:"";
    $pass=isset($_REQUEST['Password'])?$_REQUEST['Password']:"";
  
        
    $qr= "SELECT * FROM user_account WHERE Email='$email' AND Password='$pass'";


    $result = mysqli_query($connection,$qr);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      
    $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) 
      {
         echo "Login Successful!";
         
         header("location:login_success_annoucement.php");
      }
      else 
      {
         echo "Your Login Name or Password is invalid";
      }
   
?>
</body>
</html>