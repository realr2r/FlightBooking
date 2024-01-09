<?php

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $databasename = 'bookflight';

    $book_from= $_POST['from'];
    $book_to= $_POST['to'];
    $book_depart= $_POST['depart'];
    $book_return= $_POST['return'];

    $conn = mysqli_connect ($hostname, $username, $password, $databasename);
    $sql = "INSERT INTO `book_flight`(`book_from`, `book_to`, `book_depart`, `book_return`) VALUES ('$book_from','$book_to','$book_depart',' $book_return')";
     $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo "BOOK FLIGHT RESERVED";
    }
    else
    {
        echo "ERROR";
    }

?>