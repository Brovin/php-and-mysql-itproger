<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Blog</title>
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/main.css">
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
</head>
<body>
  <?php require 'blocks/header.php'; ?>
  <main class="container mt-5">
  <div class="row">
    <div class="col-md-8 mb-3">
      Основная часть сайта
    </div>
    <?php require 'blocks/aside.php'; ?>
  </div>
  </main>
  <?php require 'blocks/footer.php'; ?>
</body>
</html>