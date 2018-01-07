
<?php 

include_once("CategoryController.php");


if(isset($_GET['id']))
{
	deleteCategory($_GET['id']);
	echo "<script>window.location.href='Category.php'</script>";
}
$sqlSelect = "SELECT `CategoryId`, `CategoryName`, `CategoryDescription` FROM Category";
$list_category= mysql_query($sqlSelect);

?>



<!-- <div class="col-sm-12"> -->
	<div class="row">
		<div >
			<h2 align="center">Loại rượu</h2>
		</div>
	</div>
	
	<div class="row">
		<table id="tableluna" class="table table-striped table-responsive" cellpadding="0" width="" border="1" >          
			<thead>
				<tr>
					<th><strong>STT</strong></th>
					<th><strong>Tên</strong></th>
					<th><strong>Mô Tả</strong></th>
					<th><strong>Phương Thức</strong></th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$num = 1;
				while(list($id, $name, $details) = mysql_fetch_array($list_category))
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
<!-- </div> -->
