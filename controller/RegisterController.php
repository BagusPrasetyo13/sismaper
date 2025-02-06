<?php

require_once '../connection.php';

class Register
{
  public $username, $email;
  private $password, $conn;

  private $error_message = '';

  public function __construct($conn)
  {
    return $this->conn;
  }

  public function register($username, $email, $password)
  {
    if (isset($_POST['register'])) {
      if (empty($username || $email || $password)) {
        $this->error_message = 'tidak boleh ada field yang kosong';
        return false;
      }
    }
  }

  public function getErrorMsg()
  {
    return $this->error_message;
  }
}
