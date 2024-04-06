<?php
    class User {
        public $lastName;
        public $firstName;
        public $age;
        public $email;

        public function __construct($lastName, $firstName, $age, $email) {
            $this->lastName = $lastName;
            $this->firstName = $firstName;
            $this->age = $age;
            $this->email = $email;
        }

        public function getInfo() {
            echo "Прізвище: {$this->lastName}, Ім'я: {$this->firstName}, Вік: {$this->age}, Email: {$this->email}";
        }
    }
    $user_artem = new User("Chaplin", "Artem", 21, "artem@gmail.com");
    $user_artem->getInfo();
?>