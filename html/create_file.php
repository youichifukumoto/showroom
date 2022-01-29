<?php

// var_dump($_POST);
// exit();


session_start();
include("functions.php");
check_session_id();

if (
  !isset($_POST['style']) || $_POST['style'] == '' ||
  !isset($_POST['item']) || $_POST['item'] == '' ||
  !isset($_POST['value']) || $_POST['value'] == '' ||
  !isset($_POST['fabric']) || $_POST['fabric'] == '' ||
  !isset($_POST['size']) || $_POST['size'] == ''
) {
  echo json_encode(["error_msg" => "no input"]);
  exit();
}
$style = $_POST['style'];
$item = $_POST['item'];
$value = $_POST['value'];
$fabric = $_POST['fabric'];
$size = $_POST['size'];
$color_a = $_POST['color_a'];
$color_b = $_POST['color_b'];
$color_c = $_POST['color_c'];
$color_d = $_POST['color_d'];
$color_e = $_POST['color_e'];


// ここからファイルアップロード&DB登録の処理を追加しよう！！！

if (isset($_FILES['upfile']) && $_FILES['upfile']['error'] == 0) {
  // 送信が正常に行われたときの処理(この後記述)
  $uploaded_file_name = $_FILES['upfile']['name']; //ファイル名の取得 
  // var_dump($uploaded_file_name);
  $temp_path = $_FILES['upfile']['tmp_name']; //tmpフォルダの場所 
  // var_dump($temp_path);
  $directory_path = 'upload/';
  $filename_to_save = $directory_path . $uploaded_file_name;
  // var_dump($filename_to);
  if (is_uploaded_file($temp_path)) {
    // ↓ここでtmpファイルを移動する
    if (move_uploaded_file($temp_path, $filename_to_save)) {
      chmod($filename_to_save, 0644); // 権限の変更
    } else {
      exit('Error:アップロードできませんでした'); // 画像の保存に失敗 
    }
  }
}

if (isset($_FILES['upfile_1']) && $_FILES['upfile_1']['error'] == 0) {
  // 送信が正常に行われたときの処理(この後記述)
  $uploaded_file_name = $_FILES['upfile_1']['name']; //ファイル名の取得 
  // var_dump($uploaded_file_name);
  $temp_path = $_FILES['upfile_1']['tmp_name']; //tmpフォルダの場所 
  // var_dump($temp_path);
  $directory_path = 'upload/';
  $filename_to_save_1 = $directory_path . $uploaded_file_name;
  // var_dump($filename_to);
  if (is_uploaded_file($temp_path)) {
    // ↓ここでtmpファイルを移動する
    if (move_uploaded_file($temp_path, $filename_to_save_1)) {
      chmod($filename_to_save_1, 0644); // 権限の変更
    } else {
      exit('Error:アップロードできませんでした'); // 画像の保存に失敗 
    }
  }
}

