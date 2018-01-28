

<?php 

include_once("CategoryController.php");
$sqlSelect = "SELECT `CategoryId`, `CategoryName`, `CategoryDescription` FROM Category";
$list_category= mysql_query($sqlSelect);

?>
<h3 class="w3_inner_tittle two text-center">Quản lý danh mục rượu</h3>
<a class="btn btn-primary" href="?page=AddCategory">THÊM <i class="fa fa-plus"></i></a> 

<table id="myTable" class="table-striped table-bordered table-hover table-condensed">
	<thead >
		<tr>
			<th><strong>STT</strong></th>
			<th><strong>Danh Mục</strong></th>
			<th><strong>Mô Tả</strong></th>
			<th><strong>Phương Thức</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$num = 1;
		while(list($CategoryId, $name, $details) = mysql_fetch_array($list_category))
		{
			?>
			<tr>
				<td class="col-md-1"><?= $num;?> </td>
				<td class="col-md-3"><?= $name;?> </td>
				<td class="col-md-6"><?= $details;?> </td>
				<td class="text-center col-md-2">
					<a class="btn btn-warning btn" href="?page=UpadateCategory&CategoryId=<?php echo $CategoryId; ?>"><i class="fa fa-edit"></i></a>
					<a class='btn btn-danger' href="?page=DeleteCategory&CategoryId=<?php echo $CategoryId; ?>" onclick="return confirm('Bạn có chắc chắn xóa bản ghi này không?')"><i class="fa fa-remove"></i></a>
				</td>     
			</tr>
			<?php
			$num++;
		}
		?>
	</tbody>
</table>
