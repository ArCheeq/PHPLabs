<!DOCTYPE html>
<html>
<head>
    <title>Масив довільних чисел</title>
</head>
<body>

<h1>Масив довільних чисел</h1>

<?php
    $numbers = [4, 2, 5, 3, 6];

    foreach ($numbers as $number) {
        echo "$number^2=" . ($number ** 2) . "<br>";
    }
?>


</body>
</html>