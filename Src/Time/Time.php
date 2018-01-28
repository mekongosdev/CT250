<?php 
$sqlSelect = "SELECT `TimeId`, `ApplicationTime` FROM `time`";
$list_Time= mysql_query($sqlSelect);

?>
<h3 class="w3_inner_tittle two text-center">Quản lý Thời gian</h3>
<a class="btn btn-primary" href="?page=AddTime">THÊM <i class="fa fa-plus"></i></a> 
<br>
<br>
<table id="myTable" class="table-striped table-bordered table-hover table-condensed">
	<thead >
		<tr>
			<th><strong>STT</strong></th>
			<th><strong>Thời Gian</strong></th>
			<th><strong>Phương thức</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$num = 1;
		while(list($TimeId, $applicationTime) = mysql_fetch_array($list_Time)){
			?>
			<tr>
				<td class="col-md-1"><?= $num;?> </td>
				<td class="col-md-3"><?= $applicationTime;?> </td>
				<td class="text-center col-md-2">
					<a class="btn btn-warning btn" href="?page=UpadateTime&TimeId=<?=$TimeId?>"><i class="fa fa-edit"></i></a>
					<a class='btn btn-danger' href="?page=DeleteTime&TimeId=<?=$TimeId?>" onclick="return confirm('Bạn có chắc chắn xóa bản ghi này không?')"><i class="fa fa-remove"></i></a>
				</td>     
			</tr>
			<?php
			$num++;
		}
		?>
	</tbody>
</table>