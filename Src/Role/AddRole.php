
<?php 
include_once("RoleController.php");

$name= "";
$description ="";
if(isset($_POST["btnAdd"]))
{
	$name = $_POST["txtName"];
	$description = $_POST["txtDetails"];
	addRole($name,$description,0);
	echo '<script> alert("Thêm quyền thành công!");</script>';
	echo "<script>window.location.href='?page=role'</script>";

}
?>


<div class="row">
	<div class="col-md-12"/>
	<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data" form-horizontal>
		<div class="form_group">
			<label class="control-label col-sm-12" for="email"><h2 align="center">Quyền</h2></label>
		</div>

	</form>
	<form class="form-horizontal" accept-charset="utf-8" method="post" role="form" action="" >
		<div class="form-group">
			<label class="control-label col-md-2" for="txtName">Tên Quyền:</label>
			<div class="col-sm-10">
		<input type="text" class="form-control" id="txtName" placeholder="Nhập vào tên quyền của ngườu sử dụng" name="txtName"
				 required="true" autofocus >
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtDetails">Mô tả chi tiết:</label>
			<div class="col-md-10">          
				<textarea name="txtDetails" id="txtDetails"
				placeholder="Mô tả chi tiết về quyền của người dùng" class="form-control" required></textarea>
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
