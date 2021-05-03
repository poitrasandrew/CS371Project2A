<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title>View Advertisements</title>
  <link rel="stylesheet" href="./Assets/CSS/ViewAdvertisements.css">
  <link rel="stylesheet" href="./Assets/CSS/style.css">
</head>

<body>


<?php
require_once 'connection.php';

function match_password($pass, $cpass)
{
    if ($pass != $cpass) {

        echo 'Your passwords do not match';
        return false;
    }
    return true;
}


$firstname=isset($_REQUEST['First_Name'])?$_REQUEST['First_Name']:"";
$lastname=isset($_REQUEST['Last_Name'])?$_REQUEST['Last_Name']:"";
$email=isset($_REQUEST['Email'])?$_REQUEST['Email']:"";
$pass=isset($_REQUEST['Password'])?$_REQUEST['Password']:"";
$cpass=isset($_REQUEST['CPassword'])?$_REQUEST['CPassword']:"";       




$slquery = "SELECT 1 FROM user_account WHERE Email = '$email'";
$selectresult = mysqli_query($connection,$slquery);
     


if($firstname != '' && $lastname != '' && $email != ''  && $pass != '' && match_password($pass,$cpass)) 
{

    if(mysqli_num_rows($selectresult)>0) {
        echo 'This email already exists.';
    }
    else
    {
        $SQL = "INSERT INTO user_account(First_Name,Last_Name, Email, Password, CPassword) VALUES (";
        $SQL.="'".$firstname."', '".$lastname."','".$email."','".$pass."', '".$cpass."')";
        $result= mysqli_query($connection,  $SQL);

        if(!$result)
        {
            die ("Database access failed". mysqli_error($connection));
        }
        header("Location: success_register.php");
      
    }
    
}

?>
<p class="link"><a href="access_login.php">Return to Login!</a></p>
<p class="link"><a href="register.php">Return to Register!</a></p>


</body>
</html>
    
    
  

