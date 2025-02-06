<?php
session_start();
require_once '../connection.php';

if (!isset($_SESSION['status']) || $_SESSION['status'] != 'login') {
  header("location: login.php");
  exit;
}

if (isset($_POST['logout'])) {
  session_destroy();
  header("location: login.php");
  exit;
}

?>


<form action="index.php" method="POST">

  <button name="logout" type="submit">
    LOGOUT
  </button>

</form>