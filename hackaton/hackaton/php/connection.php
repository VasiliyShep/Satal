<?php
    $connection = mysqli_connect("localhost", "root", "", "hackaton");
    if (!$connection) { echo "Ошибка соединения"; exit(); }