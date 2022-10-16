<?php
    require "connection.php";

    $login = trim($_POST['tell']);
    $password = $_POST['pass'];

    $hash = 'BNksda87TG@Hkhdbsak73fgdah';
    $password = md5($password.$hash);
    
    $query = $connection -> query("SELECT * FROM `users` WHERE `tell` = '$login' AND `password` = '$password'");
    
    $error = '';
    if (mysqli_num_rows($query) == 0) $error = "Вы ввели неверный логин или пароль";

    if ($error) {
        echo $error;
        exit();
    } else {
        setcookie("log", $login, time() + 3600, '/');
        header('Location: ./../app.html');
    }