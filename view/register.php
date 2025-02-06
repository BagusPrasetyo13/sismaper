<?php
session_start();
require_once '../connection.php';

if (isset($_SESSION['status']) && $_SESSION['status'] == 'login') {
  header('location: index.php');
  exit;
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

        <form action="register.php" method="POST">

          <div class="text">
            <p>Welcome,</p>
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

          <div class="email">
            <label for="username">Email </label>
            <input type="text" name="email">
          </div>

          <div class="password">
            <label for="password">Password : </label>
            <input type="password" name="password">
          </div>

          <button type="submit" name="register" class="button">
            Register
          </button>
        </form>

      </div>

      <div class="image">
        <img src="../public/images/login-img.jpg" alt="">
      </div>
    </div>
  </section>
</body>

</html>