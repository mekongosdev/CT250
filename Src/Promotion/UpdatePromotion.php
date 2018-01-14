	<?php 
	include_once("PromotionController.php");
	$PromotionId = 0;
	if(isset($_GET['PromotionId'])){
		$PromotionId=$_GET['PromotionId'];
	}

	$name="";
	$description="";
	$PromotionActive="";
	$result = searchPromotion($PromotionId);
	//Lấy dữ liệu đưa vào mảng
	if(isset($result))
	{
		list($PromotionId,$name,$description,$PromotionActive)=mysql_fetch_array($result);
	}
	//Cập nhật lại dữ liệu
	if(isset($_POST['btnUpdate']))
	{
		$PromotionId=$_GET['PromotionId'];
		$name=$_POST['txtName'];
		$description=$_POST['txtDetails'];
		$PromotionActive=$_POST['PromotionActive'];
		updatePromotion($PromotionId, $name,$description,$PromotionActive);
		echo '<script> alert("Cập nhật thành công!");</script>';
		echo "<script>window.location.href='?page=Promotion'</script>";
	}

	?>
	<div class="row">
		<div class="col-md-12"/>
		<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data" form-horizontal>
			<div class="form_group">
				<label class="control-label col-sm-12" for="email"><h2 align="center">Cập Nhật Quyền</h2></label>
			</div>

		</form>
		<form class="form-horizontal" accept-charset="utf-8" method="post" Promotion="form" >

			<div class="form-group">
				<label class="control-label col-md-2" for="txtName">Mã Số:</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="txtNum"  name="txtNum"
					required  readonly="true" value="<?php echo $PromotionId;?>" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-2" for="txtName">Tên Quyền:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="txtName" placeholder="Nhập vào tên loại rượu" name="txtName"
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
				<label class="control-label col-md-2" for="PromotionActive">Tình trạng:</label>
				<div class="col-md-10">          
					<textarea name="PromotionActive" id="PromotionActive" class="form-control"><?php echo $PromotionActive?></textarea>
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
