<?php
session_start();

require_once '../controller/AuthController.php';

if (!isset($_SESSION['status']) || $_SESSION['status'] != 'login') {
  header("location: login.php");
  exit;
}

if (isset($_POST['logout'])) {
  AuthController::logout();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../public/css/style.css">
  <title>SISMAPER - Admin Page</title>
</head>

<body>
  <div class="dashboard-container">
    <!-- SIDEBAR START -->
    <aside id="sidebar">
      <div class="sidebar-widget">

        <div class="sidebar-logo">
          <a href="#">SISMAPER</a>
        </div>

        <button class="toggle-btn" type="button">
          <i id="icon" class='bx bxs-chevrons-left'></i>
        </button>

      </div>

      <!-- SIDEBAR MENU -->
      <ul class="sidebar-navigation">
        <li class="sidebar-item">
          <a href="" class="sidebar-link">
            <i class='bx bxs-dashboard'></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="" class="sidebar-link">
            <i class='bx bx-book-open'></i>
            <span>Data Buku</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a href="" class="sidebar-link">
            <i class='bx bx-group'></i>
            <span>Data Peminjam</span>
          </a>
        </li>
      </ul>
      <!-- SIDEBAR MENU END -->
    </aside>
    <!-- SIDEBAR END -->

    <!-- MAIN DASHBOARD SECTION -->
    <div class="main">
      <nav>

        <form action="" class="search">
          <div class="input-group">
            <input type="text" name="search" id="" placeholder="Search">
            <button>
              <i class='bx bx-search-alt'></i>
            </button>
          </div>
        </form>

        <div class="nav-content">
          <ul class="nav-account">
            <li class="user-link">
              <a href="">
                <img src="../public/images/account.png" class="avatar" alt="">
              </a>
              <div class="user-link-dropdown">
                <a href="#" class="user-dropdown">
                  <i class='bx bx-info-circle'></i>
                  <span>Information</span>
                </a>
                <a href="#" class="user-dropdown">
                  <i class='bx bx-info-circle'></i>
                  <span>Settings</span>
                </a>
                <div class="divider"></div>
                <form action="index.php" method="POST" class="logout">
                  <button type="submit" name="logout" class="user-dropdown">
                    <i class='bx bx-log-out-circle'></i>
                    <span>Logout</span>
                  </button>
                </form>
              </div>
            </li>
          </ul>
        </div>

      </nav>

      <div class="content">
        <h2>Admin Dashboard</h2>

        <div class="dashboard-content">
          <div class="main-cards">
            <div class="card">
              <div class="card-content">
                <h6 class="title">Members</h6>
                <h6 class="amount">Rp. 700000</h6>
              </div>
            </div>

            <div class="card">
              <div class="card-content">
                <h6 class="title">Members</h6>
                <h6 class="amount">Rp. 700000</h6>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- MAIN DASHBOARD SECTION END -->
  </div>

  <script src="../public/js/script.js"></script>
</body>

</html>