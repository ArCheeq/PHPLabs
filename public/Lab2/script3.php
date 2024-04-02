<!DOCTYPE html>
<html>
<head>
    <title>Перевірка логіну</title>
</head>
<body>

<h1>Перевірка логіну</h1>

<form method="post" action="">
    <label for="login">Логін:</label>
    <input type="text" id="login" name="login">
    <br><br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password">
    <br><br>
    <input type="submit" value="Перевіримо">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $users = array(
        "log1" => "pass1",
        "log2" => "pass2",
        "log3" => "pass3",
        "log4" => "pass4"
    );

    $login = $_POST["login"];
    $password = $_POST["password"];

    if (array_key_exists($login, $users)) {
        if ($users[$login] === $password) {
            switch ($login) {
                case 'log1':
                    echo "Доброго Дня, Іванов Іван Івановіч";
                    break;
                case 'log2':
                    echo "Доброго Дня, Панов Вадим Дмитрович";
                    break;
                case 'log3':
                    echo "Доброго Дня, Сікорський Максим Андрійович";
                    break;
                case 'log4':
                    echo "Доброго Дня, Голобородько Антон Сергійович";
                    break;
            }
        } else {
            echo "Вибачте, пароль неправильний для введеного логіну.";
        }
    } else {
        echo "Вибачте, ви у нас не зареєстровані.";
    }
}
?>

</body>
</html>