<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, "testDB");

    if($conn->connect_error) {
        die("Connected failed");
    }

    $result = mysqli_query($conn, "SELECT * FROM `news` ORDER BY `date` DESC");
    echo mysqli_fetch_array($result)["image"];
?>