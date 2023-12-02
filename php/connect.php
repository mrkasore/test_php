<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, "testDB");

    if($conn->connect_error) {
        die("Connected failed");
    }
?>