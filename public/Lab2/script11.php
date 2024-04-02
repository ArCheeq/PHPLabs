<?php
function multiplication_table($number) {
    for ($i = 1; $i <= 10; $i++) {
        echo "$number * $i = " . ($number * $i) . "<br>";
    }
}

for ($j = 2; $j <= 9; $j++) {
    echo "<h3>Таблиця множення для числа $j:</h3>";
    multiplication_table($j);
}
?>