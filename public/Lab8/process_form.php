<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lastName = $_POST["lastName"];
        $firstName = $_POST["firstName"];
        $age = $_POST["age"];
        $email = $_POST["email"];

        if (!empty($lastName) && !empty($firstName) && !empty($age) && !empty($email)) {
            include 'user_table.php';

            $user = new User($lastName, $firstName, $age, $email);

            echo "<h2>Інформація про користувача:</h2>";
            echo $user->getInfo();
        } else {
            echo "<h2>Будь ласка, заповніть всі поля форми.</h2>";
        }
    }
?>
