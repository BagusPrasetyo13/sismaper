<?php

class Database
{

  protected $conn;
  public function __construct()
  {
    $this->conn = new mysqli("localhost", "root", "", "sismaper");

    if ($this->conn->connect_error) {
      die('Connection Error!' . $this->conn->connect_error);
    }
  }

  public function getConnection()
  {
    return $this->conn;
  }
}
