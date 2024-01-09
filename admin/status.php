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
$status = 0;

$q="update user_signup set status=$status where id=$id";
mysqli_query($connection,$q);

header ('location: Admin.php');

?>