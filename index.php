<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/styleguide.css" />
    <script src="script.js" defer></script>
    <title>Галактический вестник</title>
</head>
<body>
    <header>
        <div>
            <a href="index.php">
                <div class="img-div-logo">
                <img src="/img/logo.svg" alt="logo">
            </div></a>
            
            <a href="index.php">
                <div class="label">
                <div class="text-wrapper">ГАЛАКТИЧЕСКИЙ <br />ВЕСТНИК</div>
            </div></a>
        </div>
        
    </header>
    <div class=main-image-container>
        <div class="main-image" style="background-image: url('images/<?php include './php/main_image.php'?>')">
            <?php include './php/main_article.php' ?>
        </div>
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
            <div class="div-wrapper-arrow">
                <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Frame 315">
                <path id="Arrow 1" d="M3 10C2.44772 10 2 10.4477 2 11C2 11.5523 2.44772 12 3 12L3 10ZM18.466 11.7071C18.8565 11.3166 18.8565 10.6834 18.466 10.2929L12.102 3.92893C11.7115 3.53841 11.0783 3.53841 10.6878 3.92893C10.2973 4.31946 10.2973 4.95262 10.6878 5.34315L16.3447 11L10.6878 16.6569C10.2973 17.0474 10.2973 17.6805 10.6878 18.0711C11.0783 18.4616 11.7115 18.4616 12.102 18.0711L18.466 11.7071ZM3 12L17.7589 12L17.7589 10L3 10L3 12Z" fill="#841844"/>
                </g>
                </svg>
            </div>
        </div>
    </div>
    
    <footer>
        <div>
            <div class="create-line"></div>
            <p class="text-wrapper-footer">© 2023 — 2412 «Галактический вестник»</p>
        </div>
        
    </footer>
    
</body>
</html>