<!DOCTYPE html>
<html lang="vi">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quốc Gia</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!-- Code PHP Insert -->
	<?php
	include_once("../Library/connect.php");
	include_once("../Src/Country/Controller.php");
	$name= "";
	$details ="";
	if(isset($_POST["btnSubmit"]))
	{
		$name = $_POST["txtName"];
		$details = $_POST["txtDetails"];

		addCountry($name, $details);


	}
	?>
	<!-- Code PHP Select & Delete -->
	<?php 
	if(isset($_GET['id']))
	{
		deleteCountry($_GET['id']);
		echo "<script>window.location.href='Index1.php'</script>";
	}

	$sqlSelect = "SELECT `CountryId`, `CountryName`, `CountryDetails` FROM `Country`";
	$list_country = mysql_query($sqlSelect);
	?>
	<!-- Insert quốc gia -->

			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Thêm Mới</button>
		
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel" align="center">Quốc Gia</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form accept-charset="utf-8" method="post" role="form">
						<div class="form-group">
							<label for="txtName" class="col-form-label">Tên Quốc Gia:</label>
							<input type="text" class="form-control" id="txtName" name="txtName">
						</div>
						<div class="form-group">
							<label for="txtchitiet" class="col-form-label">Mô tả chi tiết:</label>
							<textarea class="form-control" id="txtchitiet" name="txtDetails"></textarea>
						</div>

					</div>
					<div class="modal-footer">

						<input type="submit" class="btn btn-success" name="btnSubmit" id="btnSubmit" value="Thêm"/>
					</form>
					<input type="reset" class="btn btn-primary" value="Sửa"/>
					<input type="button" class="btn btn-danger" data-dismiss="modal" value="Đóng"/>
				</div>

			</div>
		</div>
	</div>
	<!-- Lấy danh sách quốc gia trong CSDL -->
	<div class="col-sm-12">
		<div class="row">
			<div >
				<h2 align="center">Country</h2>
			</div>
		</div>
		
		<div class="row">
			<table id="tableluna" class="table table-striped table-responsive" cellpadding="0" width="" border="1" >          
				<thead>
					<tr>
						<th><strong>Num</strong></th>
						<th><strong>Name</strong></th>
						<th><strong>Details</strong></th>
						<th><strong>Action</strong></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$num = 1;
					while(list($id, $name, $details) = mysql_fetch_array($list_country))
					{
						?>
						<tr>
							<td><?= $num;?> </td>
							<td><?= $name;?> </td>
							<td><?= $details;?> </td>
							<td>
								<a class="btn btn-primary" href='#'><i class="fa fa-edit"></i></a>
								<a class='btn btn-danger' href='#' onclick="return confirm('Are you sure?')"><i class="fa fa-remove"><?php $id ?></i></a>
							</td>     
						</tr>
						<?php
						$num++;
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>