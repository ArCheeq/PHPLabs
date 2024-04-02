<!DOCTYPE html>
<html>
<head>
    <title>Таблиця кольорів HTML</title>
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

<?php
$html_colors = array(
    "#FF0000" => "Червоний",
    "#00FF00" => "Зелений",
    "#0000FF" => "Синій",
    "#FFFF00" => "Жовтий",
    "#FF00FF" => "Фіолетовий",
    "#00FFFF" => "Блакитний",
    "#000000" => "Чорний",
    "#FFFFFF" => "Білий"
);
?>

<h1>Таблиця кольорів HTML</h1>

<table>
    <thead>
        <tr>
            <th>Колір</th>
            <th>Назва</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($html_colors as $color => $name) {
            echo "<tr>";
            echo "<td style='background-color: $color'></td>";
            echo "<td>$name</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>