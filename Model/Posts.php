<?php

include_once 'Config/connect.php';

function storePosts($title, $content, $user_id)
{
  $conn = connect();
  $sql =
    "INSERT INTO posts (title, content, user_id)
      VALUES ('$title', '$content', '$user_id')";
  $conn->exec($sql);
}

function updatePosts($id, $title, $content)
{
  $conn = connect();
  $sql =
    "UPDATE posts SET
      title = '$title', content = '$content'
        WHERE id = $id";
  $conn->exec($sql);
}

function getPost($id)
{
  $conn = connect();
  $sql = "SELECT * FROM posts WHERE id = $id";

  $stmt = $conn->prepare($sql);
  $stmt->execute();
  // Kết quả trả về
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  return $stmt->fetch();
}

function getAllPosts()
{
  $conn = connect();
  $sql = "SELECT * FROM posts";

  $stmt = $conn->prepare($sql);
  $stmt->execute();
  // Kết quả trả về
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  return $stmt->fetchAll();
}

function dropPost($id)
{
  $conn = connect();
  $sql = "DELETE FROM posts WHERE id = $id";
  $conn->exec($sql);
}