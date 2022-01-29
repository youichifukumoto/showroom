<?php
session_start();
include("functions.php");
check_session_id();

$user_id = $_SESSION['id'];
$username = $_SESSION['username'];

$pdo = connect_to_db();

// $sql = "SELECT * FROM order_table WHERE user_id = $user_id";
// $sql = "SELECT users_table.id, order_table.id as order_id, color_a, color_b, color_c, color_d, color_e, item_table.id as record_id, style, item, item_table.value as price FROM users_table INNER JOIN order_table ON order_table.user_id = users_table.id INNER JOIN item_table ON item_table.id = order_table.record_id";
$sql = "SELECT users_table.id, order_table.id as order_id, order_a, order_b, order_c, order_d, order_e, item_table.id as record_id, style, item, item_table.value as price FROM users_table INNER JOIN order_table ON order_table.user_id = users_table.id INNER JOIN item_table ON item_table.id = order_table.record_id";
$stmt = $pdo->prepare($sql);

exec_query($stmt);

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($result[0]);
// exit();
$output = "";
foreach ($result as $record) {
    $output .= "<tr>";
    $output .= "<td><a href='order_edit.php?id={$record["order_id"]}'>編集</a></td>";
    $output .= "<td><a href='order_delete.php?id={$record["order_id"]}'>削除</a></td>";
    $output .= "<td>{$record["style"]}</td>";
    $output .= "<td>{$record["item"]}</td>";
    $output .= "<td>{$record["order_a"]}</td>";
    $output .= "<td>{$record["order_b"]}</td>";
    $output .= "<td>{$record["order_c"]}</td>";
    $output .= "<td>{$record["order_d"]}</td>";
    $output .= "<td>{$record["order_e"]}</td>";
    $output .= "<td>{$record["price"]}</td>";
    $output .= "</tr>";
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/order_read.css">
    <title>お客様オーダーシート（一覧画面）</title>
</head>

<body>
    <fieldset>
        <legend>
            <p><?= $username ?>様 オーダーシート</p>
        </legend>
        <a href="menu.php">メニュー</a>
        <table>
            <thead>
                <div class="form">
                    <tr>
                        <th></th>
                        <th></th>
                        <th>style</th>
                        <th>item</th>
                        <th>A</th>
                        <th>B</th>
                        <th>C</th>
                        <th>D</th>
                        <th>E</th>
                        <th>PRICE</th>
                    </tr>
                </div>
            </thead>
            <tbody>
                <p><?= $output ?></p>
            </tbody>
        </table>
    </fieldset>
</body>

</html>

<!-- <a href='order_create_file.php?user_id={$user_id}&item_id={$record[' id']}'> -->