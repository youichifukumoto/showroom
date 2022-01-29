<?php
session_start();
include('functions.php');
check_session_id();

$id = $_GET["id"];
// var_dump($id);
// exit();

$pdo = connect_to_db();

$sql = "DELETE FROM order_table WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
exec_query($stmt);

header("Location:order_read.php");
exit();
