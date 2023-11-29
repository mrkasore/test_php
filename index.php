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
    <header></header>
    <div class="main-image" style="background-image: url('images/<?php include './php/main_image.php'?>')">
        <?php include './php/main_article.php' ?>
    </div>
    <diva class="main">
        <?php include './php/all_news.php' ?>
    </div>
    <footer></footer>
    
</body>
</html>