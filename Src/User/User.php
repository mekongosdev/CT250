<?php 

$sqlSelect = "SELECT `UserName`, `FullName`, `Sex`, `Address`, `Phone`, `Email`, `DateOfBirth`, `Status`, `Role` FROM `user`";
$list_User= mysql_query($sqlSelect);

?>
<h3 class="w3_inner_tittle two text-center">Quản lý người dùng</h3>

<table id="myTable" class="table-striped table-bordered table-hover table-condensed">
	<thead >
		<tr>
			<th><strong>STT</strong></th>
			<th><strong>Tài Khoản</strong></th>
			<th><strong>Học Tên</strong></th>
			<th><strong>Giới tính</strong></th>
			<th><strong>Địa chỉ</strong></th>
			<th><strong>Số điện thoại</strong></th>
			<th><strong>Email</strong></th>
			<th><strong>Ngày sinh</strong></th>
			<th><strong>Quyền</strong></th>
			<th><strong>Trạng thái</strong></th>
			<th><strong>Khóa/Mở</strong></th>
			<th><strong>Phương Thức</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$num = 1;
		while(list($UserId,$FullName, $Sex,$address,$phone,$email,$date,$status,$roleId) = mysql_fetch_array($list_User))
		{
			?>
			<tr>
				<td class="col-md-1"><?= $num;?> </td>
				<td class="col-md-3"><?= $UserId;?> </td>
				<td class="col-md-3"><?= $FullName;?> </td>
				<td class="col-md-2"><?= ($Sex == 1) ? "Nam" : "Nữ"; ?> </td>
				<td class="col-md-6"><?= $address;?> </td>
				<td class="col-md-6"><?= $phone;?> </td>
				<td class="col-md-6"><?= $email;?> </td>
				<td class="col-md-6"><?= $date;?> </td>
				<?php 
				$result = searchRole($roleId);
				if(isset($result))
				{
					list($roleId,$roleName)=mysql_fetch_array($result);
					
				} ?>
				<td class="col-md-2"><?= $roleName;?></td>	
				<td class="col-md-6">
					<?php 
						if($status==1){
							echo 'Đã kích hoạt';
						}else{
							echo 'Chưa kích hoạt';
						}
					?>
					
				</td>
				<td class="col-md-6" >
					<form  method="post" action="">
					<?php 
						if($status==1){
							echo '<a class="btn btn-danger" href="?page=ActiveUser&Status='.$status.'&UserId='.$UserId.'">Đóng</a>';
						}else{
							echo '<a class="btn btn-primary" href="?page=ActiveUser&Status='.$status.'&UserId='.$UserId.'">Mở</a>';
						}
					?>
				</form>
				</td>
				<td class="text-center col-md-2">
					<a class='btn btn-danger' href="?page=DeleteUser&UserId=<?php echo $UserId; ?>" onclick="return confirm('Bạn có chắc chắn xóa bản ghi này không?')"><i class="fa fa-remove"></i></a>
				</td>     
			</tr>
			<?php
			$num++;
		}
		?>
	</tbody>
</table>
