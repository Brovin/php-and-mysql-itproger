<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        class User {
            public $name;
            private $surname;
            private $email;
            private $login;
            private $password;
        }

        $admin = new User();
        $admin->$name = "Dan";
        echo $admin->$name . '<br>';

        $redactor = new User();
        $redactor->$name = "Max";
        echo $redactor->$name;
    ?>
</body>
</html>