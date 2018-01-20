<?php 
function addNew($Newsname,$title,$content,$employeecode)

{
	$insert = "INSERT INTO 
				`news`(`NewsNames`, `Title`, `NewsContent`, `EmployeeCode`) 
				VALUES ('$Newsname','$title','$content','$employeecode')";
	mysql_query($insert);
}
function blindListEmployye()
{
	$sqlString="SELECT `EmployeeCode`, `EmployeePass`, `EmployeeName`, `EmployeeBirth`, `EmployeeAddress`, `EmployeeEmail`, `EmployeeIC`, `Role` FROM `employee`";
	$sqlresult = mysql_query($sqlString);
	echo "<select name='slEmpl' class='form-control'><option value='0'>Vui lòng chọn nhân viên thêm tin tức cho thống</option>";

	while ($row = mysql_fetch_array($sqlresult,MYSQL_ASSOC)) {
		echo "<option value='".$row['EmployeeCode']."'>".$row['EmployeeName']."</option>";

	}
	echo "</select>";
}
//Update News
function searchNews($NewsId)

{
	$sqlSelect = "
	SELECT `NewsId`, `NewsNames`, `Title`, `NewsContent`, `EmployeeCode` 
	FROM `news` 
	WHERE NewsId='$NewsId'";
	mysql_query($sqlSelect);
}
function blindEmployeeUpdatetList($selectValue)
{
	$sqlSelect = "SELECT `EmployeeCode`, `EmployeePass`, `EmployeeName`, `EmployeeBirth`, `EmployeeAddress`, `EmployeeEmail`, `EmployeeIC`, `Role` FROM `employee`";
	$result = mysql_query($sqlSelect);
	echo "<select> name='slEmpl' class='form-control'><option value='0'>Vui lòng chọn nhân viên</option>";
	while ($row=mysql_fetch_array($result,MYSQL_ASSOC)) 
	{
		if($row['slEmpl'] == $selectedValue)
		{
			echo "<option value='".$row['slEmpl']."' selected>".$row['EmployeeName']."</option>";
		}
		else
		{
			echo "<option value='".$row['slEmpl']."'>".$row['EmployeeName']."</option>";
		}
	# code...

	}
	echo "</select>";
}

function UpdateNews($NewsId,$Newsname,$title,$content,$employeecode)
{
	$sqlUpdate = "UPDATE `news` SET 
	NewsNames = '$NewsNames',
	Title = '$title',
	NewsContent = '$content',
	EmployeeCode = '$employeecode'
	WHERE	NewsId = '$NewsId'";
	mysql_query($sqlUpdate);
}
function DeleteNews($NewsId)
{
	$delete = "DELETE FROM news WHERE NewsId='$NewsId' ";
	mysql_query($delete);
}
?>