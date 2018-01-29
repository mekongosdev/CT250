<?php 
$sql="SELECT WineId, WineName, WineStrength, WineUpdateDate,WineQuantity, wine.CategoryId, wine.PublisherId, wine.CountryId FROM wine, category, country, publisher WHERE wine.CategoryId = category.CategoryId AND wine.PublisherId = publisher.PublisherId AND wine.CountryId = country.CountryId";
$listwine = mysql_query($sql) or trigger_error(mysql_error().$sql);
?>
<h3 class="w3_inner_tittle two text-center">Quản lý Rượu</h3>
<a class="btn btn-primary" href="?page=AddWine">THÊM <i class="fa fa-plus"></i></a> 


<table id="table" class="table-striped table-bordered table-hover table-condensed">
	<thead >
		<tr>
			<th><strong>STT</strong></th>
			<th><strong>Tên Rượu</strong></th>
			<th><strong>Nồng Độ</strong></th>
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
		while(list($WineId,$name,$strength,$wineupdate,$quantity,$idCat, $idPub,$idCountry) = mysql_fetch_array($listwine))
		{
			?>
			<tr>
				<td class="col-md-1"><?= $num;?> </td>
				<td class="col-md-1"><?= $name;?> </td>
				<td class="col-md-1"><?= $strength;?> </td>
				<td class="col-md-1"><?= $wineupdate;?> </td>
				<td class="col-md-1"><?= $quantity;?> </td>
				<?php 
				$result = searchCategory($idCat);
				if(isset($result))
				{
					list($CategoryId,$CategoryName)=mysql_fetch_array($result);
				} ?>
				<td class="col-md-1"><?= $CategoryName?> </td>
				<?php 
				$result = searchPublisher($idPub);
				if(isset($result))
				{
					list($PublisherId,$PublisherName)=mysql_fetch_array($result);
				} ?>
				<td class="col-md-1"><?= $PublisherName?> </td>
				<?php 
				$result = searchCountry($idCountry);
				if(isset($result))
				{
					list($CountryId,$CountryName)=mysql_fetch_array($result);
				} ?>
				<td class="col-md-1"><?= $CountryName?> </td>
				<td class="text-center col-md-2">
					<a class='btn btn-success' href="?page=UploadImageWine&&WineId=<?=$WineId?>">
						<i class="fa fa-file-image-o"></i></a>
					<a class="btn btn-warning btn" href="?page=UpdateWine&WineId=<?php echo $WineId; ?>"><i class="fa fa-edit"></i></a>
					<a class='btn btn-danger' href="?page=DeleteWine&WineId=<?php echo $WineId; ?>" onclick="return confirm('Bạn có chắc chắn xóa loại rượu này không?')"><i class="fa fa-remove"></i></a>
					<a class="btn btn-info" href="?page=PriceHistory&WineId=<?php echo $WineId; ?>"><i class="fa fa-history"></i></a>
				</td>     
			</tr>
			<?php
			$num++;
		}
		?>
	</tbody>
</table>