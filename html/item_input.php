<?php
session_start();
include("functions.php");
check_session_id();
check_is_admin();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力画面</title>
    <link rel="stylesheet" href="css/item_input.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
</head>

<body>
    <fieldset>
        <form action="create_file.php" method="POST" enctype="multipart/form-data">
            <section>
                <header>
                    <h1>商品登録画面</h1>
                    <a href="menu.php">メニュー</a>
                    <a href="item_read.php">登録商品一覧</a>
                    <a href="catalog.php">カタログ</a>
                    <!-- 商品の納期 -->
                    <p id="delivery"> Delivery :<input type="text" size="10" name="delivery" placeholder="納期"></p>
                    <div class="item_number">
                        <!-- 商品の品番 -->
                        <h1 id="index"><input type="text" size="10" name="style" placeholder="品番"></h1>
                        <!-- 商品名 -->
                        <h3><input type="text" size="25" name="item" placeholder="商品名"></h3>
                        <!-- 上代価格 -->
                        <h3><input type="text" size="10" name="value" placeholder="上代"></h3>
                    </div>
                    <!--  品質欄 -->
                    <div class="fabric_size">
                        <div class="fabric">
                            <p class="material">FABRIC</p>
                            <!-- 品質表示 -->
                            <p><input type="text" size="50" name="fabric" placeholder="クオリティー"></p>
                        </div>
                        <!-- サイズ欄 -->
                        <div class="size">
                            <P class="material">SIZE</P>
                            <!-- サイズ表記 -->
                            <P><input type="text" size="65" name="size" placeholder="サイズ"></P>
                        </div>
                    </div>
                </header>
                <!-- 商品動画 -->
                <main>
                    <p><input type="file" class="movie" name="upfile" style="font-size: 5px;" accept="video/*"></p>
                </main>
                <footer>
                    <div class="item">
                        <div class="color_nav">
                            <h4>item detail</h4>
                            <div>身長 160cm</div>
                        </div>
                        <!-- 商品のディテール画像 -->
                        <div class="detail">
                            <a href=""><input type="file" name="upfile_1" style="font-size: 2px;" accept="image/*" capture="camera" alt=""></a>
                            <a href=""><input type="file" name="upfile_2" style="font-size: 2px;" accept="image/*" capture="camera" alt=""></a>
                            <a href=""><input type="file" name="upfile_3" style="font-size: 2px;" accept="image/*" capture="camera" alt=""></a>
                            <a href=""><input type="file" name="upfile_4" style="font-size: 2px;" accept="image/*" capture="camera" alt=""></a>
                        </div>
                        <div class="modal">
                            <div class="bigimg">
                                <img src="" alt="original-img">
                            </div>
                            <P class="close-btn"><a href="">✖️</a></P>
                        </div>
                    </div>
                    <!-- 商品のカラーバリエーション画像 -->
                    <h4>Color Variation</h4>
                    <div class="item_color">
                        <div class="count">
                            <input type="file" name="upfile_5" style="font-size: 2px;" accept="image/*" capture="camera">
                            <P class="color"><input type="text" size="7" name="color_a" placeholder="カラーa"></P>
                        </div>
                        <div class="count">
                            <input type="file" name="upfile_6" style="font-size: 2px;" accept="image/*" capture="camera">
                            <P class="color"><input type="text" size="7" name="color_b" placeholder="カラーb"></P>
                        </div>
                        <div class="count">
                            <input type="file" name="upfile_7" style="font-size: 2px;" accept="image/*" capture="camera">
                            <P class="color"><input type="text" size="7" name="color_c" placeholder="カラーc"></P>
                        </div>
                        <div class="count">
                            <input type="file" name="upfile_8" style="font-size: 2px;" accept="image/*" capture="camera">
                            <P class="color"><input type="text" size="7" name="color_d" placeholder="カラーd"></P>
                        </div>
                        <div class="count">
                            <input type="file" name="upfile_9" style="font-size: 2px;" accept="image/*" capture="camera">
                            <P class="color"><input type="text" size="7" name="color_e" placeholder="カラーe"></P>
                        </div>
                    </div>
                    <br>
                    <input type="submit" class="button" style="width: 200px;" value="登録">
                    </div>
                </footer>
            </section>
        </form>
    </fieldset>
</body>