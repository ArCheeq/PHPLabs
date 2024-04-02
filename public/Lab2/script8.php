<!DOCTYPE html>
<html>
<head>
    <title>Таблиця відношень числа 10 до діапазону</title>
</head>
<body>

<h2>Таблиця відношень числа 10 до діапазону</h2>

<form method="post" action="">
    <label for="number1">Введіть перше число діапазону:</label>
    <input type="number" id="number1" name="number1">
    <br><br>
    <label for="number2">Введіть друге число діапазону:</label>
    <input type="number" id="number2" name="number2">
    <br><br>
    <input type="submit" value="Показати таблицю відношень">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start = min($_POST["number1"], $_POST["number2"]);
    $end = max($_POST["number1"], $_POST["number2"]);
    
    echo "<table border='1'>";
    for ($i = $start; $i <= $end; $i++) {
        if ($i == 0) {
            echo "<p>Ділення на 0 відбулося. Цикл припинено.</p>";
            break;
        }
        echo "<tr>";
        echo "<td>10 / $i</td>";
        echo "<td>=</td>";
        echo "<td>" . (10 / $i) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

</body>
</html>
