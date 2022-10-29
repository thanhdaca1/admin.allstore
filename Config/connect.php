<?php

function connect()
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "allstore";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
    echo "Database kết nối thành công!";
  } catch (PDOException $e) {
    echo "Database kết nối thất bạt: " . $e->getMessage();
  }
}
