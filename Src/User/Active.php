<?php
if(isset($_GET["taikhoan"])&&isset($_GET["ma"])){
	$taikhoan = $_GET["taikhoan"];
	$ma = $_GET["ma"];
	$result = mysql_query("SELECT * FROM user WHERE Username='$taikhoan' AND Status='$ma'");
	if(mysql_num_rows($result) > 0){
		mysql_query("UPDATE user SET Username=1 WHERE Username='$taikhoan'");
		echo "Chúc mừng bạn kích hoạt thành công! Bây giờ bạn đã có thể đăng nhập!";
	}
	else{
		echo "Mã kích hoạt không đúng!";
	}
}
?>