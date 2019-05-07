<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/write.php" method="post">
        <textarea name="message" id="" cols="30" rows="10"></textarea><br>
        <button type="submit">Отправить</button>
    </form>
    <?php
        echo file_get_contents('text.txt') . '<br>';
    ?>
</body>
</html>