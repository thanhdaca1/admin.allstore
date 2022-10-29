<?php


if (isset($_GET['action'])) {
  $action = $_GET['action'];
  $view = '';
  switch ($action) {
    case 'dang-nhap':
      login();
      $view = 'Account/login.php';
      break;
    case 'dang-ky':
      signup();
      $view = 'Account/signup.php';
      break;
    case 'dang-xuat':
      logout();
      header('location: ' . url_login);
      break;
    default:
      //  Chuyển hướng về trang chính
      // header('location: ' . url_account);
      break;
  }
  include_once 'View/' . $view;
} else {
  if (!isset($_SESSION['user'])) {
    header('location: ' . url_login);
  }
  $data = getAll();
  $view = 'Account/index.php';
  include_once 'View/' . $view;
}

//  Danh sách tài khoản
function getAll()
{
  include_once 'Model/Accounts.php';
  return getAllAccounts();
}

//  Đăng nhập
function login()
{
  include_once 'Model/Accounts.php';
  if (isset($_POST['login'])) {
    $user = doLogin(
      $_POST['email'],
      $_POST['password']
    );
    if (is_array($user)) {
      $_SESSION['user'] = [
        'id' => $user['id'],
        'name' => $user['name'],
        'email' => $user['email'],
        'phone' => $user['phone']
      ];
      header('location: ' . url_home);
    } else {
      header('location: ' . url_login);
    }
  } else {
    return;
  }
}

//  Đăng ký
function signup()
{
  include_once 'Model/Accounts.php';

  if (isset($_POST['signup'])) {
    doSignup(
      $_POST['name'],
      $_POST['email'],
      $_POST['phone'],
      $_POST['password']
    );
    header('location: ' . url_login);
  } else {
    return;
  }
}

//  Xoá bỏ
function logout()
{
  include_once 'Model/Products.php';

  if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
  } else {
    return;
  }
}
