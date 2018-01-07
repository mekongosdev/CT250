<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CP 250</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	
	<form action="#" method="post" accept-charset="utf-8" class="form-horizontal" role="form" >
		<div class="form_group">
			<label class="control-label col-md-12" for="txtTitle"><h2 align="center">Loại Rượu:</h2></label>
		</div>
		<div class="form-group">
			<label for="txtCategoryName" class="col-md-2 control-label">Loại Rượu</label>
			<div class="col-md-10">


				<input type="text" name="txtCategoryName" id="txtCategoryName" class="form-control" required />
			</div>
		</div>
		<div class="form-group">
			<label for="txtDetails" class="col-md-2 control-label">Chi Tiết:</label>
			<div class="col-md-10">


				<input type="text" name="txtDetails" id="txtDetails" class="form-control" 
				required   />
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-2 col-sm-10" align="center">

				<button type="submit" class="btn btn-info" name="btnSubmit" >
					<span class="glyphicon glyphicon-save"></span> Thêm Mới
				</button>
				<button type="reset" class="btn btn-primary" name="btnReset" >
					<span class="glyphicon glyphicon-pencil"></span> Nhập lại
				</button>
			</div>

		</div>
	</form>

</body>
</html>