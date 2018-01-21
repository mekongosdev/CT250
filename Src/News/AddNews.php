<?php 
include_once('NewsController.php');
$Newsname = "";
$title = "";
$content="";
$employeecode="";
if(isset($_POST["btnAdd"]))
{
	$Newsname = $_POST['txtName'];
	$title = $_POST['txtTitle'];
	$content=$_POST['txtContent'];
	$employeecode=$_POST['slEmpl'];
	addNew($Newsname,$title,$content,$employeecode);
	echo '<script> alert("Thêm 1 tin tức thành công");</script>';
	echo "<script>window.location.href='?page=news'</script>";
}
?>
<div class="row">
	<div class="col-md-12"/>
	<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data" form-horizontal>
		<div class="form_group">
			<label class="control-label col-sm-12" for="email"><h2 align="center">Thêm Tin Tức</h2></label>
		</div>



		<div class="form-group">
			<label class="control-label col-md-2" for="txtName">Tên Tin Tức:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="txtName" placeholder="Nhập vào tên tin tức" name="txtName"
				required autofocus="" >
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtTitle">Tự đề:</label>
			<div class="col-md-10">          

				<input type="text" class="form-control" id="txtTitle" placeholder="Tựa đề" name="txtTitle"
				required  >
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-md-2" for="txtContent">Nội dung:</label>
			<div class="col-md-10">          
				
				<textarea name="txtContent" id="txtContent" class="form-control" placeholder="Nội dung chính"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="slEmpl">Nhân viên tạo:</label>
			<div class="col-md-10">          
				<?php
				blindListEmployye();
				?>
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