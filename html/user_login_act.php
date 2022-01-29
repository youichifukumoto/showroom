<?php
session_start();
include("functions.php");
$pdo = connect_to_db();

$email = $_POST["email"];
$password = $_POST["password"];

$sql = 'SELECT * FROM users_table 
        WHERE email=:email AND password=:password AND is_deleted=0';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

exec_query($stmt);

$val = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$val) {
  echo "<p>ログイン情報に誤りがあります。</p>";
  echo '<a href="index.php">ログインページへ</a>';
  exit();
} else {
  $_SESSION = array();
  $_SESSION["session_id"] = session_id();
  $_SESSION["is_admin"] = $val["is_admin"];
  $_SESSION["email"] = $val["email"];
  $_SESSION["id"] = $val["id"];
  $_SESSION["username"] = $val["username"];
  header("Location:home_page.php");
  exit();
}
