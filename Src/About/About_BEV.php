<?php

$sqlSelect = "SELECT `AboutName`, `AboutHistory`, `AboutOthers`, `ImgAbout`, `Employeecode` FROM `about`";
extract(mysql_query($sqlSelect));

?>
<h3 class="w3_inner_tittle two text-center">Quản lý giới thiệu</h3>

<div class="col-md-12">
	<div class="col-md-6">
		<span>Tên cửa hàng</span>
		<span>Lịch sử cửa hàng</span>
		<span>Thông tin cửa hàng</span>
	</div>
	<div class="col-md-6">
		<img src="" alt="Hình ảnh về cửa hàng">
	</div>
	<div class="col-md-12">
		<div class="col-md-3 alert alert-info">
			<button type="button" name="button" class="btn">Sửa giới thiệu</button>
		</div>
		<div class="col-md-3 alert alert-success">
			<button type="button" name="button" class="btn">Sửa hình ảnh</button>
		</div>
		<div class="col-md-3 alert alert-danger">
			<button type="button" name="button" class="btn btn-danger">Xóa giới thiệu</button>
		</div>
		<div class="col-md-3 alert alert-danger">
			<button type="button" name="button" class="btn btn-danger">Xóa hình ảnh</button>
		</div>
	</div>
</div>
					<!-- <form  method="post" action="">
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
</table> -->
