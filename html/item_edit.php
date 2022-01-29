<?php

session_start();
include('functions.php');
check_session_id();
check_is_admin();

$id = $_GET["id"];
$pdo = connect_to_db();

$sql = 'SELECT * FROM item_table WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
exec_query($stmt);

$record = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/item_edit.css">
  <title>商品リスト（編集画面）</title>
</head>

<body>
  <form action="item_update.php" method="POST" enctype="multipart/form-data">
    <fieldset>
      <legend>商品リスト（編集画面）</legend>
      <a href="item_read.php">登録商品一覧</a>
      <a href="item_input.php">商品登録</a>
      <div>
        style: <input type="text" name="style" value="<?= $record["style"] ?>">
      </div>
      <div>
        item: <input type="text" name="item" value="<?= $record["item"] ?>">
      </div>
      <div>
        value: <input type="text" name="value" value="<?= $record["value"] ?>">
      </div>
      <div>
        fabric: <input type="text" name="fabric" value="<?= $record["fabric"] ?>">
      </div>
      <div>
        size: <input type="text" name="size" value="<?= $record["size"] ?>">
      </div>
      <div>
        color_a: <input type="text" name="color_a" value="<?= $record["color_a"] ?>">
      </div>
      <div>
        color_b: <input type="text" name="color_b" value="<?= $record["color_b"] ?>">
      </div>
      <div>
        color_c: <input type="text" name="color_c" value="<?= $record["color_c"] ?>">
      </div>
      <div>
        color_d: <input type="text" name="color_d" value="<?= $record["color_d"] ?>">
      </div>
      <div>
        color_e: <input type="text" name="color_e" value="<?= $record["color_e"] ?>">
      </div>
      <div>
        movie: <input type="file" name="upfile" accept="video/*" value="<?= $record["movie"] ?>">
      </div>
      <div>
        detail_a: <input type="file" name="upfile_1" accept="image/*" value="<?= $record["detail_a"] ?>">
      </div>
      <div>
        detail_b: <input type="file" name="upfile_2" accept="image/*" value="<?= $record["detail_b"] ?>">
      </div>
      <div>
        detail_c: <input type="file" name="upfile_3" accept="image/*" value="<?= $record["detail_c"] ?>">
      </div>
      <div>
        detail_d: <input type="file" name="upfile_4" accept="image/*" value="<?= $record["detail_d"] ?>">
      </div>
      <div>
        item_color_a: <input type="file" name="upfile_5" accept="image/*" value="<?= $record["item_color_a"] ?>">
      </div>
      <div>
        item_color_b: <input type="file" name="upfile_6" accept="image/*" value="<?= $record["item_color_b"] ?>">
      </div>
      <div>
        item_color_c: <input type="file" name="upfile_7" accept="image/*" value="<?= $record["item_color_c"] ?>">
      </div>
      <div>
        item_color_d: <input type="file" name="upfile_8" accept="image/*" value="<?= $record["item_color_d"] ?>">
      </div>
      <div>
        item_color_e: <input type="file" name="upfile_9" accept="image/*" value="<?= $record["item_color_e"] ?>">
      </div>
      <button>登録</button>
      </div>
      <input type="hidden" name="id" value="<?= $record["id"] ?>">
    </fieldset>
  </form>
</body>

</html>