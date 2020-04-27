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
                  <label for="exampleInputEmail1">Tên file</label>
                  <input type="text" class="form-control form-control-sm" placeholder="Tên văn phòng">
                </div>
                <div class="form-row">
                  <div class="col">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Chọn công ty</label>
                      <select class="form-control form-control-sm">
                        <option>Hải Phát Land</option>  
                      </select>
                    </div>
                  </div>
                  <div class="col">  
                    <div class="form-group">
                      <label for="exampleInputEmail1">Chi phí tháng</label>
                      <select class="form-control form-control-sm">
                        <option>Tháng 1</option>  
                        <option>Tháng 2</option>
                        <option>Tháng 3</option>
                        <option>Tháng 4</option>
                        <option>Tháng 5</option>
                        <option>Tháng 6</option>
                        <option>Tháng 7</option>
                        <option>Tháng 8</option>
                        <option>Tháng 9</option>
                        <option>Tháng 10</option>
                        <option>Tháng 11</option>
                        <option>Tháng 12</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Ghi chú</label>
                  <textarea class="form-control form-control-sm" placeholder="Ghi chú" cols="10"></textarea>
                </div>
                <label for="exampleInputEmail1">File Import</label>
                <input type="file" class="d-block mt-2"/>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-file-import pr-2"></i> Import chi phí
                </button>
                <a href="list-chi-phi-van-hanh.php">
                  <button type="button" class="btn btn-danger btn-sm">
                    Hủy
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách file Import</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Tên File</th>
                      <th>Công ty</th>
                      <th>Thời gian</th>
                      <th>Ghi chú</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>File Import 1</td>
                      <td>Hải Phát Land</td>
                      <td>01/2020</td>
                      <td></td>
                      <td>
                        <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13290/edit" class="">
                          <i class="fas fa-trash text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>File Import 2</td>
                      <td>Hải Phát Land</td>
                      <td>02/2020</td>
                      <td></td>
                      <td>
                        <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13290/edit" class="">
                          <i class="fas fa-trash text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>File Import 3</td>
                      <td>Hải Phát Land</td>
                      <td>03/2020</td>
                      <td></td>
                      <td>
                        <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13290/edit" class="">
                          <i class="fas fa-trash text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>File Import 4</td>
                      <td>Hải Phát Land</td>
                      <td>04/2020</td>
                      <td></td>
                      <td>
                        <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13290/edit" class="">
                          <i class="fas fa-trash text-danger"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
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