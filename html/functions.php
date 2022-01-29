<?php

function connect_to_db()
{
  // $dbn = 'mysql:dbname=TOOL;charset=utf8;port=3306;host=localhost';
  // $user = 'root';
  // $pwd = '';

  $dbn = 'mysql:dbname=8ebd8b680c4f40dff7103b2a7ea58866;charset=utf8;port=3306;host=mysql-2.mc.lolipop.lan';
  $user = '8ebd8b680c4f40dff7103b2a7ea58866';
  $pwd = '';

  try {
    return new PDO($dbn, $user, $pwd);
  } catch (PDOException $e) {
    exit('DB接続エラー:' . $e->getMessage());
  }
}


function exec_query($stmt)
{
  try {
    $stmt->execute();
  } catch (PDOException $e) {
    exit('SQLエラー：' . $e->getMessage());
  }
}


function check_session_id(){
  if (
    !isset($_SESSION["session_id"]) ||
    $_SESSION["session_id"] != session_id()
  ) {
    header("Location:index.php");
  } else {
    session_regenerate_id(true);
    $_SESSION["session_id"] = session_id();
  }
}


function check_is_admin(){
  if($_SESSION["is_admin"]==0){
    header("Location:menu.php");
  }
}

