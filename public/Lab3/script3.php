<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Введення даних</title>
</head>
<body>
    <form action="" method="post">
        <label for="surname">Прізвище:</label><br>
        <input type="text" id="surname" name="surname" required><br>
        <label for="name">Ім'я:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="age">Вік:</label><br>
        <input type="number" id="age" name="age" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Готово">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["surname"]) || empty($_POST["name"]) || empty($_POST["age"]) || empty($_POST["email"])) {
                echo "Будь ласка, заповніть всі поля!";
            } else {
                $data = array(
                    "Прізвище" => $_POST["surname"],
                    "Ім'я" => $_POST["name"],
                    "Вік" => $_POST["age"],
                    "Email" => $_POST["email"]
                );

                echo "<table border='1'>";
                foreach ($data as $key => $value) {
                    echo "<tr><td>$key</td><td>$value</td></tr>";
                }
                echo "</table>";
            }
        }
    ?>
</body>
</html>
