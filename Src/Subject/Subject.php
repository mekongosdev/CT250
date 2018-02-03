<?php 

include_once("SubjectController.php");
$sqlSelect = "SELECT `SubjectId`, `SubjectName` FROM Subject";
$list_Subject= mysql_query($sqlSelect);

?>
<h3 class="w3_inner_tittle two text-center">Quản lý chủ đề liên hệ</h3>
<a class="btn btn-primary" href="?page=AddSubject">THÊM <i class="fa fa-plus"></i></a> 
<br>
<br>
<table id="myTable" class="table-striped table-hover">
	<thead >
		<tr>
			<th><strong>STT</strong></th>
			<th><strong>Tên</strong></th>
			<th><strong>Phương thức</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$num = 1;
		while(list($SubjectId, $SubjectName) = mysql_fetch_array($list_Subject))
		{
			?>
			<tr>
				<td class="col-md-1"><?= $num;?> </td>
				<td class="col-md-3"><?= $SubjectName;?> </td>
				<td class="text-center col-md-2">
					<a class="btn btn-warning btn" href="?page=UpadateSubject&SubjectId=<?php echo $SubjectId; ?>"><i class="fa fa-edit"></i></a>
					<a class='btn btn-danger' href="?page=DeleteSubject&SubjectId=<?php echo $SubjectId; ?>" onclick="return confirm('Bạn có chắc chắn xóa bản ghi này không?')"><i class="fa fa-remove"></i></a>
				</td>     
			</tr>
			<?php
			$num++;
		}
		?>
	</tbody>
</table>
