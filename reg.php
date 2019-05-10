<!DOCTYPE html>
<html lang="ru">
<head>
  <?php 
    $website_title = 'Регистрация';
    require 'blocks/head.php'
  ?>
</head>
<body>
  <?php require 'blocks/header.php'; ?>
  <main class="container mt-5">
  <div class="row">
    <div class="col-md-8 mb-3">
      <h4>Форма регистрации</h4>
      <form action="" method="post">
        <label for="username">Ваше имя</label>
        <input type="text" name="username" id="username" class="form-control">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">
        <label for="login">Логин</label>
        <input type="text" name="login" id="login" class="form-control">
        <label for="pass">Пароль</label>
        <input type="password" name="pass" id="pass" class="form-control">
        <button type="submit" id="reg_user" class="btn btn-success mt-5">Регистрация</button>
      </form>
    </div>
    <?php require 'blocks/aside.php'; ?>
  </div>
  </main>
  <?php require 'blocks/footer.php'; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js">
  
  </script>
  <script>
    $('#reg_user').click(function() {
      var name = $('#username').val();
      var email = $('#email').val();
      var login = $('#login').val();
      var pass = $('#pass').val();

      $.ajax({
        url: 'reg/reg.php',
        type: 'POST',
        cache: false,
        data: {'username' : name, 'email' : email, 'login' : login, 'pass' : pass},
        dataType: 'html'
      });
    });
  </script>
</body>
</html>