if (isset($_FILES['upfile_2']) && $_FILES['upfile_2']['error'] == 0) {
  // 送信が正常に行われたときの処理(この後記述)
  $uploaded_file_name = $_FILES['upfile_2']['name']; //ファイル名の取得 
  // var_dump($uploaded_file_name);
  $temp_path = $_FILES['upfile_2']['tmp_name']; //tmpフォルダの場所 
  // var_dump($temp_path);
  $directory_path = 'upload/';
  $filename_to_save_2 = $directory_path . $uploaded_file_name;
  // var_dump($filename_to);
  if (is_uploaded_file($temp_path)) {
    // ↓ここでtmpファイルを移動する
    if (move_uploaded_file($temp_path, $filename_to_save_2)) {
      chmod($filename_to_save_2, 0644); // 権限の変更
    } else {
      exit('Error:アップロードできませんでした'); // 画像の保存に失敗 
    }
  }
}
if (isset($_FILES['upfile_3']) && $_FILES['upfile_3']['error'] == 0) {
  // 送信が正常に行われたときの処理(この後記述)
  $uploaded_file_name = $_FILES['upfile_3']['name']; //ファイル名の取得 
  // var_dump($uploaded_file_name);
  $temp_path = $_FILES['upfile_3']['tmp_name']; //tmpフォルダの場所 
  // var_dump($temp_path);
  $directory_path = 'upload/';
  $filename_to_save_3 = $directory_path . $uploaded_file_name;
  // var_dump($filename_to);
  if (is_uploaded_file($temp_path)) {
    // ↓ここでtmpファイルを移動する
    if (move_uploaded_file($temp_path, $filename_to_save_3)) {
      chmod($filename_to_save_3, 0644); // 権限の変更
    } else {
      exit('Error:アップロードできませんでした'); // 画像の保存に失敗 
    }
  }
}
if (isset($_FILES['upfile_4']) && $_FILES['upfile_4']['error'] == 0) {
  // 送信が正常に行われたときの処理(この後記述)
  $uploaded_file_name = $_FILES['upfile_4']['name']; //ファイル名の取得 
  // var_dump($uploaded_file_name);
  $temp_path = $_FILES['upfile_4']['tmp_name']; //tmpフォルダの場所 
  // var_dump($temp_path);
  $directory_path = 'upload/';
  $filename_to_save_4 = $directory_path . $uploaded_file_name;
  // var_dump($filename_to);
  if (is_uploaded_file($temp_path)) {
    // ↓ここでtmpファイルを移動する
    if (move_uploaded_file($temp_path, $filename_to_save_4)) {
      chmod($filename_to_save_4, 0644); // 権限の変更
    } else {
      exit('Error:アップロードできませんでした'); // 画像の保存に失敗 
    }
  }
}
if (isset($_FILES['upfile_5']) && $_FILES['upfile_5']['error'] == 0) {
  // 送信が正常に行われたときの処理(この後記述)
  $uploaded_file_name = $_FILES['upfile_5']['name']; //ファイル名の取得 
  // var_dump($uploaded_file_name);
  $temp_path = $_FILES['upfile_5']['tmp_name']; //tmpフォルダの場所 
  // var_dump($temp_path);
  $directory_path = 'upload/';
  $filename_to_save_5 = $directory_path . $uploaded_file_name;
  // var_dump($filename_to);
  if (is_uploaded_file($temp_path)) {
    // ↓ここでtmpファイルを移動する
    if (move_uploaded_file($temp_path, $filename_to_save_5)) {
      chmod($filename_to_save_5, 0644); // 権限の変更
    } else {
      exit('Error:アップロードできませんでした'); // 画像の保存に失敗 
    }
  }
}
if (isset($_FILES['upfile_6']) && $_FILES['upfile_6']['error'] == 0) {
  // 送信が正常に行われたときの処理(この後記述)
  $uploaded_file_name = $_FILES['upfile_6']['name']; //ファイル名の取得 
  // var_dump($uploaded_file_name);
  $temp_path = $_FILES['upfile_6']['tmp_name']; //tmpフォルダの場所 
  // var_dump($temp_path);
  $directory_path = 'upload/';
  $filename_to_save_6 = $directory_path . $uploaded_file_name;
  // var_dump($filename_to);
  if (is_uploaded_file($temp_path)) {
    // ↓ここでtmpファイルを移動する
    if (move_uploaded_file($temp_path, $filename_to_save_6)) {
      chmod($filename_to_save_6, 0644); // 権限の変更
    } else {
      exit('Error:アップロードできませんでした'); // 画像の保存に失敗 
    }
  }
}
if (isset($_FILES['upfile_7']) && $_FILES['upfile_7']['error'] == 0) {
  // 送信が正常に行われたときの処理(この後記述)
  $uploaded_file_name = $_FILES['upfile_7']['name']; //ファイル名の取得 
  // var_dump($uploaded_file_name);
  $temp_path = $_FILES['upfile_7']['tmp_name']; //tmpフォルダの場所 
  // var_dump($temp_path);
  $directory_path = 'upload/';
  $filename_to_save_7 = $directory_path . $uploaded_file_name;
  // var_dump($filename_to);
  if (is_uploaded_file($temp_path)) {
    // ↓ここでtmpファイルを移動する
    if (move_uploaded_file($temp_path, $filename_to_save_7)) {
      chmod($filename_to_save_7, 0644); // 権限の変更
    } else {
      exit('Error:アップロードできませんでした'); // 画像の保存に失敗 
    }
  }
}
if (isset($_FILES['upfile_8']) && $_FILES['upfile_8']['error'] == 0) {
  // 送信が正常に行われたときの処理(この後記述)
  $uploaded_file_name = $_FILES['upfile_8']['name']; //ファイル名の取得 
  // var_dump($uploaded_file_name);
  $temp_path = $_FILES['upfile_8']['tmp_name']; //tmpフォルダの場所 
  // var_dump($temp_path);
  $directory_path = 'upload/';
  $filename_to_save_8 = $directory_path . $uploaded_file_name;
  // var_dump($filename_to);
  if (is_uploaded_file($temp_path)) {
    // ↓ここでtmpファイルを移動する
    if (move_uploaded_file($temp_path, $filename_to_save_8)) {
      chmod($filename_to_save_8, 0644); // 権限の変更
    } else {
      exit('Error:アップロードできませんでした'); // 画像の保存に失敗 
    }
  }
}
if (isset($_FILES['upfile_9']) && $_FILES['upfile_9']['error'] == 0) {
  // 送信が正常に行われたときの処理(この後記述)
  $uploaded_file_name = $_FILES['upfile_9']['name']; //ファイル名の取得 
  // var_dump($uploaded_file_name);
  $temp_path = $_FILES['upfile_9']['tmp_name']; //tmpフォルダの場所 
  // var_dump($temp_path);
  $directory_path = 'upload/';
  $filename_to_save_9 = $directory_path . $uploaded_file_name;
  // var_dump($filename_to);
  if (is_uploaded_file($temp_path)) {
    // ↓ここでtmpファイルを移動する
    if (move_uploaded_file($temp_path, $filename_to_save_9)) {
      chmod($filename_to_save_9, 0644); // 権限の変更
    } else {
      exit('Error:アップロードできませんでした'); // 画像の保存に失敗 
    }
  }
}

