<!DOCTYPE html>
<html>
<head>
    <title>Таблиця множення</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>

<h1>Таблиця множення</h1>

<table>
    <thead>
        <tr>
            <th>×</th>
            <?php
            // Виведення заголовків рядка (числа від 1 до 10)
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        // Виведення тіла таблиці множення
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; // Заголовок колонки
            for ($j = 1; $j <= 10; $j++) {
                echo "<td>" . ($i * $j) . "</td>"; // Комірка з результатом множення
            }
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>