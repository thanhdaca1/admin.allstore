<?php

if (!isset($_SESSION['user'])) {
  header('location: ' . url_login);
}

if (isset($_GET['action'])) {
  $action = $_GET['action'];
  $view = '';
  switch ($action) {
    case'them-moi':
        addnew();
        $view = 'Posts/addnew.php';
        break;
    case 'chinh-sua':
        $data = edit();
        $view = 'Posts/edit.php';
        break;
    case 'loai-bo':
        $data = delete();
        $view = 'Posts/delete.php';
        break;
    default:
      //  Chuyển hướng về trang chính
      header('location: ' . url_posts);
      break;
  }
  include_once 'View/' . $view;
} else {
  //  Trang chủ của Bài viết
  $data = getAll();
  $view = 'Posts/index.php';
  include_once 'View/' . $view;
}

//  Danh sách bài viết
function getAll()
{
  include_once 'Model/Posts.php';
  return getAllPosts();
}

// Thêm mới
function addnew()
{
    include_once 'Model/Posts.php';
    if (isset($_POST['submit'])) {
        storePosts(
            $_POST['title'],
            $_POST['content'],
            $_SESSION['user']['id']
        );
        header('location: ' . url_posts);
    } else {
        return;
    }
}

// Chỉnh sửa
function edit()
{
    include_once 'Model/Posts.php';
    if (isset($_POST['submit'])) {
        updatePosts(
            $_POST['id'],
            $_POST['title'],
            $_POST['content']
        );
        header('location: ' . url_posts);
    }

    if (isset($_GET['id'])) {
        return getPost($_GET['id']);
    } else{
        return;
    }
}

// Xóa bỏ
function delete()
{
    include_once 'Model/Posts.php';
    if (isset($_POST['submit'])) {
        dropPost($_POST['id']);
        header('location: ' . url_posts);
    }

    if (isset($_GET['id'])) {
        return getPost($_GET['id']);
    } else{
        return;
    }
}