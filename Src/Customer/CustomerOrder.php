<table id="myTable" class="table-striped table-hover">
	<thead >
		<tr>
			<th><strong>STT đơn hàng</strong></th>
			<th><strong>Tên Rượu</strong></th>
            <th><strong>Số lượng mua</strong></th>
			<th><strong>Ngày Đặt</strong></th>	
			<th><strong>Ngày Nhận</strong></th>
			<th><strong>Nơi Nhận</strong></th>
			<th><strong>Người Nhận</strong></th>
			<th><strong>HTTT</strong></th>
			<th><strong>Giá Bán</strong></th>
            <th><strong>Trại Thái</strong></th>
            <th><strong>Hóa đơn</strong></th>
		</tr>
	</thead>
    <tbody>
<?php

$result = mysql_query(
"SELECT 
o.OrderId,w.WineName ,o.OrderCreateDate, o.OrderDeliverDate,
o.OrderDeliverPlace, o.OrderStatus, u.FullName, 
p.PaymentMethodName,or1.WineSoldPrice, or1.WineOrderQuantity 
FROM `order` o
JOIN paymentmethod p ON o.PaymentMethodId = p.PaymentMethodId
JOIN user u ON o.Username = u.Username
JOIN orderwinedetails or1 ON o.OrderId = or1.OrderId 
JOIN wine w ON or1.WineOrderId = w.WineId
LIMIT 0,25");
; 

while($row = mysql_fetch_array($result))
{
?>
<tr>
            <td><?php echo $row["OrderId"] ?></td>
            <td><?php echo $row["WineName"] ?></td>
            <td><?php echo $row["WineOrderQuantity"] ?></td>
            <td><?php echo $row["OrderCreateDate"] ?></td>
            <td><?php echo $row["OrderDeliverDate"] ?></td>
            <td><?php echo $row["OrderDeliverPlace"] ?></td>
            <td><?php echo $row["FullName"] ?></td>
            <td><?php echo $row["PaymentMethodName"] ?></td>
            <td><?php echo $row["WineSoldPrice"] ?></td>
            <td><?php echo $row["OrderStatus"] ?></td>
            <td>
            <a class="btn btn-info btn" href="#"><i class="fa fa-print"></i></a>
            </td>
</tr>
 <?php

				}
				?>
	</tbody>
</table>