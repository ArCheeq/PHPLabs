<!DOCTYPE html>
<html>
<head>
    <title>Вгадайте число</title>
    <style>
        .correct {
            color: red;
            font-size: 24px;
        }
    </style>
</head>
<body>

<h1>Вгадайте число</h1>

<form method="post" action="">
    <label for="guess">Введіть число:</label>
    <input type="text" id="guess" name="guess">
    <br><br>
    <input type="submit" value="Перевірити">
</form>

<br>

<?php
$secretNumber = 42;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guess = $_POST["guess"];

    if ($guess == $secretNumber) {
        echo "<p class='correct'>ПРАВИЛЬНО!</p>";
    } elseif ($guess < $secretNumber) {
        echo "<p>Загадане число більше $guess</p>";
        echo "<p>Спробуйте ще раз!</p>";
    } else {
        echo "<p>Загадане число менше $guess</p>";
        echo "<p>Спробуйте ще раз!</p>";
    }
}
?>

</body>
</html>
