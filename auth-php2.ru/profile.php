<?php
  session_start();

  if (!$_SESSION['user']) {
      header('Location: /');
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
      <img src="<?= $_SESSION['user']['avatar'] ?>" width="100px" alt="">
      <h2><?= $_SESSION['user']['full_name'] ?></h2>
      <a href="#"><?= $_SESSION['user']['email'] ?></a>
      <a href="/vendor/logout.php" class="logout">Выйти из профиля</a>
    </form>

  </body>
</html>
