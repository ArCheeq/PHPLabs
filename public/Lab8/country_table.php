<?php
    class Country {
        public $name;
        public $capital;
        public $population;

        public function __construct($name, $capital, $population) {
            $this->name = $name;
            $this->capital = $capital;
            $this->population = $population;
        }
    }

    $countries = array(
        new Country("Україна", "Київ", 2804000),
        new Country("Франція", "Париж", 2141000),
        new Country("США", "Вашингтон", 705749),
        new Country("Німеччина", "Берлін", 3562000),
        new Country("Китай", "Пекін", 21542000)
    );

    echo "<table border='1'>";
    foreach ($countries as $country) {
        echo "<tr>";
        echo "<td>Назва країни:</td><td>{$country->name}</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Столиця:</td><td>{$country->capital}</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Населення у столиці:</td><td>{$country->population}</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
