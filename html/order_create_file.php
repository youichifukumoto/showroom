<?php

// var_dump($_GET);
// exit();
session_start();
include("functions.php"); 
check_session_id();

// if (
//     !isset($_POST['order_a']) || $_POST['order_a'] == '' &&
//     !isset($_POST['order_b']) || $_POST['order_b'] == '' &&
//     !isset($_POST['order_c']) || $_POST['order_c'] == '' &&
//     !isset($_POST['order_d']) || $_POST['order_d'] == '' &&
//     !isset($_POST['order_e']) || $_POST['order_e'] == '' 
// ) {
//     echo json_encode(["error_msg" => "no input"]);
//     exit();
// }

$order_a =  $_POST['order_a'];
$order_b =  $_POST['order_b'];
$order_c =  $_POST['order_c'];
$order_d =  $_POST['order_d'];
$order_e =  $_POST['order_e'];
$record_id =  $_GET['record_id'];
$user_id =  $_GET['user_id'];

// var_dump($record_id);
// exit();

$pdo = connect_to_db();

$sql = 'SELECT COUNT(*) FROM order_table WHERE record_id = :record_id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':record_id', $record_id, PDO::PARAM_INT);
exec_query($stmt);


$order_count = $stmt->fetch();


if ($order_count[0] != 0){
    $sql = 'UPDATE order_table SET order_a=:order_a, order_b=:order_b, order_c=:order_c, order_d=:order_d, order_e=:order_e, record_id=:record_id, user_id=:user_id, created_at=now() 
     WHERE record_id = :record_id';
       
} else{
    $sql = 'INSERT INTO order_table(id, order_a, order_b, order_c, order_d, order_e, record_id, user_id, created_at)  
            VALUES(NULL, :order_a, :order_b, :order_c, :order_d, :order_e, :record_id, :user_id, sysdate())';
}

// var_dump($sql);
// exit();

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':order_a', $order_a, PDO::PARAM_STR);
$stmt->bindValue(':order_b', $order_b, PDO::PARAM_STR);
$stmt->bindValue(':order_c', $order_c, PDO::PARAM_STR);
$stmt->bindValue(':order_d', $order_d, PDO::PARAM_STR);
$stmt->bindValue(':order_e', $order_e, PDO::PARAM_STR);
$stmt->bindValue(':record_id', $record_id, PDO::PARAM_INT);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);

exec_query($stmt);


header("Location:catalog.php");
exit();
