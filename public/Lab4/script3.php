<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Вхід</h2>
    <form action="login_process.php" method="post">
        Логін: <input type="text" name="login" required><br><br>
        Пароль: <input type="password" name="password" required><br><br>
        Режим:
        <select name="mode">
            <option value="login">Вхід</option>
            <option value="register">Реєстрація</option>
        </select><br><br>
        <input type="submit" value="Виконати">
    </form>
</body>
</html>
