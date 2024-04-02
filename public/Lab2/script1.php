<!DOCTYPE html>
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>

<h1>Калькулятор</h1>

<form method="post" action="">
    <label for="num1">Число 1:</label>
    <input type="text" id="num1" name="num1">
    <br><br>
    <label for="num2">Число 2:</label>
    <input type="text" id="num2" name="num2">
    <br><br>
    <input type="submit" value="Вивести дії">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    echo "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
    echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
    echo "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
    echo "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
    echo "$num1 % $num2 = " . ($num1 % $num2) . "<br>";
}
?>

</body>
</html>