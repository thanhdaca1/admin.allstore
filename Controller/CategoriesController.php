<?php

if (!isset($_SESSION['user'])) {
  header('location: ' . url_login);
}

if (isset($_GET['action'])) {
  $action = $_GET['action'];
  $view = '';
  switch ($action) {
    case 'them-moi':
      addnew();
      $view = 'Categories/addnew.php';
      break;
    case 'chinh-sua':
      $data = edit();
      $view = 'Categories/edit.php';
      break;
    case 'loai-bo':
      delete();
      header('location: ' . url_categories);
      break;
    default:
      //  Chuyển hướng về trang chính
      header('location: ' . url_categories);
      break;
  }
  include_once 'View/' . $view;
} else {
  //  Trang chủ của Danh mục
  $data = getAll();
  $view = 'Categories/index.php';
  include_once 'View/' . $view;
}

//  Danh sách danh mục
function getAll()
{
  include_once 'Model/Categories.php';
  return getAllCategories();
}

//  Thêm mới
function addnew()
{
  include_once 'Model/Categories.php';
  if (isset($_POST['submit'])) {
    storeCategory(
      $_POST['name'],
      $_POST['description'],
      $_SESSION['user']['id']
    );
    header('location: ' . url_categories);
  } else {
    return;
  }
}

//  Chỉnh sửa
function edit()
{
  include_once 'Model/Categories.php';
  if (isset($_POST['submit'])) {
    updateCategory(
      $_POST['id'],
      $_POST['name'],
      $_POST['description']
    );
    header('location: ' . url_categories);
  }

  if (isset($_GET['id'])) {
    return getCategory($_GET['id']);
  } else {
    return;
  }
}

//  Xoá bỏ
function delete()
{
  include_once 'Model/Categories.php';

  if (isset($_GET['id'])) {
    dropCategory($_GET['id']);
  } else {
    return;
  }
}
