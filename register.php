<?php

if(isset($_POST["register"])){

    if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $full_name= htmlspecialchars($_POST['full_name']);
        $email=htmlspecialchars($_POST['email']);
        $username=htmlspecialchars($_POST['username']);
        $password=htmlspecialchars($_POST['password']);
        $query=mysql_query("SELECT * FROM usertbl WHEREusername='".$username."'");
        $numrows=mysql_num_rows($query);
        if($numrows==0)
        {
            $sql="INSERT INTO usertbl
  (full_name, email, username,password)
	VALUES('$full_name','$email', '$username', '$password')";
            $result=mysql_query($sql);
            if($result){
                $message = "Account Successfully Created";
            } else {
                $message = "Failed to insert data information!";
            }
        } else {
            $message = "That username already exists! Please try another one!";
        }
    } else {
        $message = "All fields are required!";
    }
}
?>

<?php if (!empty($message)) {echo "<p class="error">" . "MESSAGE: ". $message . "</p>";} ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link href="css/style.css" media="screen" rel="stylesheet">
</head>
<body>
<div class="container mregister">
    <div id="login">
        <h1>Регистрация</h1>
        <form action="register.php" id="registerform" method="post"name="registerform">
            <p><label for="user_login">Имя<br>
                    <input class="input" id="name" name="name" size="32"  type="text" value=""></label></p>
            <p><label for="user_login">Фамилия<br>
                    <input class="input" id="surname" name="surname" size="32"  type="text" value=""></label></p>
            <p><label for="user_pass">E-mail<br>
                    <input class="input" id="email" name="email" size="32"type="email" value=""></label></p>
            <p><label for="user_pass">Пароль<br>
                    <input class="input" id="password" name="password"size="32"   type="password" value=""></label></p>
            <p class="submit"><input class="button" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
            <p class="regtext">Уже зарегистрированы? <a href= "login.php">Введите имя пользователя</a>!</p>
        </form>
    </div>
</div>
<footer>
    © 2014 <ahref="http://www.1stwebdesigner.com/">1stwebdesigner</a>. Все права защищены.
</footer>
</body>
</html>