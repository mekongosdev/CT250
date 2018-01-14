	<?php 
	include_once("ContactController.php");
	$ContactId = 0;
	if(isset($_GET['ContactId']))
		$ContactId=$_GET['ContactId'];
	$name="";
	$subject="";
	$datewrite=date_default_timezone_set('Asia/Ho_Chi_Minh');
	$information="";
	$email="";
	$phone="";
	$address1="";
	$result = searchContact($ContactId);
	//Lấy dữ liệu đưa vào mảng
	if(isset($result))
	{
		list($ContactId,$name,$subject)=mysql_fetch_array($result);
	}
	//Cập nhật lại dữ liệu
	if(isset($_POST['btnUpdate']))
	{
		$name = $_POST["txtName"];
		$subject=$_POST["slSubject"];
		$datewrite=date('Y-m-d',  strtotime($_POST['txtDate']));
		$information=$_POST["message"];
		$email = $_POST["txtEmail"];
		$phone=$_POST["txtPhone"];
		$address1 = $_POST["txtAddress"];
		updateContact($ContactId,$name,$subject,$datewrite,$information,$email,$phone,$address1);
		echo '<script> alert("Cập nhật thành công!");</script>';
		echo "<script>window.location.href='?page=contact'</script>";
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
					required  readonly="true" value="<?php echo $CategoryId;?>" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="txtName">Tên:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="txtName"  name="txtName"
					required autofocus value="<?php echo $name;?>" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="txtDetails">Mô tả chi tiết:</label>
				<div class="col-md-10">          
					<textarea name="txtDetails" id="txtDetails" class="form-control"><?php echo $description;?></textarea>
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
