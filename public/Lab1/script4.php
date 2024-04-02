<!DOCTYPE html>
<html>
<head>
    <title>Інформація про розробника</title>
</head>
<body>

<?php
$name = "Чаплін Артем";
$email = "artemchaplin1@gmail.com";
$description = "Я веб-розробник самоучка, розробляю spa застосунки на React.js та Next.js";
$github = "ArCheeq";

echo "<h1>Інформація про розробника</h1>";
echo "<p><strong>Ім'я та Прізвище:</strong> $name</p>";
echo "<p><strong>Email:</strong> <a href='mailto:$email'>$email</a></p>";
echo "<p><strong>Опис:</strong> $description</p>";
echo "<p><strong>GitHub:</strong> <a target='_blank' href='https://github.com/ArCheeq'>$github</a></p>";
?>

</body>
</html>