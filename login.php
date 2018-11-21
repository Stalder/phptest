<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link href="css/style.css" media="screen" rel="stylesheet">
</head>
<body>
<div class="container mlogin">
    <div id="login">
        <h1>Вход</h1>
        <form action="" id="loginform" method="post" name="loginform">
            <p><label for="user_login">Email:<br>
                    <input class="input" id="username" name="email"size="20"
                           type="text" value=""></label></p>
            <p><label for="user_pass">Пароль:<br>
                    <input class="input" id="password" name="password" size="20"
                           type="password" value=""></label></p>
            <p class="submit"><input class="button" name="login" type= "submit" value="Log In"></p>
            <p class="regtext">Еще не зарегистрированы? <a href= "register.php">Регистрация</a>!</p>
        </form>
    </div>
</div>
<footer>
    © 2014 <ahref="http://www.1stwebdesigner.com/">1stwebdesigner</a>. Все права защищены.

</footer>
</body>
</html>