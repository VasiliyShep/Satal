<?php
    require "connection.php";

    $login = trim($_POST['tell']);
    $password = $_POST['pass'];

    $error = '';
    if (strlen($login) < 3) $error = "Логин должен содержать не менее 3 символов";
    else if (strlen($password) < 8) $error = "Пароль должен содержать не менее 8 символов";
    else if (mysqli_num_rows($connection -> query("SELECT * FROM `users` WHERE `tell` = '$login'")) != 0) $error = "Такой логин уже занят";

    if ($error) {
        echo $error;
        exit();
    }

    $hash = 'BNksda87TG@Hkhdbsak73fgdah';
    $password = md5($password.$hash);

    $connection -> query("INSERT INTO `users` (`tell`, `password`) VALUES ('$login', '$password')");
    header('Location: ./../index.html');