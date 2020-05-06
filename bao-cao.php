<?php require "header.php"; ?>
	<style type="text/css">
	    @media print {
	      body * {
	        visibility: hidden;
	      }
	      #printThis, #printThis * {
	        visibility: visible;
	      }
	      #printThis {
	        position: absolute;
	        left: 0;
	        top: 0;
	        right:0;
	      }
	    }
	    
	  </style>
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	    <!-- Left navbar links -->
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
	      </li>
	      <li class="nav-item">
	        <span class="nav-link text-uppercase d-inline-block">BÁO CÁO</span>
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
	      <div class="container">
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
            <button type="submit" class="btn btn-primary btn-sm ml-2" onclick="window.print()">
                <i class="fas fa-file-import pr-2"></i> In báo cáo
            </button>
        </div>
        	<div class="dropdown-divider"></div>
        	<div id="printThis">
        		<table style="width: 100%">
	        		<tbody>
	        			<tr>
	        				<td style="width: 50%;text-align: center">
	        					CÔNG TY CỔ PHẦN ĐẦU TƯ VÀ KINH DOANH BẤT ĐỘNG SẢN HẢI PHÁT<BR>
		      					CHI NHÁNH QUẢNG NINHs
	        				</td>
	        				<td style="width: 50%;text-align: center">
	        					CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM<BR>
		      					Độc Lập- Tự Do - Hạnh Phúc
	        				</td>
	        			</tr>
	        			
	        		</tbody>
        		</table>
        		<div style="margin:50px 0;text-align: center;">
					<h4 class="font-weight-bold">BÁO CÁO TÌNH HÌNH SỬ DỤNG CHI PHÍ</h4>
  					<span class="font-weight-bold">Thời gian báo cáo: từ 01/2020 đến 03/2020</span>
    			</div>
		      	<div class="chart" style="max-width: 800px;margin:0 auto">
		      		<canvas id="pie-chart"></canvas>
		      	</div>
		      	<div class="content mt-4">
		      		<div class="card">
	                      <!-- /.card-header -->
	                      <div class="card-body table-responsive p-0">
	                        <table class="table table-hover text-nowrap" style="width: 100%">
	                          <thead>
	                            <tr>
	                              <th>STT</th>
	                              <th>NỘI DUNG</th>
	                              <th>SỐ LƯỢNG</th>
	                              <th>GIÁ ĐƠN VỊ</th>
	                              <th>CHI PHÍ</th>
	                            </tr>
	                          </thead>
	                          <tbody>
	                            <tr style="background-color:#eee;font-weight: bold">
	                            	<td colspan="4">
	                            		CHI PHÍ MUA MỚI TÀI SẢN
	                            	</td>
	                            	<td>200.000.000</td>
	                            </tr>
	                            <tr>
	                              <td>1</td>
	                              <td>Máy tính nhân viên</td>
	                              <td>5</td>
	                              <td>10.000.000</td>
	                              <td>50.000.000</td>
	                            </tr>
	                            <tr>
	                              <td>2</td>
	                              <td>Máy tính nhân viên</td>
	                              <td>5</td>
	                              <td>10.000.000</td>
	                              <td>50.000.000</td>
	                            </tr>
	                            <tr>
	                              <td>3</td>
	                              <td>Máy tính nhân viên</td>
	                              <td>5</td>
	                              <td>10.000.000</td>
	                              <td>50.000.000</td>
	                            </tr>
	                            <tr>
	                              <td>4</td>
	                              <td>Máy tính nhân viên</td>
	                              <td>5</td>
	                              <td>10.000.000</td>
	                              <td>50.000.000</td>
	                            </tr>
	                            <tr style="background-color:#eee;font-weight: bold">
	                            	<td colspan="4">
	                            		CHI PHÍ SỬA CHỮA TÀI SẢN
	                            	</td>
	                            	<td>200.000.000</td>
	                            </tr>
	                            <tr>
	                              <td>1</td>
	                              <td>Máy tính nhân viên</td>
	                              <td>1</td>
	                              <td>1000.000</td>
	                              <td>1000.000</td>
	                            </tr>
	                            <tr style="background-color:#eee;font-weight: bold">
	                            	<td colspan="4">
	                            		CHI PHÍ KHẤU HAO TÀI SẢN
	                            	</td>
	                            	<td>200.000.000</td>
	                            </tr>
	                            <tr>
	                              <td>1</td>
	                              <td>Máy tính nhân viên</td>
	                              <td>1</td>
	                              <td>1000.000</td>
	                              <td>1000.000</td>
	                            </tr>
	                            <tr>
	                              <td>2</td>
	                              <td>Máy tính nhân viên</td>
	                              <td>1</td>
	                              <td>1000.000</td>
	                              <td>1000.000</td>
	                            </tr>
	                            <tr>
	                              <td>3</td>
	                              <td>Máy tính nhân viên</td>
	                              <td>1</td>
	                              <td>1000.000</td>
	                              <td>1000.000</td>
	                            </tr>
	                            <tr style="background-color:#eee;font-weight: bold">
	                            	<td colspan="4">
	                            		CHI PHÍ VẬN HÀNH
	                            	</td>
	                            	<td>200.000.000</td>
	                            </tr>
	                            <tr>
	                              <td>1</td>
	                              <td>Điện</td>
	                              <td>1</td>
	                              <td>1000.000</td>
	                              <td>1000.000</td>
	                            </tr>
	                            <tr>
	                              <td>2</td>
	                              <td>Nước</td>
	                              <td>1</td>
	                              <td>1000.000</td>
	                              <td>1000.000</td>
	                            </tr>
	                            <tr>
	                              <td>3</td>
	                              <td>Văn phòng phẩm</td>
	                              <td>1</td>
	                              <td>1000.000</td>
	                              <td>1000.000</td>
	                            </tr>
	                            <tr>
	                              <td>4</td>
	                              <td>Thuê mặt bằng</td>
	                              <td>1</td>
	                              <td>1000.000</td>
	                              <td>1000.000</td>
	                            </tr>
	                            <tr>
	                              <td>5</td>
	                              <td>Chi phí khác</td>
	                              <td>1</td>
	                              <td>1000.000</td>
	                              <td>1000.000</td>
	                            </tr>
	                          </tbody>
	                        </table>
	                      </div>
	                      <!-- /.card-body -->
	                    </div>
		      	</div>
		    </div>
	    </div>
	    </section>
	</div>

<?php require "footer.php"; ?>
<script type="text/javascript">
	var data = [{
  data: [50, 55, 60, 33],
  backgroundColor: [
    "#4b77a9",
    "#5f255f",
    "#d21243",
    "#B27200"
  ],
  borderColor: "#fff"
}];

var options = {
  tooltips: {
    enabled: true
  },
  plugins: {
    datalabels: {
      formatter: (value, ctx) => {
        let sum = ctx.dataset._meta[0].total;
        let percentage = (value * 100 / sum).toFixed(2) + "%";
        return percentage;
      },
      color: '#fff',
    }
  }
};


var ctx = document.getElementById("pie-chart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
  labels: ['MUA MỚI TÀI SẢN', 'SỬA CHỮA TÀI SẢN', 'KHẤU HAO', 'CHI PHÍ VẬN HÀNH'],
    datasets: data
  },
  options: options
});
</script>
</body>
</html>