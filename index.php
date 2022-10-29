<?php
//  Khởi chạy Session
session_start();
//  Hằng số toàn website
include_once 'Config/consts.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AllStore</title>
  <script src="Public/jquery/jquery_3.5.1.js"></script>
  <link rel="stylesheet" href="Public/bootstrap/css/bootstrap.min.css">
  <script src="Public/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="<?= url_home ?>">Quản trị - All Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= url_home ?>">Thống kê</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= url_products ?>">Sản phẩm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= url_categories ?>">Danh mục</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= url_account ?>">Tài khoản</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= url_posts ?>">Bài viết</a>
          </li>
        </ul>
        <?php
        if (isset($_SESSION['user']['name'])) {
          echo "
              <span class='navbar-text font-weight-bold'>
                " . $_SESSION['user']['name'] . "
              </span>
              <i class='navbar-text ml-3'>
                <a href='" . url_logout . "'>Đăng xuất</a>
              </i>
            ";
        }
        ?>
      </div>
    </div>
  </nav>

  <div class="container py-5">

    <!-- Xử lí thao tác người dùng -->
    <?php
    if (isset($_GET['page'])) {
      $page = $_GET['page'];
      $ctrl = '';
      switch ($page) {
        case 'trang-chu':
          $ctrl = 'HomeController.php';
          break;
        case 'tai-khoan':
          $ctrl = 'AccountController.php';
          break;
        case 'san-pham':
          $ctrl = 'ProductsController.php';
          break;
        case 'danh-muc':
          $ctrl = 'CategoriesController.php';
          break;
        case 'bai-viet':
          $ctrl = 'PostsController.php';
          break;
        default:
          //  Chuyển hướng về trang chủ
          header('location: ' . url_home);
          break;
      }
      include_once 'Controller/' . $ctrl;
    } else {
      header('location: ' . url_home);
    }
    ?>
  </div>

</body>

</html>