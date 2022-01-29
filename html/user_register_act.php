<?php
include('functions.php');

if (
  !isset($_POST['username']) || $_POST['username'] == '' ||
  !isset($_POST['email']) || $_POST['email'] == '' ||
  !isset($_POST['password']) || $_POST['password'] == ''
) {
  echo json_encode(["error_msg" => "no input"]);
  exit();
}

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$pdo = connect_to_db();

$sql = 'SELECT COUNT(*) FROM users_table WHERE email=:email';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
exec_query($stmt);

if ($stmt->fetchColumn() > 0) {
  echo "<p>すでに登録されているユーザです．</p>";
  echo '<a href="index.php">ログイン</a>';
  exit();
}

$sql = 'INSERT INTO users_table(id, username, email ,password, is_admin, is_deleted, created_at, updated_at) VALUES(NULL, :username, :email, :password, 0, 0, sysdate(), sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);
exec_query($stmt);

header("Location:index.php");
exit();
