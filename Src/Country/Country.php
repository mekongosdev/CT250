<?php 

include_once("CountryController.php");
$sqlSelect = "SELECT `CountryId`, `CountryName`, `CountryDetails` FROM `country`";
$list_country= mysql_query($sqlSelect);

?>
<h3 class="w3_inner_tittle two text-center">Quản lý nguồn gốc xuất xứ</h3>
<a class="btn btn-primary" href="?page=AddCountry">THÊM <i class="fa fa-plus"></i></a> 

<table id="myTable" class="table-striped table-bordered table-hover table-condensed">
	<thead >
		<tr>
			<th><strong>STT</strong></th>
			<th><strong>Tên Nơi Xuất Xứ</strong></th>
			<th><strong>Mô Tả</strong></th>
			<th><strong>Phương Thức</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$num = 1;
		while(list($CountryId,$name, $details) = mysql_fetch_array($list_country))
		{
			?>
			<tr>
				<td class="col-md-1"><?= $num;?> </td>
				<td class="col-md-3"><?= $name;?> </td>
				<td class="col-md-6"><?= $details;?> </td>
				<td class="text-center col-md-2">
					<a class="btn btn-warning btn" href="?page=UpdateCountry&CountryId=<?php echo $CountryId; ?>"><i class="fa fa-edit"></i></a>
					<a class='btn btn-danger' href="?page=DeleteCountry&CountryId=<?php echo $CountryId; ?>" onclick="return confirm('Bạn có chắc chắn xóa bản ghi này không?')"><i class="fa fa-remove"></i></a>
				</td>     
			</tr>
			<?php
			$num++;
		}
		?>
	</tbody>
</table>