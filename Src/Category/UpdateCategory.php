<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
	include("../../Library/connect.php");
	include_once("CategoryController.php");
	$id = 0;
	if(isset($_GET['id']))
		$id=$_GET['id'];
	$name="";
	$description="";
	$result = searchCategory($id);
	//Lấy dữ liệu đưa vào mảng
	if(isset($result))
	{
		list($id,$name,$description)=mysql_fetch_array($result);
	}
	//Cập nhật lại dữ liệu
	if(isset($_POST['btnUpdate']))
	{
		$name=$_POST['txtName'];
		$description=$_POST['txtDetails'];
		updateCategory($id,$name,$description);
		echo '<script> alert("Update successful!");</script>';
		echo "<script>window.location.href='Category.php'</script>";
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
				<label class="control-label col-md-2" for="txtName">Mã Số:</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="txtNum"  name="txtNum"
					required  readonly="true" value="<?php echo $id;?>" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="txtName">Tên:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="txtName" placeholder="Nhập vào tên loại rượu" name="txtName"
					required autofocus value="<?php echo $name;?>" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="txtDetails">Mô tả chi tiết:</label>
				<div class="col-md-10">          

					<textarea name="txtDetails" id="txtDetails"
					placeholder="Nhập vào mô tả ch tiết loại rượu" class="form-control" required value="<?php echo $description;?>"></textarea>
				</div>
			</div>

			<div class="form-group">        
				<div class="col-md-offset-2 col-md-10">
					<button type="submit" class="btn btn-info" name="btnUpdate" onclick=""><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Cập Nhật</button>
					<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Bỏ Qua</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>