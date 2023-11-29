<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, "testDB");

    if($conn->connect_error) {
        die("Connected failed");
    }

    $result = mysqli_query($conn, "SELECT * FROM `news` ORDER BY `date` DESC");

    // $today = getdate();
    // print_r($today);

    while ($row = mysqli_fetch_array($result)) {
        $rest = substr($row["date"], 0, 10);
        $pieces = explode("-", $rest);
        //print_r($pieces);
        $formatDate = "{$pieces[2]}.{$pieces[1]}.{$pieces[0]}";
        echo '
        <div class="news">
            <div class="about-new">
                <div class="frame"><div class="text-wrapper">'.$formatDate.'</div></div>
                <div class="div">'.$row["title"].'</div>
                <p>'.$row["announce"].'</p>
            </div>
            
            <div class="frame-2">
            <div class="text-wrapper-2">ПОДРОБНЕЕ</div>
            <img class="arrow" src="img/arrow-1.svg" />
            </div>
        </div>
        ';
        // for ($i = 1; $i <= count($row); $i++) {
        //     echo $row[$i];
        // }
    }
    ?>