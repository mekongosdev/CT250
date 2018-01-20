<?php 

include_once("NewsController.php");
$sqlSelect = "SELECT `NewsId`, `NewsNames`, `Title`, `NewsContent`, `EmployeeCode` FROM `news`";
$list_News= mysql_query($sqlSelect);

?>
<h3 class="w3_inner_tittle two text-center">Quản lý tin tức</h3>
<a class="btn btn-primary" href="?page=AddNews">THÊM <i class="fa fa-plus"></i></a> 

<table id="table" class="table-striped table-bordered table-hover table-condensed">
	<thead >
		<tr>
			<th><strong>STT</strong></th>
			<th><strong>Tên Tin Tức</strong></th>
			<th><strong>Loại</strong></th>
			<th><strong>Nội dung</strong></th>
			<th><strong>Người lập</strong></th>
			<th><strong>Phương Thức</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$num = 1;
		while(list($NewsId, $Newsname, $title,$content,$employeecode) = mysql_fetch_array($list_Role))
		{
			?>
			<tr>
				<td class="col-md-1"><?= $NewsId;?> </td>
				<td class="col-md-3"><?= $Newsname;?> </td>
				<td class="col-md-6"><?= $title;?> </td>
				<td class="col-md-6"><?= $content;?> </td>
				<td class="col-md-2"><?= $employeecode?></td>
				<td class="text-center col-md-2">
					<a class="btn btn-warning btn" href="?page=UpadateRole&RoleId=<?php echo $RoleId; ?>"><i class="fa fa-edit"></i></a>
					<a class='btn btn-danger' href="?page=DeleteNews&NewsId=<?php echo $NewsId; ?>" onclick="return confirm('Bạn có chắc chắn xóa tin tức này không này không?')"><i class="fa fa-remove"></i></a>
				</td>     
			</tr>
			<?php
			$num++;
		}
		?>
	</tbody>
</table>
