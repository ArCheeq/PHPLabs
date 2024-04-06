<!DOCTYPE html>
<html>
<head>
    <title>Таблиця Країн</title>
</head>
<body>

<h1>Таблиця Країн</h1>

<?php

    $countries = array(
        "Україна" => array("Населення" => 44000000, "Столиця" => "Київ"),
        "Сполучені Штати Америки" => array("Населення" => 331000000, "Столиця" => "Вашингтон, округ Колумбія"),
        "Китай" => array("Населення" => 1439000000, "Столиця" => "Пекін"),
    );

    echo "<table border='1'>";
    foreach ($countries as $country => $info) {
        echo "<tr><td>$country</td><td>" . $info['Населення'] . ", " . $info['Столиця'] . "</td></tr>";
    }
    echo "</table>";

    echo "<br>";

    echo "<table border='1'>";

    echo "<tr>";
    foreach ($countries as $country => $info) {
        echo "<td>$country</td>";
    }
    echo "</tr>";

    echo "<tr>";
    foreach ($countries as $country => $info) {
        echo "<td>" . $info['Населення'] . ", " . $info['Столиця'] . "</td>";
    }
    
    echo "</tr>";
    echo "</table>";

?>



</body>
</html>