

	<?php 

	include_once("ContactController.php");
	$sqlSelect = "SELECT `ContactId`, `Subject`, `Names`, `ContactDate`, `Information`, `Email`, `Phone`, `Address` FROM `contact`";
	$list_contact= mysql_query($sqlSelect);

	?>
	<h3 class="w3_inner_tittle two text-center">Quản lý liên hệ</h3>
	<table id="table" class="table-striped table-bordered table-hover table-condensed">
		<thead >
			<tr>
				<th><strong>STT</strong></th>
				<th><strong>Danh Mục</strong></th>
				<th><strong>Mô Tả</strong></th>
				<th><strong>Phương Thức</strong></th>
				<th><strong>Danh Mục</strong></th>
				<th><strong>Mô Tả</strong></th>
				<th><strong>Phương Thức</strong></th>
				<th><strong>Phương Thức</strong></th>
					<th><strong>Phương Thức</strong></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$num = 1;
			while(list($ContactId, $Subject, $Names, $ContactDate, $Information, $Email, $Phone, $Address) = mysql_fetch_array($list_contact))
			{
				?>
				<tr>
					<td class="col-md-1"><?= $num;?> </td>
					<td class="col-md-3"><?= $Subject;?> </td>
					<td class="col-md-6"><?= $Names;?> </td>
					<td class="col-md-1"><?= $ContactDate;?> </td>
					<td class="col-md-3"><?= $Information;?> </td>
					<td class="col-md-6"><?= $Email;?> </td>
					<td class="col-md-3"><?= $Phone;?> </td>
					<td class="col-md-6"><?= $Address;?> </td>
					<td class="text-center col-md-2">
						
						<a class='btn btn-danger' href="?page=DeleteContac&ContactId=<?php echo $ContactId; ?>" onclick="return confirm('Bạn có chắc chắn xóa bản ghi này không?')"><i class="fa fa-remove"></i></a>
					</td>     
				</tr>
				<?php
				$num++;
			}
			?>
		</tbody>
	</table>
