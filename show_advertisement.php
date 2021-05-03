<?php

require_once 'connection.php';



$connection = mysqli_connect($db_hostname,$db_username,$db_password, $db_database);

if (!$connection)
    die ("Unable to connect to the server: " . mysqli_error($connection));


$query = "SELECT * FROM advertisement";
$result= mysqli_query($connection, $query);

if (!$result)
    die("database access error". mysqli_error($connection));

$html="";

while ($row= mysqli_fetch_assoc($result))
{
    $html.="Title : ".$row['Title'] . "<br>";
    $html.="Details : ".$row['Details'] . "<br>";
    $html.="Date : ".$row['Dated'] . "<br>";
    $html.="Price : ".$row['Price'] . "<br>";
    $html.="Category ID : ".$row['Category_ID'] . "<br>";
    $html.="User ID : ".$row['User_ID'] . "<br>";
    $html.="Moderator ID : ".$row['Moderator_ID'] . "<br>";
    $html.="Status ID : ".$row['Status_ID'] . "<br>";
    $html.="<br><br>";
}

mysqli_close($connection);
?>
