<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, "testDB");
    mysqli_set_charset($conn, "utf8mb4");

    if($conn->connect_error) {
        die("Connected failed");
    }
?>