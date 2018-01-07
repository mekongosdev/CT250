<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Category</title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<?php 
	include_once("../../Library/connect.php");
	include_once("CategoryController.php");

	$name= "";
	$description ="";
	if(isset($_POST["btnAdd"]))
	{
		$name = $_POST["txtName"];
		$description = $_POST["txtDetails"];

		addCategory($name,$description);


	}
	?>


	<div class="row">
		<div class="col-md-12"/>
		<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data" form-horizontal>
			<div class="form_group">
				<label class="control-label col-sm-12" for="email"><h2 align="center">Loại Rượu</h2></label>
			</div>

		</form>
		<form class="form-horizontal" accept-charset="utf-8" method="post" role="form" >


			<div class="form-group">
				<label class="control-label col-md-2" for="txtName">Tên:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="txtName" placeholder="Nhập vào tên loại rượu" name="txtName"
                    required autofocus >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="txtDetails">Mô tả chi tiết:</label>
				<div class="col-md-10">          

					<textarea name="txtDetails" id="txtDetails"
					placeholder="Nhập vào mô tả ch tiết loại rượu" class="form-control" required></textarea>
				</div>
			</div>

			<div class="form-group">        
				<div class="col-md-offset-2 col-md-10">
					<button type="submit" class="btn btn-info" name="btnAdd" onclick=""><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Thêm</button>
					<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Bỏ Qua</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>