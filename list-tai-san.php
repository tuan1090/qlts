<?php require "header.php"; ?>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <span class="nav-link text-uppercase d-inline-block">DANH SÁCH TÀI SẢN - CÔNG CỤ - DỤNG cụ</span>
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
        <div class="list-content"> 
          <div class="row gutter-2 gutter-lg-3 mb-2">
              <div class="col-lg-3">
                  <div class="form-group m-form__group">
                      <label for="name">
                          Tên
                      </label>
                      <input name="name" class="form-control form-control-sm m-input" placeholder="Tên tài sản" value="">
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="form-group m-form__group">
                    <label for="name">
                        Nhóm tài sản
                    </label>
                    <select id="select2" class="form-control form-control-sm select2" name="state" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option value="0" data-select2-id="3">-- Tất cả --</option>
                      <option value="4">AM - Ấm</option><option value="5"> - AMTRA - Ấm trà</option><option value="40"> - BAMST - Bộ ấm siêu tốc</option><option value="41"> - BAMTRA - Bộ ấm trà</option><option value="3">AOCAMHPL - Áo cam HPL</option><option value="270">BACKDROP - Backdrop</option><option value="6">BAN - Bàn</option><option value="1"> - BANBOV - Bàn BOV</option><option value="9"> - BANDB - Bàn đại biểu</option><option value="10"> - BANGCS - Bàn gấp chân sắt</option><option value="11"> - BANGOG - Bàn gỗ gập tròn, vuông</option><option value="12"> - BANHOP - Bàn họp</option><option value="13"> - BANKT - Bàn kính tròn</option><option value="14"> - BANLV - Bàn làm việc</option><option value="15"> - BNHUA - Bàn làm việc nhựa</option><option value="16"> - BANLD - Bàn lãnh đạo</option><option value="19"> - BANTRA - Bàn trà</option><option value="20"> - BANTRE - Bàn tròn ép tre</option><option value="133"> - HBNV - Hệ bàn nhân viên</option><option value="202"> - QUAYLT - Quầy lễ tân</option><option value="288"> - BANMAY - Bàn đan mây</option><option value="256">BKTHUAT - Bàn điều khiển ánh sáng</option><option value="258">BAMTHANH - Bàn phụ trách âm thanh</option><option value="18">BTT - Bàn thờ Thần tài</option><option value="22">BANG - Bảng</option>
                    </select>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="form-group m-form__group">
                      <label for="name">
                          Phân loại
                      </label>
                      <select id="select2" class="form-control form-control-sm select2" name="state" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option value="0" data-select2-id="3">-- Tất cả --</option>
                      <option value="4">AM - Ấm</option><option value="5"> - AMTRA - Ấm trà</option><option value="40"> - BAMST - Bộ ấm siêu tốc</option><option value="41"> - BAMTRA - Bộ ấm trà</option><option value="3">AOCAMHPL - Áo cam HPL</option><option value="270">BACKDROP - Backdrop</option><option value="6">BAN - Bàn</option><option value="1"> - BANBOV - Bàn BOV</option><option value="9"> - BANDB - Bàn đại biểu</option><option value="10"> - BANGCS - Bàn gấp chân sắt</option><option value="11"> - BANGOG - Bàn gỗ gập tròn, vuông</option><option value="12"> - BANHOP - Bàn họp</option><option value="13"> - BANKT - Bàn kính tròn</option><option value="14"> - BANLV - Bàn làm việc</option><option value="15"> - BNHUA - Bàn làm việc nhựa</option><option value="16"> - BANLD - Bàn lãnh đạo</option><option value="19"> - BANTRA - Bàn trà</option><option value="20"> - BANTRE - Bàn tròn ép tre</option><option value="133"> - HBNV - Hệ bàn nhân viên</option><option value="202"> - QUAYLT - Quầy lễ tân</option><option value="288"> - BANMAY - Bàn đan mây</option><option value="256">BKTHUAT - Bàn điều khiển ánh sáng</option><option value="258">BAMTHANH - Bàn phụ trách âm thanh</option><option value="18">BTT - Bàn thờ Thần tài</option><option value="22">BANG - Bảng</option>
                    </select>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="form-group m-form__group">
                      <label for="name">
                          Trạng thái
                      </label>
                      <select id="select2" class="form-control form-control-sm select2" name="state" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option value="0" data-select2-id="3">-- Tất cả --</option>
                      <option value="4">AM - Ấm</option><option value="5"> - AMTRA - Ấm trà</option><option value="40"> - BAMST - Bộ ấm siêu tốc</option><option value="41"> - BAMTRA - Bộ ấm trà</option><option value="3">AOCAMHPL - Áo cam HPL</option><option value="270">BACKDROP - Backdrop</option><option value="6">BAN - Bàn</option><option value="1"> - BANBOV - Bàn BOV</option><option value="9"> - BANDB - Bàn đại biểu</option><option value="10"> - BANGCS - Bàn gấp chân sắt</option><option value="11"> - BANGOG - Bàn gỗ gập tròn, vuông</option><option value="12"> - BANHOP - Bàn họp</option><option value="13"> - BANKT - Bàn kính tròn</option><option value="14"> - BANLV - Bàn làm việc</option><option value="15"> - BNHUA - Bàn làm việc nhựa</option><option value="16"> - BANLD - Bàn lãnh đạo</option><option value="19"> - BANTRA - Bàn trà</option><option value="20"> - BANTRE - Bàn tròn ép tre</option><option value="133"> - HBNV - Hệ bàn nhân viên</option><option value="202"> - QUAYLT - Quầy lễ tân</option><option value="288"> - BANMAY - Bàn đan mây</option><option value="256">BKTHUAT - Bàn điều khiển ánh sáng</option><option value="258">BAMTHANH - Bàn phụ trách âm thanh</option><option value="18">BTT - Bàn thờ Thần tài</option><option value="22">BANG - Bảng</option>
                    </select>
                      
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="form-group m-form__group">
                      <label for="name">
                          Trạng thái ban đầu
                      </label>
                      <select id="select2" class="form-control form-control-sm select2" name="state" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option value="0" data-select2-id="3">-- Tất cả --</option>
                      <option value="4">AM - Ấm</option><option value="5"> - AMTRA - Ấm trà</option><option value="40"> - BAMST - Bộ ấm siêu tốc</option><option value="41"> - BAMTRA - Bộ ấm trà</option><option value="3">AOCAMHPL - Áo cam HPL</option><option value="270">BACKDROP - Backdrop</option><option value="6">BAN - Bàn</option><option value="1"> - BANBOV - Bàn BOV</option><option value="9"> - BANDB - Bàn đại biểu</option><option value="10"> - BANGCS - Bàn gấp chân sắt</option><option value="11"> - BANGOG - Bàn gỗ gập tròn, vuông</option><option value="12"> - BANHOP - Bàn họp</option><option value="13"> - BANKT - Bàn kính tròn</option><option value="14"> - BANLV - Bàn làm việc</option><option value="15"> - BNHUA - Bàn làm việc nhựa</option><option value="16"> - BANLD - Bàn lãnh đạo</option><option value="19"> - BANTRA - Bàn trà</option><option value="20"> - BANTRE - Bàn tròn ép tre</option><option value="133"> - HBNV - Hệ bàn nhân viên</option><option value="202"> - QUAYLT - Quầy lễ tân</option><option value="288"> - BANMAY - Bàn đan mây</option><option value="256">BKTHUAT - Bàn điều khiển ánh sáng</option><option value="258">BAMTHANH - Bàn phụ trách âm thanh</option><option value="18">BTT - Bàn thờ Thần tài</option><option value="22">BANG - Bảng</option>
                    </select>
                      
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="form-group m-form__group">
                      <label for="name">
                          Nhà thầu
                      </label>
                      <input name="name_partner" class="form-control form-control-sm m-input" placeholder="Tên nhà thầu">
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="form-group m-form__group">
                      <label for="name">
                          Công ty
                      </label>
                      <select id="select2" class="form-control form-control-sm select2" name="state" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option value="0" data-select2-id="3">-- Tất cả --</option>
                      <option value="4">AM - Ấm</option><option value="5"> - AMTRA - Ấm trà</option><option value="40"> - BAMST - Bộ ấm siêu tốc</option><option value="41"> - BAMTRA - Bộ ấm trà</option><option value="3">AOCAMHPL - Áo cam HPL</option><option value="270">BACKDROP - Backdrop</option><option value="6">BAN - Bàn</option><option value="1"> - BANBOV - Bàn BOV</option><option value="9"> - BANDB - Bàn đại biểu</option><option value="10"> - BANGCS - Bàn gấp chân sắt</option><option value="11"> - BANGOG - Bàn gỗ gập tròn, vuông</option><option value="12"> - BANHOP - Bàn họp</option><option value="13"> - BANKT - Bàn kính tròn</option><option value="14"> - BANLV - Bàn làm việc</option><option value="15"> - BNHUA - Bàn làm việc nhựa</option><option value="16"> - BANLD - Bàn lãnh đạo</option><option value="19"> - BANTRA - Bàn trà</option><option value="20"> - BANTRE - Bàn tròn ép tre</option><option value="133"> - HBNV - Hệ bàn nhân viên</option><option value="202"> - QUAYLT - Quầy lễ tân</option><option value="288"> - BANMAY - Bàn đan mây</option><option value="256">BKTHUAT - Bàn điều khiển ánh sáng</option><option value="258">BAMTHANH - Bàn phụ trách âm thanh</option><option value="18">BTT - Bàn thờ Thần tài</option><option value="22">BANG - Bảng</option>
                    </select>
                      
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="form-group m-form__group">
                      <label for="name">
                          Đơn vị trực thuộc công ty
                      </label>
                      <select id="select2" class="form-control form-control-sm select2" name="state" data-select2-id="1" tabindex="-1" aria-hidden="true">
                      <option value="0" data-select2-id="3">-- Tất cả --</option>
                      <option value="4">AM - Ấm</option><option value="5"> - AMTRA - Ấm trà</option><option value="40"> - BAMST - Bộ ấm siêu tốc</option><option value="41"> - BAMTRA - Bộ ấm trà</option><option value="3">AOCAMHPL - Áo cam HPL</option><option value="270">BACKDROP - Backdrop</option><option value="6">BAN - Bàn</option><option value="1"> - BANBOV - Bàn BOV</option><option value="9"> - BANDB - Bàn đại biểu</option><option value="10"> - BANGCS - Bàn gấp chân sắt</option><option value="11"> - BANGOG - Bàn gỗ gập tròn, vuông</option><option value="12"> - BANHOP - Bàn họp</option><option value="13"> - BANKT - Bàn kính tròn</option><option value="14"> - BANLV - Bàn làm việc</option><option value="15"> - BNHUA - Bàn làm việc nhựa</option><option value="16"> - BANLD - Bàn lãnh đạo</option><option value="19"> - BANTRA - Bàn trà</option><option value="20"> - BANTRE - Bàn tròn ép tre</option><option value="133"> - HBNV - Hệ bàn nhân viên</option><option value="202"> - QUAYLT - Quầy lễ tân</option><option value="288"> - BANMAY - Bàn đan mây</option><option value="256">BKTHUAT - Bàn điều khiển ánh sáng</option><option value="258">BAMTHANH - Bàn phụ trách âm thanh</option><option value="18">BTT - Bàn thờ Thần tài</option><option value="22">BANG - Bảng</option>
                    </select>
                      
                  </div>
              </div>
          </div>
          <div class="button mb-4">
            <button type="button" class="btn btn-warning mr-2" style="padding-left: 5rem;padding-right: 5rem">
              <i class="fas fa-search pr-2"></i> TÌM KIẾM
            </button>
            <div class="float-right d-inline-block">
              <button type="button" class="btn btn-primary">THÊM MỚI TÀI SẢN</button>
              <button type="button" class="btn btn-success">DANH SÁCH TÀI SẢN</button>
              <button type="button" class="btn btn-danger">DANH SÁCH ĐƠN VỊ TÍNH</button>
            </div>
          </div>
          <section class="main-content">
                <div class="wrap-table">
                    <table class="table table-hover table-responsive table-striped">
                        <thead class="table_head">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Mã</th>
                            <th scope="col">Mã nhóm</th>
                            <th scope="col">Số hiệu HĐ</th>
                            <th scope="col">Chất liệu</th>
                            <th scope="col">Màu sắc</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Đơn vị tính</th>
                            <th scope="col">Giá trị(VND)</th>
                            <th scope="col">Đơn vị SD</th>
                            <th scope="col">Người nhập kho</th>
                            <th scope="col">Ngày nhập kho</th>
                            <th scope="col">Phân loại</th>
                            <th scope="col">Bảo hành(tháng)</th>
                            <th scope="col">Năm sử dụng</th>
                            <th scope="col">Tình trạng</th>
                            <th scope="col">Tùy chọn</th>
                        </tr>
                        </thead>
                        <tbody>
                              <tr class="header">
                                <td scope="row">1</td>
                                <td class="text-left">Chuột máy tính</td>
                                <td class="text-left">CHUOTMT-13293</td>
                                <td class="text-left">CHUOTMT</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                                                                                    <td class="text-right">1</td>
                                                                <td class="text-left">Cái</td>
                                <td class="text-right">0</td>
                                <td class="text-center">Kho tài sản mua mới</td>
                                <td class="text-left">nguyễn Quốc Hoàng</td>
                                <td class="text-left">
                                    24-04-2020
                                </td>
                                <td class="text-center">Tài sản</td>
                                <td class="text-center"></td>
                                <td class="text-center">2020</td>
                                <td class="text-center">
                                    Chờ bàn giao
                                </td>
                                <td>
                                    <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13293/edit" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="header">
                                <td scope="row">2</td>
                                <td class="text-left">Chuột máy tính</td>
                                <td class="text-left">CHUOTMT-13294</td>
                                <td class="text-left">CHUOTMT</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                                                                                    <td class="text-right">1</td>
                                                                <td class="text-left">Cái</td>
                                <td class="text-right">0</td>
                                <td class="text-center">Kho 3 - Công ty</td>
                                <td class="text-left">Phạm Thị Thùy Dung</td>
                                <td class="text-left">
                                    24-04-2020
                                </td>
                                <td class="text-center">Tài sản</td>
                                <td class="text-center"></td>
                                <td class="text-center">2020</td>
                                <td class="text-center">
                                    Tồn kho
                                </td>
                                <td>
                                    <a href="http://taisan.haiphatland.com.vn/administrator/asset/history/13294" class="">
                                            <i class="fa fa-history" aria-hidden="true"></i>
                                        </a>
                                    <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13294/edit" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="header">
                                <td scope="row">3</td>
                                <td class="text-left">Màn hình máy tính Dell E2216H 21.5inch</td>
                                <td class="text-left">MHMT-13295</td>
                                <td class="text-left">MHMT</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                                                                                    <td class="text-right">1</td>
                                                                <td class="text-left">Cái</td>
                                <td class="text-right">2,450,000</td>
                                <td class="text-center">Kho tài sản mua mới</td>
                                <td class="text-left">Nguyễn Quốc Hoàng</td>
                                <td class="text-left">
                                    24-04-2020
                                </td>
                                <td class="text-center">Tài sản</td>
                                <td class="text-center">36</td>
                                <td class="text-center">2020</td>
                                <td class="text-center">
                                    Chờ bàn giao
                                </td>
                                <td>
                                    <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13295/edit" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="header">
                                <td scope="row">4</td>
                                <td class="text-left">Màn hình máy tính Dell E2216H 21.5inch</td>
                                <td class="text-left">MHMT-13296</td>
                                <td class="text-left">MHMT</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                                                                                    <td class="text-right">1</td>
                                                                <td class="text-left">Cái</td>
                                <td class="text-right">2,450,000</td>
                                <td class="text-center">Kho tài sản mua mới</td>
                                <td class="text-left">Nguyễn Quốc Hoàng</td>
                                <td class="text-left">
                                    24-04-2020
                                </td>
                                <td class="text-center">Tài sản</td>
                                <td class="text-center">36</td>
                                <td class="text-center">2020</td>
                                <td class="text-center">
                                    Chờ bàn giao
                                </td>
                                <td>
                                    <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13296/edit" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="header">
                                <td scope="row">5</td>
                                <td class="text-left">Cây máy tính PCPA Wind + ổ cứng Western Blue 1TB</td>
                                <td class="text-left">CAYMT-13297</td>
                                <td class="text-left">CAYMT</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                                                                                    <td class="text-right">1</td>
                                                                <td class="text-left">Bộ</td>
                                <td class="text-right">8,910,000</td>
                                <td class="text-center">Kho tài sản mua mới</td>
                                <td class="text-left">Nguyễn Quốc Hoàng</td>
                                <td class="text-left">
                                    24-04-2020
                                </td>
                                <td class="text-center">Tài sản</td>
                                <td class="text-center">36</td>
                                <td class="text-center">2020</td>
                                <td class="text-center">
                                    Chờ bàn giao
                                </td>
                                <td>
                                    <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13297/edit" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="header">
                                <td scope="row">6</td>
                                <td class="text-left">Cây máy tính PCPA Huricane 05+ ổ cứng Western Blue 1TB</td>
                                <td class="text-left">CAYMT-13290</td>
                                <td class="text-left">CAYMT</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                                                                                    <td class="text-right">1</td>
                                                                <td class="text-left">Bộ</td>
                                <td class="text-right">13,610,000</td>
                                <td class="text-center">Kho tài sản mua mới</td>
                                <td class="text-left">nguyễn Quốc Hoàng</td>
                                <td class="text-left">
                                    24-04-2020
                                </td>
                                <td class="text-center">Tài sản</td>
                                <td class="text-center">36</td>
                                <td class="text-center">2020</td>
                                <td class="text-center">
                                    Chờ bàn giao
                                </td>
                                <td>
                                    <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13290/edit" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="header">
                                <td scope="row">7</td>
                                <td class="text-left">Bàn phím logitech MK20</td>
                                <td class="text-left">BPHIM-13291</td>
                                <td class="text-left">BPHIM</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                                                                                    <td class="text-right">1</td>
                                                                <td class="text-left">Cái</td>
                                <td class="text-right">269,000</td>
                                <td class="text-center">Kho tài sản mua mới</td>
                                <td class="text-left">nguyễn Quốc Hoàng</td>
                                <td class="text-left">
                                    24-04-2020
                                </td>
                                <td class="text-center">Tài sản</td>
                                <td class="text-center">12</td>
                                <td class="text-center">2020</td>
                                <td class="text-center">
                                    Chờ bàn giao
                                </td>
                                <td>
                                                                        <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13291/edit" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                                                    <tr class="header">
                                <td scope="row">8</td>
                                <td class="text-left">Bàn phím logitech MK20</td>
                                <td class="text-left">BPHIM-13292</td>
                                <td class="text-left">BPHIM</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                                                                                    <td class="text-right">1</td>
                                                                <td class="text-left">Cái</td>
                                <td class="text-right">269,000</td>
                                <td class="text-center">Kho tài sản mua mới</td>
                                <td class="text-left">nguyễn Quốc Hoàng</td>
                                <td class="text-left">
                                    24-04-2020
                                </td>
                                <td class="text-center">Tài sản</td>
                                <td class="text-center">12</td>
                                <td class="text-center">2020</td>
                                <td class="text-center">
                                    Chờ bàn giao
                                </td>
                                <td>
                                                                        <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13292/edit" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                                                    <tr class="header">
                                <td scope="row">9</td>
                                <td class="text-left">Ghế sofa nỉ dài</td>
                                <td class="text-left">SOFADAI-13289</td>
                                <td class="text-left">SOFADAI</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                                                                                    <td class="text-right">1</td>
                                                                <td class="text-left">Cái</td>
                                <td class="text-right">0</td>
                                <td class="text-center">Khu vực trong B.HCNS</td>
                                <td class="text-left">Võ Thị Hằng</td>
                                <td class="text-left">
                                    
                                </td>
                                <td class="text-center">Tài sản</td>
                                <td class="text-center"></td>
                                <td class="text-center">2018</td>
                                <td class="text-center">
                                    Đang sử dụng
                                </td>
                                <td>
                                                                        <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13289/edit" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                                                    <tr class="header">
                                <td scope="row">10</td>
                                <td class="text-left">Bàn phím Logitech K120</td>
                                <td class="text-left">BPHIM-13285</td>
                                <td class="text-left">BPHIM</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                                                                                    <td class="text-right">1</td>
                                                                <td class="text-left">Cái</td>
                                <td class="text-right">160,000</td>
                                <td class="text-center">Khối Dự Án</td>
                                <td class="text-left">Trần Hải Huyền</td>
                                <td class="text-left">
                                    
                                </td>
                                <td class="text-center">Tài sản</td>
                                <td class="text-center"></td>
                                <td class="text-center">2018</td>
                                <td class="text-center">
                                    Đang sử dụng
                                </td>
                                <td>
                                                                        <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13285/edit" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                                                    <tr class="header">
                                <td scope="row">11</td>
                                <td class="text-left">Cây máy tính</td>
                                <td class="text-left">CAYMT-13286</td>
                                <td class="text-left">CAYMT</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                                                                                    <td class="text-right">1</td>
                                                                <td class="text-left">Cái</td>
                                <td class="text-right">5,170,000</td>
                                <td class="text-center">Khối Dự Án</td>
                                <td class="text-left">Trần Hải Huyền</td>
                                <td class="text-left">
                                    
                                </td>
                                <td class="text-center">Tài sản</td>
                                <td class="text-center">36</td>
                                <td class="text-center">2018</td>
                                <td class="text-center">
                                    Đang sử dụng
                                </td>
                                <td>
                                                                        <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13286/edit" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                                                    <tr class="header">
                                <td scope="row">12</td>
                                <td class="text-left">Màn hình máy tính</td>
                                <td class="text-left">MHMT-13287</td>
                                <td class="text-left">MHMT</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                                                                                    <td class="text-right">1</td>
                                                                <td class="text-left">Cái</td>
                                <td class="text-right">1,590,000</td>
                                <td class="text-center">Khối Dự Án</td>
                                <td class="text-left">Trần Hải Huyền</td>
                                <td class="text-left">
                                    
                                </td>
                                <td class="text-center">Tài sản</td>
                                <td class="text-center"></td>
                                <td class="text-center">2018</td>
                                <td class="text-center">
                                    Đang sử dụng
                                </td>
                                <td>
                                                                        <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13287/edit" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                                                    <tr class="header">
                                <td scope="row">13</td>
                                <td class="text-left">Chuột quang USB Logitech B100</td>
                                <td class="text-left">CHUOTMT-13288</td>
                                <td class="text-left">CHUOTMT</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                                                                                    <td class="text-right">1</td>
                                                                <td class="text-left">Cái</td>
                                <td class="text-right">90,000</td>
                                <td class="text-center">Khối Dự Án</td>
                                <td class="text-left">Trần Hải Huyền</td>
                                <td class="text-left">
                                    
                                </td>
                                <td class="text-center">Tài sản</td>
                                <td class="text-center"></td>
                                <td class="text-center">2018</td>
                                <td class="text-center">
                                    Đang sử dụng
                                </td>
                                <td>
                                                                        <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13288/edit" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                                                    <tr class="header">
                                <td scope="row">14</td>
                                <td class="text-left">Chổi chít</td>
                                <td class="text-left">CHOIQUET-13272</td>
                                <td class="text-left">CHOIQUET</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                                                                                    <td class="text-right">1</td>
                                                                <td class="text-left">Cái</td>
                                <td class="text-right">25,000</td>
                                <td class="text-center">Kho tài sản mua mới</td>
                                <td class="text-left"></td>
                                <td class="text-left">
                                    20-03-2020
                                </td>
                                <td class="text-center">Tài sản</td>
                                <td class="text-center"></td>
                                <td class="text-center">2020</td>
                                <td class="text-center">
                                    Chờ bàn giao
                                </td>
                                <td>
                                                                        <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13272/edit" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                                                    <tr class="header">
                                <td scope="row">15</td>
                                <td class="text-left">Kệ cốc</td>
                                <td class="text-left">GIACOC-13273</td>
                                <td class="text-left">GIACOC</td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                <td class="text-left"></td>
                                                                                                    <td class="text-right">1</td>
                                                                <td class="text-left">Cái</td>
                                <td class="text-right">80,000</td>
                                <td class="text-center">Kho tài sản mua mới</td>
                                <td class="text-left"></td>
                                <td class="text-left">
                                    20-03-2020
                                </td>
                                <td class="text-center">Tài sản</td>
                                <td class="text-center"></td>
                                <td class="text-center">2020</td>
                                <td class="text-center">
                                    Chờ bàn giao
                                </td>
                                <td>
                                                                        <a href="http://taisan.haiphatland.com.vn/administrator/asset/assets/13273/edit" class="">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                                                </tbody>
                    </table>
                </div>
                <div class="pagi">
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
          </section>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

<?php require "footer.php"; ?>

</body>
</html>