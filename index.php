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
    <header>
        <div class="img-div-logo">
            <img src="/img/logo.svg" alt="logo">
        </div>
        <div class="label">
            <div class="text-wrapper">ГАЛАКТИЧЕСКИЙ <br />ВЕСТНИК</div>
        </div>
    </header>
    <div class="main-image" style="background-image: url('images/<?php include './php/main_image.php'?>')">
        <?php include './php/main_article.php' ?>
    </div>
    <div class="container">
        <h1>Новости</h1>
        <div class="main">
            <?php include './php/all_news.php' ?>
        </div>
        <div class="frame">
            <div class="div-wrapper active-page"><div class="text-wrapper-2">1</div></div>
            <div class="div-wrapper"><div class="text-wrapper-2">2</div></div>
            <div class="div-wrapper"><div class="text-wrapper-2">3</div></div>
            <div class="div-wrapper-arrow"><img class="img" src="img/arrow-2.svg" /></div>
        </div>
    </div>
    
    <footer>
        <p class="text-wrapper-footer">© 2023 — 2412 «Галактический вестник»</p>
    </footer>
    
</body>
</html>