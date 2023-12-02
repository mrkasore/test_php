<?php include './php/connect.php' ?>

<?php
    $result = mysqli_query($conn, "SELECT * FROM `news` ORDER BY `date` DESC");

    $row = mysqli_fetch_array($result);

    echo '
    <div class="main-title-article">'.$row["title"].'</div>
    <div class="main-article">'.$row["announce"].'</div>
    ';

    // echo mysqli_fetch_array($result)["title"];

    
?>