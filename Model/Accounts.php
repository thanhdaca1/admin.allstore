<?php

include_once 'Config/connect.php';

function getAllAccounts()
{
  $conn = connect();
  $sql = "SELECT * FROM accounts";

  $stmt = $conn->prepare($sql);
  $stmt->execute();
  // Kết quả trả về
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  return $stmt->fetchAll();
}

function doLogin($email, $password)
{
  $conn = connect();
  $sql = "SELECT * FROM accounts WHERE email = '$email' AND password = '$password'";

  $stmt = $conn->prepare($sql);
  $stmt->execute();
  // Kết quả trả về
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  return $stmt->fetch();
}

function doSignup($name, $email, $phone, $password)
{
  $conn = connect();
  $sql =
    "INSERT INTO accounts (name, email, phone, password)
      VALUES ('$name', '$email', '$phone', '$password')";
  $conn->exec($sql);
}
