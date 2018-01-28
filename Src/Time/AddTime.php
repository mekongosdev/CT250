<?php 
include_once("TimeController.php");

$applicationTime= date_default_timezone_set('Asia/Vientiane');
if(isset($_POST["btnAdd"]))
{
	$ApplicationTime=date('Y-m-d',strtotime($_POST['txtName']));

	addTime($ApplicationTime);
	echo '<script> alert("Thêm thời gian thành công!");</script>';
	echo "<script>window.location.href='?page=time'</script>";

}
?>

<div class="row">
	<div class="col-md-12"/>
	<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data" form-horizontal>
		<div class="form_group">
			<label class="control-label col-sm-12" for="email"><h2 align="center">Thời Gian</h2></label>
		</div>

	</form>
	<form class="form-horizontal" accept-charset="utf-8" method="post" role="form" >


		<div class="form-group">
			<label class="control-label col-md-2" for="txtName">Ngày:</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" id="txtName" name="txtName"
				required autofocus >
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