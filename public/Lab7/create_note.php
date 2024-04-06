<!DOCTYPE html>
<html>
<head>
    <title>Створення нової замітки</title>
</head>
<body>
    <h2>Створення нової замітки</h2>
    <form action="create_note.php" method="post">
        Заголовок: <input type="text" name="title"><br>
        Вміст: <textarea name="article"></textarea><br>
        <input type="submit" value="Створити замітку">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = "db";
            $username = "db_user";
            $password = "db_user_pass";
            $dbname = "app_db";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Помилка з'єднання: " . $conn->connect_error);
            }

            $title = $_POST['title'];
            $article = $_POST['article'];

            $sql = "INSERT INTO Notes (created, title, article) VALUES (NOW(), '$title', '$article')";

            if ($conn->query($sql) === TRUE) {
                echo "Замітка успішно створена";
            } else {
                echo "Помилка: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    ?>
</body>
</html>
