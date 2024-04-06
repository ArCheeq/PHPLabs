<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>
<body>
    <h2>Введіть дані користувача:</h2>
    <form action="process_form.php" method="post">
        <label for="lastName">Прізвище:</label>
        <input type="text" id="lastName" name="lastName" required><br><br>
        
        <label for="firstName">Ім'я:</label>
        <input type="text" id="firstName" name="firstName" required><br><br>
        
        <label for="age">Вік:</label>
        <input type="number" id="age" name="age" required><br><br>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="Готово">
    </form>
</body>
</html>
