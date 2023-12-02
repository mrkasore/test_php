<?php include './php/connect.php' ?>

<?php
    $label = 'id';
    $id = false;
    if (  !empty( $_GET[ $label ] )  )
    {
      $id = $_GET[ $label ];
    }

    $result = mysqli_query($conn, "SELECT * FROM `news` WHERE id = $id");

    $row = mysqli_fetch_array($result);


    $rest = substr($row["date"], 0, 10);
    $pieces = explode("-", $rest);
    //print_r($pieces);
    $formatDate = "{$pieces[2]}.{$pieces[1]}.{$pieces[0]}";

    // print_r($row);
    echo '
        <div class="nav-text"><a href="index.php">Главная</a>  /  '.$row["title"].'</div>
        <h1>'.$row["title"].'</h1>

        <div class="container2">
            <div class="frame">
            <div class="div-wrapper"><div class="text-wrapper">'.$formatDate.'</div></div>
            <div class="announce">'.$row["announce"].'</div>
            <div class="div-2">
                <p class="p">
                    '.$row["content"].'
                </p>
            </div>
            <a href="index.php">
                <div class="back">
                <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="Arrow 1" d="M0.293015 8.70711C-0.0975094 8.31658 -0.0975094 7.68342 0.293014 7.2929L6.65698 0.928934C7.0475 0.538409 7.68067 0.538409 8.07119 0.928934C8.46171 1.31946 8.46171 1.95262 8.07119 2.34315L2.41434 8L8.07119 13.6569C8.46171 14.0474 8.46171 14.6805 8.07119 15.0711C7.68067 15.4616 7.0475 15.4616 6.65698 15.0711L0.293015 8.70711ZM26 9L1.00012 9L1.00012 7L26 7L26 9Z" fill="#841844"/>
                </svg>
                
                    <div class="text-wrapper-3">НАЗАД К НОВОСТЯМ</div>
                </div>
            </a>
            
            </div>
            <div class="image-page2"><img src="images/'.$row["image"].'"/></div>
        </div>
        

    ';
?>