<?php require "header.php"; ?>
	<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <span class="nav-link text-uppercase d-inline-block">DANH SÁCH PHÒNG BAN CHỨC NĂNG</span>
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
                <h3 class="card-title">Danh sách phòng ban chức năng</h3>
                <div class="card-tools">
                    <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add_phong_ban">
                      <i class="fas fa-file-import pr-2"></i> Thêm phòng ban mới
                    </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                Danh sách bộ phận ở dưới này
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="modal_add_phong_ban" tabindex="-1" role="dialog" aria-labelledby="modal_add_phong_ban" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal_add_phong_ban">Thêm phòng ban mới</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên văn phòng</label>
              <input type="text" class="form-control" placeholder="Tên văn phòng">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Loại</label>
              <select class="form-control">
                <option>Chi nhánh</option>
                <option>Khối</option>
                <option>Phòng ban</option>
                <option>Khu vực - VPBH</option>
                <option>Cty liên kết</option>
              </select>
            </div>
            <label for="exampleInputEmail1">Diện tích mặt bằng</label>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Diện tích">
              <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">m2</span>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Tạo mới</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng lại</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require "footer.php"; ?>

</body>
</html>