<!DOCTYPE html>
<html>
<head>
    <title>Таблиця множення</title>
    <style>
        tr:nth-child(even) {
            background-color: lightblue;
        }
        tr:nth-child(odd) {
            background-color: lightgreen;
        }
    </style>
</head>
<body>

<h2>Таблиця множення</h2>

<form method="post" action="">
    <label for="number">Введіть число:</label>
    <input type="number" id="number" name="number">
    <input type="submit" value="Показати таблицю множення">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$number x $i</td>";
        echo "<td>=</td>";
        echo "<td>" . ($number * $i) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>


</body>
</html>
