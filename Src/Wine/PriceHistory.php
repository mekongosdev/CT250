<?php 
include_once("../Src/Wine/WineController.php");
if(isset($_GET['WineId'])){
	$WineId=$_GET['WineId'];
	$sql="SELECT TimeId, PurchasePrice, SellingPrice, Note FROM time_wine where WineId = '".$WineId."'";
	$pricehistory = mysql_query($sql) or trigger_error(mysql_error().$sql);
}else{
	$sql="SELECT WineId, TimeId, PurchasePrice, SellingPrice, Note FROM time_wine";
	$pricehistory = mysql_query($sql) or trigger_error(mysql_error().$sql);
}
?>
<h3 class="w3_inner_tittle two text-center">Lịch sử giá rượu</h3>
<a class="btn btn-primary" href="?page=AddWinePrice">THÊM <i class="fa fa-plus"></i></a> 

<table id="table" class="table-striped table-bordered table-hover table-condensed">
	<thead >
		<tr>
			<th><strong>STT</strong></th>
			<th><strong>Tên rượu</strong></th>
			<th><strong>Thời điểm</strong></th>
			<th><strong>Giá mua</strong></th>
			<th><strong>Giá bán</strong></th>
			<th><strong>Ghi chú</strong></th>
			<th><strong>Phương Thức</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$num = 1;
		while(list($TimeId, $PurchasePrice, $SellingPrice, $Note) = mysql_fetch_array($pricehistory))
		{
			?>
			<tr>
				<td class="col-md-1"><?= $num;?> </td>
				<?php 
				$result = searchWine($WineId);
				if(isset($result))
				{
					list($WineId,$WineName)=mysql_fetch_array($result) or trigger_error(mysql_error().$result);
				} ?>
				<td class="col-md-1"><?= $WineName;?> </td>
				<?php 
				$result = searchTime($TimeId);
				if(isset($result))
				{
					list($TimeId,$ApplicationTime)=mysql_fetch_array($result);
				} ?>
				<td class="col-md-1"><?= $ApplicationTime;?> </td>
				<td class="col-md-1"><?= $PurchasePrice;?> </td>
				<td class="col-md-1"><?= $SellingPrice;?> </td>
				<td class="col-md-1"><?= $Note;?> </td>
				<td class="text-center col-md-1">
					<a class='btn btn-warning' href="?page=UpdateWinePrice&WineId=<?=$WineId; ?>&&TimeId=<?=$TimeId?>"><i class="fa fa-edit"></i></a>
					<a class="btn btn-danger" href="?page=DeleteWinePrice&WineId=<?=$WineId; ?>&&TimeId=<?=$TimeId?>" onclick="return confirm('Bạn có chắc chắn xóa loại rượu này không?')"><i class="fa fa-remove"></i></a>
				</td>     
			</tr>
			<?php
			$num++;
		}
		?>
	</tbody>
</table>