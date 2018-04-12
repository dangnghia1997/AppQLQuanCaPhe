<div class="container-fluid">
		<div class="row blue">
			<!-- phần thực đơn và lựa chỗ -->
			<div class="col-md-6">1
				<ul class="nav nav-tabs blue">
				    <li class="active"><a data-toggle="tab" href="#cho_ngoi">CHỖ NGỒI</a></li>
				    <li><a data-toggle="tab" href="#thuc_don">THỰC ĐƠN</a></li>
  				</ul>
			</div>
			<!-- end phần thực đơn và lựa chỗ -->

			<!-- phần thanh toán -->
			<div class="col-md-6">
				<h4>Ten Nhan Vien ca truc</h4>
			</div>
			<!-- phần thanh toán -->
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">3
				<div class="tab-content">
					<!--START cho_ngoi -->
				    <?php include("cho_ngoi.php");?>
				    <!--START cho_ngoi -->

				    <!--START thuc_don-->
				    <?php include("thuc_don.php");?>
				    <!--END thuc_don-->
  				</div>
			</div>
            <!-- START phần hiện thị thức ăn ở thanh toán-->
			<?php include("phan_hien_thi_thuc_an_o_thanh_toan.php")?>
            <!-- END phần hiện thị thức ăn ở thanh toán-->
		</div>
	</div>
	<div class="container-fluid">
		<div class="col-md-6">5</div>
		<div class="col-md-6" style="padding-right: 0px;padding-left:0px">
			<div class="btn_thanh_toan" style="width: 100%;height: 100px">
				<button style="margin: 15px;padding: 20px 58px;" type="button" class="btn btn-success">Thanh Toán (F9)</button>
				<button style="margin: 15px;padding: 20px 30px;" type="button" class="btn btn-danger">Thông Báo</button>
				<button style="margin: 15px;padding: 20px 35px;" type="button" class="btn btn-primary">Chuyển Ghép Bàn</button>
			</div>
		</div>
	</div>
</body>
</html>