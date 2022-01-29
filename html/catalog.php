<?php
session_start();
include('functions.php');
check_session_id();

$user_id = $_SESSION['id'];

$pdo = connect_to_db();

$sql = "SELECT * FROM item_table";
$stmt = $pdo->prepare($sql);

exec_query($stmt);

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
// $record = $result[0];
foreach ($result as $record) {
$output .= "<section>
                   <!-- 商品の納期 -->
                   <p id='delivery'>Delivery.2月中〜末</p>
                   <div class='item_number'>";
$output .=         "<!-- 商品の品番 -->
                        <h1 id='index'>{$record["style"]}</h1>";
$output .=         "<!-- 商品名 -->
                        <h3>{$record["item"]}</h3>";
$output .=         "<!-- 上代価格 -->
                        <h3>Price．¥{$record["value"]}</h3>
                   </div>";
$output .=          "<!--  品質欄 -->
                   <div class='fabric_size'>
                        <div class='fabric'>
                          <p class='material'>FABRIC</p>
                          <!-- 品質表示 -->
                          <P>{$record["fabric"]}</p>
                        </div>
                   </div>";
$output .=          "<!-- サイズ欄 -->
                   <div class='size'>
                      <P class='material'>SIZE</P>
                      <!-- サイズ表記 -->
                      <P>{$record["size"]}</P> 
                   </div> ";
$output .=          "<!-- 商品動画 -->
                   <main>";
$output .=       "<video src='{$record["movie"]}' controls autoplay loop muted width='750'></video>
                   </main>";
$output .=        "<div class='item'>
                      <div class='color_nav'>
                      <div>身長 160cm</div>
                      <h4>item detail</h4>";
$output .=        "</div>
                       <!-- 商品のディテール画像 -->
                   <div class='detail'>
                       <a href=''><img src='{$record["detail_a"]}' alt=''></a>";
$output .=            "<a href=''><img src='{$record["detail_b"]}' alt=''></a>";
$output .=            "<a href=''><img src='{$record["detail_c"]}' alt=''></a>";
$output .=            "<a href=''><img src='{$record["detail_d"]}' alt=''></a>  
                   </div>
                   <div class='modal'>
                       <div class='bigimg'>
                           <img src='' alt=''>
                       </div>
                       <P class='close-btn'><a href=''>✖️</a></P>
                   </div>";
$output .=        "<!-- 商品のカラーバリエーション画像 -->
                <form action='order_create_file.php?user_id={$user_id}&record_id={$record['id']}' method='POST'>
                   <h4>Color Variation</h4>
                    <div class='item_color'>
                       <div class='count_a'>
                         <a href=''><img src='{$record["item_color_a"]}' alt=''></a>";
$output .=           "<p class='color'>{$record["color_a"]}</p>
                         <input type='number' name='order_a' value='' min='0' max='100' step='1'>
                       </div>";

$output .=        "<div class='count_b'>
                         <a href=''><img src='{$record["item_color_b"]}' alt=''></a>";
$output .=           "<p class='color'>{$record["color_b"]}</p>
                          <input type='number' name='order_b'  value='' min='0' max='100' step='1'>
                       </div>";

$output .=        "<div class='count_c'>
                          <a href=''><img src='{$record["item_color_c"]}' alt=''></a>";
$output .=           "<p class='color'>{$record["color_c"]}</p>
                          <input type='number' name='order_c' value=''  min='0' max='100' step='1'>
                       </div>";

$output .=        "<div class='count_d'>
                          <a href=''><img src='{$record["item_color_d"]}' alt=''></a>";
$output .=           "<p class='color'>{$record["color_d"]}</p>
                          <input type='number' name='order_d'   value='' min='0' max='100' step='1'>
                       </div>";

$output .=        "<div class='count_e'>
                           <a href=''><img src='{$record["item_color_e"]}' alt=''></a>";
$output .=            "<p class='color'>{$record["color_e"]}</p>
                           <input type='number' name='order_e'  value='' min='0' max='100' step='1'>
                       </div>
                   </div>
                       <p class='comment'>ご希望の数量をご指定ください。</p>";
$output .=         "<button type='submit'>オーダーシートへ転送</button>
                </form>
            </section>";
}
// unset($value);

// if ($_POST['submit']) {
//     ### POSTされたときの処理、省略 ###
//     $uri = $_SERVER['HTTP_REFERER'];
//     header("Location: " . $uri);
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>カタログ</title>
    <link rel="stylesheet" href="css/catalog.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
</head>

<body>
    <header>
        <div id="new_arrival">
            <img src="img/catalog/2021_1.png" alt="絵型表紙">
            <div class="title">
                <h1>LUEUF 22SS vol03 JUNE EXHIBITION</h1>
            </div>
        </div>
    </header>
    <div class="item_box">
        <?= $output ?>
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
    <script src="js/catalog.js"></script>
</body>

</html>