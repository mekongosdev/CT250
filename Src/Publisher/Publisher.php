<?php 

include_once("PublisherController.php");
$sqlSelect = "SELECT `PublisherId`, `PublisherName`, `PublisherDescription` FROM `Publisher`";
$list_publisher= mysql_query($sqlSelect);

?>
<h3 class="w3_inner_tittle two text-center">Quản lý Nhà Sản Xuất</h3>
<a class="btn btn-primary" href="?page=AddPublisher">THÊM <i class="fa fa-plus"></i></a> 

<table id="table" class="table-striped table-bordered table-hover table-condensed">
	<thead >
		<tr>
			<th><strong>STT</strong></th>
			<th><strong>Tên Nhà Sản Xuất</strong></th>
			<th><strong>Mô Tả</strong></th>
			<th><strong>Phương Thức</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$num = 1;
		while(list($PublisherId, $name, $details) = mysql_fetch_array($list_publisher))
		{
			?>
			<tr>
				<td class="col-md-1"><?= $num;?> </td>
				<td class="col-md-3"><?= $name;?> </td>
				<td class="col-md-6"><?= $details;?> </td>
				<td class="text-center col-md-2">
					<a class="btn btn-warning btn" href="?page=UpdatePublisher&PublisherId=<?php echo $PublisherId; ?>"><i class="fa fa-edit"></i></a>
					<a class='btn btn-danger' href="?page=DeletePublisher&PublisherId=<?php echo $PublisherId; ?>" onclick="return confirm('Bạn có chắc chắn xóa bản ghi này không?')"><i class="fa fa-remove"></i></a>
				</td>     
			</tr>
			<?php
			$num++;
		}
		?>
	</tbody>
</table>
