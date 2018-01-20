<?php 
include_once("NewsController.php");
$NewsId = 0;

if(isset($_GET['NewsId'])){
	$RoleId=$_GET['NewsId'];
}
$Newsname = "";
$title = "";
$content="";
$employeecode="";
$result = searchNews($NewsId);
	//Lấy dữ liệu đưa vào mảng
if(isset($result))
{
	list($NewsId,$Newsname,$title,$content,$employeecode)=mysql_fetch_array($result);
}
	//Cập nhật lại dữ liệu
if(isset($_POST['btnUpdate']))
{
	$NewsId = $_GET['NewsId']
	$Newsname=$_GET['txtName'];
	$title=$_POST['txtTitle'];
	$content=$_POST['txtContent'];
	$employeecode=$_POST['slEmpl'];
	UpdateNews($NewsId,$Newsname,$title,$content,$employeecode);
	echo '<script> alert("Cập nhật tin tức thành công!");</script>';
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
			<label class="control-label col-md-2" for="txtId">Mã Tin Tức:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="txtName"  name="txtName"
				readonly="readonly"> value="<?php echo $NewId;?>" >
			</div>
		</div>
		


		<div class="form-group">
			<label class="control-label col-md-2" for="txtName">Tên Tin Tức:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="txtName"  name="txtName"
				required autofocus="" value="<?php echo $Newsname;?>" >
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtTitle">Tự đề:</label>
			<div class="col-md-10">          

				<input type="password" class="form-control" id="txtTitle" placeholder="Tựa đề" name="txtTitle"
				required value="<?php echo $title?>" >
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-md-2" for="txtContent">Nội dung:</label>
			<div class="col-md-10">          
				
				<textarea name="txtContent" id="txtContent" class="form-control" placeholder="Nội dung chính" value="<?php echo $content?>"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="slEmpl">Nhân viên tạo:</label>
			<div class="col-md-10">          
				<?php
				blindEmployeeUpdatetList($employeecode);
				?>
			</div>
		</div>
		<div class="form-group">        
			<div class="col-md-offset-2 col-md-10">
				<button type="submit" class="btn btn-info" name="btnAdd" onclick=""><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Thêm</button>
				<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Bỏ Qua</button>
			</div>
		</div>
