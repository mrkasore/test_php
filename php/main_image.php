<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, "testDB");
    mysqli_set_charset($conn, "utf8mb4");

    if($conn->connect_error) {
        die("Connected failed");
    }

    $result = mysqli_query($conn, "SELECT * FROM `news` ORDER BY `date` DESC");
    print_r(mysqli_fetch_array($result)["image"]);
?>