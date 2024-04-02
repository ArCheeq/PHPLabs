<!DOCTYPE html>
<html>
<head>
    <title>Вгадай число</title>
    <script type="text/javascript">
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>
<body>

<h2>Вгадай число</h2>

<form method="post" action="" onsubmit="showAlert('Не вгадали');">
    <label for="guess">Введіть число:</label>
    <input type="number" id="guess" name="guess">
    <input type="submit" value="Перевірити">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $secretNumber = 42;
    $guess = $_POST["guess"];

    if ($guess == $secretNumber) {
        echo "<script>showAlert('Вгадали!');</script>";
    } elseif ($guess < $secretNumber) {
        echo "<script>showAlert('Загадане число більше.');</script>";
    } else {
        echo "<script>showAlert('Загадане число менше.');</script>";
    }
}
?>

</body>
</html>