<?php 
include_once("UserController.php");

$username= "";
$password="";
$fullname="";
$sex="";
$address="";
$phone="";
$email="";
$dayofbirth = date_default_timezone_set('Asia/Tokyo');
$identitycard="";
if(isset($_POST["btnAdd"]))
{
	$username = $_POST["txtUsername"];
	$password = $_POST["txtPassword"];
	$fullname=$_POST["txtFullname"];
	if(isset($_POST['grpGender'])) {
		$sex = $_POST['grpGender'];
	}
	$address=$_POST["txtAddress"];
	$phone=$_POST["NumPhone"];
	$email=$_POST["txtEmail"];
	
	$dayofbirth=date('Y-m-d',  strtotime($_POST['dateOfBirth']));
	$identitycard=$_POST["txtIdentitycard"];
	addUser($username, $password,$fullname,$sex,$address,$phone,$email,$dayofbirth,$identitycard);
}
?>

<?php
if (isset($_POST['btnLogin'])) {
	$loginusername = trim($_POST["txtSignIn"]);
	$loginpassword = trim($_POST["txtPassword"]);


	$loginpassword = md5($loginpassword);
	$result = mysql_query("SELECT * FROM User WHERE Username='$loginusername' AND Password='$loginpassword'") or die(mysql_error());
	if (mysql_num_rows($result) == 1)
	{
		$_SESSION["username"] = $loginusername;
	}
	else{
		echo '<script> alert("Tài khoản hoặc mật khẩu không đúng!");</script>';
	}
}

?>
<!-- header -->
<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			&times;</button>
			<h4 class="modal-title" id="myModalLabel">
			Đừng chờ đợi, đăng ký ngay!!</h4>
		</div>
		<div class="modal-body modal-body-sub">
			<div class="row">
				<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
					<div class="sap_tabs">	
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<ul>
								<li class="resp-tab-item" aria-controls="tab_item-0"><span>Đăng nhập</span></li>
								<li class="resp-tab-item" aria-controls="tab_item-1"><span>Đăng ký</span></li>
							</ul>		
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<div class="facts">
									<div class="register">
										<form action="" method="post">			
											<input name="txtSignIn" placeholder="Tài khoản" type="text" required="">						
											<input name="txtPassword" placeholder="Mật khẩu" type="password" required="">										
											<div class="sign-up">
												<input type="submit" name="btnLogin" value="Đăng nhập"/>
											</div>
										</form>
									</div>
								</div> 
							</div>	

							<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
								<div class="facts">
									<div class="register">
										<form action="#" method="post">			
											<input placeholder="Tên đăng nhập" name="txtUsername" type="text" required="">
											<input placeholder="Họ tên đầy đủ" name="txtFullname" type="text" required="">
											<input placeholder="Địa chỉ email" name="txtEmail" type="email" required="">	
											<input placeholder="Địa chỉ" name="txtAddress" type="text" required="">
											<input placeholder="Số điện thoại" name="NumPhone" type="text" required="">
											<input placeholder="Sinh nhật" name="dateOfBirth" type="date" required="">	
											<input placeholder="Số chứng minh nhân dân" name="txtIdentitycard" type="text" required="">	
											<input placeholder="Mật khẩu" name="txtPassword" type="password" required="">	
											<div class="form-group">  
												<label for="lblGender" class="col-sm-2 control-label">Gender(*):  </label>
												<div class="col-sm-10">                              
													<label class="radio-inline"><input type="radio" name="grpGender" value="0" id="grpGender" 
														<?php if(isset($Gender)&&$Gender=="0") { echo "checked";} ?> />
													Male</label>

													<label class="radio-inline"><input type="radio" name="grpGender" value="1" id="grpGender" 
														<?php if(isset($Gender)&&$Gender=="1") { echo "checked";} ?> />
													Female</label>

												</div>
											</div>
											<div class="sign-up">
												<input type="submit" value="Đăng ký" name="btnAdd"/>
											</div>
										</form>
									</div>
								</div>
							</div> 			        					            	      
						</div>	
					</div>
					<script src="public/client/js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
						});
					</script>
					<div id="OR" class="hidden-xs">
					hoặc</div>
				</div>
				<div class="col-md-4 modal_body_right modal_body_right1">
					<div class="row text-center sign-with">
						<div class="col-md-12">
							<h3 class="other-nw">
							Đăng ký với</h3>
						</div>
						<div class="col-md-12">
							<ul class="social">
								<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
								<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
								<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
								<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
