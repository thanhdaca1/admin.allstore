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
      include_once 'Model/Categories.php';
      $categories = getAllCategories();
      $view = 'Products/addnew.php';
      break;
    case 'chinh-sua':
      $data = edit();
      include_once 'Model/Categories.php';
      $categories = getAllCategories();
      $view = 'Products/edit.php';
      break;
    case 'loai-bo':
      delete();
      header('location: ' . url_products);
      break;
    default:
      //  Chuyển hướng về trang chính
      header('location: ' . url_products);
      break;
  }
  include_once 'View/' . $view;
} else {
  $data = getAll();
  $view = 'Products/index.php';
  include_once 'View/' . $view;
}

//  Danh sách sản phẩm
function getAll()
{
  include_once 'Model/Products.php';
  return getAllProducts();
}

//  Thêm mới
function addnew()
{
  include_once 'Model/Products.php';
  if (isset($_POST['submit'])) {

    // Lưu trữ hình ảnh
    $target_dir = upload_product;
    $target_name = basename($_FILES["image"]["name"]);
    $target_file = $target_dir . $target_name;
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    storeProduct(
      $_POST['name'],
      $_POST['price'],
      $_POST['category_id'],
      $_POST['quantity'],
      $target_name,
      $_POST['description'],
      $_SESSION['user']['id']
    );
    header('location: ' . url_products);
  } else {
    return;
  }
}

//  Chỉnh sửa
function edit()
{
  include_once 'Model/Products.php';

  if (isset($_POST['submit'])) {

    $image = $_POST['old_image'];
    if ($_FILES["image"]["full_path"] !== "") {
      // Lưu trữ hình ảnh
      $target_dir = upload_product;
      $target_name = basename($_FILES["image"]["name"]);
      $target_file = $target_dir . $target_name;
      move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
      $image = $target_name;
    }

    updateProduct(
      $_POST['id'],
      $_POST['name'],
      $_POST['price'],
      $_POST['category_id'],
      $_POST['quantity'],
      $image,
      $_POST['description']
    );
    header('location: ' . url_products);
  }

  if (isset($_GET['id'])) {
    return getProduct($_GET['id']);
  } else {
    return;
  }
}

//  Xoá bỏ
function delete()
{
  include_once 'Model/Products.php';

  if (isset($_GET['id'])) {
    dropProduct($_GET['id']);
  } else {
    return;
  }
}
