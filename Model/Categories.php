<?php

include_once 'Config/connect.php';

function getAllCategories()
{
  $conn = connect();
  $sql = "SELECT * FROM categories";

  $stmt = $conn->prepare($sql);
  $stmt->execute();
  // Kết quả trả về
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  return $stmt->fetchAll();
}

function getCategory($id)
{
  $conn = connect();
  $sql = "SELECT * FROM categories where id = $id";

  $stmt = $conn->prepare($sql);
  $stmt->execute();
  // Kết quả trả về
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  return $stmt->fetch();
}

function storeCategory($name, $description, $user_id)
{
  $conn = connect();
  $sql =
    "INSERT INTO categories (name, description, user_id)
      VALUES ('$name', '$description', '$user_id')";
  $conn->exec($sql);
}

function updateCategory($id, $name, $description)
{
  $conn = connect();
  $sql =
    "UPDATE categories SET
      name = '$name', description = '$description'
        WHERE id = $id";
  $conn->exec($sql);
}

function dropCategory($id)
{
  $conn = connect();
  $sql = "DELETE FROM categories WHERE id = $id";
  $conn->exec($sql);
}
