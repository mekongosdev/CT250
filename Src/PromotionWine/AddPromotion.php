
<?php
include_once("PromotionController.php");

$name="";
$discount="";
$content="";
$PromotionActive="";
$PromotionClose="";
$PromotionOpen="";
$PromotionActive = date_default_timezone_set('Asia/Ho_Chi_Minh');
$PromotionClose = date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($_POST["btnAdd"]))
{
	$name = $_POST["txtName"];
	$discount = $_POST["txtDiscount"];
	$content = $_POST["txtContent"];"";
	$PromotionActive = $_POST["PromotionActive"];
	$PromotionClose = $_POST["PromotionClose"];
	$PromotionOpen = $_POST["PromotionOpen"];
	addPromotion($name,$discount,$content,$PromotionActive,$PromotionClose,$PromotionOpen);
	echo '<script> alert("Thêm khuyến mãi thành công!");</script>';
	echo "<script>window.location.href='?page=promotion'</script>";

}
?>
<div class="row">
	<div class="col-md-12"/>
	<form action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data" form-horizontal>
		<div class="form_group">
			<label class="control-label col-sm-12" for="email"><h2 align="center">Cập Nhật Khuyến mãi</h2></label>
		</div>

	</form>
	<form class="form-horizontal" accept-charset="utf-8" method="POST" Promotion="form" >

		<div class="form-group">
			<label class="control-label col-md-2" for="txtName">Tên Khuyến mãi:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="txtName" placeholder="Nhập vào tên khuyến mãi" name="txtName"
				required autofocus />
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtDiscount">Giảm giá:</label>
			<div class="col-md-10">
				<input type="text" name="txtDiscount" id="txtDiscount" class="form-control" placeholder="&#37;" />
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
				<input type="date" name="PromotionActive" id="PromotionActive" class="form-control" />
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="PromotionClose">Ngày kết thúc:</label>
			<div class="col-md-10">
				<input type="date" name="PromotionClose" id="PromotionClose" class="form-control" />
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="PromotionOpen">Tình trạng:</label>
			<div class="col-md-10">
				<span class="form-group">
					<input type="radio" name="PromotionOpen" id="PromotionOpen" class="form-inline" value="0">Đóng
					<input type="radio" name="PromotionOpen" id="PromotionOpen" class="form-inline" value="1" checked>Mở
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
