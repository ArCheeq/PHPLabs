<?php
    class MultiplicationTable {
        private $number;

        public function __construct($number) {
            $this->number = $number;
        }

        public function generateTable() {
            echo "<h2>Таблиця множення для числа {$this->number}</h2>";
            echo "<table border='1'>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                echo "<td>{$this->number}</td>";
                echo "<td>*</td>";
                echo "<td>{$i}</td>";
                echo "<td>=</td>";
                echo "<td>" . ($this->number * $i) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }

    $multiplier_5 = new MultiplicationTable(5);
    $multiplier_5->generateTable();

    $multiplier_7 = new MultiplicationTable(7);
    $multiplier_7->generateTable();

    $multiplier_9 = new MultiplicationTable(9);
    $multiplier_9->generateTable();
?>
