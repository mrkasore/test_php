<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="styleguide.css" />
    <script src="script.js" defer></script>
    <title>Document</title>
</head>
<body>
    <header></header>
    <div class="container">
        <?php
            $label = 'id';
            $id = false;
            if (  !empty( $_GET[ $label ] )  )
            {
              $id = $_GET[ $label ];
            }

            $servername = "localhost";
            $username = "root";
            $password = "";

            $conn = new mysqli($servername, $username, $password, "testDB");

            if($conn->connect_error) {
                die("Connected failed");
            }

            $result = mysqli_query($conn, "SELECT * FROM `news` WHERE id = $id");

            $row = mysqli_fetch_row($result);

            print_r($row);
        ?>
    </div>
    
    <footer></footer>
    
</body>
</html>