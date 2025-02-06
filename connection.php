<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "sismaper";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// CREATE CONNECTION
if ($conn->connect_error) {
  die("connection error : " . $conn->connect_error);
}

// echo "connect success";
