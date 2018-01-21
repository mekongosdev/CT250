<?php 
include_once("WineController.php");
$name ="";
$strength = "";
$price ="";
$shortdetails ="";
$details = "";
$wineupdate = date_default_timezone_set('Asia/Vientiane');
$quantity = "";
$idCat = "";
$idPub = "";
$idCountry = "";
if(isset($_POST["btnAdd"]))
{
	$name = $_POST["txtName"];
	$strength = $_POST["txtstrength"];
	$price = $_POST["txtPrice"];
	$shortdetails = $_POST["txtShort"];
	$details = $_POST["txtDetails"]
	$wineupdate =date('Y-m-d',  strtotime($_POST['txtDate']));
	$quantity=$_POST["txtNum"];
	$idCat = $_POST["slCategory"];
	$idPub = $_POST["slPublisher"];
	$idCountry =$_POST["slCountry"];
	addWine($name,$strength,$price,$shortdetails,$details,$wineupdate,$quantity,
		$idCat, $idPub,$idCountry);
	echo '<script> alert("Thêm rượu thành công");</script>';
	echo "<script>window.location.href='?page=wine'</script>";
}
?>
<div class="row">
	<div class="col-md-12"/>
	<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data" form-horizontal>
		<div class="form_group">
			<label class="control-label col-sm-12" for="email"><h2 align="center">Thêm Rượu</h2></label>
		</div>

	</form>
	<form class="form-horizontal" accept-charset="utf-8" method="post" role="form" >
		<div class="form-group">
			<label class="control-label col-md-2" for="txtName">Tên Rượu:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="txtName" placeholder="Nhập vào tên loại rượu" name="txtName"
				required autofocus="" >
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtstrength">Độ rượu:</label>
			<div class="col-md-10">          

				<input type="text" class="form-control" id="txtstrength" placeholder="Nhập vào mật khẩu của nhân viên" name="txtstrength"
				required  >
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtPrice">Giá:</label>
			<div class="col-md-10">          

				<input type="number" class="form-control" id="txtPrice" placeholder="Nhập vào họ tên của nhân viên" name="txtPrice"
				required />
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtShort">Mô tả ngắn:</label>
			<div class="col-md-10">          

				<input type="date" class="form-control" id="txtShort" placeholder="Nhập vào ngày tháng năm sinh" name="txtShort"
				required  >
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtDetails">Mô tả chi tiết:</label>
			<div class="col-md-10">          


				<textarea name="txtDetails" class="form-control" placeholder="Mô tả chi tiết sản phẩm rượu" required></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtNum">Số lượng rượu:</label>
			<div class="col-md-10">          
				<input type="email" class="form-control" id="txtNum" placeholder="Nhập vào địa chỉ của nhân viên" name="txtNum"
				required  >
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-md-2" for="slPublisher">Nhà sản xuất:</label>
			<div class="col-md-10">          
				<?php
				blindListPublisher();
				?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="slPublisher">Loại sản phẩm:</label>
			<div class="col-md-10">          
				<?php
				blindListCategory();
				?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="slPublisher">Xuất xứ:</label>
			<div class="col-md-10">          
				<?php
				blindListCountry();
				?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtDate">Ngày cập nhật:</label>
			<div class="col-md-10">          
				<input type="date" class="form-control" id="txtDate" placeholder="Ngày cập nhật" name="txtDate"
				required  >
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