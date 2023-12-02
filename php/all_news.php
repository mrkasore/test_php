<?php include './php/connect.php' ?>

<?php

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
            
            <a href="page2.php?id='.$row["id"].'">
                <div class="frame-2"">
                    <div class="text-wrapper-1"> ПОДРОБНЕЕ
                    </div>
                    <svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path id="Arrow 1" d="M1 7C0.447715 7 4.82823e-08 7.44772 0 8C-4.82823e-08 8.55228 0.447715 9 1 9L1 7ZM26.707 8.70711C27.0975 8.31658 27.0975 7.68342 26.707 7.2929L20.343 0.928934C19.9525 0.538409 19.3193 0.538409 18.9288 0.928934C18.5383 1.31946 18.5383 1.95262 18.9288 2.34315L24.5857 8L18.9288 13.6569C18.5383 14.0474 18.5383 14.6805 18.9288 15.0711C19.3193 15.4616 19.9525 15.4616 20.343 15.0711L26.707 8.70711ZM1 9L25.9999 9L25.9999 7L1 7L1 9Z" fill="white"/>
                    </svg>

                </div>
            </a>
        </div>
        ';
    }
    ?>