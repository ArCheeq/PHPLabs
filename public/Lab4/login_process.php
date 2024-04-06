<?php
    function checkUser($login) {
        return file_exists("$login.txt");
    }

    function checkPassword($login, $password) {
        $file_content = file_get_contents("$login.txt");
        return trim($file_content) === $password;
    }

    $login = $_POST['login'];
    $password = $_POST['password'];
    $mode = $_POST['mode'];

    if ($mode === 'login') {
        if (checkUser($login)) {
            if (checkPassword($login, $password)) {
                echo "Доброго дня, $login!";
            } else {
                echo "Пароль неправильний!";
            }
        } else {
            echo "Такого користувача не зареєстровано!";
        }
    } elseif ($mode === 'register') {
        if (!checkUser($login)) {
            file_put_contents("$login.txt", $password);
            echo "Ви успішно зареєстровані!";
        } else {
            echo "Такий логін вже зайнятий. Будь ласка, виберіть інший.";
        }
    }
?>
