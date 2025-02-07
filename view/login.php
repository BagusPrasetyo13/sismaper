<?php
session_start();
require_once '../controller/LoginController.php';

$error_message = '';

if (isset($_SESSION['status']) && $_SESSION['status'] == 'login') {
  header('location: index.php');
  exit;
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $login = new LoginController();
  $isAuthenticated = $login->authenticated($username, $password);

  if ($isAuthenticated) {
    header("location: index.php");
    exit;
  } else {
    $error_message = $login->getErrorMsg();
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/css/style.css">
  <title>Sistem Manajemen Perpustakaan</title>
</head>

<body>
  <section class="login-page">
    <div class="login-box">
      <div class="form-box">

        <div class="logo">
          <img src="../public/images/logo.png" alt="">
          <span>SISMAPER</span>
        </div>

        <form action="login.php" method="POST">

          <div class="text">
            <p>Welcome back,</p>
            <span>Please enter your details</span>
          </div>

          <?php if (!empty($error_message)): ?>
            <div class="error">
              <p><?= $error_message ?></p>
            </div>
          <?php endif; ?>

          <div class="username">
            <label for="username">Username : </label>
            <input type="text" name="username">
          </div>

          <div class="password">
            <label for="password">Password : </label>
            <input type="password" name="password">
          </div>

          <button type="submit" name="login" class="button">
            Login
          </button>

          <p>have'nt account yet? <a href="register.php">register</a></p>
        </form>

      </div>

      <div class="image">
        <img src="../public/images/login-img.jpg" alt="">
      </div>
    </div>
  </section>
</body>

</html>