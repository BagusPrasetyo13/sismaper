<?php
require_once '../connection.php';
class LoginController
{
  private $conn;
  private $error_message = '';

  public $username;
  private $password;

  public function __construct($conn)
  {
    $this->conn = $conn;
  }

  public function authenticated($username, $password)
  {
    // CEK JIKA INPUTAN DARI USER KOSONG
    if (empty($username) || empty($password)) {
      $this->error_message = "username atau password tidak boleh kosong";
      return false;
    }

    // PERSIAPKAN KONEKSI DAN QUERY KE DATABASE
    $stmt = $this->conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && $user['password'] == $password) {
      // Jangan panggil session_start() disini, biarkan di view login
      $_SESSION['status'] = 'login';
      // header("location:index.php");
      return true;
    } else {
      $this->error_message = 'username atau password salah';
      return false;
    }
  }

  public function getErrorMsg()
  {
    return $this->error_message;
  }
}
