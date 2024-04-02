<!DOCTYPE html>
<html>
<head>
    <title>Перевірка числа на цілість</title>
</head>
<body>

<h1>Перевірка числа на цілість</h1>

<form method="post" action="">
    <label for="number">Число:</label>
    <input type="text" id="number" name="number">
    <br><br>
    <input type="submit" value="Перевірити, чи ціле число">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];

    if (ctype_digit($number)) {
        echo "Введено ціле число.";
    } else {
        echo "Введено не ціле число.";
    }
}
?>

</body>
</html>