<?php
session_start();
include("functions.php");
check_session_id();
check_is_admin();

// $user_id = $_SESSION['id'];

$pdo = connect_to_db();

$sql = "SELECT * FROM item_table";
$stmt = $pdo->prepare($sql);

exec_query($stmt);

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
  $output .= "<tr>";
  $output .= "<td><a href='item_edit.php?id={$record["id"]}'>編集</a></td>";
  $output .= "<td><a href='item_delete.php?id={$record["id"]}'>削除</a></td>";
  $output .= "<td>{$record["style"]}</td>";
  $output .= "<td>{$record["item"]}</td>";
  $output .= "<td>{$record["value"]}</td>";
  $output .= "<td>{$record["fabric"]}</td>";
  $output .= "<td>{$record["size"]}</td>";
  $output .= "<td>{$record["color_a"]}</td>";
  $output .= "<td>{$record["color_b"]}</td>";
  $output .= "<td>{$record["color_c"]}</td>";
  $output .= "<td>{$record["color_d"]}</td>";
  $output .= "<td>{$record["color_e"]}</td>";
  $output .= "<td><video src='{$record["movie"]}' height=100px></td>";
  $output .= "<td><img src='{$record["detail_a"]}' height=100px></td>";
  $output .= "<td><img src='{$record["detail_b"]}' height=100px></td>";
  $output .= "<td><img src='{$record["detail_c"]}' height=100px></td>";
  $output .= "<td><img src='{$record["detail_d"]}' height=100px></td>";
  $output .= "<td><img src='{$record["item_color_a"]}' height=100px></td>";
  $output .= "<td><img src='{$record["item_color_b"]}' height=100px></td>";
  $output .= "<td><img src='{$record["item_color_c"]}' height=100px></td>";
  $output .= "<td><img src='{$record["item_color_d"]}' height=100px></td>";
  $output .= "<td><img src='{$record["item_color_e"]}' height=100px></td>";
  $output .= "</tr>";
}
unset($value);
?>



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/item_read.css">
  <title>商品リスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>商品リスト（一覧画面）</legend>
    <a href="menu.php">メニュー</a>
    <a href="item_input.php">商品登録</a>
    <a href="catalog.php">カタログ</a>
    <table>
      <thead>
        <div class="form">
          <tr>
            <th></th>
            <th></th>
            <th>style</th>
            <th>item</th>
            <th>value</th>
            <th>fabric</th>
            <th>size</th>
            <th>color_a</th>
            <th>color_b</th>
            <th>color_c</th>
            <th>color_d</th>
            <th>color_e</th>
            <th>movie</th>
            <th>detail_a</th>
            <th>detail_b</th>
            <th>detail_c</th>
            <th>detail_d</th>
            <th>item_color_a</th>
            <th>item_color_b</th>
            <th>item_color_c</th>
            <th>item_color_b</th>
            <th>item_color_e</th>
          </tr>
        </div>
      </thead>
      <tbody>
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>