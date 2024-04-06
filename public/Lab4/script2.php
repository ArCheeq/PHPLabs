<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зчитування файлу</title>
</head>
<body>
<?php
    $file_path = "tags_description.txt";

    $file_content = file($file_path, FILE_IGNORE_NEW_LINES);

    $tag_count = 0;

    echo "<table border='1'>";
    echo "<tr><th>Тег</th><th>Опис</th></tr>";
    foreach ($file_content as $line) {
        if (strpos(trim($line), ',') !== false) {
            list($tag, $description) = explode(",", $line);
            echo "<tr><td>" . htmlspecialchars($tag) . "</td><td>" . htmlspecialchars($description) . "</td></tr>";
            $tag_count++;
        }
    }
    echo "</table>";
    echo "Всього у файлі описано тегів: $tag_count";
?>
</body>
</html>