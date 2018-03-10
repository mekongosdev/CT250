<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script type="text/javascript" >
	var app = angular.module('myApp', []);
	app.controller('myController', function($scope){
		$scope.txtName = null;
		$scope.txtDetails = null;
	});
</script> -->
<?php 
include_once("PublisherController.php");
$name = "";
$description="";
if(isset($_POST['btnAdd']))
{
	$name = $_POST["txtName"];
	$description = $_POST["txtDetails"];
	addPublisher($name,$description);
	echo '<script> alert("Thêm nhà sản xuất thành công!");</script>';
	echo "<script>window.location.href='?page=publisher'</script>";
}

?>
<div class="row">
	<div class="col-md-12"/>
	<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data" form-horizontal>
		<div class="form_group">
			<label class="control-label col-sm-12" for="email"><h2 align="center">Thêm Nhà Sản Xuất</h2></label>
		</div>

	</form>
	<form class="form-horizontal" accept-charset="utf-8" method="post" role="form" name="myForm" ng-app="myApp"  ng-controller="myController" novalidate="">


		<div class="form-group">
			<label class="control-label col-md-2" for="txtName">Tên nhà sản xuất:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="txtName" placeholder="Nhập vào tên nhà sản xuất" name="txtName"
				required autofocus ng-model="txtName" >
				
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtDetails">Mô tả chi tiết:</label>
			<div class="col-md-10">          

				<textarea name="txtDetails" id="txtDetails"
				placeholder="Nhập vào mô tả chi tiết của nhà sản xuất rượu" class="form-control" required ng-model="txtDetails"></textarea>
				
			</div>
		</div>

		<div class="form-group">        
			<div class="col-md-offset-2 col-md-10">
				<!-- <button type="submit" class="btn btn-info" name="btnAdd" onclick=""><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Thêm</button> -->
				<input type="submit" value="Thêm Mới" name="btnAdd" class="btn btn-info" />
				<input type="reset" name="btnReset" class="btn btn-primary">
			</div>
		</div>
	</form>
</div>