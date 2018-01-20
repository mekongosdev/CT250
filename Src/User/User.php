<?php 

include_once("User.php");
$sqlSelect = "
SELECT `FullName`, `Sex`, `Address`, `Phone`, `Email`, `DateOfBirth`,`Active`, `Status`, `Role` 
FROM `user`";
$list_User= mysql_query($sqlSelect);

?>
<h3 class="w3_inner_tittle two text-center">Quản lý người dùng</h3>
<!-- <a class="btn btn-primary" href="?page=">THÊM <i class="fa fa-plus"></i></a> --> 

<table id="table" class="table-striped table-bordered table-hover table-condensed">
	<thead >
		<tr>
			<th><strong>STT</strong></th>
			<th><strong>Tên Người dùng</strong></th>
			<th><strong>Giới tính</strong></th>
			<th><strong>Địa chỉ</strong></th>
			<th><strong>Số điện thoại</strong></th>
			<th><strong>Email</strong></th>
			<th><strong>Ngày sinh</strong></th>
			<th><strong>Trạng thái</strong></th>
			<th><strong>Khóa/Mở</strong></th>
			<th><strong>Quyền</strong></th>
			<th><strong>Phương Thức</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$num = 1;
		while(list($User,$Sex,$address,$phone,$email,$date,$active,$status,$role) = mysql_fetch_array($list_User))
		{
			?>
			<tr>
				<td class="col-md-1"><?= $num;?> </td>
				<td class="col-md-3"><?= $User;?> </td>
				<td class="col-md-6"><?= $Sex;?> </td>
				<td class="col-md-6"><?= $address;?> </td>
				<td class="col-md-6"><?= $phone;?> </td>
				<td class="col-md-6"><?= $email;?> </td>
				<td class="col-md-6"><?= $date;?> </td>
				<td class="col-md-3"><?= $active;?></td>
				<td class="col-md-4"><?= $status;?></td>
				<td class="col-md-2"><?= $role;?></td>	
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
