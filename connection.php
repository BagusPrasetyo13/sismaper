<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "sismaper";

$conn = new mysqli($host, $username, $password, $db_name);

// CREATE CONNECTION
if ($conn->connect_error) {
  die("connection error : " . $conn->connect_error);
}

// echo "connect success";
