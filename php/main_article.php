<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, "testDB");

    if($conn->connect_error) {
        die("Connected failed");
    }

    $result = mysqli_query($conn, "SELECT * FROM `news` ORDER BY `date` DESC");

    $row = mysqli_fetch_array($result);

    echo '
    <div class="main-title-article">'.$row["title"].'</div>
    <div class="main-article">'.$row["announce"].'</div>
    ';

    // echo mysqli_fetch_array($result)["title"];

    
    ?>