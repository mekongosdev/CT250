<?php 

include_once("PaymentMethodController.php");
$sqlSelect = "SELECT `PaymentMethodId`, `PaymentMethodName`, `PaymentMethodDescription` FROM PaymentMethod";
$list_PaymentMethod= mysql_query($sqlSelect);

?>
<h3 class="w3_inner_tittle two text-center">Quản lý hình thức thanh toán</h3>
<a class="btn btn-primary" href="?page=AddPaymentMethod">THÊM <i class="fa fa-plus"></i></a> 

<table id="table" class="table-striped table-bordered table-hover table-condensed">
	<thead >
		<tr>
			<th><strong>STT</strong></th>
			<th><strong>Tên HTTT</strong></th>
			<th><strong>Mô Tả</strong></th>
			<th><strong>Phương Thức</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$num = 1;
		while(list($PaymentMethodId, $name, $details) = mysql_fetch_array($list_PaymentMethod))
		{
			?>
			<tr>
				<td class="col-md-1"><?= $num;?> </td>
				<td class="col-md-3"><?= $name;?> </td>
				<td class="col-md-6"><?= $details;?> </td>
				<td class="text-center col-md-2">
					<a class="btn btn-warning btn" href="?page=UpadatePaymentMethod&PaymentMethodId=<?php echo $PaymentMethodId; ?>"><i class="fa fa-edit"></i></a>
					<a class='btn btn-danger' href="?page=DeletePaymentMethod&PaymentMethodId=<?php echo $PaymentMethodId; ?>" onclick="return confirm('Bạn có chắc chắn xóa bản ghi này không?')"><i class="fa fa-remove"></i></a>
				</td>     
			</tr>
			<?php
			$num++;
		}
		?>
	</tbody>
</table>
