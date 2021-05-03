<?php

$Title= $_POST['Title'];
$Detail= $_POST['Detail'];
$Date= $_POST['Date'];
$Price= $_POST['Price'];
$CategoryID= $_POST['CategoryID'];
$UserID= $_POST['UserID'];
$ModeratorID= $_POST['ModeratorID'];
$StatusID= $_POST['StatusID'];




$host= "localhost";
$dbUsername = "root";
$dbPassword = "Xuanhien206";
$dbname = "advertisement";

$connect = new mysqli ($host, $dbUsername, $dbPassword, $dbname);




if($connect->connect_error){
   echo "$conn->connect_error";
   die("Connection Failed : ". $conn->connect_error);
} else {
   $stmt = $connect->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
   $stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
   $execval = $stmt->execute();
   echo $execval;
   echo "Registration successfully...";
   $stmt->close();
   $connect->close();
}



?>

