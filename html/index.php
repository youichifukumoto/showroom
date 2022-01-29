<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>トップページ</title>
    <link rel="stylesheet" href="css/login_page.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
</head>

<body>
    <form action="user_login_act.php" method="POST">
        <div id="login">
            <!-- トップの背景 -->
            <img src="img/login_page/IMG_2805.jpg" alt="絵型表紙">
            <div class="login">
                <div class="heading">  
                    <h2>Sign in</h2>
                    <!-- ログインアカウント -->
                    <form>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"></span>
                            <input type="text" name="email" class="form-control" placeholder="email">
                        </div>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <input class="button" type="submit" value="ログイン">
                    </form>
                </div>
            </div>
        </div>
</body>

</html>