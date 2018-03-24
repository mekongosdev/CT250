<?php 

include_once("RoleController.php");
$sqlSelect = "SELECT `RoleId`, `RoleName`, `RoleDetails`, `RoleActive` FROM `Role`";
$list_Role= mysql_query($sqlSelect);

?>
<h3 class="w3_inner_tittle two text-center">Quản lý quyền</h3>
<a class="btn btn-primary" href="?page=AddRole">THÊM <i class="fa fa-plus"></i></a> 
</br>
</br>
<table id="myTable" class="table-striped table-hover">
	<thead >
		<tr>
			<th><strong>STT</strong></th>
			<th><strong>Tên Quyền</strong></th>
			<th><strong>Mô Tả</strong></th>
			<th><strong>Tình Trạng</strong></th>
			<th><strong>Phương Thức</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$num = 1;
		while(list($RoleId, $name, $details,$active) = mysql_fetch_array($list_Role))
		{
			?>
			<tr>
				<td class="col-md-1"><?= $num;?> </td>
				<td class="col-md-3"><?= $name;?> </td>
				<td class="col-md-3"><?= $details;?> </td>
				<td class="col-md-3"><?= $active;?> </td>
				<td class="text-center col-md-6">
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
