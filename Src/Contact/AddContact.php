<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ADD Contact</title>
	<link rel="stylesheet" href="">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<?php
	include_once("../../Library/connect.php");
	include_once("../../Src/Contact/ContactController.php");
	$name="";
	$subject="";
	$datewrite=date_default_timezone_set('Asia/Ho_Chi_Minh');
	$information="";
	$email="";
	$phone="";
	$address1="";
	if(isset($_POST["btnContactUs"]))
	{
		$name = $_POST["txtName"];
		$subject=$_POST["slSubject"];
		$datewrite=date('Y-m-d',  strtotime($_POST['txtDate']));
		$information=$_POST["message"];
		$email = $_POST["txtEmail"];
		$phone=$_POST["txtPhone"];
		$address1 = $_POST["txtAddress"];
		addContact($name,$subject,$datewrite,$information,$email,$phone,$address1);
		echo '<script> alert("Liên hệ thành công");</script>';
		 echo "<script>window.location.href='../../index.php'</script>";
	}
	?>
	<div class="jumbotron jumbotron-sm">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-12">
					<h1 class="h1">
						Liên Hệ <small>Hãy Liên hệ với Windsor khi cần</small></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="well well-sm">
						<form method="post"  name="frmForm">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="txtName">
										Họ và tên:</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
										</span>
										<input type="text" class="form-control" id="txtName" placeholder="Nhập vào họ và tên" required name="txtName" /></div>
									</div>
									<div class="form-group">
										<label for="email">
										Địa chỉ mail</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
										</span>
										<input type="email" class="form-control" id="txtEmail" placeholder="Enter email" required name="txtEmail" /></div>
									</div>
									<div class="form-group">
										<label for="txtName">
										Ngày liên hệ:</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
										</span>
										<input type="date" class="form-control" id="txtDate" name="txtDate"  required /></div>
									</div>
									<div class="form-group">
										<label for="subject">
										Chủ Đề</label>
										
										<?php
										blindSubjectList()
										?>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="txtName">
										Số điện thoại:</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-ok-sign"></span>
										</span>
										<input type="tel" class="form-control" id="txtPhone" placeholder="Nhập vào số điện thoại" required name="txtPhone" /></div>
									</div>
									<div class="form-group">
										<label for="txtName">
										Địa chỉ của bạn:</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-tree-conifer"></span>
										</span>
										<input type="text" class="form-control" id="txtAddress" placeholder="Nhập vào địa chỉ" required name="txtAddress" /></div>
									</div>
									<div class="form-group">
										<label for="name">
										Thông Tin Liên Hệ</label>
										<textarea name="message" id="message" class="form-control" rows="9" cols="25" required
										placeholder="Nhập vào thông tin bạn muốn gửi"></textarea>
									</div>

								</div>
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary pull-right" id="btnContactUs" name="btnContactUs">
									Gửi</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<!-- //<form> -->
						<legend><span class="glyphicon glyphicon-globe"></span> Windsor</legend>
						<address>
							<strong>Đại Học Cần thơ</strong><br>
							Khu II<br>
							Bô Môn CNPM<br>
							<abbr title="Phone">
							P: Đặng Tuấn Huy</abbr>
							Phone(0963505927)
						</address>
						<address>
							<strong>email</strong><br>
							<a href="mailto:#">huyb1505883@student.ctu.edu.vn</a>
						</address>
						<!--    </form> -->
					</div>
				</div>
			</div>

		</body>
		</html>