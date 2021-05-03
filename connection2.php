<?php

$db_hostname = "localhost";
$db_database = "users";
$db_username = "root"; 
$db_password = "Xuanhien206";

$connection2 = mysqli_connect($db_hostname, $db_username,$db_password,$db_database);

if (!$connection2)
{
    die("Unable to connect to MySQL: " . mysqli_connect_errno());
}

?>
