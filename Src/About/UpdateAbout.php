<div class="row">
	<div class="col-md-12"/>
	<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data" form-horizontal>
		<div class="form_group">
			<label class="control-label col-sm-12" for="email"><h2 align="center">Về Chúng Tôi</h2></label>
		</div>

	</form>
	<form class="form-horizontal" accept-charset="utf-8" method="post" role="form" >


		<div class="form-group">
			<label class="control-label col-md-2" for="txtName">Tên:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="txtName" placeholder="Nhập và tên công ty rượu hiện tại" name="txtName"
				required autofocus >
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtHistory">Lịch sử hình thành:</label>
			<div class="col-md-10">          

				<textarea name="txtHistory" id="txtHistory"
				placeholder="Nhập vào quá trình hình thành" class="form-control" required></textarea>
			</div>
		</div>
        <div class="form-group">
			<label class="control-label col-md-2" for="slEmpl">Nhân viên tạo:</label>
			<div class="col-md-10">          
				<?php
				blindListEmployye1()
				?>
			</div>
		</div>
		<div class="form-group">        
			<div class="col-md-offset-2 col-md-10">
				<button type="submit" class="btn btn-info" name="btnAdd" onclick=""><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Thêm</button>
				<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Bỏ Qua</button>
			</div>
		</div>
	</form>
</div>