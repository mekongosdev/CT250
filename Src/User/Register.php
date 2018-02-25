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
if(isset($_POST["btnRegister"]))
{
	
	$password = $_POST["txtPassword"];
	$repeatpassword = $_POST["txtRepeatPassword"];
	if($password!=$repeatpassword){
		echo '<script> alert("Mật khẩu không trùng khớp. Vui lòng nhập lại!");</script>';
	}else{

		$username = $_POST["txtUsername"];
		$fullname=$_POST["txtFullname"];
		if(isset($_POST['grpGender'])) {
			$sex = $_POST['grpGender'];
		}
		$phone=$_POST["NumPhone"];
		$email=$_POST["txtEmail"];

		$dayofbirth=date('Y-m-d',strtotime($_POST['dateOfBirth']));
		addUser($username, $password,$fullname,$sex,$phone,$email,$dayofbirth);
		include('class.smtp.php');
		include "class.phpmailer.php"; 
		include "functions.php"; 
		$title = '[Windsor Shop] - Đăng ký tài khoản';
		$content = '<p>Chuc mung ban $fullname da dang ky thanh cong tai Website Windsor</p>". "<p>Vui long nhan vao lien ket sau de kich hoat:
		<a href="http://localhost:1000/salomon/index.php?khoatrang&taikhoan=$tendangnhap$ma=$randomcode"></a></p>';
		$To = 'ntctuyen.ctu@gmail.com';
		$mail = sendMail($title, $content, $email);
		echo '<script> alert("Đăng ký tài khoản thành công!");</script>';
		echo '<meta http-equiv="refresh" content="0: URL=Register.php"/>';
	}
}
?>

<?php
if (isset($_POST['btnLogin'])) {
	$loginusername = trim($_POST["txtSignIn"]);
	$loginpassword = trim($_POST["txtPassword"]);


	$loginpassword = md5($loginpassword);
	$result = mysql_query("SELECT * FROM User WHERE Username='$loginusername' AND Password='$loginpassword'");
	if (mysql_num_rows($result) == 1)
	{
		$_SESSION["username"] = $loginusername;
	}else{
		echo '<script> alert("Tên tài khoản hoặc mật khẩu không chính xác!");</script>';
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
												<input type="submit" name="btnLogin" value="Đăng nhập" />
											</div>
										</form>
									</div>
								</div> 
							</div>	

							<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
								<div class="facts">
									<div class="register">
										<form action="#" method="post">	
											<div class="form-group">		
												<input placeholder="Tên đăng nhập" name="txtUsername" type="text" required="">
											</div>
											<input placeholder="Họ tên đầy đủ" name="txtFullname" type="text" required="">
											<div class="form-group">	
												<input placeholder="Địa chỉ email" name="txtEmail" type="email" required=""></div>
												<div class="form-group">	
													<input placeholder="Số điện thoại" name="NumPhone" type="text" required=""></div>
													<div class="form-group">	<input placeholder="Sinh nhật" name="dateOfBirth" type="date"  class="form-control" required="" value="2018-01-01">	</div>
													<div class="form-group">	
														Mật khẩu
														<input placeholder="Mật khẩu" name="txtPassword" type="password" required=""></div>	
														<div class="form-group">	
															Lặp lại mật khẩu
															<input placeholder="Mật khẩu lặp lại" name="txtRepeatPassword" type="password" required=""></div>	
															<div class="form-group">  
																<label for="lblGender" class="col-sm-2 control-label">Gender(*):  </label>
																<div class="col-sm-10">                              
																	<label class="radio-inline"><input type="radio" name="grpGender" value="0"  
																		<?php if(isset($Gender)&&$Gender=="0") { echo "checked";} ?> />
																	Male</label>

																	<label class="radio-inline"><input type="radio" name="grpGender" value="1" 
																		<?php if(isset($Gender)&&$Gender=="1") { echo "checked";} ?> />
																	Female</label>

																</div>
															</div>
															<div class="sign-up">
																<input type="submit" value="Đăng ký" name="btnRegister" id="btnRegister"/>
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
											<h3 class="other-nw pull-left">
											Đăng ký với mạng xã hội</h3>
										</div>
										<div class="col-md-12">
											<ul class="social">
												<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
												<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
												<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>