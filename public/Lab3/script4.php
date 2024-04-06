<!DOCTYPE html>
<html>
<head>
    <title>Об'єднання масивів</title>
</head>
<body>

<h1>Об'єднання масивів</h1>

<?php

    $squares = [];
    for ($i = 10; $i <= 20; $i++) {
        $squares[] = $i * $i;
    }

    $cubes = [];
    for ($j = 1; $j <= 10; $j++) {
        $cubes[] = $j ** 3;
    }

    $merged_array = array_merge($squares, $cubes);

    echo "Об'єднаний масив: <br>";
    foreach ($merged_array as $key => $value) {
        echo "Елемент $key: $value <br>";
    }

?>




</body>
</html>