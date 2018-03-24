<?php 
$name ="";
$strength = "";
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
	$shortdetails = $_POST["txtShort"];
	$details = $_POST["txtDetails"];
	$wineupdate =date('Y-m-d',  strtotime($_POST['txtDate']));
	$quantity=$_POST["txtNum"];
	$idCat = $_POST["slCategory"];
	$idPub = $_POST["slPublisher"];
	$idCountry =$_POST["slCountry"];
	$result = addWine($name,$strength,$shortdetails,$details,$wineupdate,$quantity,$idCat, $idPub,$idCountry);
	if($result){
		echo '<script> alert("Thêm dữ liệu thành công");</script>';
		echo "<script>window.location.href='?page=wine'</script>";
	}else{
		echo '<script> alert("Dữ liệu đã tồn tại");</script>';
	}
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

				<input type="text" class="form-control" id="txtstrength" placeholder="Nhập vào nồng độ của rượu" name="txtstrength"
				required  >
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtShort">Mô tả ngắn:</label>
			<div class="col-md-10">          

				<input type="text" class="form-control" id="txtShort" placeholder="Nhập vào mô tả ngắn" name="txtShort"
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
				<input type="text" class="form-control" id="txtNum" placeholder="Nhập vào số lượng rượu" name="txtNum"
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
				<button type="submit" class="btn btn-info" name="btnAdd"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Thêm</button>
				<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Bỏ Qua</button>
			</div>
		</div>
	</form>
</div>