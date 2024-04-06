<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перевірка наявності файлу</title>
</head>
<body>
    <form action="" method="post">
        <label for="filename">Ім'я файлу:</label><br>
        <input type="text" id="filename" name="filename" required><br><br>
        <input type="submit" value="Готово">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $filename = $_POST["filename"];
            
            if (file_exists($filename)) {
                echo "Файл із іменем $filename в поточному каталозі існує.<br><br>";
                echo "Розмір файлу: " . filesize($filename) . " байт<br>";
                echo "Дата створення: " . date("Y-m-d H:i:s", filectime($filename)) . "<br>";
                echo "Дата останньої модифікації: " . date("Y-m-d H:i:s", filemtime($filename)) . "<br>";
                echo "Вміст файлу:<br>";
                echo "<pre>" . htmlspecialchars(file_get_contents($filename)) . "</pre>";
            } else {
                echo "Файл із іменем $filename в поточному каталозі не існує.";
            }
        }
    ?>

</body>
</html>