<?php
if (isset($_GET["id"])){
    $id = $_GET["id"];

                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "bookflight";

                $connection = new mysqli($servername, $username, $password, $database);

                $sql = "DELETE FROM user_signup WHERE id=$id";
                $connection->query($sql);

                header("location: Admin.php");
                exit();
            }
?>