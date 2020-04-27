<?php require "header.php"; ?>
	<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <span class="nav-link text-uppercase d-inline-block">IMPORT GÓI THẦU</span>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
          <i class="fas fa-user-circle pr-2"></i>
          <span class="d-none d-md-inline-block">Xin chào ! Tuan Nguyen</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
          <div class="avatar" style="margin-top: 1rem;text-align: center;">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" style="max-width: 60px;">
          </div>
          <span class="dropdown-item dropdown-header">Xin chào ! Tuân Nguyễn</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Thông tin tài khoản
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-lock mr-2"></i> Đổi mật khẩu
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Đăng xuất
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
	<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-4">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Import gói thầu</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tên gói thầu</label>
                  <input type="text" class="form-control form-control-sm" placeholder="Tên gói thầu">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Văn phòng</label>
                  <select class="form-control form-control-sm">
                    <option>Văn phòng 1</option>
                    <option>Văn phòng 2</option>
                    <option>Văn phòng 3</option>
                    <option>Văn phòng 4</option>
                    <option>Văn phòng 5</option>
                    <option>Văn phòng 6</option>
                    <option>Văn phòng 7</option>
                    <option>Văn phòng 8</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Mô tả</label>
                  <textarea class="form-control form-control-sm" placeholder="Tên gói thầu" rows="10"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">File import</label>
                  <input type="file" class="d-block mt-2">
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-file-import pr-2"></i> Thêm gói thầu mới
                </button>
                <a href="list-goi-thau.php">
                  <button type="button" class="btn btn-danger btn-sm">
                    Hủy
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php require "footer.php"; ?>

</body>
</html>