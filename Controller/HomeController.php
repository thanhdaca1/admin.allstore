<?php

if (!isset($_SESSION['user'])) {
  header('location: ' . url_login);
}

if (isset($_GET['action'])) {
  header('location: ' . url_home);
} else {
  $view = 'Home/index.php';
  include_once 'View/' . $view;
}
