<?php
  session_start();

  if ($_SESSION['user']) {
      header('Location: profile.php');
  }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Авторизация и решистрация</title>
    <link rel="stylesheet" href="/assets/css/main.css">
  </head>
  <body>

    <form>
      <label>Логин</label>
      <input type="text" name="login" placeholder="Введите логин">
      <label>Пароль</label>
      <input type="password" name="password" placeholder="Введите пароль">
      <button class="login-btn" type="submit">Войти</button>
      <p>У вас нет аккаунта? - <a href="/register.php">Зарегестрируйтесь!</a></p>

      <p class="msg none"></p>

    </form>

    <script src="/assets/js/jquery3.6.0.min.js"></script>
    <script src="/assets/js/main.js"></script>

  </body>
</html>
