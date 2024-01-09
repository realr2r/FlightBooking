<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bookflight";

$connection = new mysqli($servername, $username, $password, $database);
if ($connection->connect_error)
{
    die ("Conncetion failed: ".$connection->error);
}

$id=$_GET['id'];
$status = 1;

$q="UPDATE user_signup SET status='$status' WHERE id='$id';";
mysqli_query($connection,$q);

header ('location: Admin.php');

?>