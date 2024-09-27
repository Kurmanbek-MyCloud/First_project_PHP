<?php
    $name = $_POST["username"];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(trim($name) == "") {
        echo "Вы не ввели имя пользователя";
    } 
    elseif(strlen(trim($name)) <= 1) {
        echo "Такого имени не существует!";
    }
    elseif(trim($email) == "" || trim($pass) == "" || trim($_POST['message']) == "") {
        echo "Введите все данные!";
    }
    else {
        // $pass = md5($pass);

        // echo "<h1>Все данные<?h>
        // <p>$name</p>
        // <p>$email</p>
        // <p>$pass</p>
        // <p>$_POST[message]</p>";

        // echo "<h1>Все данные<?h>";
        // foreach ($_POST as $key => $value) {
        //     echo "<p>$value</p>";
        // }

        header('location: https://www.youtube.com/');
        exit;
    }