<!DOCTYPE html>
<html>
<head>
    <title>Перевірка числа на парність</title>
</head>
<body>

<h1>Перевірка числа на парність</h1>

<form method="post" action="">
    <label for="number">Число:</label>
    <input type="text" id="number" name="number">
    <br><br>
    <input type="submit" value="Перевірити число на парність">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = (int)$_POST["number"];

    if ($number % 2 == 0) {
        echo "$number є парним числом.";
    } else {
        echo "$number не є парним числом.";
    }
}
?>

</body>
</html>