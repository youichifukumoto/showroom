<?php
session_start();
include('functions.php');
check_session_id();

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホームページ</title>
    <link rel="stylesheet" href="css/home_page.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
</head>

<body>
    <div class="wrapper>">
        <div class="title">
            <h1>showroom</h1>
            <h2><?= $username ?>様</h2>
            <a href="menu.php">≡</a>
        </div>
        <div class="report">
            <h3>運営からのお知らせ</h3>
            <textarea name="text" id="" cols="162" rows="10"></textarea>
        </div>
        <div class="exhibition">
            <h4>次回展示会日程</h4>
            <div class="date">
                <p>2021年12月12日（日）〜14日（火）closed 18:00</p>
            </div>
        </div>
        <div class="styles_menu">
            <div class="styles_catalog">
                <a href="home_page.php" class="styles__link_3">
                    <h3 class="styles_title">ホーム</h3>
                    <img src="img/home_page/house-solid.svg">
                </a>
            </div>
            <div class="styles_catalog">
                <a href="catalog_nav.php" class="styles_link_1">
                    <h3 class="styles_title">カタログ</h3>
                    <img src="img/home_page/book-open-solid.svg">
                </a>
            </div>
            <div class="styles_catalog">
                <a href="wear_date_page.php" class="styles_link_2">
                    <h3 class="styles_title">商品管理</h3>
                    <img src="img/home_page/shirt-solid.svg">
                </a>
            </div>
            <div class="styles_catalog">
                <a href="order_nav.php" class="styles__link_3">
                    <h3 class="styles_title">発注管理</h3>
                    <img src="img/home_page/note-sticky-solid.svg">
                </a>
            </div>
        </div>
    </div>
    <script src="home_page.js"></script>
</body>

</html>