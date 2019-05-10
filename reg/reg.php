<?php
  $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
  $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
  $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
  $pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

  if(strlen($username) <= 3)
    exit();
  else if(strlen($email) <= 3)
    exit();
  else if(strlen($login) <= 3)
    exit();
  else if(strlen($pass) <= 3)
    exit();

  $hash = "Ff8f78F9Y9rh3g9GQ7";
  $pass = md5($pass . $hash);

  $user = 'root';
  $password = 'root';
  $db = 'testing';
  $host = 'localhost';

  $dsn = 'mysql:host='.$host.'; dbname='.$db;
  $pdo = new PDO($dsn, $user, $password);
  $sql = 'INSERT INTO users(name, email, login, pass) VALUES(?, ?, ?, ?)';
  $qwery = $pdo->prepare($sql);
  $qwery->execute([$username, $email, $login, $pass]);
?>