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
		$Gender = $_POST['grpGender'];
	}
	$address=$_POST["txtAddress"];
	$phone=$_POST["NumPhone"];
	$email=$_POST["txtEmail"];
	
	$dayofbirth=date('Y-m-d',  strtotime($_POST['dateOfBirth']));
	$identitycard=$_POST["txtAddress"];
	addUseraddUser($username, $password,$fullname,$sex,$address,$phone,$email,$dayofbirth,$identitycard);
	

}
?>
<!-- Code băt giới tính nam nữ
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
  </div>  -->