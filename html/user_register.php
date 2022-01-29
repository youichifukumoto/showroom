<?php
session_start();
include("functions.php");
check_is_admin()
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登録画面</title>
</head>

<body>
  <form action="user_register_act.php" method="POST">
    <fieldset style="width: 25%;">
      <legend>新規登録画面</legend>
      <div>
        shop name: <input type="text" name="username">
      </div>
      <div>
        e-mail: <input type="text" name="email">
      </div>
      <div>
        password: <input type="password" name="password">
      </div>
      <div>
        <button>新規登録</button>
      </div>
      <a href="index.php">ログインページへ</a>
    </fieldset>
  </form>

</body>

</html>