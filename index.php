<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <title>Document</title>
</head>
<body>
    <diva class="main">
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, "testDB");

    if($conn->connect_error) {
        die("Connected failed");
    }

    $result = mysqli_query($conn, "SELECT * FROM `news`");

    while ($row = mysqli_fetch_array($result)) {
        echo '
        <div class="news">
            <div class="frame"><div class="text-wrapper">'.$row["date"].'</div></div>
            <div class="div">'.$row["title"].'</div>
            <p class="p">'.$row["announce"].'</p>
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
    </div>
    
</body>
</html>
