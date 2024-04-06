<?php
    class Calculator {
        public function add($a, $b) {
            return $a + $b;
        }

        public function subtract($a, $b) {
            return $a - $b;
        }

        public function multiply($a, $b) {
            return $a * $b;
        }

        public function divide($a, $b) {
            if ($b == 0) {
                return "Помилка: ділення на нуль!";
            } else {
                return $a / $b;
            }
        }

        public function modulo($a, $b) {
            if ($b == 0) {
                return "Помилка: ділення на нуль!";
            } else {
                return $a % $b;
            }
        }

        public function squareRoot($a) {
            if ($a < 0) {
                return "Помилка: від'ємне число!";
            } else {
                return sqrt($a);
            }
        }

        public function power($a, $b) {
            return pow($a, $b);
        }
    }

    $calculator = new Calculator();

    echo "Додавання: " . $calculator->add(5, 3) . "<br>";
    echo "Віднімання: " . $calculator->subtract(10, 4) . "<br>";
    echo "Множення: " . $calculator->multiply(7, 2) . "<br>";
    echo "Ділення: " . $calculator->divide(15, 3) . "<br>";
    echo "Ділення по модулю: " . $calculator->modulo(16, 5) . "<br>";
    echo "Корінь квадратний: " . $calculator->squareRoot(25) . "<br>";
    echo "Піднесення до степеня: " . $calculator->power(2, 3) . "<br>";

    class Dispatcher {
        private $calculator;

        public function __construct($calculator) {
            $this->calculator = $calculator;
        }

        public function display() {
            echo "<h2>Форма розрахунку</h2>";
            echo "<form action='' method='post'>";
            echo "Число 1: <input type='text' name='num1'><br>";
            echo "Число 2: <input type='text' name='num2'><br>";
            echo "<select name='operation'>
                    <option value='add'>Додавання</option>
                    <option value='subtract'>Віднімання</option>
                    <option value='multiply'>Множення</option>
                    <option value='divide'>Ділення</option>
                </select><br>";
            echo "<input type='submit' name='submit' value='Розрахувати'>";
            echo "</form>";
        }

        public function dispatch() {
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];

                if (is_numeric($num1) && is_numeric($num2)) {
                    switch ($operation) {
                        case 'add':
                            echo "Результат: " . $this->calculator->add($num1, $num2);
                            break;
                        case 'subtract':
                            echo "Результат: " . $this->calculator->subtract($num1, $num2);
                            break;
                        case 'multiply':
                            echo "Результат: " . $this->calculator->multiply($num1, $num2);
                            break;
                        case 'divide':
                            echo "Результат: " . $this->calculator->divide($num1, $num2);
                            break;
                        default:
                            echo "Неправильна операція!";
                            break;
                    }
                } else {
                    echo "Будь ласка, введіть числа!";
                }
            }
        }
    }

    $dispatcher = new Dispatcher($calculator);

    $dispatcher->display();
    $dispatcher->dispatch();
?>
