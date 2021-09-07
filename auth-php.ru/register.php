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

    <form action="/vendor/singup.php" method="post" enctype="multipart/form-data">
      <label>Имя</label>
      <input type="text" name="full_name" placeholder="Введите имя">
      <label>Логин</label>
      <input type="text" name="login" placeholder="Введите логин">
      <label>Почта</label>
      <input type="email" name="email" placeholder="Введите почту">
      <label>Изображение профиля</label>
      <input type="file" name="avatar">
      <label>Пароль</label>
      <input type="password" name="password" placeholder="Введите пароль">
      <label>Подтвертите пароль</label>
      <input type="password" name="password_confirm" placeholder="Подтвертите пароль">
      <button type="submit">Зарегистрироваться</button>
      <p>У вас есть аккаунт? - <a href="/index.php">Авторизуйтесь!</a></p>

      <?php
        if ($_SESSION['message']) {
          echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
      ?>

    </form>

  </body>
</html>
