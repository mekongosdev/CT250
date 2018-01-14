	<?php 
	include_once("ContactController.php");
	$ContactId = 0;
	if(isset($_GET['ContactId']))
		$ContactId=$_GET['ContactId'];
	$name="";
	$subject="";
	$datewrite=date_default_timezone_set('Asia/Ho_Chi_Minh');
	$information="";
	$email="";
	$phone="";
	$address1="";
	$result = searchContact($ContactId);
	//Lấy dữ liệu đưa vào mảng
	if(isset($result))
	{
		list($ContactId,$name,$subject)=mysql_fetch_array($result);
	}
	//Cập nhật lại dữ liệu
	if(isset($_POST['btnUpdate']))
	{
		$name = $_POST["txtName"];
		$subject=$_POST["slSubject"];
		$datewrite=date('Y-m-d',  strtotime($_POST['txtDate']));
		$information=$_POST["message"];
		$email = $_POST["txtEmail"];
		$phone=$_POST["txtPhone"];
		$address1 = $_POST["txtAddress"];
		updateContact($ContactId,$name,$subject,$datewrite,$information,$email,$phone,$address1);
		echo '<script> alert("Cập nhật thành công!");</script>';
		echo "<script>window.location.href='?page=contact'</script>";
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
										Mã số:</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-ok"></span>
										</span>
										<input type="text" class="form-control" id="txtNum"  required name="txtNum" 

										value="<?php echo $ContactId ?>" readonly="true" /></div>
									</div>
									<div class="form-group">
										<label for="txtName">
										Họ và tên:</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
										</span>
										<input type="text" class="form-control" id="txtName" placeholder="Nhập vào họ và tên" required name="txtName" 

										value="<?php echo $name ?>" readonly="true" /></div>
									</div>
									<div class="form-group">
										<label for="email">
										Địa chỉ mail</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
										</span>
										<input type="email" class="form-control" id="txtEmail" placeholder="Enter email" required name="txtEmail" value="<?php echo $email ?>" /></div>
									</div>
									<div class="form-group">
										<label for="txtName">
										Ngày liên hệ:</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
										</span>
										<input type="date" class="form-control" id="txtDate" name="txtDate"  required value="<?php echo $datewrite ?>" /></div>
									</div>
									<div class="form-group">
										<label for="subject">
										Chủ Đề</label>
										<!-- <select id="subject" name="subject" class="form-control" required="required">
											<option value="na" selected="">Choose One:</option>
											<option value="service">General Customer Service</option>
											<option value="suggestions">Suggestions</option>
											<option value="product">Product Support</option>
										</select> -->
										<?php
										blindSubjectList($subject);
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
										<input type="tel" class="form-control" id="txtPhone" placeholder="Nhập vào số điện thoại" required name="txtPhone" value="<?php echo $phone ?>" /></div>
									</div>
									<div class="form-group">
										<label for="txtName">
										Địa chỉ của bạn:</label>
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-tree-conifer"></span>
										</span>
										<input type="text" class="form-control" id="txtAddress" placeholder="Nhập vào địa chỉ" required name="txtAddress" value="<?php echo $address1 ?>" /></div>
									</div>
									<div class="form-group">
										<label for="name">
										Thông Tin Liên Hệ</label>
										<textarea name="message" id="message" class="form-control" rows="9" cols="25" required value="<?php echo $information ?>"
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
