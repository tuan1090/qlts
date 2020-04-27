<?php require "header.php"; ?>
	<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <span class="nav-link text-uppercase d-inline-block text-uppercase">danh sách CHI PHÍ vận hành hàng tháng</span>
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
        <div class="row gutter-2 gutter-lg-3 mb-2">
          <div class="col-lg-3">
              <div class="form-group m-form__group">
                  <label for="name">
                      Chọn công ty
                  </label>
                  <select class="form-control form-control-sm m-input">
                    <option>Tất cả đơn vị</option>
                    <option>Hải Phát Land</option>
                  </select>
              </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group m-form__group">
                <label for="name">
                    Chọn đơn vị
                </label>
                <select class="form-control form-control-sm m-input">
                  <option>Tất cả đơn vị</option>
                  <option>Quảng Ninh</option>
                  <option>Hải Phòng</option>
                </select>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group m-form__group">
              <label for="name">
                  Từ tháng
              </label>
              <select class="form-control form-control-sm m-input">
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
          <div class="col-lg-3">
            <div class="form-group m-form__group">
              <label for="name">
                  Đến tháng
              </label>
              <select class="form-control form-control-sm m-input">
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
        <div class="button mb-4">
            <a href="#">  
              <button type="button" class="btn btn-warning mr-2" style="padding-left: 5rem;padding-right: 5rem">
                <i class="fas fa-search pr-2"></i> TRUY VẤN DỮ LIỆU
              </button>
            </a>
            <a href="import-chi-phi-van-hanh.php">
              <button type="submit" class="btn btn-primary btn-sm ml-2">
                <i class="fas fa-file-import pr-2"></i> Import chi phí vận hành
              </button>
            </a>
        </div>
      	<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách chi phí hàng tháng</h3>
                <div class="card-tools">
                    <button type="submit" class="btn btn-danger btn-sm ml-2" data-toggle="modal" data-target="#modal_add_phong_ban">
                      <i class="fas fa-file-import pr-2"></i> In báo cáo
                    </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <!-- BAR CHART -->
                    <div class="card card-success">
                      <div class="card-header">
                        <h3 class="card-title">Biều đồ chi phí vận hành từ tháng .... đến ..... </h3>

                        <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="chart">
                          <canvas id="chart_chi_phi_van_hanh" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>

                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">DANH SÁCH CHI PHÍ HÀNG THÁNG</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                          <thead>
                            <tr>
                              <th>STT</th>
                              <th>Đơn vị</th>
                              <th>Điện</th>
                              <th>Nước</th>
                              <th>Văn phòng phẩm</th>
                              <th>Thuê mặt bằng</th>
                              <th>Chi phí khác</th>
                              <th>Tổng</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Quảng Ninh</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>500.000.000</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Quảng Ninh</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>500.000.000</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Quảng Ninh</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>500.000.000</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Quảng Ninh</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>500.000.000</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Quảng Ninh</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>500.000.000</td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>Quảng Ninh</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>500.000.000</td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>Quảng Ninh</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>500.000.000</td>
                            </tr>
                            <tr>
                              <td>8</td>
                              <td>Quảng Ninh</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>500.000.000</td>
                            </tr>
                            <tr>
                              <td>9</td>
                              <td>Quảng Ninh</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>500.000.000</td>
                            </tr>
                            <tr>
                              <td>10</td>
                              <td>Quảng Ninh</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>500.000.000</td>
                            </tr>
                            <tr>
                              <td>11</td>
                              <td>Quảng Ninh</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>500.000.000</td>
                            </tr>
                            <tr>
                              <td>12</td>
                              <td>Quảng Ninh</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>500.000.000</td>
                            </tr>
                            <tr>
                              <td>13</td>
                              <td>Quảng Ninh</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>500.000.000</td>
                            </tr>
                            <tr>
                              <td>14</td>
                              <td>Quảng Ninh</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>500.000.000</td>
                            </tr>
                            <tr>
                              <td>15</td>
                              <td>Quảng Ninh</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>100.000.000</td>
                              <td>500.000.000</td>
                            </tr>

                          </tbody>
                        </table>
                        <div class="pagi m-3">
                          <ul class="pagination float-left" role="navigation">
                            <li class="page-item disabled" aria-disabled="true" aria-label="« Trang sau">
                              <span class="page-link" aria-hidden="true">‹</span>
                            </li>
                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="http://taisan.haiphatland.com.vn/administrator/asset/assets?page=2">2</a></li>
                            <li class="page-item"><a class="page-link" href="http://taisan.haiphatland.com.vn/administrator/asset/assets?page=3">3</a></li>
                            <li class="page-item"><a class="page-link" href="http://taisan.haiphatland.com.vn/administrator/asset/assets?page=4">4</a></li>
                            <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                            <li class="page-item"><a class="page-link" href="http://taisan.haiphatland.com.vn/administrator/asset/assets?page=860">860</a></li>
                            <li class="page-item"><a class="page-link" href="http://taisan.haiphatland.com.vn/administrator/asset/assets?page=861">861</a></li>
                            <li class="page-item">
                              <a class="page-link" href="http://taisan.haiphatland.com.vn/administrator/asset/assets?page=2" rel="next" aria-label="Trang trước »">›</a>
                            </li>
                          </ul>
                          <span class="float-right mt-3">Tổng số 12911 bản ghi</span>
                        </div>
                      </div>
                      <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="modal_import_van_hanh" tabindex="-1" role="dialog" aria-labelledby="modal_add_phong_ban" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal_add_phong_ban">Import chi phí vận hành</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Tên file</label>
              <input type="text" class="form-control" placeholder="Tên văn phòng">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Chọn công ty</label>
              <select class="form-control">
                <option>Hải Phát Land</option>  
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Chi phí tháng</label>
              <select class="form-control">
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
            <label for="exampleInputEmail1">File Import</label>
            <input type="file" class="d-block mt-2"/>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Import</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng lại</button>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require "footer.php"; ?>

<!-- Js page -->
<script src="dist/js/page/chart-chi-phi-van-hanh.js"></script>
</body>
</html>