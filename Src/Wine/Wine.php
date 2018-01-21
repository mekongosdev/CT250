<?php 
$sql="
SELECT 
`WineId`, `WineName`, `WineStrength`, 
`WinePrice`,`WineUpdateDate`, `WineQuantity`, 
`CategoryId`, `PublisherId`, `CountryId` 
FROM wine, country,category,country
WHERE 
wine.CategoryId = category.CategoryId
AND
wine.CountryId = country.CountryId
AND
wine.PublisherId = publisher.PublisherId";
$listwine = mysql_query($sql);
?>
<h3 class="w3_inner_tittle two text-center">Quản lý Rượu</h3>
<a class="btn btn-primary" href="?page=AddWine">THÊM <i class="fa fa-plus"></i></a> 

<table id="table" class="table-striped table-bordered table-hover table-condensed">
	<thead >
		<tr>
			<th><strong>STT</strong></th>
			<th><strong>Tên Rượu</strong></th>
			<th><strong>Nồng Độ</strong></th>
			<th><strong>Giá Bán</strong></th>
			<th><strong>Ngày cập nhật</strong></th>
			<th><strong>Số lượng</strong></th>
			<th><strong>Loại</strong></th>
			<th><strong>Nhà sản xuất</strong></th>
			<th><strong>Quốc gia</strong></th>
			<th><strong>Phương Thức</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$num = 1;
		while(list($WineId,$name,$strength,$price,$wineupdate,$quantity,$idCat, $idPub,$idCountry) = mysql_fetch_array($listwine))
		{
			?>
			<tr>
				<td class="col-md-1"><?= $num;?> </td>
				<td class="col-md-3"><?= $name;?> </td>
				<td class="col-md-6"><?= $strength;?> </td>
				<td class="col-md-6"><?= $price;?> </td>
				<td class="col-md-6"><?= $wineupdate;?> </td>
				<td class="col-md-6"><?= $quantity;?> </td>
				<td class="col-md-6"><?= $idCat?> </td>
				<td class="col-md-6"><?= $idPub?> </td>
				<td class="col-md-6"><?= $idCountrb?> </td>
				<td class="text-center col-md-2">
					<a class="btn btn-warning btn" href="?page=UpdateWine&WineId=<?php echo $WineId; ?>"><i class="fa fa-edit"></i></a>
					<a class='btn btn-danger' href="?page=DeletePublisher&PublisherId=<?php echo $WineId; ?>" onclick="return confirm('Bạn có chắc chắn xóa loại rượu này không?')"><i class="fa fa-remove"></i></a>
				</td>     
			</tr>
			<?php
			$num++;
		}
		?>
	</tbody>
</table>