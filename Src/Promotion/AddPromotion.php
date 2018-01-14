
<?php
include_once("PromotionController.php");

$name= "";
$description ="";
if(isset($_POST["btnAdd"]))
{
	$name = $_POST["txtName"];
	$description = $_POST["txtDetails"];
	addPromotion($name,$description,0);
	echo '<script> alert("Thêm quyền thành công!");</script>';
	echo "<script>window.location.href='?page=Promotion'</script>";

}
?>
<div class="row">
	<div class="col-md-12"/>
	<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data" form-horizontal>
		<div class="form_group">
			<label class="control-label col-sm-12" for="email"><h2 align="center">Cập Nhật Khuyến mãi</h2></label>
		</div>

	</form>
	<form class="form-horizontal" accept-charset="utf-8" method="post" Promotion="form" >

		<div class="form-group">
			<label class="control-label col-md-2" for="txtName">Tên Khuyến mãi:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="txtName" placeholder="Nhập vào tên khuyến mãi" name="txtName"
				required autofocus>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtDiscount">Giảm giá:</label>
			<div class="col-md-10">
				<input name="txtDiscount" id="txtDiscount" class="form-control" placeholder="&#37;"></input>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtContent">Mô tả Khuyến mãi:</label>
			<div class="col-md-10">
				<textarea name="txtContent" id="txtContent" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="PromotionActive">Ngày bắt đầu:</label>
			<div class="col-md-10">
				<input type="date" name="PromotionActive" id="PromotionActive" class="form-control"></input>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="PromotionClose">Ngày kết thúc:</label>
			<div class="col-md-10">
				<input type="date" name="PromotionClose" id="PromotionClose" class="form-control"></input>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="PromotionOpen">Tình trạng:</label>
			<div class="col-md-10">
				<span class="form-group">
					<input type="radio" name="PromotionOpen" id="PromotionOpen" class="form-inline" value="0">Đóng
					<input type="radio" name="PromotionOpen" id="PromotionOpen" class="form-inline" value="1">Mở
				</span>
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

<!-- Begin javascript -->

<!-- Tích hợp TinyMCE -->
<script src="../Public/admin/extensions/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<!-- End javascript -->
