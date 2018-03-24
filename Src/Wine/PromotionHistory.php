<?php 
if(isset($_GET['WineId'])){
	$sql="SELECT WineId, PromotionId FROM promotion_wine where WineId = '".$_GET['WineId']."'";
	$promotionhistory = mysql_query($sql) or trigger_error(mysql_error().$sql);
}else{
	$sql="SELECT WineId, PromotionId FROM promotion_wine";
	$promotionhistory = mysql_query($sql) or trigger_error(mysql_error().$sql);
}
?>
<h3 class="w3_inner_tittle two text-center">Lịch sử khuyến mãi</h3>
<a class="btn btn-primary" href="?page=AddWinePromotion">THÊM <i class="fa fa-plus"></i></a> 
<br>
<br>
<table id="myTable" class="table-striped table-hover">
	<thead >
		<tr>
			<th><strong>STT</strong></th>
			<th><strong>Tên rượu</strong></th>
			<th><strong>Khuyến mãi</strong></th>
			<th><strong>Tỷ lệ giảm giá</strong></th>
			<th><strong>Ngày bắt đầu</strong></th>
			<th><strong>Ngày kết thúc</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$num = 1;
		while(list($WineId,$PromotionId) = mysql_fetch_array($promotionhistory))
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
				$result = searchPromotion($PromotionId);
				if(isset($result))
				{
					list($PromotionId,$PromotionName, $PromotionDiscount, $PromotionActive, $PromotionClose, $PromotionOpen)=mysql_fetch_array($result) or trigger_error(mysql_error().$result);
				} ?>
				<td class="col-md-1"><?= $PromotionName;?> </td>
				<td class="col-md-1"><?= $PromotionDiscount;?> </td>
				<td class="col-md-1"><?= $PromotionOpen;?> </td>
				<td class="col-md-1"><?= $PromotionClose;?> </td>
			</tr>
			<?php
			$num++;
		}
		?>
	</tbody>
</table>