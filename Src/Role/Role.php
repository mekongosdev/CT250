<?php 

include_once("RoleController.php");
$sqlSelect = "SELECT `RoleId`, `RoleName`, `RoleDescription` FROM Role";
$list_Role= mysql_query($sqlSelect);

?>
<h3 class="w3_inner_tittle two text-center">Quản lý rượu</h3>
<a class="btn btn-primary" href="?page=AddRole">THÊM <i class="fa fa-plus"></i></a> 

<table id="table" class="table-striped table-bordered table-hover table-condensed">
	<thead >
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
		while(list($RoleId, $name, $details) = mysql_fetch_array($list_Role))
		{
			?>
			<tr>
				<td class="col-md-1"><?= $num;?> </td>
				<td class="col-md-3"><?= $name;?> </td>
				<td class="col-md-6"><?= $details;?> </td>
				<td class="text-center col-md-2">
					<a class="btn btn-warning btn" href="?page=UpadateRole&RoleId=<?php echo $RoleId; ?>"><i class="fa fa-edit"></i></a>
					<a class='btn btn-danger' href="?page=DeleteRole&RoleId=<?php echo $RoleId; ?>" onclick="return confirm('Bạn có chắc chắn xóa bản ghi này không?')"><i class="fa fa-remove"></i></a>
				</td>     
			</tr>
			<?php
			$num++;
		}
		?>
	</tbody>
</table>
