<?php




function blindListEmployye1() 
{ 
  $sqlString="SELECT `EmployeeCode`, `EmployeePass`, `EmployeeName`, `EmployeeBirth`, `EmployeeAddress`, `EmployeeEmail`, `EmployeeIC`, `Role` FROM `employee`"; 
  $sqlresult = mysql_query($sqlString); 
  echo "<select name='slEmpl' class='form-control'><option value='0'>Choice Employee</option>"; 
 
  while ($row = mysql_fetch_array($sqlresult,MYSQL_ASSOC)) { 
    echo "<option value='".$row['EmployeeCode']."'>".$row['EmployeeName']."</option>"; 
 
  } 
  echo "</select>"; 
} 


$name = "";
$history = "";
$employeecode="";
if(isset($_POST['btnAdd']))
{
    $name = $_POST["txtName"];
    $history = $_POST["txtHistory"];
    $employeecode = $_POST["slEmpl"];
    $insert= "INSERT INTO `about`(`AboutName`, `AboutWinsor`, `EmployeeCode`)
            VALUE ('$name','$history','$employeecode')";
            mysql_query($insert);
            echo '<script> alert("Insert Success");</script>';
	        echo "<script>window.location.href='?page=about'</script>";
}

?>
<div class="row">
	<div class="col-md-12"/>
	<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data" form-horizontal>
		<div class="form_group">
			<label class="control-label col-sm-12" for="email"><h2 align="center">About Us</h2></label>
		</div>

	</form>
	<form class="form-horizontal" accept-charset="utf-8" method="post" role="form" >


		<div class="form-group">
			<label class="control-label col-md-2" for="txtName">About:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="txtName" placeholder="Enter About" name="txtName"
				required autofocus >
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-md-2" for="txtHistory">About Us:</label>
			<div class="col-md-10">          

				<textarea name="txtHistory" id="txtHistory"
				placeholder="Enter Content" class="form-control" required></textarea>
			</div>
		</div>
        <div class="form-group">
			<label class="control-label col-md-2" for="slEmpl">Employee:</label>
			<div class="col-md-10">          
				<?php
				blindListEmployye1()
				?>
			</div>
		</div>
		<div class="form-group">        
			<div class="col-md-offset-2 col-md-10">
				<button type="submit" class="btn btn-info" name="btnAdd" onclick=""><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Add</button>
				<button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> cancel</button>
			</div>
		</div>
	</form>
</div>