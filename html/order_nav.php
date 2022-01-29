<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>オーダーページ</title>
    <link rel="stylesheet" href="css/order.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>

<body>
    <div class="wrapper">
        <div class="header">
            <p>showroom</p>
            <div class="title">
                <P>発注書</P>
            </div>
            <input type="text" alt="検索" placeholder="商品の品番検索" size=50>
        </div>
        <a href="order_read.php" class="date">
            <div class="date_title">
                <h2>2022/1月展 </h2>
            </div>
        </a>
        <a href="" class="date">
            <div class="date_title">
                <h2>2022/2月展</h2>
            </div>
        </a>
        <a href="" class="date">
            <div class="date_title">
                <h2>2022/3月展</h2>
            </div>
        </a>
        <a href="" class="date">
            <div class="date_title">
                <h2>2022/4月展</h2>
            </div>
        </a>
        <a href="" class="date">
            <div class="date_title">
                <h2>2022/5月展</h2>
            </div>
        </a>
        <a href="" class="date">
            <div class="date_title">
                <h2>2022/6月展</h2>
            </div>
        </a>
    </div>
    <footer>
        <div class="styles_menu">
            <div class="styles_catalog">
                <a href="home_page.php" class="styles_link">
                    <h3 class="styles_title">ホーム</h3>
                    <img src="img/home_page/house-solid.svg">
                </a>
            </div>
            <div class="styles_catalog">
                <a href="catalog_nav.php" class="styles_link">
                    <h3 class="styles_title">カタログ</h3>
                    <img src="img/home_page/book-open-solid.svg">
                </a>
            </div>
            <div class="styles_catalog">
                <a href="wear_date_page.php" class="styles_link">
                    <h3 class="styles_title">商品管理</h3>
                    <img src="img/home_page/shirt-solid.svg">
                </a>
            </div>
            <div class="styles_catalog">
                <a href="order_nav.php" class="styles_link">
                    <h3 class="styles_title">発注管理</h3>
                    <img src="img/home_page/note-sticky-solid.svg">
                </a>
            </div>
        </div>
    </footer>
    <script src="wear_date_page.js"></script>
</body>

</html>