$pdo = connect_to_db();

$sql = 'INSERT INTO
       item_table(id, style, item, value, fabric, size,  color_a, color_b, color_c, color_d, color_e, movie, detail_a, detail_b, detail_c, detail_d, item_color_a, item_color_b, item_color_c, item_color_d, item_color_e)
       VALUES(NULL, :style, :item, :value, :fabric, :size,  :color_a, :color_b, :color_c, :color_d, :color_e, :movie, :detail_a, :detail_b, :detail_c, :detail_d, :item_color_a, :item_color_b, :item_color_c, :item_color_d, :item_color_e)'; // ...省略(todo_create.phpと同様)

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':style', $style, PDO::PARAM_INT);
$stmt->bindValue(':item', $item, PDO::PARAM_STR);
$stmt->bindValue(':value', $value, PDO::PARAM_INT);
$stmt->bindValue(':fabric', $fabric, PDO::PARAM_STR);
$stmt->bindValue(':size', $size, PDO::PARAM_STR);
$stmt->bindValue(':color_a', $color_a, PDO::PARAM_STR);
$stmt->bindValue(':color_b', $color_b, PDO::PARAM_STR);
$stmt->bindValue(':color_c', $color_c, PDO::PARAM_STR);
$stmt->bindValue(':color_d', $color_d, PDO::PARAM_STR);
$stmt->bindValue(':color_e', $color_e, PDO::PARAM_STR);
$stmt->bindValue(':movie', $filename_to_save, PDO::PARAM_STR);
$stmt->bindValue(':detail_a', $filename_to_save_1, PDO::PARAM_STR); // ...実行，エラー処理，etc...
$stmt->bindValue(':detail_b', $filename_to_save_2, PDO::PARAM_STR);
$stmt->bindValue(':detail_c', $filename_to_save_3, PDO::PARAM_STR);
$stmt->bindValue(':detail_d', $filename_to_save_4, PDO::PARAM_STR);
$stmt->bindValue(':item_color_a', $filename_to_save_5, PDO::PARAM_STR);
$stmt->bindValue(':item_color_b', $filename_to_save_6, PDO::PARAM_STR);
$stmt->bindValue(':item_color_c', $filename_to_save_7, PDO::PARAM_STR);
$stmt->bindValue(':item_color_d', $filename_to_save_8, PDO::PARAM_STR);
$stmt->bindValue(':item_color_e', $filename_to_save_9, PDO::PARAM_STR);

exec_query($stmt);


header("Location:item_input.php");
exit();
