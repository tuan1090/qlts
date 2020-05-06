<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Phần mềm quản lý hành chính - Hải Phát Land</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
  <link rel="stylesheet" href="dist/css/custom.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini text-sm">
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-dark-orange">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="images/logo.png" alt="PM Quản lý Hành Chính - Hải Phát Land" class="brand-image elevation-3 ml-0">
        <span class="brand-text text-white">HẢI PHÁT LAND</span>
      </a>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column text-sm" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                DASHBOARD
              </p>
            </a>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon nav-icon fas fa-building"></i>
              <p>
                Quản lý bộ phận
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý công ty</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="list-bo-phan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý phòng ban</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý chức danh</p>
                </a>
              </li>
            </ul>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item">
            <a href="list-goi-thau.php" class="nav-link">
              <i class="fas fa-book-open nav-icon"></i>
              <p>
                Quản lý gói thầu
              </p>
            </a>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fab fa-black-tie nav-icon"></i>
              <p>
                Quản lý nhà thầu
              </p>
            </a>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-signature"></i>
              <p>
                Quản lý hợp đồng
              </p>
            </a>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item">
            <a href="list-tai-san.php" class="nav-link">
              <i class="nav-icon fas fa-drafting-compass"></i>
              <p>
                Tài sản - công cụ - dụng cụ
              </p>
            </a>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-coins"></i>
              <p>
                Quản lý hạng mục đầu tư
              </p>
            </a>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
               Sửa chữa - bảo hành - bảo trì
              </p>
            </a>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
               Bàn giao tài sản
              </p>
            </a>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item has-treeview">
            <a href="list-chi-phi.php" class="nav-link">
              <i class="nav-icon fas fa-dollar-sign"></i>
              <p>
               Quản lý chi phí hàng tháng
               <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="list-chi-phi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tổng chi phí</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="list-chi-phi-van-hanh.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chi phí vận hành</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chi phí mua sắm tài sản mới</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chi phí sửa chữa tài sản</p>
                </a>
              </li>
            </ul>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-item has-treeview">
            <a href="list-chi-phi.php" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
               Báo cáo - thống kê
               <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="list-chi-phi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tổng chi phí</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="list-chi-phi-van-hanh.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chi phí vận hành</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chi phí mua sắm tài sản mới</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chi phí sửa chữa tài sản</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chi phí xây dựng văn phòng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chi phí theo đầu nhân sự</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Chi phí theo m2 sàn</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>