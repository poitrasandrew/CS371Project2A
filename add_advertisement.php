<?php
require_once 'connection.php';


$Title=isset($_POST['Title'])?$_POST['Title']:"";
$Details=isset($_POST['Details'])?$_POST['Details']:"";
$Dated=isset($_POST['Dated'])?$_POST['Dated']:"";
$Price=isset($_POST['Price'])?$_POST['Price']:"";
$Category_ID=isset($_POST['Category_ID'])?$_POST['Category_ID']:"";
$User_ID=isset($_POST['User_ID'])?$_POST['User_ID']:"";
$Moderator_ID=isset($_POST['Moderator_ID'])?$_POST['Moderator_ID']:"";
$Status_ID=isset($_POST['Status_ID'])?$_POST['Status_ID']:"";

$SQL = "INSERT INTO advertisement(Title,Details, Dated, Price,Category_ID,User_ID,Moderator_ID,Status_ID) VALUES (";
$SQL.="'".$Title."', '".$Details."','".$Dated."','".$Price."','".$Category_ID."','".$User_ID."','".$Moderator_ID."','".$Status_ID."')";
$result= mysqli_query($connection,  $SQL);

if(!$result)
    die ("Database access failed". mysqli_error($connection));

    if($Title != '' && $Details != '' && $Dated != '' && $Price != '' && $Category_ID != '' && $User_ID != '' && $Moderator_ID != '' && $Status_ID != '' )
    {
        header("Location: Added_success.php");
    }

    