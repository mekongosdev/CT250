<?php

include_once("PromotionController.php");
$sqlSelect = "SELECT `PromotionId`, `PromotionName`, `PromotionDiscount`, `PromotionContent`, `PromotionActive`, `PromotionClose`, `PromotionOpen` FROM `Promotion`";
$list_Promotion= mysql_query($sqlSelect);

?>
<h3 class="w3_inner_tittle two text-center">Quản lý Khuyến mãi</h3>
<a class="btn btn-primary" href="?page=AddPromotion">THÊM <i class="fa fa-plus"></i></a>

<table id="table" class="table-striped table-bordered table-hover table-condensed">
	<thead >
		<tr>
			<th><strong>STT</strong></th>
			<th><strong>Tên Quyền</strong></th>
			<th><strong>Giảm giá</strong></th>
			<th><strong>Mô tả Khuyến mãi</strong></th>
			<th><strong>Ngày bắt đầu</strong></th>
			<th><strong>Ngày kết thúc</strong></th>
			<th><strong>Tình trạng</strong></th>
			<th><strong>Phương Thức</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php
		$num = 1;
		while(list($PromotionId, $name, $discount, $content, $active, $close, $open) = mysql_fetch_array($list_Promotion))
		{
			?>
			<tr>
				<td class="col-md-1"><?= $num;?> </td>
				<td class="col-md-3"><?= $name;?> </td>
				<td class="col-md-6"><?= $details;?> </td>
				<td class="col-md-6"><?= $content;?> </td>
				<td class="col-md-6"><?= $active;?> </td>
				<td class="col-md-6"><?= $close;?> </td>
				<td class="col-md-6"><?= $open;?> </td>
				<td class="text-center col-md-2">
					<a class="btn btn-warning btn" href="?page=UpadatePromotion&PromotionId=<?php echo $PromotionId; ?>"><i class="fa fa-edit"></i></a>
					<a class='btn btn-danger' href="?page=DeletePromotion&PromotionId=<?php echo $PromotionId; ?>" onclick="return confirm('Bạn có chắc chắn xóa bản ghi này không?')"><i class="fa fa-remove"></i></a>
				</td>
			</tr>
			<?php
			$num++;
		}
		?>
	</tbody>
</table>
