<?php 
$query ="SELECT FullName, Phone, Email, Address, IC
FROM user 
WHERE Username = '".$_SESSION['username']."'";
$result = mysql_query($query) or die(mysql_errno());
$row = mysql_fetch_array($result,MYSQL_ASSOC);
$username = $_SESSION['username'];
$hoten = $row['FullName'];
$email = $row['Email'];
$phone = $row['Phone'];
$address = $row['Address'];
$ic = $row['IC'];
		//Cập Nhật thông tin khách hàng
if(isset($_POST['btnCapNhat'])){
	$query = "SELECT FullName, Phone, Email, Address, IC
	FROM user 
	WHERE Username = '" . $_SESSION['username'] . "'";

	$result = mysql_query($query) ;
	$row = mysql_fetch_row($result);
	if($_POST['txtMatKhau1']!="")
	{
		$matkhau=$_POST['txtMatKhau1'];
	}
	$hoten=$_POST['txtHoTen'];
	$address  = $_POST['txtDiaChi'];
	$phone = $_POST['txtDienThoai'];
	$ic =$_POST['txtIC'];
	$email = $_POST['txtEmail'];

	$kiemtra = kiemTra();
	if($kiemtra==""){
		//Khach hang co thay doi mat khau
		if($_POST['txtMatKhau1']!=""){
			mysql_query(
				"UPDATE `user`
				SET FullName='".$hoten."',Address='".$address."',
				Phone='".$phone."',IC='".$ic."',Email='".$email."',Password='".md5($_POST['txtMatKhau1'])."'
				WHERE Username = '" . $_SESSION['username'] . "'") 
			;
		}
		//Khach hang khong thay doi mat khau
		else{ 
			mysql_query("UPDATE `user`
				SET FullName='".$hoten."',Address='".$address."',
				Phone='".$phone."',IC='".$ic."',Email='".$email."'
				WHERE Username = '" . $_SESSION['username'] . "'") 
			;
		}
		echo "<script>alert('Cập Nhật Thành Công!');window.location='./';</script>";
	}else{
		echo $kiemtra;
	}
}

function kiemTra(){
	if($_POST['txtHoTen']==""||$_POST['txtDiaChi']==""){
		return "<p>Nhập thông tin vào nhé</p>";
	}
	
	elseif(strlen($_POST['txtMatKhau1'])<=5 && strlen($_POST['txtMatKhau1'])>0){
		return "<p>Password . </p>";
	}
	else{
		return "";
	}
}

?>

<div class="container">
	
	<h2 class="text-center">Cập Nhật Thông Tin Khách Hàng</h2>

	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
		<div class="form-group">

			<label for="lblusername" class="col-sm-2 control-label">Username(*):  </label>
			<div class="col-sm-10">
				<label class="form-control" style="font-weight:400"><?php echo $username; ?></label>
			</div>
		</div>

		<div class="form-group">   
			<label for="txtEmail" class="col-sm-2 control-label">Email(*):  </label>
			<div class="col-sm-10">
				
				<input type="text" name="txtEmail" id="txtEmail" value="<?php if(isset($email)) echo $email; ?>" class="form-control" placeholder="Email" />
			</div>
		
		</div>  

		<div class="form-group"> 
			<label for="txtMatKhau1" class="col-sm-2 control-label">Passwords(*):  </label>
			<div class="col-sm-10">
				<input type="password" name="txtMatKhau1" id="txtMatKhau1" class="form-control"/>
			</div>
		</div>

		

		<div class="form-group">                         
			<label for="txtHoTen" class="col-sm-2 control-label">Full Name(*):  </label>
			<div class="col-sm-10">
				<input type="text" name="txtHoTen" id="txtHoTen" value="<?php echo $hoten; ?>" class="form-control" placeholder="Giá"/>
			</div>
		</div>

		<div class="form-group"> 
			<label for="txtDiaChi" class="col-sm-2 control-label">Address(*):  </label>
			<div class="col-sm-10">
				<input type="text" name="txtDiaChi" id="txtDiaChi" value="<?php if(isset($address)) echo $address; ?>" class="form-control" placeholder="Địa chỉ"/>
			</div>
		</div>

		<div class="form-group"> 
			<label for="txtDienThoai" class="col-sm-2 control-label">Phone(*):  </label>
			<div class="col-sm-10">
				<input type="text" name="txtDienThoai" id="txtDienThoai" value="<?php if(isset($phone)) echo $phone; ?>" class="form-control" placeholder="Điện thoại" />
			</div>
		</div>
		<div class="form-group"> 
			<label for="txtIC" class="col-sm-2 control-label">Chứng minh nhân dân(*):  </label>
			<div class="col-sm-10">
				<input type="text" name="txtIC" id="txtDienThoai" value="<?php if(isset($ic )) echo $ic; ?>" class="form-control" placeholder="CMND" />
			</div>
		</div>




	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<input type="submit"  class="btn btn-primary" name="btnCapNhat" id="btnCapNhat" value="Update"/>

		</div>
	</div>
</form>
</div>
