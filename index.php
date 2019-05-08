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
    <form action="/action.php" method="post">
        <label for="name">Введите ваше Имя</label><br>
        <input type="text" name="name"><br>
        <label for="email">Введите ваш Email</label><br>
        <input type="email" name="email"><br><br>
        <button type="submit">Отправить</button>
    </form>
    <?php
        if($_SESSION['name'] != "" || $_SESSION['enail'] != "") {
            echo 'Имя пользователя: ' . $_SESSION['name'] . '<br>';
            echo 'Email пользователя: ' . $_SESSION['email'] . '<br>';
        }

        if($_COOKIE['name'] != "" || $_COOKIE['enail'] != "") {
            echo 'Имя пользователя: ' . $_COOKIE['name'] . '<br>';
            echo 'Email пользователя: ' . $_COOKIE['email'] . '<br>';
        }
    ?>
</body>
</html>