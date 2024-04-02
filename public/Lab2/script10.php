<!DOCTYPE html>
<html>
<head>
    <title>Кількість бактерій</title>
</head>
<body>

<h2>Кількість бактерій</h2>

<form method="post" action="">
    <label for="startBacteria">Початкова кількість бактерій:</label>
    <input type="number" id="startBacteria" name="startBacteria">
    <br><br>
    <label for="endBacteria">Кінцева кількість бактерій:</label>
    <input type="number" id="endBacteria" name="endBacteria">
    <br><br>
    <input type="submit" value="Вивести кількість бактерій">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $startBacteria = $_POST["startBacteria"];
    $endBacteria = $_POST["endBacteria"];

    if ($startBacteria >= $endBacteria) {
        echo "Початкова кількість бактерій має бути меншою за кінцеву кількість бактерій.";
    } else {
        $currentBacteria = $startBacteria;
        $hour = 1;
        while ($currentBacteria < $endBacteria) {
            echo "Минуло $hour год. - маємо $currentBacteria<br>";
            $currentBacteria *= 2;
            $hour++;
        }
    }
}
?>
</body>
</html>