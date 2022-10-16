<?php
    require "connection.php";

    $addres = trim($_POST['addres']);
    $time = $_POST['time'];
    $tech = $_POST['tech'];
    $comment = $_POST['comment'];

    $hash = 'BNksda87TG@Hkhdbsak73fgdah';
    $password = md5($password.$hash);

    $connection -> query("INSERT INTO `app` (`addres`, `date`, `tech`, `comment`) VALUES ('$addres', '$time', '$tech', '$comment')");
    header('Location: ./../app.html');