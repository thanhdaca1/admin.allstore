<?php

include_once 'Config/connect.php';

function getAllProducts()
{
  $conn = connect();
  $sql = "SELECT * FROM products";

  $stmt = $conn->prepare($sql);
  $stmt->execute();
  // Kết quả trả về
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  return $stmt->fetchAll();
}

function getProduct($id)
{
  $conn = connect();
  $sql = "SELECT * FROM products where id = $id";

  $stmt = $conn->prepare($sql);
  $stmt->execute();
  // Kết quả trả về
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  return $stmt->fetch();
}

function storeProduct($name, $price, $category_id, $quantity, $image, $description, $user_id)
{
  $conn = connect();
  $sql =
    "INSERT INTO products (name, price, category_id, quantity, image, description, user_id)
      VALUES ('$name', '$price', '$category_id', '$quantity', '$image', '$description', '$user_id')";
  $conn->exec($sql);
}

function updateProduct($id, $name, $price, $category_id, $quantity, $image, $description)
{
  $conn = connect();
  $sql =
    "UPDATE products SET
      name = '$name', price = '$price', category_id = '$category_id',
      quantity = '$quantity', image = '$image', description = '$description'
        WHERE id = $id";
  $conn->exec($sql);
}

function dropProduct($id)
{
  $conn = connect();
  $sql = "DELETE FROM products WHERE id = $id";
  $conn->exec($sql);
}
